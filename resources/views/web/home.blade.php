@push('meta_tag')
<title>Indicab - Packers & Movers, Cab Services, Transport, and IT Solutions</title>
<meta name="description" content="Discover Indicab, your trusted partner for Packers and Movers, Cab services, Transport solutions, and IT Development. Professional, reliable, and efficient services tailored to your needs.">
<meta name="keywords" content="Indicab, Packers and Movers, Cab Services, Transport Services, IT Development, Reliable Services, Professional Packers, Movers, IT Solutions">
<meta name="author" content="Indicab">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endpush
<style>
   
</style>
@extends('layouts.web.app')
@section('content')
<section class="section home-banner row-middle pt-5">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-8 col-lg-7">
             <div class="banner-content aos" data-aos="fade-up" data-aos-duration="3000">
                <div class="rating">
                   <i class="fas fa-star checked"></i>
                   <i class="fas fa-star checked"></i>
                   <i class="fas fa-star checked"></i>
                   <i class="fas fa-star checked"></i>
                   <i class="fas fa-star checked"></i>
                   <h5>Trusted by Over 2k+ Users – Indicab</h5>
                </div>
                <h1 class="text-uppercase orange-text text-primary" title="Indicab">Indicab</h1>
                <h2>Get the Perfect <span class="fs-1"><br>Developers & Projects with Indicab</span></h2>
                <p class="text-justify"><span class="fw-bold">Packers and Movers:</span> Seamlessly manage your relocations with our expert packing, moving, and storage solutions.<br>
                  <span class="fw-bold">Transport and Cab Services:</span> Enjoy reliable and affordable transportation tailored to your needs.<br>
                  <span class="fw-bold">IT Development:</span> Empower your business with cutting-edge IT solutions crafted to drive growth.<br>
                </p>
                <div class="market-place-btn bidding-btn">
                  <a href="{{ url('contact') }}" title="Indicab Contact" class="btn btn-primary market-project me-2">Contact</a>
                  <a href="{{ url('service') }}" title="Indicab Services" class="btn btn-primary project-post">Discover More</a>
               </div>
             </div>
          </div>
          <div class="col-md-4 col-lg-5">
             <div class="banner-img aos" data-aos="zoom-in" data-aos-duration="3000">
                <img src="{{ asset('resource/web/assets/img/banner-new.png')}}" title="Indicab" class="img-fluid" alt="Indicab">
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section popular-projects-job">
   <div class="container">
      <div class="row">					
         <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
            <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
               <h2 class="header-title" title="Indicab Providing Service">Indicab Popular Providing Service</h2>
               <p>Indicab: Moving, Driving, Innovating Your World!</p>
            </div>
         </div>
      </div>
      <div class="row">
      
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
            <div class="project-item project-popular-item aos aos-init aos-animate" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('web-and-app-development') }}" title="indicab web-and-app-development">
                     <img src="{{ asset('resource/web/assets/img/it-service.png') }}" alt="indicab" title="Indicab" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  
                  <h4><a href="{{ url('web-and-app-development') }}" title="indicab web-and-app-development">Web and App development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX developer</li>
                     {{-- <li>$200</li> --}}
                  </ul>
                  
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
            <div class="project-item project-popular-item aos aos-init aos-animate" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('indicab-packers-movers') }}" title="ndicab-packers-movers"><img src="{{ asset('resource/web/assets/img/happy-young-man.png') }}" alt="indicab" title="Indicab" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  
                  <h4><a href="{{ url('indicab-packers-movers') }}" title="Indicab Packers and Movers">Packers And Movers</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>Transport Service</li>
                     {{-- <li>$350</li> --}}
                  </ul>
                  
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
            <div class="project-item project-popular-item aos aos-init aos-animate" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('cab-service') }}" title="Indicab cab-service">
                     <img src="{{ asset('resource/web/assets/img/cabimage.png') }}" alt="indicab" title="Indicab" class="img-fluid"></a>
               </div>
               <div class="feature-content">
               
                  <h4><a href="{{ url('cab-service') }}" title="Indicab Cab Service">Cab Service </a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>Transport Service</li>
                     {{-- <li>$99</li> --}}
                  </ul>
                  
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         <div class="col-md-12">
            <div class="home-five-section-btn">
               <a href="{{ url('service') }}" title="Indicab Services" class="btn btn-primary">View More Projects</a>
            </div>
         </div>
         
      </div>
   </div>
