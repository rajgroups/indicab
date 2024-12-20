{{-- @dd($post); --}}
@extends('layouts.web.app')
@push('meta_tag')
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
<title>{{ $post->seo_title }}</title>
<meta name="description" content="{{ $post->seo_description }}" />
<meta name="keywords" content="{{ $post->seo_keywords }}" />

<meta name="author" content="{{ $settings->meta_author }}"/>
<meta name="copyright" content="{{ $settings->meta_copyright }}"/>
<meta name="reply-to" content="{{ $settings->meta_reply_to }}"/>
<meta name="expires" content="never"/>

<meta name="theme-color" content="{{ $settings->meta_theme_color }}">
<meta name="HandheldFriendly" content="{{ $settings->meta_handheld_friendly }}">
<meta name="apple-mobile-web-app-capable" content="{{ $settings->meta_apple_web_app_capable }}">
<meta name="apple-mobile-web-app-status-bar-style" content="{{ $settings->meta_apple_status_bar_style }}">
<meta name="googlebot" content="{{ $settings->meta_googlebot}}"/>
<meta name="allow-search" content="{{ $settings->meta_allow_search }}" />
<meta name="revisit-after" content="{{ $settings->meta_revisit_after }}" />
<meta name="distribution" content="{{ $settings->meta_distribution }}"/>

<meta name="coverage" content="{{ $settings->meta_coverage }}" />
<meta name="allow-search" content="{{ $settings->meta_allow_search }}" />
<meta name="robots" content="{{ $settings->meta_robots }}"/>
{{-- For Facbook tags --}}
<meta property="og:title" content="{{ $post->og_title }}" />
<meta property="og:description" content="{{ $post->og_description }}" />
<meta property="og:image" content="{{ asset('og_image/'.$post->og_image) }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="INDICAB Packers and Movers" />
{{-- For Twitter tags --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $post->og_title }}" />
<meta name="twitter:description" content="{{ $post->og_description }}" />
<meta name="twitter:image" content="{{ asset('og_image/'.$post->og_image) }}" />
<meta name="twitter:site" content="@YOUR_TWITTER_HANDLE" />
<meta name="twitter:creator" content="@YOUR_TWITTER_HANDLE" />
{{-- canonical --}}
<link rel="canonical" href="{{ url()->current() }}" />

