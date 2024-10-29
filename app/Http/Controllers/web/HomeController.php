<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use App\Models\service;
use App\Models\subservice;
use App\Models\testimonial;
use App\Enums\servicestatus;
use App\Models\faq;
use App\Models\location;
use App\Models\price;
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

            // Service Testionial
            $faqs = faq::where('status', servicestatus::ACTIVE->value)->get();

            // Service Testionial
            $testimonials = testimonial::where('status', servicestatus::ACTIVE->value)->get();

            // Service Data
            $prices = price::where('status',servicestatus::ACTIVE->value)->get();

            $locations = location::where('status',servicestatus::ACTIVE->value)->get();
            // dd($location);

            $services = service::where('slug',$service)->first();
            // Retrieve the page data based on the slug

             // Retrieve Sub Service Details
             $subservices = subservice::where('service_id',$services->id)->get(); 
            //  dd($subservices);

            $post = Page::where('service_id',$services->id)->where('slug', $slug)->with(['service', 'location'])->first();

            // Assign $this->settings to a local variable
            $settings = $this->settings;

            // Pass both post and settings variables to the view
            return view('web.page', compact('post', 'settings','subservices','locations','prices','testimonials','faqs'));
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
    public function cab()
    {
        return view('web.cab');
    }
}