</section>
 <section class="section review bg-primary">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="work-set-image">
               <img src="{{ asset('resource/web/assets/img/systemboy.png') }}" title="indicab" alt="indicab" class="img-fluid">
            </div>
            
         </div>
         <div class="col-lg-6">
            <div class="aos aos-init aos-animate" data-aos="fade-up">
               <div class="demand-professional">
                  <h2 class="text-white">Find Professionals Anytime with Indicab</h2>
                  <p class="text-white">Discover reliable experts for your Packers and Movers, Cab, Transport, and IT needs.</p>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/icon/recent-icon-04.svg') }}" title="indicab" alt="indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6 class="text-white">Post Your Requirement</h6>
                     <p class="text-white">Easily publish your service request on Indicab's platform. Share your needs, and let us connect you to trusted professionals.</p>
                  </div>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/icon/recent-icon-05.svg') }}" title="indicab" alt="indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6 class="text-white">Choose the Best Professionals</h6>
                     <p class="text-white">Browse through verified providers or let Indicab match you with the perfect expert for your job.</p>
                  </div>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/icon/recent-icon-06.svg') }}" title="indicab" alt="indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6 class="text-white">Get the Job Done</h6>
                     <p class="text-white">From moving to IT solutions, Indicab ensures smooth, efficient, and timely service completion for all your tasks.</p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>
 <section class="section review">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos" data-aos="fade-up">
                <h2 class="header-title">Top Web and App Development Services Offered by Indicab</h2>
                <p>Ready to Work Together For your Next Projects!</p>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
                <div class="popular-catergories">
                   <div class="popular-catergories-img">
                      <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
                   </div>
                   <div class="popular-catergories-content">
                      <h5>Development & IT</h5>
                      <a href="javascript:void(0);">Web And App<i class="feather-arrow-right ms-2"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1500">
                <div class="popular-catergories">
                   <div class="popular-catergories-img">
                      <span><img src="{{ asset('resource/web/assets/img/icon/categories7.svg')}}" alt="indicab" title="Indicab"></span>
                   </div>
                   <div class="popular-catergories-content">
                      <h5>Design & Creative</h5>
                      <a href="javascript:void(0);" title="Indicab Web And App Development">Web And App<i class="feather-arrow-right ms-2"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="2000">
                <div class="popular-catergories">
                   <div class="popular-catergories-img">
                      <span><img src="{{ asset('resource/web/assets/img/icon/categories3.svg')}}" alt="indicab" title="Indicab"></span>
                   </div>
                   <div class="popular-catergories-content">
                      <h5>Digital Marketing</h5>
                      <a href="javascript:void(0);" title="Indicab Web And App Digital Marketing">Web And App<i class="feather-arrow-right ms-2"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Illustration</h5>
                     <a href="javascript:void(0);" title="Indicab Web And App Illustration" >Web And App<i class="feather-arrow-right ms-2"></i></a>
                  </div>
               </div>
            </div>
          </div>
       </div>
       <div class="row">					
         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Website design</h5>
                  <a href="javascript:void(0);" title="Indicab Website design">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Photoshop</h5>
                  <a href="javascript:void(0);" title="Indicab Photoshop Desiging">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Android Apps</h5>
                  <a href="javascript:void(0);" title="Indicab Android Apps Developement">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>
      

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Ecommerce</h5>
                  <a href="javascript:void(0);" title="Indicab Ecommerce web Developement">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Banner Design</h5>
                  <a href="javascript:void(0);" title="Indicab Banner Design">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Link Building</h5>
                  <a href="javascript:void(0);" title="Indicab Link Building">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         
         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Web App</h5>
                  <a href="javascript:void(0);" title="Indicab Web And App Development">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>Marketing</h5>
                  <a href="javascript:void(0);" title="Indicab Web And App Marketing">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>
         
         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>MYSQL</h5>
                  <a href="javascript:void(0);" title="Indicab MYSQL Development">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
            <div class="popular-catergories">
               <div class="popular-catergories-img">
                  <span><img src="{{ asset('resource/web/assets/img/icon/categories1.svg')}}" alt="indicab" title="Indicab"></span>
               </div>
               <div class="popular-catergories-content">
                  <h5>SEO</h5>
                  <a href="javascript:void(0);" title="Indicab SEO Development">Web And App<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>
         

         
         <div class="col-xl-12">
            <div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
               <a href="{{ url('service') }}" title="Indicab SEO Development" class="btn btn-primary">View More Projects</a>
            </div>
         </div>			
      </div>
    </div>
 </section>