@endpush
@section('content')
    {{-- Main Content Start --}}
    <section class="section home-banner home-four row-middle">
      <div class="banner-float-img">
         <img src="{{ asset('resource/web/assets/img/happy-young-man.png')}}" alt="Indicab Packers and Movers {{ $post->city }} {{ $post->area }}" title="indicab Packers and Movers {{ $post->city }} {{ $post->area }}">
      </div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-8 col-lg-6">
               <div class="banner-blk-four aos" data-aos="fade-up">
                  <div class="banner-content">
                     <div class="banner-note">
                        <h5 class="mb-0">{{ $post->short_tag }}</h5>
                     </div>
                    <p style="
                    font-size: 37px;
                    padding: 0px;
                    margin: 0px;"><span class="fw-bolder">{{ $post->area }}, {{ $post->city }}</span></p>
                        <h1>{{ $post->first_title }}</h1>
                     <p>{{ $post->first_description }}</p>
                     <form class="form" name="store" id="store" method="post" action="">
                        <div class="form-inner">
                           <div class="input-group">
                              <span class="drop-detail">
                                 <select class="form-control select" name="country_code">
                                    <option value="+91">+91</option>
                                 </select>
                              </span>
                              <input type="email" class="form-control" placeholder="90XXXXXXXX">
                              <button class="btn btn-primary sub-btn" type="submit">Ask Quote</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="coplete-job aos" data-aos="fade-right">
            <div class="complete-icon me-2">
               <i class="feather-briefcase"></i>
            </div>
            <div class="complete-content course-count">
               <h3><span class="counter-up"> 5000</span>+</h3>
               <p>Jobs Completed</p>
            </div>
         </div>
         <div class="fullstack-blk aos" data-aos="fade-up">
            <div class="fullstacker-img">
               <img src="{{ asset('resource/web/assets/img/user/indicab.png')}}" class="img-fluid" alt="Indicab Packers and Movers {{ $post->area }} {{ $post->city }}" title="indicab Packers and Movers {{ $post->area }} {{ $post->city }}">
               <span class="stacker-active"><i class="fas fa-check-circle"></i></span>
            </div>
            <div class="fullstacker-name">
               <h4>Indicab</h4>
               <p>Packers and movers</p>
            </div>
            {{-- <div class="rating">
               <i class="fas fa-star filled"></i>
               <i class="fas fa-star filled"></i>
               <i class="fas fa-star filled"></i>
               <i class="fas fa-star filled"></i>
               <i class="fas fa-star"></i>
               <span class="average-rating">5.0 (50 Review)</span>
            </div> --}}
         </div>
         {{-- <div class="register-profesion aos" data-aos="fade-right">
            <div class="avatar-group">
               <div class="avatar avatar-xs group_img group_header">
                  <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('resource/web/assets/img/user/avatar-1.jpg')}}">
               </div>
               <div class="avatar avatar-xs group_img group_header">
                  <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('resource/web/assets/img/user/avatar-2.jpg')}}">
               </div>
               <div class="avatar avatar-xs group_img group_header">
                  <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('resource/web/assets/img/user/avatar-3.jpg')}}">
               </div>
            </div>
            <div class="profesion-content course-count">
               <p>Successfully 5000+ Jobs</p>
               <span>Get lowest price for household item move your new home</span>
            </div>
         </div> --}}
      </div>
   </section>

   {{-- Show Sub Category Service --}}
   @if($post->show_sub_category_service == 'yes')
   <section class="section browse-categories">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-four section-locate aos" data-aos="fade-up">
                  <div class="text-center">
                     <h2 class="header-title"><span class="fw-bolder">INDICAB</span> Providing Services</h2>
                     <p>Your Reliable <span class="fw-bold">Shifting</span> Partner</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="browse-categories-content">
            <div class="row row-gap aos" data-aos="fade-up">
               @foreach ($subservices as $subservice)
               <div class="col-lg-3 col-md-6 col-6 aos  " data-aos="zoom-in" data-aos-duration="1000">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('subservice/'.$subservice->icon)}}" alt="Indicab Packers and movers Household shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers Household shifting {{ $post->city }} {{ $post->area }}"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">{{ $subservice->name }}</h3>
                        <a href="javascript:void(0);" title="Indicab Household Shifting Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <div class="home-four-viewall">
            <a href="project.html" class="home-four-viewall-btn">View all Services</a>
         </div>
      </div>
   </section>
   @endif

   <section class="section projects">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
               <div class="section-header aos " data-aos="fade-up">
                  <h2 class="header-title"><span> Indicab </span> Service Quality</span></h2>
                  <h5>Why Choose <b>Indicab</b> Packers and Movers?</h5>
               </div>
            </div>
         </div>
         <div class="row row-gap">
            <div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="1000">
               <div class="feature-items">
                  <div class="feature-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/great1.svg')}}" class="img-fluid" alt="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count">
                     <h3>Well Packing</h3>
                     <p>Ensure a safe move with our top-quality packing materials. From sturdy boxes to bubble wrap and packing paper, we provide everything you need to protect your belongings. Trust us for a secure and efficient packing experience. Your items deserve the best!</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="1500">
               <div class="feature-items ">
                  <div class="feature-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/great2.svg')}}" class="img-fluid" alt="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count">
                     <h3>On-time shifting</h3>
                     <p>Experience the reliability of our on-time shifting services. We prioritize punctuality, ensuring your move stays on schedule without any delays. Trust us to get you settled into your new home swiftly and efficiently. Your timely transition is our commitment!</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="2000">
               <div class="feature-items ">
                  <div class="feature-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/great3.svg')}}" class="img-fluid" alt="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count">
                     <h3>Quality Work</h3>
                     <p>Experience the best with our quality work and on-time shifting services. We ensure punctuality and precision, making your move smooth and stress-free. Trust our expertise for a secure, efficient transition to your new home. Your satisfaction is our top priority!</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="2500">
               <div class="feature-items ">
                  <div class="feature-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/great4.svg')}}" class="img-fluid" alt="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count">
                     <h3>Track Progress</h3>
                     <p>Stay informed with our real-time progress tracking. Monitor every step of your move with our transparent updates, ensuring peace of mind. Trust us to keep you updated and in control throughout the entire process. Your move, your way!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section feature-counts">
      <div class="container">
         <div class="row">
            <div class="col-12 aos " data-aos="fade-up">
               <div class="register-job-blk">
                  <div class="job-content-blk text-center aos  " data-aos="fade-up">
                     <h2>Unlock More Offers and Banefits & Updates?</h2>
                     <p>Need more help in setting the house? Enhance your house shifting experience with Value Added Services</p>
                  </div>
                  <div class="home-four-viewall">
                     <a href="register.html" class="home-four-viewall-btn">Register Now <i class="feather-arrow-right ms-2"></i></a>
                     <a href="post-project.html" class="home-four-viewall-btn">Contact Us Or Enquiry<i class="feather-arrow-right ms-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- Show Service Location --}}
   @if($post->show_service_location == 'yes')
   <section class="section feaure-for-developer">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-four section-locate aos" data-aos="fade-up">
                  <div>
                     <h2 class="header-title mb-0">House Shifting Services Near You</h2>
                  </div>
               </div>
            </div>
         </div>
         <div id="dev-slider" class="owl-carousel popular-slider developers-slider owl-theme  aos" data-aos="fade-up">
            @foreach ($locations as $location)
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('location/'.$location->image)}}" class="img-fluid" alt="Indicab Packers and movers {{ $location->name }}" title="Indicab Packers and movers {{ $location->name }}">
                     {{-- <span class="hour-dollr develop-dollr">$64 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">{{ $location->name }}</a></h4>
                           {{-- <img class="ms-1" src="{{ asset('location/'.$location->image)}}" alt="Indicab Packers and movers Tirupathi" title="Indicab Packers and movers Tirupathi"> --}}
                        </div>
                        <h3 class="mb-0 h6 text-secondary">Indicab Packers and movers in {{ $location->name }}</h3>
                     </div>
                     <div>
                        <a href="javascript:void(0);" class="bookmark-check"><i class="mt-2 fa-regular fa-bookmark"></i></a>
                     </div>
                  </div>
                  <div class="rate-block">
                     <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="average-rating">5.0</span>
                     </div>
                     <div>
                        <a href="developer-details.html" title=""><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <div class="home-four-viewall">
            <a href="developer-details.html" class="home-four-viewall-btn">View More Places <i class="feather-arrow-right ms-2"></i></a>
         </div>
      </div>
   </section>
   @endif

   <section class="section join-marketplace">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="markrt-place-img aos" data-aos="fade-up">
                  <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/indicab_packing_image.jpg')}} " class="img-fluid" alt="about Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="about Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
               </div>
            </div>
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
               <div class="market-place-group join-place-blk aos" data-aos="fade-up">
                  <h2><span class="fw-bolder"> INDICAB </span> Packers Movers Leading Packers and Movers </h2>
                  <h5 class="text-secondary"><span class="fw-bolder"> INDICAB </span> Packers And Movers Why us?</h5>
                  <ul class="market-list-out">
                     <li><i class="fa-solid fa-circle-check"></i> <h5 class="h6"> On time Delivery.</h5></li>
                     <li><i class="fa-solid fa-circle-check"></i> <h5 class="h6"> Economical prices </h5></li>
                     <li><i class="fa-solid fa-circle-check"></i> <h5 class="h6"> Damage-proof packaging </h5></li>
                     <li><i class="fa-solid fa-circle-check"></i> <h5 class="h6"> Experienced Driver and Export Packing Member </h5></li>
                  </ul>
                  <div class="market-place-btn">
                     <a href="project.html" class="btn btn-primary market-project me-2">Book Now</a>
                     <a href="developer-details.html" class="btn btn-primary market-developer">Find Packers</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- Show Service Price --}}
   @if($post->show_price_information == 'yes')
   <section class="section popular-projects">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header  section-locate aos" data-aos="fade-up">
                  <div>
                     <h2 class="header-title"><span class="fw-bolder"> INDICAB </span> Best Packing and Moving Price in {{ $post->area }}, {{ $post->city }}</h2>
                     <h5 class="h6 fw-bolder text-secondary fs-6">Affortable and Lowest Price</h5>
                  </div>
               </div>
            </div>
         </div>
         <div id="popular-slider" class="owl-carousel owl-theme popular-slider developers-slider aos" data-aos="fade-up">
            @foreach ($prices as $price)
            <div class="popular-group">
               <div class="blog-image">
                  <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/indicab-packers-movers/indicab_packing_image.jpg')}}" alt="Indicab Packers and movers 1BHK Shifting" title="Indicab Packers and movers 1BHK Shifting"></a>
               </div>
               <div class="popular-content-blk">
                  <div class="head-popular">
                     <h4><a href="project.html">{{ $price->name }}</a></h4>
                     <p><i class="feather-home me-1"></i>Packers and Movers</p>
                  </div>
                  <div class="popular-list-box">
                     <ul class="nav">
                        <li>{{ $price->item_ratio }}</li>                       </ul>
                     <h4>{{ $price->price_ratio }}</h4>
                  </div>
                  <p class="popular-foot">{{ $price->short_description }}  </p>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   @endif

   <section class="section projects">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12 mx-auto">
               <div class="section-header text-center aos" data-aos="fade-up">
                  <h2 class="header-title">What’s great about it?</h2>
                  <p>All the features of kofejob below</p>
               </div>
            </div>
         </div>
         <div class="row row-gap">
            <div class="col-xl-3 col-md-6">
               <div class="great-card aos" data-aos="fade-up">
                  <div class="feature-icon mb-0 me-3">
                     <img src="{{ asset('resource/web/assets/img/icon/great5.svg')}}" class="img-fluid" alt="Indicab Packers and movers Commercial Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers Commercial {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count text-start">
                     <p class="counter-up fw-bolder fs-5">700</p>
                     <p>Happy Customer</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="great-card  aos" data-aos="fade-up">
                  <div class="feature-icon mb-0 me-3">
                     <img src="{{ asset('resource/web/assets/img/icon/great6.svg')}}" class="img-fluid" alt="Indicab Packers and movers Commercial Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers Commercial {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count text-start">
                     <h4><span class="counter-up">100 </span> +</h4>
                     <p>Commercial Shifting</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="great-card  aos" data-aos="fade-up">
                  <div class="feature-icon mb-0 me-3">
                     <img src="{{ asset('resource/web/assets/img/icon/great7.svg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers Karnataka {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count text-start">
                     <h4 class="counter-up">300</h4>
                     <p>Household Shifting</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="great-card  aos" data-aos="fade-up">
                  <div class="feature-icon mb-0 me-3">
                     <img src="{{ asset('resource/web/assets/img/icon/great8.svg')}}" class="img-fluid" alt="Indicab Packers and movers Office Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                  </div>
                  <div class="feature-content course-count text-start">
                     <h4 class="counter-up">100</h4>
                     <p>Office Shifting</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
      {{-- Show Service Location --}}
   @if($post->show_service_location == 'yes')
   <section class="section review">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header d-block  section-locate aos" data-aos="fade-up">
                  <div class="text-center">
                     <h2 class="header-title">Our Service Location from {{ $post->area }}, {{ $post->city }}</h2>
                     <p>Find your favorite packers and movers and enjoy the benefits of a hassle-free move.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row row-gap">
            @foreach ($locations as $location)
            <div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
               <div class="blog-article-group job-loc">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('location/'.$location->image)}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Karnataka"></a>
                     <div class="article-blog-content">
                        <span> Karntaka, India</span>
                        <h4><a href="blog-details.html">Indicab Packers and Movers {{ $location->name }}</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   @endif

   {{-- Show Service Location --}}
   @if($post->show_testimonial == 'yes')
   <section class="section testimonial-section review review-four">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="section-header aos text-center" data-aos="fade-up">
                  <h2 class="header-title">Ous Client testimonials</h2>
                  <p>Read our clients <a href="https://g.co/kgs/CFHyM4a"> Google Review Responce</a></p>
               </div>
            </div>
         </div>
         <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
            @foreach ($testimonials as $testimonial )
            <div class="review-blog">
               <div class="review-top d-flex align-items-center">
                  <div class="review-img">
                     <a href="review.html"><img class="img-fluid" src="{{ asset('testimonial/'.$testimonial->image)}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Users"></a>
                  </div>
                  <div class="review-info">
                     <h3><a href="review.html">{{ $testimonial->name }}</a></h3>
                     <p>Indicab Users</p>
                  </div>
               </div>
               <div class="review-content">
                  <p>"{{ $testimonial->description }}"</p>
                  <div class="rating">
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            @endforeach
           
         </div>
      </div>
   </section>
   @endif

   <section class="section platform-location">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="row">
                  <div class="col-md-6 flex-fill">
                     <div class="markrt-place-img aos" data-aos="fade-up">
                        <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/left-side.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                     </div>
                  </div>
                  <div class="col-md-6 flex-fill">
                     <div class="d-flex flex-column row-gap">
                        <div class="markrt-place-img aos" data-aos="fade-up">
                           <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/right_one.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                        </div>
                        <div class="markrt-place-img aos" data-aos="fade-up">
                           <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/right_two.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
               <div class="market-place-group aos" data-aos="fade-up">
                  <h2><span class="fw-bolder">INDICAB</span><span class="platform-head">Packers and movers</span></h2>
                  <p>INDICAB Packers and Movers – Your Journey, Our Commitment</p>
                  <p class="platform-pasage">INDICAB Packers and Movers is a trusted name in the relocation industry, known for providing top-notch moving services across India. Specializing in residential moves, they handle everything from 1 BHK apartments to large villas with expertise and care. Whether you're moving within the city or relocating to a different state, INDICAB offers competitive pricing and reliable service. Their professional team ensures safe packing, secure transportation, and timely delivery of your belongings. With a focus on customer satisfaction, INDICAB Packers and Movers have built a reputation for efficiency and reliability. Choose INDICAB for a stress-free and seamless moving experience.</p>
                  <div class="market-place-btn platform-btn">
                     <a href="project.html" class="btn btn-primary market-project me-2">Find More</a>
                     <a href="project.html" class="btn btn-primary project-post">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- <section class="section top-company-four">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-four section-locate aos" data-aos="fade-up">
                  <div class="text-center">
                     <h2 class="header-title">Trusted by the world’s best </h2>
                     <p>Top companies </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="trust-company-slider" class="owl-carousel owl-theme trust-slider developers-slider aos" data-aos="fade-up">
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-01.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-02.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-03.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-04.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-05.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-06.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-03.svg')}}" alt="Img">
            </div>
            <div class="company-logos">
               <img src="{{ asset('resource/web/assets/img/company-logo-02.svg')}}" alt="Img">
            </div>
         </div>
      </div>
   </section> --}}

   <section class="section blog-article">
      <div class="container">
         <div class="row aos row-gap" data-aos="fade-up">
            <div class="col-md-12">
               {!! $post->description !!}
            </div>
         </div>
      </div>
   </section>

   {{-- Show Service Location --}}
   @if($post->show_faq == 'yes')
   <section class="faq-section-three bg-white" id="faq">
      <div class="container">
         <div class="section-header section-header-three text-center aos  " data-aos="fade-up">
            <span class="badge title-badge">FAQ’S</span>
            <h2 class="header-title">Indicab Frequently Question Answer </h2>
         </div>
         <div class="row" id="accordionExample">
            <div class="col-lg-6">
               @foreach ($faqs as $index => $faq)
                  <div class="faq-card aos" data-aos="fade-up">
                     <h4 class="faq-title">
                           <a class="collapseds" data-bs-toggle="collapse" href="#faq{{ $index }}" aria-expanded="true">
                              {{ $faq->qustion }}
                           </a>
                     </h4>
                     <div id="faq{{ $index }}" class="card-collapse collapse" data-bs-parent="#accordionExample">
                           <p>{{ $faq->answer }}</p>
                     </div>
                  </div> 
               @endforeach

            </div>
            <div class="col-lg-6">
               <div class="faq-imgs">
                  <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/inner-banner.jpg')}}" alt="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" title="Indicab Packers and movers {{ $post->city }} {{ $post->area }}" width="100%">
               </div>
            </div>
         </div>
      </div>
   </section>
   @endif
  {{-- Main Content End --}}
@endsection
