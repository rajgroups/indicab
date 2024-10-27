<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Enums\ServiceStatus;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()    
    {
        //
        $services = service::all();
        return view('admin.service.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create Service 
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'      => 'required|string|unique:tbl_service,name',
            'slug'      => 'required|string|unique:tbl_service,slug',
            'status'    => 'required|in:active,inactive',
        ]);

        // Start a database transaction
        DB::beginTransaction(); 

        try {

            $slug = Str::slug($request->slug);
            // Create a new service using mass assignment
            $service = service::create([
                'name'   => $request->name,
                'slug'   => $slug,
                'status' => $request->status,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Return a response
        
            // return response()->json(['message' => 'Service created successfully!', 'service' => $service], 201);
            return redirect()->back()->withSuccess('Service created successfully!');
        } catch (QueryException $e) {
            // Rollback the transaction if there's an error
            DB::rollback();
            return redirect()->back()->withErrors('Failed to create service'.$e->getMessage())->withInput();
            // Return an error response
            // return response()->json(['message' => 'Failed to create service', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        //
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name'   => 'required|string|unique:tbl_service,name,' . $id,
            'slug'   => 'required|string|unique:tbl_service,slug,' . $id,
            'status' => 'required|in:active,inactive',
        ]);
    
        // Start a database transaction
        DB::beginTransaction();
    
        try {
            $service = service::findOrFail($id); // Find the service or fail
    
            $slug = Str::slug($request->slug); // Generate slug
    
            // Update the service using mass assignment
            $service->update([
                'name'   => $request->name,
                'slug'   => $slug,
                'status' => $request->status,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Redirect back with success message
            return redirect()->back()->withSuccess('Service updated successfully!');
        } catch (QueryException $e) {
            // Rollback the transaction if there's an error
            DB::rollback();
    
            // Redirect back with error message and input data
            return redirect()->back()->withErrors('Failed to update service: ' . $e->getMessage())->withInput();
        } catch (ModelNotFoundException $e) {
            // Handle case where the service is not found
            return redirect()->back()->withErrors('Service not found!')->withInput();
        }
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service )
    {
        // Start DB Transection
        DB::beginTransaction();
        try{
            // Delete record
            $service->delete();

            // return Success message
            return redirect()->back()->withSuccess('Service Deleted Successfully');
        }catch(QueryException $e){
            // Failure Error Messages
            return redirect()->back()->withErrors('Service Could not Deleted,Errors'.$e->getMessage());
        }
    }

    public function active()
    {
        $services = service::where('status', servicestatus::ACTIVE->value)->get();
        return view('admin.service.active', compact('services'));
    }

    public function inactive()
    {
        $services = service::where('status', servicestatus::INACTIVE->value)->get();
        return view('admin.service.inactive', compact('services'));
    }
}
