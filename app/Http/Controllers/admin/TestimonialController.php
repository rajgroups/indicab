<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Illuminate\Http\Request;
use App\Models\service;
use App\Enums\servicestatus;
use Exception;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = testimonial::where('status',servicestatus::ACTIVE->value)->get();
        return view('admin.testmonial.list',compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        // dd($services);  
        return view('admin.testmonial.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'        => 'required|string',
            'status'      => 'required|in:active,inactive', // 'in' is used for predefined values instead of 'exists'
            'service_id'  => 'required|integer|exists:tbl_service,id',
            'description' => 'required|string',
        ]);

        // Start the Transection
        DB::beginTransaction();

        try{

            // Image Upload handle
            $imagename = null;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagename = time() ."_image" .$image->getClientOriginalExtension();
                $image->move(public_path('/testimonial'), $imagename);
            }

            testimonial::create([
                'name'          => $request->name,
                'status'        => $request->status,
                'service_id'    => $request->service_id,
                'description'   => $request->description,
                'image'         => $imagename,
            ]);

            // Commit the transection
            DB::commit();
            
            // Return the success
            return redirect()->back()->with('success','Success!,  Testimonial Created Successfully');
        }catch(Exception $e){
            
            // Stop the transection rollback
            DB::rollBack();
            return redirect()->back()->with('error','Error!, Testimonial Not Created'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            // Find the subservice record
            $testimonial = testimonial::findOrFail($id);
    
            // Delete the image file if it exists
            if ($testimonial->image && file_exists(public_path('/testimonial' . $testimonial->image))) {
                unlink(public_path('/subservice' . $testimonial->image));
            }
    
            // Delete the subservice record
            $testimonial->delete();
    
            return redirect()->back()->with('success', 'Success, testimonial Deleted Successfully');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: testimonial could not be deleted. Issue: ' . $e->getMessage());
        }
    
    }
}