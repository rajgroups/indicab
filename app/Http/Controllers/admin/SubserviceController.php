<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\subservice;
use App\Models\service;
use App\Enums\servicestatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subservices = subservice::with(['service'])->get();
        // dd('subservices');
        return view('admin.subservice.list',compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $services = service::where('status', servicestatus::INACTIVE->value)->get();
        $services = service::where('status',servicestatus::ACTIVE->value)->get();;
        // dd($services);
        return view('admin.subservice.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255|unique:tbl_sub_service,name',
            'slug'       => 'required|string|max:255|unique:tbl_sub_service,slug',
            'service_id' => 'required|exists:tbl_service,id',
            'image'      => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'icon'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        try {
            $slug = Str::slug($request->slug);
    
            // Handle Image upload for 'image'
            $imagename = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . "_image." . $image->getClientOriginalExtension();
                $image->move(public_path('/subservice'), $imagename);
            }
    
            // Handle Icon upload for 'icon'
            $imageicon = null;
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $imageicon = time() . "_icon." . $icon->getClientOriginalExtension();
                $icon->move(public_path('/subservice'), $imageicon);
            }
    
            // Create new subservice entry
            subservice::create([
                'name'       => $request->name,
                'slug'       => $slug,
                'service_id' => $request->service_id,
                'image'      => $imagename,
                'icon'       => $imageicon,
            ]);
    
            return redirect()->back()->with('success', 'Success, Sub Service Created Successfully');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: Sub Service could not be created. Issue: ' . $e->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(subservice $subservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subservice $subservice)
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();;
        return  view('admin.subservice.edit', compact('subservice','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|string|max:255|unique:tbl_sub_service,name,' . $id,
            'slug'       => 'required|string|max:255|unique:tbl_sub_service,slug,' . $id,
            'service_id' => 'required|exists:tbl_service,id',
            'image'      => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'icon'       => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        try {
            $subservice = subservice::findOrFail($id);
    
            // Generate a new slug if the slug is updated
            $slug = Str::slug($request->slug);
    
            // Handle Image upload for 'image'
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($subservice->image && file_exists(public_path('/subservice' . $subservice->image))) {
                    unlink(public_path('/subservice' . $subservice->image));
                }
    
                // Upload new image
                $image = $request->file('image');
                $imagename = time() . "_image." . $image->getClientOriginalExtension();
                $image->move(public_path('/subservice'), $imagename);
            } else {
                $imagename = $subservice->image; // Keep old image if no new image is uploaded
            }
    
            // Handle Icon upload for 'icon'
            if ($request->hasFile('icon')) {
                // Delete old icon if it exists
                if ($subservice->icon && file_exists(public_path('/subservice' . $subservice->icon))) {
                    unlink(public_path('/subservice' . $subservice->icon));
                }
    
                // Upload new icon
                $icon = $request->file('icon');
                $imageicon = time() . "_icon." . $icon->getClientOriginalExtension();
                $icon->move(public_path('/subservice'), $imageicon);
            } else {
                $imageicon = $subservice->icon; // Keep old icon if no new icon is uploaded
            }
    
            // Update the subservice record
            $subservice->update([
                'name'       => $request->name,
                'slug'       => $slug,
                'service_id' => $request->service_id,
                'image'      => $imagename,
                'icon'       => $imageicon,
            ]);
    
            return redirect()->back()->with('success', 'Success, Sub Service Updated Successfully');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: Sub Service could not be updated. Issue: ' . $e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Find the subservice record
            $subservice = subservice::findOrFail($id);
    
            // Delete the image file if it exists
            if ($subservice->image && file_exists(public_path('/subservice' . $subservice->image))) {
                unlink(public_path('/subservice' . $subservice->image));
            }
    
            // Delete the icon file if it exists
            if ($subservice->icon && file_exists(public_path('/subservice' . $subservice->icon))) {
                unlink(public_path('/subservice' . $subservice->icon));
            }
    
            // Delete the subservice record
            $subservice->delete();
    
            return redirect()->back()->with('success', 'Success, Sub Service Deleted Successfully');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: Sub Service could not be deleted. Issue: ' . $e->getMessage());
        }
    }
    
}
