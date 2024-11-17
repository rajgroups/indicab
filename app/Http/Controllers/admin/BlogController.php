<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\service;
use App\Enums\servicestatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = blog::all();
        // dd($blogs);
        return view('admin.blog.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        return view('admin.blog.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validate
        $request->validate([
            'service_id'    => 'required|exists:tbl_service,id',
            'title'         => 'required|string',
            'short_desc'    => 'required|string',
            'slug'          => 'required|string|unique:tbl_blog,slug',
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
                $image->move(public_path('blog/'), $imageName); // Save to 'public/uploads'
            }
            
            
            // Create the location record
            blog::create([
                'service_id'  => $request->service_id,
                'title'       => $request->title,
                'short_desc'  => $request->short_desc,
                'slug'        => $slug,
                'image'       => $imageName, // Store only the image name
                'status'      => $request->status,
                'description' => $request->description,
            ]);
            // dd($slug);
            // Commit the transaction
            DB::commit();
    
            // Return success response
            return redirect()->back()->withSuccess('Blog created successfully!');
        } catch (Exception $e) {
            // Rollback on error
            DB::rollback();
    
            // Return error message
            return redirect()->back()->withErrors('Sorry! Blog information could not be saved. ' . $e->getMessage());
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        //
    }
}
