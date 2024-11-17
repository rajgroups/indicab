<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\service;
use App\Enums\servicestatus;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = car::all();
        return view('admin.car.list',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        // dd($services);
        return view('admin.car.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validate the request
        $request->validate([
            'service_id'            => 'required|integer|exists:tbl_service,id',
            'name'                  => 'required|string|max:255',
            'price'                 => 'required|numeric|min:0',
            'item_ratio'            => 'nullable|string|min:0',
            'price_ratio'           => 'nullable|numeric|min:0',
            'slug'                  => 'required|string|max:255|unique:tbl_car,slug',
            'image'                 => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon'                  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'           => 'nullable|string',
            'short_description'     => 'nullable|string|max:500',
            'make'                  => 'nullable|string|max:100',
            'model'                 => 'nullable|string|max:100',
            'year'                  => 'nullable|integer|min:1900|max:' . date('Y'),
            'vin'                   => 'nullable|string|max:17',
            'color'                 => 'nullable|string|max:50',
            'engine_type'           => 'nullable|string|max:100',
            'aircooling'            => 'nullable|in:ac,nonac',
            'passanger'             => 'nullable|integer|min:1',
            'transmission'          => 'nullable|string|in:automatic,manual,semi-automatic',
            'fuel_type'             => 'nullable|string|in:petrol,diesel,electric,hybrid,other',
        ]);
        

        // Start a database transaction
        DB::beginTransaction();
        try {

            // handle Image Upload
            $imagename = null;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagename = time().'_'.'image_'. $image->getClientOriginalName();
                $image->move(public_path('car_image/'), $imagename); // Save to 'public/uploads'
            }

            // handle icon Image Upload
            $icon_imagename = null;
            if($request->hasFile('icon')){
                $image_icon = $request->file('icon');
                $icon_imagename = time().'_'.'icon_'. $image_icon->getClientOriginalName();
                $image_icon->move(public_path('car_image/'), $icon_imagename); // Save to 'public/uploads'
            }

            // Generate the slug
            $slug = Str::slug($request->slug);

            // Create the price entry
            car::create([
                "slug"                  => $slug,
                "vehicle_type"          =>'car',
                "service_id"            => $request->service_id,
                "name"                  => $request->name,
                "price"                 => $request->price,
                "item_ratio"            => $request->item_ratio,
                "price_ratio"           => $request->price_ratio,
                "short_description"     => $request->short_description,
                "description"           => $request->description,
                'image'                 => $imagename,
                'icon'                  => $icon_imagename,
                'make'                  => $request->make,
                'model'                 => $request->model,
                'year'                  => $request->year,
                'vin'                   => Str::uuid(),
                'color'                 => $request->color,
                'engine_type'           => $request->engine_type,
                'aircooling'            => $request->aircooling,
                'passanger'             => $request->passanger,
                'transmission'          => $request->transmission,
                'fuel_type'             => $request->fuel_type,
            ]);

            // Commit the transaction
            DB::commit();

            // Return success response
            return redirect()->back()->with('success', 'Car created successfully.');

        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();

            // Return an error response
            return redirect()->back()->with('error', 'Error: Could not create car. Issue: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Start the transection
        DB::beginTransaction();
        try{
            
            // Find the price entry by id
            $price = car::findOrFail($id);

            // Delete associated image files if they exist
            if ($price->image && file_exists(public_path('price_image/' . $price->image))) {
                unlink(public_path('price_image/' . $price->image));
            }
            if ($price->icon && file_exists(public_path('price_image/' . $price->icon))) {
                unlink(public_path('price_image/' . $price->icon));
            }

            // Delete the price entry
            $price->delete();

            // Commit the transaction
            DB::commit();

            // Return statement
            return redirect()->back()->with('success', 'success: Price Deleted Successfully');
        }catch (\Exception $e){

            DB::rollback();
            return redirect()->back()->with('error', 'Error: Could not delete price. Issue:'.$e->getMessage());
        }
    }
}
