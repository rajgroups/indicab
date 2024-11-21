<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\price;
use App\Models\service;
use App\Enums\servicestatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prices = price::all();
        return view('admin.price.list',compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        // dd($services);
        return view('admin.price.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validate the request
        $request->validate([
            "slug"               => 'required|unique:tbl_price,slug',
            "service_id"         => 'required|exists:tbl_service,id',
            "name"               => 'required|string|max:255',
            "price"              => 'required|numeric',
            "item_ratio"         => 'required|string',
            "price_ratio"        => 'required|string',
            "short_description"  => 'required|string',
            "description"        => 'required|string',
        ]);

        // Start a database transaction
        DB::beginTransaction();
        try {

            // handle Image Upload
            $imagename = null;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagename = time().'_'.'image_'. $image->getClientOriginalName();
                $image->move(public_path('price_image/'), $imagename); // Save to 'public/uploads'
            }

            // handle icon Image Upload
            $icon_imagename = null;
            if($request->hasFile('icon')){
                $image_icon = $request->file('icon');
                $icon_imagename = time().'_'.'icon_'. $image_icon->getClientOriginalName();
                $image_icon->move(public_path('price_image/'), $icon_imagename); // Save to 'public/uploads'
            }

            // Generate the slug
            $slug = Str::slug($request->slug);

            // Create the price entry
            price::create([
                "slug"               => $slug,
                "service_id"         => $request->service_id,
                "name"               => $request->name,
                "price"              => $request->price,
                "item_ratio"         => $request->item_ratio,
                "price_ratio"        => $request->price_ratio,
                "short_description"  => $request->short_description,
                "description"        => $request->description,
                'image'              => $imagename,
                'icon'               => $icon_imagename,
            ]);

            // Commit the transaction
            DB::commit();

            // Return success response
            return redirect()->back()->with('success', 'Price created successfully.');

        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();

            // Return an error response
            return redirect()->back()->with('error', 'Error: Could not create price. Issue: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(price $price)
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        // dd($services);
        return view('admin.price.edit',compact('services','price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            "slug"               => 'required|unique:tbl_price,slug,' . $id,
            "service_id"         => 'required|exists:tbl_service,id',
            "name"               => 'required|string|max:255',
            "price"              => 'required|numeric',
            "item_ratio"         => 'required|string',
            "price_ratio"        => 'required|string',
            "short_description"  => 'required|string',
            "description"        => 'required|string',
            "image"              => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional validation for image
            "icon"               => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional validation for icon
        ]);
    
        // Start a database transaction
        DB::beginTransaction();
        try {
            // Find the price entry
            $price = price::findOrFail($id);
    
            // Handle image upload if present
            $imagename = $price->image; // Retain existing image
            if ($request->hasFile('image')) {
                // Delete old image
                if ($imagename && file_exists(public_path('price_image/' . $imagename))) {
                    unlink(public_path('price_image/' . $imagename));
                }
    
                // Upload new image
                $image = $request->file('image');
                $imagename = time() . '_image_' . $image->getClientOriginalName();
                $image->move(public_path('price_image/'), $imagename);
            }
    
            // Handle icon upload if present
            $icon_imagename = $price->icon; // Retain existing icon
            if ($request->hasFile('icon')) {
                // Delete old icon
                if ($icon_imagename && file_exists(public_path('price_image/' . $icon_imagename))) {
                    unlink(public_path('price_image/' . $icon_imagename));
                }
    
                // Upload new icon
                $image_icon = $request->file('icon');
                $icon_imagename = time() . '_icon_' . $image_icon->getClientOriginalName();
                $image_icon->move(public_path('price_image/'), $icon_imagename);
            }
    
            // Update the price entry
            $price->update([
                "slug"               => Str::slug($request->slug),
                "service_id"         => $request->service_id,
                "name"               => $request->name,
                "price"              => $request->price,
                "item_ratio"         => $request->item_ratio,
                "price_ratio"        => $request->price_ratio,
                "short_description"  => $request->short_description,
                "description"        => $request->description,
                'image'              => $imagename,
                'icon'               => $icon_imagename,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Return success response
            return redirect()->back()->with('success', 'Price updated successfully.');
    
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();
    
            // Return an error response
            return redirect()->back()->with('error', 'Error: Could not update price. Issue: ' . $e->getMessage());
        }
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
            $price = Price::findOrFail($id);

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
