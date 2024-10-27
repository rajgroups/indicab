<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use App\Models\service;
use App\Models\settings;

class HomeController extends Controller
{
    //
    protected $settings; // Declare a class property

    public function __construct()
    {
        // Initialize the settings in the constructor
        $this->settings = settings::first();
    }
    
    public function post(Request $request, $service = null, $slug)
    {
        try{
            $services = service::where('slug',$service)->first();
            // Retrieve the page data based on the slug
            $post = Page::where('service_id',$services->id)->where('slug', $slug)->with(['service', 'location'])->first();

            // Assign $this->settings to a local variable
            $settings = $this->settings;

            // Pass both post and settings variables to the view
            return view('web.page', compact('post', 'settings'));
        }catch(\Exception $e){
            dd($e);
        }
      
    }
    public function empty()
    {
        return view('web.empty');
    }
    public function index()
    {
        return view('web.home');
    }
    public function all_services()
    {
        return view('web.all_services');
    }
    public function tempo_service()
    {
        return view('web.tempo_service');
    }
    public function packers_movers()
    {
        return view('web.packers_movers');
    }
    public function cab()
    {
        return view('web.cab');
    }
}
