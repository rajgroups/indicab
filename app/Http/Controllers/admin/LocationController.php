<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Enums\ServiceStatus;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations = location::all();
        return  view('admin.location.list',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name'          => 'required|string|unique:tbl_location,name',
            'slug'          => 'required|string|unique:tbl_location,slug',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'status'        => 'required|in:active,inactive',
            'description'   => 'required',
        ]);
    
        // Start the DB Insert Transaction
        DB::beginTransaction();
        try {
            $slug = Str::slug($request->slug);
    
            // Handle Image Upload
            $imageName = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('location/'), $imageName); // Save to 'public/uploads'
            }
    
            // Create the location record
            Location::create([
                'name'        => $request->name,
                'slug'        => $slug,
                'image'       => $imageName, // Store only the image name
                'status'      => $request->status,
                'description' => $request->description,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Return success response
            return redirect()->back()->withSuccess('Location created successfully!');
        } catch (QueryException $e) {
            // Rollback on error
            DB::rollback();
    
            // Return error message
            return redirect()->back()->withErrors('Sorry! Location information could not be saved. ' . $e->getMessage());
        }
    }    

    /**
     * Display the specified resource.
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(location $location)
    {
        //
        return view('admin.location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate Request
        $request->validate([
            'name'          => 'required|string|unique:tbl_location,name,' . $id,
            'slug'          => 'required|string|unique:tbl_location,slug,' . $id,
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'status'        => 'required|in:active,inactive',
            'description'   => 'required',
        ]);
    
        // Start DB Transaction
        DB::beginTransaction();
    
        try {
            // Fetch the Location Record
            $location = Location::findOrFail($id);
    
            // Initialize Image Name
            $imageName = $location->image; // Keep the existing image if not changed
    
            // Handle New Image Upload
            if ($request->hasFile('image')) {
                // Delete Old Image if Exists
                if ($location->image && File::exists(public_path('location/' . $location->image))) {
                    File::delete(public_path('location/' . $location->image));
                }
    
                // Upload New Image
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('location/'), $imageName);
            }
    
            // Update Location Record
            $location->update([
                'name'          => $request->name,
                'slug'          => $request->slug,
                'image'         => $imageName,
                'status'        => $request->status,
                'description'   => $request->description,
            ]);
    
            // Commit the Transaction
            DB::commit();
    
            // Redirect with Success Message
            return redirect()->back()->withSuccess('Success, Location updated successfully!');
        } catch (\Exception $e) {
            // Rollback Transaction on Error
            DB::rollback();
            return redirect()->back()->withErrors('Failed, Unable to update location: ' . $e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(location $location)
    {
        //
        try{
            // Delete the Record
            $location->delete();
            return redirect()->back()->withSuccess('Success, Location deleted Successfully');
        }catch(QueryException $e){
            
            // If Error occured back the function
            DB::rollback();
            return redirect()->back()->withErrors('Failed!, Location could not delete, Issue:'.$e->getMessage());
        }
    }

    public function active(){
        $locations = location::where('status',servicestatus::ACTIVE->value);
        return view('admin.location.active',compact('locations'));
    }

    public function inactive(){
        $locations = location::where('status',servicestatus::INACTIVE->value);
        return view('admin.location.active',compact('locations'));
    }
}