<!-- Feature -->
   <section class="section feature-project home-two-projects">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-12 mx-auto">
            <div class="section-header section-header-two text-center aos" data-aos="fade-up">
               <h2 class="header-title">Explore We Offer <span> For Modern Technology Solutions</span></h2>
               <p>Indicab provides the best IT solutions for your business!</p>
            </div>
         </div>
      </div>
      <div class="row">
      
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('Web-development') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/native.png') }}" title="Indicab Native apps development" alt="Indicab Native apps development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  <h4><a href="{{ url('Web-development') }}" title="Indicab Native apps development">Native Apps Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>Flutter UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Indicab</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->

         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('Web-development') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/webapp.jpg') }}" title="Indicab Web apps development" alt="Indicab Web apps development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  <h4><a href="{{ url('Web-development') }}" title="Indicab Web apps development">Web Apps Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>Flutter UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Indicab</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->

         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('Web-development') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/Hybrid.jpg') }}" title="Indicab Hybrid apps development" alt="Indicab Hybrid apps development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  <h4><a href="{{ url('Web-development') }}"  title="Indicab Hybrid apps development">Hybrid Apps Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>Flutter UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Indicab</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('Web-development') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/website.jpg') }}" title="Indicab web development" alt="Indicab web development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  <h4><a href="{{ url('Web-development') }}" title="Indicab Web Development development">Web Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Indicab</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('service') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/ecomweb.png') }}" title="Indicab Web Ecom-application development" alt="Indicab Web Ecom-application development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  <h4><a href="{{ url('service') }}" title="Indicab Web Ecom-application development">Web Ecom-application Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Indicab</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('service') }}" title="Indicab Web-development"><img src="{{ asset('resource/web/assets/img/homepage/static-infographic.png') }}" title="Indicab Static web development" alt="Indicab Static web development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  {{-- <div class="feature-time-blk">
                     <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                     <span><i class="far fa-clock me-1"></i> 5 min ago</span>
                  </div> --}}
                  <h4><a href="{{ url('service') }}" title="Indicab Static Web Application Development">Static Web Application Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                  </ul>
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('service') }}" title="Indicab Dynamic Web Application Development"><img src="{{ asset('resource/web/assets/img/homepage/portableweb.png') }}" title="Indicab Dynamic web development" alt="Indicab Dynamic web development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  {{-- <div class="feature-time-blk">
                     <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                     <span><i class="far fa-clock me-1"></i> 6 min ago</span>
                  </div> --}}
                  <h4><a href="{{ url('service') }}">Dynamic Web Application Development</a></h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Germany</li>
                  </ul>
                  {{-- <div class="feature-foot">
                     <div class="logo-company">
                     <a href="{{ url('service') }}">
                        <img src="assets/img/icon/logo-icon-03.svg" class="me-1" alt="icon">
                        <span>AMAZE TECH</span>
                     </a>
                     </div>
                     <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                  </div> --}}
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('service') }}"  title="Indicab Landing web Application Development"><img src="{{ asset('resource/web/assets/img/project/project-23.jpg') }}" title="Indicab Single-page web development" alt="Indicab Single-page web development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  {{-- <div class="feature-time-blk">
                     <a href="javascript:void(0);" class="btn btn-primary sky-active">Part Time</a>
                     <span><i class="far fa-clock me-1"></i> 2 min ago</span>
                  </div> --}}
                  <h4><a href="{{ url('service') }}">Landing web Application Development</a> </h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Kentucky, USA</li>
                  </ul>
                  {{-- <div class="feature-foot">
                     <div class="logo-company">
                        <a href="{{ url('service') }}">
                           <img src="assets/img/icon/logo-icon-02.svg" class="me-1" alt="icon">
                           <span>ABC SOFTWARE</span>
                        </a>
                     </div>
                     <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                  </div> --}}
               </div>
            </div>
         </div>
         <!--- /Project Item  -->
         
         <!--- Project Item  -->
         <div class="col-lg-4 col-md-6 d-flex">
            <div class="project-item feature-project-item aos" data-aos="fade-up">
               <div class="project-img">
                  <a href="{{ url('service') }}" title="Indicab Portal Web Application Development"><img src="{{ asset('resource/web/assets/img/homepage/portableorginal.jpg') }}" title="Indicab Portal web app development" alt="Indicab Portal web app development" class="img-fluid"></a>
               </div>
               <div class="feature-content">
                  {{-- <div class="feature-time-blk">
                     <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                     <span><i class="far fa-clock me-1"></i> 1 min ago</span>
                  </div> --}}
                  <h4><a href="{{ url('service') }}">Portal Web Application Development</a> </h4>
                  <ul class="feature-project-list nav">
                     <li><i class="feather-user me-1"></i>UI/UX Development</li>
                     <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                  </ul>
                  {{-- <div class="feature-foot">
                     <div class="logo-company">
                        <a href="{{ url('service') }}">
                           <img src="assets/img/icon/logo-icon-04.svg" class="me-1" alt="icon">
                           <span>AMAZE TECH</span>
                        </a>
                     </div>
                     <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                  </div> --}}
               </div>
            </div>
         </div>
         <!--- /Project Item  -->

        <!--- Project Item  -->
        <div class="col-lg-4 col-md-6 d-flex">
         <div class="project-item feature-project-item aos" data-aos="fade-up">
            <div class="project-img">
               <a href="{{ url('service') }}"><img src="{{ asset('resource/web/assets/img/homepage/cms.png') }}" title="Indicab CMS development" alt="Indicab CMS development" class="img-fluid"></a>
            </div>
            <div class="feature-content">
               {{-- <div class="feature-time-blk">
                  <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                  <span><i class="far fa-clock me-1"></i> 1 min ago</span>
               </div> --}}
               <h4><a href="{{ url('service') }}" title="Indicab Content Management System Development">Content Management System Development</a> </h4>
               <ul class="feature-project-list nav">
                  <li><i class="feather-user me-1"></i>UI/UX Development</li>
                  <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
               </ul>
               {{-- <div class="feature-foot">
                  <div class="logo-company">
                     <a href="{{ url('service') }}">
                        <img src="assets/img/icon/logo-icon-04.svg" class="me-1" alt="icon">
                        <span>AMAZE TECH</span>
                     </a>
                  </div>
                  <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
               </div> --}}
            </div>
         </div>
      </div>
      <!--- /Project Item  -->
      <!--- Project Item  -->
      <div class="col-lg-4 col-md-6 d-flex">
      <div class="project-item feature-project-item aos" data-aos="fade-up">
         <div class="project-img">
            <a href="{{ url('service') }}"><img src="{{ asset('resource/web/assets/img/homepage/animated.jpg') }}" title="Indicab Animated web development" alt="Indicab Animated web development" class="img-fluid"></a>
         </div>
         <div class="feature-content">
            {{-- <div class="feature-time-blk">
               <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
               <span><i class="far fa-clock me-1"></i> 1 min ago</span>
            </div> --}}
            <h4><a href="{{ url('service') }}" title="Animated Web Applications Development">Animated Web Applications Development</a> </h4>
            <ul class="feature-project-list nav">
               <li><i class="feather-user me-1"></i>UI/UX Development</li>
               <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
            </ul>
            {{-- <div class="feature-foot">
               <div class="logo-company">
                  <a href="{{ url('service') }}">
                     <img src="assets/img/icon/logo-icon-04.svg" class="me-1" alt="icon">
                     <span>AMAZE TECH</span>
                  </a>
               </div>
               <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
            </div> --}}
         </div>
      </div>
   </div>
   <!--- /Project Item  -->
   <!--- Project Item  -->
   <div class="col-lg-4 col-md-6 d-flex">
      <div class="project-item feature-project-item aos" data-aos="fade-up">
         <div class="project-img">
            <a href="{{ url('service') }}"  title="Rich Internet Web Applications Development"><img src="{{ asset('resource/web/assets/img/project/project-24.jpg') }}" title="Indicab Rich Internet web development" alt="Indicab Rich Internet web development" class="img-fluid"></a>
         </div>
         <div class="feature-content">
            {{-- <div class="feature-time-blk">
               <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
               <span><i class="far fa-clock me-1"></i> 1 min ago</span>
            </div> --}}
            <h4><a href="{{ url('service') }}" title="Rich Internet Web Applications Development">Rich Internet Web Applications Development</a> </h4>
            <ul class="feature-project-list nav">
               <li><i class="feather-user me-1"></i>UI/UX Development</li>
               <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
            </ul>
            {{-- <div class="feature-foot">
               <div class="logo-company">
                  <a href="{{ url('service') }}">
                     <img src="assets/img/icon/logo-icon-04.svg" class="me-1" alt="icon">
                     <span>AMAZE TECH</span>
                  </a>
               </div>
               <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
            </div> --}}
         </div>
      </div>
   </div>
   <!--- /Project Item  -->
         
         <div class="col-xl-12">
            <div class="more-project text-center aos" data-aos="fade-up">
               <a href="{{ url('service') }}" class="btn btn-primary">View More Projects</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--- /Feature  -->
 <section class="section news pt-0 review-set">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-md-12">
             <div class="work-box bg1" data-aos="zoom-in" data-aos-duration="1000">
                <div class="work-content">
                   <h2>Get Your Dream Project Developed  <span>by Indicab</span></h2>
                   <p>Find the perfect developed project within your budget, created by Indicab's talented and creative community.</p>
                   <a href="{{ url('service') }}" title="Indicab Project browse" class="btn btn-primary">Browse</a>
                </div>
             </div>
          </div>
          <div class="col-lg-6 col-md-12">
             <div class="work-box aos bg2" data-aos="zoom-in" data-aos-duration="2000">
                <div class="work-content ">
                   <h2>Get Your Dream Project  <span>Developed</span></h2>
                   <p>Find the perfect developed project within your budget, created by our talented and creative community.</p>
                   <a href="{{ url('service') }}" title="Indicab Project browse" class="btn btn-primary">Browse</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="section review">
    <div class="container">
       <div class="row">
         <div class="col-lg-6">
            <div class="aos " data-aos="fade-up">
               <div class="demand-professional">
                  <h2>Effortless Hiring with Indicab's Streamlined Process</h2>
                  <p>Quickly connect with experts at Indicab, hire the right talent, and get your projects completed efficiently through our seamless process.</p>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/recent-icon-01.svg')}}" alt="indicab" title="Indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6>Post a Job with Indicab</h6>
                     <p>Share your requirements and post your job on our platform to attract top talent. Let us help you connect with skilled professionals effortlessly.</p>
                  </div>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/recent-icon-02.svg')}}" alt="indicab" title="Indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6>Hire Freelancers through Indicab</h6>
                     <p>Browse through profiles, evaluate proposals, and choose the perfect expert for your project needs in no time.</p>
                  </div>
               </div>
               <div class="demand-post-job">
                  <div class="demand-post-img">
                     <img src="{{ asset('resource/web/assets/img/recent-icon-03.svg')}}" alt="indicab" title="Indicab" class="img-fluid">
                  </div>
                  <div class="demand-content">
                     <h6>Get Work Done with Indicab</h6>
                     <p>Stay updated with real-time progress, collaborate easily, and get high-quality results delivered on schedule</p>
                  </div>
               </div>
            </div>
         </div>
          <div class="col-lg-6">
             <div class="work-set-image">
                <div class="work-set">
                   <div class="recent-pro-img aos" data-aos="zoom-in" data-aos-duration="1000">
                      <img src="{{ asset('resource/web/assets/img/homepage/leftone.png')}}" alt="indicab" title="Indicab" class="img-fluid ">
                   </div>
                </div>
                <div class="work-sets">
                   <div class="recent-pro-img">
                      <img src="{{ asset('resource/web/assets/img/homepage/righttopone.png')}}" alt="indicab" title="Indicab" class="img-fluid mb-2 aos" data-aos="zoom-in" data-aos-duration="2000">
                      <img src="{{ asset('resource/web/assets/img/homepage/rightbuttom.png')}}" alt="indicab" title="Indicab" class="img-fluid aos" data-aos="zoom-in" data-aos-duration="2500">
                   </div>
                </div>
             </div>
          </div>

       </div>
    </div>
 </section>
 <section class="section">
   <div class="container">
      <div class="row p-5">
         <div class="col-md-12">
            <div class="text-small text-primary text-center mb-3">What We Offer</div>
            <h3 class="text-center">Solutions Tailored to Your Needs by Indicab</h3>
            <h2 class="text-center fw-bolder fs-1">According to your needs</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex d-inline">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Digital Analytics</h6>
                  <p class="text-secondary">At Indicab, we leverage advanced digital analytics tools to track performance, optimize strategies, and provide actionable insights to improve your ROI</p>                                    
                  <div class="arrow-icon">
                        <a href="{{ url('service') }}" title="Indicab Digital Analytics"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Digital Marketing</h6>
                  <p class="text-secondary">Utilizing the latest digital marketing techniques, Indicab crafts data-driven strategies to enhance your brand's online visibility and engagement</p>                                    
                  <div class="arrow-icon">
                     <a href="{{ url('service') }}" title="Indicab Digital Marketing"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Email Marketing</h6>
                  <p class="text-secondary">Indicab designs optimized email marketing campaigns, using targeted messaging and segmentation to effectively reach and convert your audience.</p>                                    
                  <div class="arrow-icon">
                     <a href="{{ url('service') }}" title="Indicab Email Marketing"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Marketing Automation</h6>
                  <p class="text-secondary">Streamline your marketing efforts with Indicab’s automation tools that enhance efficiency, nurture leads, and deliver personalized customer experiences.</p>                                    
                  <div class="arrow-icon">
                     <a href="{{ url('service') }}" title="Indicab Marketing Automation"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Social Media Management</h6>
                  <p class="text-secondary">Grow your brand’s presence on social media with Indicab, using tailored content, engagement strategies, and consistent brand messaging.</p>                                    
                  <div class="arrow-icon">
                     <a href="{{ url('service') }}" title="Indicab Social Media Management"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mb-0 p-5">
            <div class="d-xl-flex">
               <div class="icon text-center">
                  <img class="p-2" src="{{ asset('resource/web/assets/img/icon/monitor.png') }}" width="75px" alt="" srcset="">
               </div>                            
               <div class="text ms-4">
                  <h6 class="fs-4 text-primary fw-bold">Keyword Research</h6>
                  <p class="text-secondary">With Indicab's advanced keyword research, we improve your SEO strategy to drive more organic traffic to your website.</p>                                    
                  <div class="arrow-icon">
                     <a href="{{ url('service') }}" title="Indicab Keyword Research"><i class="srn-arrow-right"></i></a>
                  </div>
               </div>                            
            </div>
         </div>
      </div>
   </div>
 </section>
 <section class="section">
   <div class="row">
      <div class="col-md-6">
         <img src="{{ asset('resource/web/assets/img/home-default-faqs.png') }}" width="90%" alt="" srcset="">
      </div>
      <div class="col-md-6">
         <div class="card border-0">
            <div class="card-body">
               <small class="text-primary aos aos-init aos-animate ps-2" data-aos="fade-up">Why Choose Indicab</small>
               <div class="card-title">
                  <h3 class="fw-medium fs-2">Discover effortless</h3>
                  <h4 class="fw-bolder fs-3">Discover Effortless Customer Support with Indicab</h4>
                  <p class="text-secondary">Experience seamless customer support with Indicab, where your needs are our priority. Our dedicated team ensures quick, efficient solutions every time.</p>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="d-flex">
                        <div class="text ms-4">
                           <div class="d-flex align-items-center">
                              <div class="icon p-2"><i class="fa fa-check-circle text-primary"></i> </div>
                              <div class="fw-bolder p-2">Exceptional Support</div>
                           </div>
                           <p class="text-secondary">At Indicab, we prioritize your satisfaction by offering responsive, dedicated support that ensures your needs are met every step of the way.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="d-flex">
                        <div class="text ms-4">
                           <div class="d-flex align-items-center">
                              <div class="icon p-2"><i class="fa fa-check-circle text-primary"></i> </div>
                              <div class="fw-bolder p-2">Expert Guidance</div>
                           </div>
                           <p class="text-secondary">Our team is committed to providing personalized service, ensuring that your business receives the right solutions tailored to your goals</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="d-flex">
                        <div class="text ms-4">
                           <div class="d-flex align-items-center">
                              <div class="icon p-2"><i class="fa fa-check-circle text-primary"></i> </div>
                              <div class="fw-bolder p-2">Client-Centered Approach</div>
                           </div>
                           <p class="text-secondary">At Indicab, we believe in building long-term relationships with our clients, focusing on understanding and fulfilling all your requirements with professionalism.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="d-flex">
                        <div class="text ms-4">
                           <div class="d-flex align-items-center">
                              <div class="icon p-2"><i class="fa fa-check-circle text-primary"></i> </div>
                              <div class="fw-bolder p-2">Reliable Service</div>
                           </div>
                           <p class="text-secondary">With Indicab, you can count on timely, efficient, and effective service that addresses every challenge and exceeds your expectations.</p>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
 </section>
 <section class="section subscribe">
    <div class="bg-img">
       <img src="{{ asset('resource/web/assets/img/bg/bg3.png')}}" class="bg-img3" alt="indicab" title="Indicab">
    </div>
    <div class="container">
      <div class="row">
         <div class="col-md-6 d-flex align-items-center">
            <div class="join-market-world aos aos-init aos-animate ps-2" data-aos="fade-up">
               <h2 class="text-white p-0 m-0" style="font-size: 30px">We Working For You To</h2>
               <h3 class="text-white p-0 m-0" style="font-size: 45px">Build Your Business Fast</h3>
               <p>Why spend time hiring when you can instantly tap into our skilled cloud workforce to accelerate your business growth?</p>
               <div class="market-place-btn bidding-btn">
                  <a href="{{ url('service') }}" class="btn btn-primary market-project me-2">Post a Project</a>
                  <a href="{{ url('service') }}" class="btn btn-primary project-post">Start Your Project</a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="join-platform-img aos aos-init aos-animate" data-aos="fade-up">
               <img src="{{ asset('resource/web/assets/img/platform-img1.png') }}" alt="indicab" title="Indicab" class="img-fluid">
            </div>
         </div>
      </div>
    </div>
 </section>
 <section class="section job-register">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="register-job-blk">
                <div class="job-content-blk aos" data-aos="fade-up">
                   <h2>Discover Your Next Exciting Job Opportunity with Indicab!</h2>
                   <p>Unlock your career potential with Indicab. Explore a wide range of job opportunities tailored to your skills and goals. Join our community today!</p>
                   <a href="register.html" class="btn all-btn">Contact Now</a>
                </div>
                <div class="see-all mt-0 aos opportunity" data-aos="zoom-in">
                   <img src="{{ asset('resource/web/assets/img/job1.png')}}" alt="indicab" title="Indicab">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
