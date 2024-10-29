<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use App\Models\service;
use App\Enums\servicestatus;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faqs = faq::all();
        return view('admin.faq.list',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $services = service::where('status',servicestatus::ACTIVE->value)->get();
        return view('admin.faq.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'service_id' => 'required|exists:tbl_service,id',
            'question'   => 'required|string',
            'image'      => 'nullable|image|mimes:png,jpg,jpeg|max:2048', // 'max' should be in KB without 'kb' suffix
            'status'     => 'required|string|in:active,inactive',
            'answer'     => 'required|string',
        ]);

        // Start the Transection
        DB::beginTransaction();

        try{
            // Handle Images upload
            $imagename = null;
            if($request->hasFile('image')){
                $image      = $request->file('image');
                $imagename  = time()."image_".$image->getClientOriginalExtension();
                $image->move(public_path('faq/'),$imagename);
            }

            faq::create([
                'service_id'        => $request->service_id,
                'qustion'           => $request->question,
                'image'             => $imagename,
                'status'            => $request->status,
                'answer'            => $request->answer,
            ]);

            // Commit the transection
            DB::commit();
            
            // Return Success Message
            return redirect()->back()->with('success','Success!, FAQ Created Successfully');
            
        }catch(Exception $e){
            
            // Db Rollback
            DB::rollback();
            return redirect()->back()->with('error','Error!, Sorry  we can not process your request at this time, Issue:'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(faq $faq)
    {
        //
    }
}
