<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use App\Models\service;
use App\Models\car;
use App\Models\subservice;
use App\Models\testimonial;
use App\Enums\servicestatus;
use App\Models\blog;
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

            $template = null;

            // Service Testionial
            $testimonials = testimonial::where('status', servicestatus::ACTIVE->value)->get();

            // Price Data
            $prices = price::where('status',servicestatus::ACTIVE->value)->get();

            // Price Data
            $cars = car::where('status',servicestatus::ACTIVE->value)->limit(12)->get();
            // dd($cars);

            $locations = location::where('status',servicestatus::ACTIVE->value)->get();
            // dd($location);

            $services = service::where('slug',$service)->first();
            // Retrieve the page data based on the slug
            $template = $services->slug;
            // dd($template);

             // Retrieve Sub Service Details
             $subservices = subservice::where('service_id',$services->id)->get(); 
            //  dd($subservices);

            // Service Testionial
            $faqs = faq::where('status', servicestatus::ACTIVE->value)->where('service_id',$services->id)->get();

            // Blog Post for this service
            $blogs = blog::where('status', servicestatus::ACTIVE->value)->where('service_id',$services->id)->latest()->limit(3)->get();

            // dd($services->id);
            $post = Page::where('service_id',$services->id)->where('slug', $slug)->with(['service', 'location'])->first();
            // dd($post);
            // Assign $this->settings to a local variable
            $settings = $this->settings;

            // Pass both post and settings variables to the view
            return view('web.template.' . $template , compact('post', 'settings','subservices','locations','prices','testimonials','faqs','cars','blogs'));
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

    public function indicab_packers_movers(){
        return view('web.packers');
    }
    
}
