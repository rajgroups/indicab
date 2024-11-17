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
{{-- {{-- <link rel="canonical" href="{{ url()->current() }}" /> --}}
@section('content')
{{-- main content start --}}
   {{-- Banner Section --}}
   <div class="home-banner home-three">
      <div class="dot-slider slider">
         <div class="profile-widget-slide">
            <div class="slide-pro-img">
               <a href="javascript:void(0);">
               <img class="img-fluid" src="{{ asset('resource/web/assets/img/slider/slider-01.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
               </a>
            </div>
         </div>
         <div class="profile-widget-slide">
            <div class="slide-pro-img">
               <a href="javascript:void(0);">
               <img class="img-fluid " src="{{ asset('resource/web/assets/img/slider/slider-01.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
               </a>
            </div>
         </div>
         <div class="profile-widget-slide">
            <div class="slide-pro-img">
               <a href="javascript:void(0);">
               <img class="img-fluid" src="{{ asset('resource/web/assets/img/slider/slider-01.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
               </a>
            </div>
         </div>
         <div class="profile-widget-slide">
            <div class="slide-pro-img">
               <a href="javascript:void(0);">
               <img class="img-fluid" src="{{ asset('resource/web/assets/img/slider/slider-01.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
               </a>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="banner-kofe">
            <div class="banner-content aos" data-aos="fade-up">
              
               <h5>{{ $post->short_tag }}</h5>
               <p style="
               font-size: 37px;
               padding: 0px;
               margin: 0px;"><span class="fw-bolder">{{ $post->area }}, {{ $post->city }}</span></p>
               <h1>{{ $post->first_title }}</h1>
               <p>{{ $post->first_description }}</p>
               <form class="form" name="store" id="store" method="post" action="#">
                  <div class="form-inner">
                     <div class="input-group">
                        <span class="drop-detail">
                           <select class="form-control select" name="storeID">
                              <option value="project.html">Projects</option>
                              <option value="developer.html">Freelancers</option>
                           </select>
                        </span>
                        <input type="email" class="form-control" placeholder="What are you looking for">
                        <button class="btn btn-primary sub-btn" type="submit">Search </button>
                     </div>
                  </div>
               </form>
               {{-- <div class="banner-join-users">
                  <ul>
                     <li><a href="javascript:void(0);"><img src="{{ asset('resource/web/assets/img/user/banner-user-01.jpg')}}" alt="Img"></a></li>
                     <li><a href="javascript:void(0);"><img src="{{ asset('resource/web/assets/img/user/banner-user-02.jpg')}}" alt="Img"></a></li>
                     <li><a href="javascript:void(0);"><img src="{{ asset('resource/web/assets/img/user/banner-user-03.jpg')}}" alt="Img"></a></li>
                  </ul>
                  <div class="join-user-content">
                     <h6>Join Over 4000+ Students</h6>
                     <span>Register to the Online courses</span>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
   </div>
   {{-- End banner Section --}}

   {{-- Car List Section  --}}
   <section class="section different-categories">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-three section-locate aos" data-aos="fade-up">
                  <div>
                     <span class="badge title-badge">Projects By Category</span>
                     <h2 class="header-title">Get work done in over 60 different categories</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            @foreach ($cars as $car)
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
               <div class="different-categories-blk aos" data-aos="fade-up">
                  <div class="img">
                     <img src="{{ asset('car_image/'.$car->icon)}}" alt="indicab Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" style="width:100%;">
                  </div>
                  <div class="differ-img-right">
                     <img src="{{ asset('resource/web/assets/img/icon/category-09.svg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" style="width:100%;">
                  </div>
                  <div class="differ-content">
                     <h6>{{ $car->name }}</h6>
                     <p>{{ \Illuminate\Support\Str::words($car->short_description, 12, '...') }}</p>
                     <div class="category-foot">
                        <span>₹ {{ $car->price_ratio }}/Km</span>
                        <a href="project.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach

            <div class="col-xl-12">
               <div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
                  <a href="project.html" class="btn btn-primary">View More Projects<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- End Car List Section  --}}

   {{-- About Indicab Section --}}
   <section class="section best-marketplace">
      <div class="container">
         <div class="row">
            <div class="col-md-6 d-flex align-items-center">
               <div class="market-place-group section-header-three aos" data-aos="fade-up">
                  <span class="badge title-badge">About Us</span>
                  <h2>Indicab Cab Service | Reliable & Affordable Rides Near You</h2>
                  <p>Indicab Cab Service offers safe, reliable, and affordable rides to get you where you need to be, hassle-free. Experience seamless booking and professional drivers for a comfortable journey every time</p>
                  <ul class="market-list-out">
                     <li><i class="fa-solid fa-circle-check me-2"></i> Affordable Rides: Enjoy budget-friendly cab services without compromising on quality.</li>
                     <li><i class="fa-solid fa-circle-check me-2"></i> Safe & Reliable: Professional drivers ensure a secure and punctual journey.</li>
                     <li><i class="fa-solid fa-circle-check me-2"></i> Easy Booking: Book your ride effortlessly through our user-friendly platform. </li>
                     <li><i class="fa-solid fa-circle-check me-2"></i> 7 Availability: We're here to serve you anytime, anywhere.</li>
                  </ul>
                  <div class="market-place-btn">
                     <a href="#" class="btn btn-primary market-project me-2">Book Now<i class="feather-arrow-right ms-2"></i></a>
                     <a href="#" class="btn btn-primary market-developer">Find Near Cab<i class="feather-arrow-right ms-2"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="markrt-place-img aos" data-aos="fade-up">
                  <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqvB6aT6dmzMPnn27N_LY8BFLlUYm3I070aA&s')}}" class="img-fluid" alt="indicab Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- End About Indicab Section --}}
   
   {{-- <section class="section company-hire">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="section-header hire-heading section-header-three text-center aos" data-aos="fade-up">
                  <span class="badge title-badge">Trusted Companies</span>
                  <h2>Featured Companies in Kofejob</h2>
               </div>
            </div>
         </div>
         <div id="company-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
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

   {{-- Car Slide Section --}}
   <section class="section trend-projects trend-projects-three">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12 mx-auto">
               <div class="section-header section-header-three aos" data-aos="fade-up">
                  <span class="badge title-badge">Trending Cabs</span>
                  <h2 class="header-title">Cab Rent Charges or Price From {{ $post->area }}, {{ $post->city }}</h2>
               </div>
            </div>
         </div>
         <div id="trend-slider" class="owl-carousel owl-theme trend-slider aos" data-aos="fade-up">
            @foreach ($cars as $car)
            <div class="project-item trend-project-item">
               <div class="project-img">
                  <a href="#"><img src="{{ asset('car_image/'.$car->image)}}" alt="Indicab Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" class="img-fluid p-2"></a>
               </div>
               <div class="trend-project-content">
                  <div class="star-rated">
                     <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <span class="average-rating">5.0</span>
                     </div>
                     <a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
                  </div>
                  <h4><a href="#">{{ $car->name }}</a></h4>
                  <ul class="trend-project-list">
                     <li><i class="feather-user me-1"></i>IndiCab</li>
                     <li><i class="feather-map-pin me-1"></i>India</li>
                     <li><i class="feather-map-pin me-1"></i>India</li>
                  </ul>
                  <div class="trend-rate">
                     <ul class="nav">
                        <li><span>₹ {{ $car->price_ratio }}</span></li>
                        <li><a href="javascript:void(0);">Book Now<i class="feather-arrow-right ms-2"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   {{-- End Car Slide Section --}}

   {{-- Service location  --}}
   <section class="section job-location home-two-jobsec">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-two d-block text-center section-locate aos aos-init aos-animate" data-aos="fade-up">
                  <h2 class="header-title">Indicab Cab Service Locations</span></h2>
                  <h2 class="header-title">Indicab Cab Service <span>Locations From {{ $post->area }}, {{ $post->city }}</span></h2>
                  <p>Find cabs near  {{ $post->area }}, {{ $post->city }}</p>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($locations as $locations)
            <div class="col-xl-3 col-md-4">
               <div class="job-locate-blk aos aos-init aos-animate" data-aos="fade-up">
                  <div class="location-img">
                     <a href="project.html"><img class="img-fluid" src="{{ asset('location/'.$locations->image) }}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" alt="Img"></a>
                  </div>
                  <div class="job-it-content">
                     <h6>{{ $locations->name }}, India</h6>
                     <ul class="nav job-locate-foot">
                        <li>Indicab cab Service in {{ $post->area }}, {{ $post->city }}</li>
                     </ul>
                  </div>
               </div>
            </div>
            @endforeach

            <div class="col-xl-12">
               <div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
                  <a href="project.html" class="btn btn-primary">View More Locations</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- End Service location  --}}

   {{-- Content Section --}}
   <section class="section container">
      {!! $post->description !!}
   </section>
   {{-- End Content Section --}}

   {{-- Testimonial Section --}}
   <section class="section review-people review-people-three mt-4">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="section-header section-header-three text-center aos" data-aos="fade-up">
                  <span class="badge title-badge">Testimonials</span>
                  <h2 class="header-title">What our User Says</h2>
               </div>
            </div>
         </div>
         <div class="trend-slider aos row" data-aos="fade-up">
            <div class="col-lg-4 col-md-6">
               <div class="review-blog user-review">
                  <div class="review-top ">
                     <div class="review-img mx-auto">
                        <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/user/review-user-01.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" alt="Post Image"></a>
                     </div>
                     <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="average-rating">5.0(45)</span>
                     </div>
                  </div>
                  <div class="review-content text-center">
                     <p>"Indicab Cab Service has been a lifesaver for my daily commute. The drivers are always professional, and the rides are punctual and affordable. Highly recommend!"</p>
                  </div>
                  <div class="quate text-center d-flex justify-content-center">
                     <img src="{{ asset('resource/web/assets/img/icon/user-quates.svg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" alt="Img">
                  </div>
                  <div class="review-info text-center">
                     <h3><a href="review.html">John D</a></h3>
                     <h5>Marketing Manager</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="review-blog user-review">
                  <div class="review-top ">
                     <div class="review-img mx-auto">
                        <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/user/review-user-02.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" alt="Post Image"></a>
                     </div>
                     <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="average-rating">5.0(30)</span>
                     </div>
                  </div>
                  <div class="review-content text-center">
                     <p>I rely on Indicab for all my client visits and event travel needs. Their service is impeccable, and the easy booking process saves me so much time!</p>
                  </div>
                  <div class="quate text-center d-flex justify-content-center">
                     <img src="{{ asset('resource/web/assets/img/icon/user-quates.svg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}" alt="Img">
                  </div>
                  <div class="review-info text-center">
                     <h3><a href="review.html">Sarah P</a></h3>
                     <h5>Event Coordinator</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="review-blog user-review">
                  <div class="review-top ">
                     <div class="review-img mx-auto">
                        <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/user/review-user-03.jpg')}}" alt="Post Image"></a>
                     </div>
                     <div class="rating">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="average-rating">5.0(13)</span>
                     </div>
                  </div>
                  <div class="review-content text-center">
                     <p>"Whether it's an airport drop or a late-night ride home, Indicab always provides a safe and comfortable experience. The reliability is unmatched!"</p>
                  </div>
                  <div class="quate text-center d-flex justify-content-center">
                     <img src="{{ asset('resource/web/assets/img/icon/user-quates.svg')}}" alt="Img">
                  </div>
                  <div class="review-info text-center">
                     <h3><a href="review.html">Rahul M</a></h3>
                     <h5>Software Engineer</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{--End Testimonial Section --}}

   {{-- <section class="section top-skill top-skill-three">
      <div class="container">
         <div class="section-header section-header-three text-center aos" data-aos="fade-up">
            <span class="badge title-badge">Skill Sets</span>
            <h2 class="header-title">Get work done in over 1800 different categories</h2>
         </div>
         <div class="row justify-content-center">
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-01.svg')}}" alt="Img">
                  </div>
                  <span>Translation</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-02.svg')}}" alt="Img">
                  </div>
                  <span>Research Writing</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-03.svg')}}" alt="Img">
                  </div>
                  <span>Web Scraping</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-04.svg')}}" alt="Img">
                  </div>
                  <span>Article Writing</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-05.svg')}}" alt="Img">
                  </div>
                  <span>HTML 5</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-06.svg')}}" alt="Img">
                  </div>
                  <span>Website Design</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-07.svg')}}" alt="Img">
                  </div>
                  <span>Mobile Apps</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-08.svg')}}" alt="Img">
                  </div>
                  <span>Android Apps</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-09.svg')}}" alt="Img">
                  </div>
                  <span>Iphone Apps</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-10.svg')}}" alt="Img">
                  </div>
                  <span> Architecture</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-11.svg')}}" alt="Img">
                  </div>
                  <span>Graphic Design</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-12.svg')}}" alt="Img">
                  </div>
                  <span>Logo Design</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-13.svg')}}" alt="Img">
                  </div>
                  <span>Public Relations</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-14.svg')}}" alt="Img">
                  </div>
                  <span>Proofreading</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-15.svg')}}" alt="Img">
                  </div>
                  <span>Photoshop</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-16.svg')}}" alt="Img">
                  </div>
                  <span>Technical Writing</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-17.svg')}}" alt="Img">
                  </div>
                  <span>Blogging</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-18.svg')}}" alt="Img">
                  </div>
                  <span>Internet Marketing</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-19.svg')}}" alt="Img">
                  </div>
                  <span>eCommerce</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-20.svg')}}" alt="Img">
                  </div>
                  <span>Data Entry</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-21.svg')}}" alt="Img">
                  </div>
                  <span>Link Building</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-22.svg')}}" alt="Img">
                  </div>
                  <span>C++ Programming</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-23.svg')}}" alt="Img">
                  </div>
                  <span>C# Programming</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-24.svg')}}" alt="Img">
                  </div>
                  <span>Content Writing</span>
               </div>
            </div>
            <div class="skill-custom-col">
               <div class="skills-feature">
                  <div class="skill-icon">
                     <img src="{{ asset('resource/web/assets/img/icon/skill-icon-25.svg')}}" alt="Img">
                  </div>
                  <span>Marketing</span>
               </div>
            </div>
         </div>
      </div>
   </section> --}}

   {{-- FAQ Section --}}
   <section class="faq-section-three" id="faq">
      <div class="container">
         <div class="section-header section-header-three text-center aos" data-aos="fade-up">
            <span class="badge title-badge">FAQ’S</span>
            <h2 class="header-title">Frequently Question Answer </h2>
         </div>
         <div class="row" id="accordionExample">
               @foreach ($faqs as $index => $faq)
                     {{-- Open a new column for every 5 items --}}
                     @if ($loop->first || $index % 5 == 0)
                        <div class="col-md-6">
                     @endif
                     
                     <div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
                        <h4 class="faq-title">
                           <a class="collapsed" data-bs-toggle="collapse" href="#faq{{ $loop->index }}" aria-expanded="false">
                                 {{ $loop->iteration }}. {{ $faq->qustion }}
                           </a>
                        </h4>
                        <div id="faq{{ $loop->index }}" class="card-collapse collapse" data-bs-parent="#accordionExample">
                           <p>{{ $faq->answer }}</p>
                        </div>
                     </div>
            
                     {{-- Close the column after 5 items or at the end of the loop --}}
                     @if ($loop->last || ($index + 1) % 5 == 0)
                        </div>
                     @endif
               @endforeach
            </div>
            
         </div>
      </div>
   </section>
   {{-- End FAQ Section --}}

   {{-- Blog section --}}
   <section class="section news">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12 mx-auto">
               <div class="section-header section-header-three aos" data-aos="fade-up">
                  <span class="badge title-badge">Our Blog</span>
                  <h2 class="header-title">Read Our Article</h2>
               </div>
            </div>
         </div>
         <div class="trend-slider row aos" data-aos="fade-up">
            <div class="col-lg-6 col-md-12">
               @if ($blogs->isNotEmpty())
               @php
                  $latestBlog = $blogs->first(); // Get the first blog from the collection
               @endphp

               <div class="blog blog-trick aos" data-aos="fade-up">
                  <div class="blog-image">
                        <a href="blog-details.html">
                           <img class="img-fluid" src="{{ asset('blog/'.$latestBlog->image) }}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
                        </a>
                  </div>
                  <div class="blog-trick-content-main">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                           <ul class="entry-meta meta-item d-flex align-items-center mb-0">
                              <li>
                                    <div class="post-author blog-hover-img">
                                       <a href="developer-details.html">
                                          <img src="{{ asset('resource/web/assets/img/img-02.jpg') }}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}">
                                          <span>{{ $latestBlog->author_name ?? 'Unknown Author' }}</span>
                                       </a>
                                    </div>
                              </li>
                              <li>
                                    <i class="feather-calendar"></i>
                                    {{ $latestBlog->created_at->format('d M Y') }}
                              </li>
                           </ul>
                           <div class="blog-text">
                              <span><i class="feather-grid me-2"></i>{{ $latestBlog->category ?? 'General' }}</span>
                           </div>
                        </div>
                        <div class="blog-content blog-trick-content">
                           <h3 class="blog-title">
                              <a href="blog-details.html">{{ $latestBlog->title }}</a>
                           </h3>
                           <p>{{ Str::limit($latestBlog->short_desc  , 150) }}</p>
                        </div>
                        <a href="javascript:void(0);" class="more-option">
                           Learn More<i class="feather-arrow-right ms-2"></i>
                        </a>
                  </div>
               </div>
            @endif
            </div>
            <div class="col-lg-6 col-md-12">
               @foreach ($blogs as $blog)
               <div class="blog blog-trick aos" data-aos="fade-up">
                  <div class="row align-items-center">
                     <div class="col-sm-4">
                        <div class="blog-image blog-list-img">
                           <a href="blog-details.html"><img class="img-fluid" src="{{ asset('blog/'.$blog->image)}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}"></a>
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <div class="blog-trick-content-main blog-list-main">
                           <div class="blog-content blog-trick-content">
                              <h3 class="blog-title"><a href="blog-details.html">{{ $blog->title }} </a></h3>
                              <p>{{ $blog->short_desc  }}</p>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
                              <ul class="entry-meta meta-item d-flex align-items-center mb-0">
                                 <li>
                                    <div class="post-author blog-hover-img">
                                       <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/img-03.jpg')}}" alt="Cab Service in {{ $post->area }}, {{ $post->city }}" title="Cab Service in {{ $post->area }}, {{ $post->city }}"> <span> By Admin</span></a>
                                    </div>
                                 </li>
                                 <li>
                                    <i class="feather-calendar"></i>
                                    {{ $blog->created_at->format('d M Y') }}
                                 </li>
                              </ul>
                           </div>
                           <a href="javascript:void(0);" class="more-option mt-0">Learn More<i class="feather-arrow-right ms-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="col-md-12">
               <div class="next-job-btn mt-3">
                  <a href="blog-details.html" class="btn btn-primary next-register me-3">View More Articles<i class="feather-arrow-right ms-2"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- End Blog section --}}

{{-- Main Content End --}}
@endsection
