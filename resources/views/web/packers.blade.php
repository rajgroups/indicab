@extends('layouts.web.app')
@push('meta_tag')
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
<title>INDICAB Packers and Movers - Reliable Moving Services Across India</title>
<meta name="description" content="INDICAB Packers and Movers offer professional and reliable packing and moving services across India. From local to long-distance relocations, we ensure a stress-free moving experience. Contact us for a free quote today!" />
<meta name="keywords" content="INDICAB Packers and Movers, moving services India, packers and movers, relocation services, local moving, long-distance moving, home moving, office relocation, professional movers, secure packing" />

<meta name="author" content="INDICAB Packers and Movers"/>
<meta name="copyright" content="INDICAB Packers and Movers"/>
<meta name="reply-to" content="info@indicabpackersindia.com"/>
<meta name="expires" content="never"/>

<meta name="theme-color" content="#e31e25">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#e31e25">
<meta name="googlebot" content="index, follow"/>
<meta name="allow-search" content="yes" />
<meta name="revisit-after" content="weekly" />
<meta name="distribution" content="global"/>

<meta name="coverage" content="Worldwide" />
<meta name="allow-search" content="yes" />
<meta name="robots" content="index, follow"/>
{{-- For Facbook tags --}}
<meta property="og:title" content="INDICAB Packers and Movers - Reliable Moving Services Across India" />
<meta property="og:description" content="INDICAB Packers and Movers provide top-notch packing and moving services for homes and offices. Trust us for a smooth and secure relocation experience." />
<meta property="og:image" content="https://indicab.net/resource/web/assets/img/logo.jpg" />
<meta property="og:url" content="https://indicab.net/indicab-packers-movers" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="INDICAB Packers and Movers" />
{{-- For Twitter tags --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="INDICAB Packers and Movers - Reliable Moving Services Across India" />
<meta name="twitter:description" content="Experience hassle-free relocations with INDICAB Packers and Movers. We offer comprehensive packing and moving services for residential and commercial moves." />
<meta name="twitter:image" content="https://indicab.net/resource/web/assets/img/logo.jpg" />
<meta name="twitter:site" content="@YOUR_TWITTER_HANDLE" />
<meta name="twitter:creator" content="@YOUR_TWITTER_HANDLE" />
{{-- robots --}}
<link rel="canonical" href="https://www.indicab.net/indicab-packers-movers" />

@endpush
@section('content')
    {{-- Main Content Start --}}
    <section class="section home-banner home-four row-middle">
      <div class="banner-float-img">
         <img src="{{ asset('resource/web/assets/img/happy-young-man.png')}}" alt="Indicab Packers and Movers" title="indicab Packers and Movers">
      </div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-8 col-lg-6">
               <div class="banner-blk-four aos" data-aos="fade-up">
                  <div class="banner-content">
                     <div class="banner-note">
                        <h5 class="mb-0">Most Affortable Price #1 Domestic Packers</h5>
                     </div>
                     <h1><span class="fw-bolder">INDICAB </span><br>Packers and Movers</h1>
                     <p>Indicab Packers and Movers as your relocation partner to reduce all your stress and hassle of shifting to another city or moving locally</p>
                     <form class="form" name="store" id="store" method="post" action="">
                        <div class="form-inner">
                           <div class="input-group">
                              <span class="drop-detail">
                                 <select class="form-control select" name="country_code">
                                    <option value="+91">+91</option>
                                 </select>
                              </span>
                              <input type="email" class="form-control" placeholder="90XXXXXXXX">
                              <button class="btn btn-primary sub-btn" type="submit">Search</button>
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
               <img src="{{ asset('resource/web/assets/img/user/indicab.png')}}" class="img-fluid" alt="Indicab Packers and Movers" title="indicab Packers and Movers">
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
         <div class="register-profesion aos" data-aos="fade-right">
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
         </div>
      </div>
   </section>
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
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1000">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/house.png')}}" alt="Indicab Packers and movers Household shifting" title="Indicab Packers and movers Household shifting"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Household Shifting</h3>
                        <a href="javascript:void(0);" title="Indicab Household Shifting Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1500">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/officeicon.png')}}" alt="Indicab Packers and movers Office shifting" title="Indicab Packers and movers Office shifting"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Office &amp; Shifting</h3>
                        <a href="javascript:void(0);" title="Indicab Office Shifting Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2000">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/vehicle.png')}}" alt="Indicab Packers and movers cargo" title="Indicab Packers and movers cargo"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Cargo Moving</h3>
                        <a href="javascript:void(0);" title="Indicab Cargo Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2500">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/commercial.png')}}" alt="Indicab Packers and movers Commercial" title="Indicab Packers and movers Commercial"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Commercial &amp; Moving</h3>
                        <a href="javascript:void(0);" title="Indicab Commercial Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1000">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/packing.png')}}" alt="Indicab Packers and movers Packing" title="Indicab Packers and movers car Packing"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Household&amp; Packing</h3>
                        <a href="javascript:void(0);"  title="Indicab Household Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1500">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/loaded-vehicle.png')}}" alt="Indicab Packers and movers Loading" title="Indicab Packers and movers car Loading"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Loading &amp; Proccess</h3>
                        <a href="javascript:void(0);" title="Indicab Loading Packes and movers">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2000">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/userLoader.png')}}" alt="Indicab Packers and movers Unloading" title="Indicab Packers and movers car Unloading"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">UnLoading &amp; Proccess</h3>
                        <a href="javascript:void(0);">Indicab</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2500">
                  <div class="popular-catergories">
                     <div class="popular-catergories-img">
                        <span><img src="{{ asset('resource/web/assets/img/icon/carshiting.png')}}" alt="Indicab Packers and movers car shitfting" title="Indicab Packers and movers car shitfting"></span>
                     </div>
                     <div class="popular-catergories-content">
                        <h3 class="h6">Car &amp; Shifting</h3>
                        <a href="javascript:void(0);">Indicab</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="home-four-viewall">
            <a href="project.html" class="home-four-viewall-btn">View all Services</a>
         </div>
      </div>
   </section>
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
                     <img src="{{ asset('resource/web/assets/img/icon/great1.svg')}}" class="img-fluid" alt="Indicab Packers and movers" title="Indicab Packers and movers">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great2.svg')}}" class="img-fluid" alt="Indicab Packers and movers" title="Indicab Packers and movers">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great3.svg')}}" class="img-fluid" alt="Indicab Packers and movers" title="Indicab Packers and movers">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great4.svg')}}" class="img-fluid" alt="Indicab Packers and movers" title="Indicab Packers and movers">
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
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('resource/web/assets/img/city/tirupathi.jpg')}}" class="img-fluid" alt="Indicab Packers and movers Tirupathi" title="Indicab Packers and movers Tirupathi">
                     {{-- <span class="hour-dollr develop-dollr">$64 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">Tirupathi</a></h4>
                           <img class="ms-1" src="{{ asset('resource/web/assets/img/icon/verified-badge-fill.svg')}}" alt="Indicab Packers and movers Tirupathi" title="Indicab Packers and movers Tirupathi">
                        </div>
                        <h3 class="mb-0 h6 text-secondary">Indicab Packers and movers in Tirupathi</h3>
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
                        <a href="developer-details.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('resource/web/assets/img/city/bangalore.jpg')}}" class="img-fluid" alt="Indicab Packers and movers Bangalore" title="Indicab Packers and movers Bangalore">
                     {{-- <span class="hour-dollr develop-dollr">$54 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">Bangalore</a></h4>
                           <img class="ms-1" src="{{ asset('resource/web/assets/img/icon/verified-badge-fill.svg')}}" alt="Indicab Packers and movers Bangalore" title="Indicab Packers and movers Bangalore">
                        </div>
                        <h3 class="mb-0 h6 text-secondary"> Indicab Packers and movers in Bangalore</h3>
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
                        <a href="developer-details.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('resource/web/assets/img/city/hyderabad.jpg')}}" class="img-fluid" alt="Indicab Packers and movers Hyderabad" title="Indicab Packers and movers Hyderabad">
                     {{-- <span class="hour-dollr develop-dollr">$35 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">Hyderabad</a></h4>
                           <img class="ms-1" src="{{ asset('resource/web/assets/img/icon/verified-badge-fill.svg')}}" alt="Indicab Packers and movers Hyderabad" title="Indicab Packers and movers Hyderabad">
                        </div>
                        <h3 class="mb-0 h6 text-secondary">Indicab Packers and movers in Hyderabad</h3>
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
                        <a href="developer-details.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('resource/web/assets/img/city/kochi.jpg')}}" class="img-fluid" alt="Indicab Packers and movers Kochi" title="Indicab Packers and movers Kochi">
                     {{-- <span class="hour-dollr develop-dollr">$68 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">Kochi</a></h4>
                           <img class="ms-1" src="{{ asset('resource/web/assets/img/icon/verified-badge-fill.svg')}}" alt="Indicab Packers and movers Kochi" title="Indicab Packers and movers Kochi">
                        </div>
                        <h3 class="mb-0 h6 text-secondary">Indicab Packers and movers in Kochi</h3>
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
                        <a href="developer-details.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="project-item project-item-feature aos" data-aos="fade-up">
               <a href="developer-details.html">
                  <div class="project-img heart-blk">
                     <img src="{{ asset('resource/web/assets/img/city/kozhicode.jpg')}}" alt="Img" class="img-fluid">
                     {{-- <span class="hour-dollr develop-dollr">$64 <small>/ hr</small></span> --}}
                  </div>
               </a>
               <div class="developer-detail-box">
                  <div class="developer-detail-card">
                     <div>
                        <div class="d-flex align-items-center">
                           <h4 class="mb-0 mt-2"><a href="developer-details.html">Kozhikode</a></h4>
                           <img class="ms-1" src="{{ asset('resource/web/assets/img/icon/verified-badge-fill.svg')}}" alt="Indicab Packers and movers Kozhikode" title="Indicab Packers and movers Kozhikode">
                        </div>
                        <h3 class="mb-0 h6 text-secondary">Indicb Packes and Movers Kozhikode</h3>
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
                        <a href="developer-details.html"><i class="feather-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="home-four-viewall">
            <a href="developer-details.html" class="home-four-viewall-btn">View More Places <i class="feather-arrow-right ms-2"></i></a>
         </div>
      </div>
   </section>
   <section class="section join-marketplace">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="markrt-place-img aos" data-aos="fade-up">
                  <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/indicab_packing_image.jpg')}} " class="img-fluid" alt="about Indicab Packers and movers" title="about Indicab Packers and movers">
               </div>
            </div>
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
               <div class="market-place-group join-place-blk aos" data-aos="fade-up">
                  <h2><span class="fw-bolder"> INDICAB </span> Packers Movers Leading Packers and Movers </h2>
                  <h5 class="text-secondary"><span class="fw-bolder"> INDICAB </span> Packers And Movers Why us?</h5>
                  <ul class="market-list-out">
                     <li><i class="fa-solid fa-circle-check"></i> <h5 class="h6"> Delivery.</h5></li>
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
   <section class="section popular-projects">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header  section-locate aos" data-aos="fade-up">
                  <div>
                     <h2 class="header-title"><span class="fw-bolder"> INDICAB </span> Best Packing and Moving Price</h2>
                     <h5 class="h6 fw-bolder text-secondary fs-6">Affortable and Lowest Price</h5>
                  </div>
               </div>
            </div>
         </div>
         <div id="popular-slider" class="owl-carousel owl-theme popular-slider developers-slider aos" data-aos="fade-up">
            <div class="popular-group">
               <div class="blog-image">
                  <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/indicab-packers-movers/indicab_packing_image.jpg')}}" alt="Indicab Packers and movers 1BHK Shifting" title="Indicab Packers and movers 1BHK Shifting"></a>
               </div>
               <div class="popular-content-blk">
                  <div class="head-popular">
                     <h4><a href="project.html">1BHK Household Shifting</a></h4>
                     <p><i class="feather-home me-1"></i>Packers and Movers</p>
                  </div>
                  <div class="popular-list-box">
                     <ul class="nav">
                        <li>0-10 Km</li>                       </ul>
                     <h4>Rs. 4,000 - 8,200</h4>
                  </div>
                  <p class="popular-foot">Moving a 1 BHK within the city (0-10 km) costs between Rs. 4,000 and Rs. 8,200. For city-to-city moves up to 500 km, the cost ranges from Rs. 10,300 to Rs. 20,400. If the distance exceeds 500 km, expect to pay between Rs. 15,000 and Rs. 25,200.</p>
               </div>
            </div>
            <div class="popular-group">
               <div class="blog-image">
                  <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/indicab-packers-movers/house-to-truck-load.png')}}" alt="Indicab Packers and movers 2BHK Shifting" title="Indicab Packers and movers 2BHK Shifting"></a>
               </div>
               <div class="popular-content-blk">
                  <div class="head-popular">
                     <h4><a href="project.html">2BHK Household Shifting</a></h4>
                     <p><i class="feather-home me-1"></i>Packers and Movers</p>
                  </div>
                  <div class="popular-list-box">
                     <ul class="nav">
                        <li>0-10 Km</li>                       </ul>
                     <h4>Rs. 8,200 - 12,300</h4>
                  </div>
                  <p class="popular-foot">Moving a 2 BHK within the city (0-10 km) costs between Rs. 8,200 and Rs. 12,300. For city-to-city moves up to 500 km, the cost ranges from Rs. 15,000 to Rs. 25,200. If the distance exceeds 500 km, expect to pay between Rs. 20,400 and Rs. 30,100.</p>
               </div>
            </div>
            <div class="popular-group">
               <div class="blog-image">
                  <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/indicab-packers-movers/house-to-truck-load- (3).png')}}" alt="Indicab Packers and movers 3BHK Shifting" title="Indicab Packers and movers 3BHK Shifting"></a>
               </div>
               <div class="popular-content-blk">
                  <div class="head-popular">
                     <h4><a href="project.html">3BHK Household Shifting</a></h4>
                     <p><i class="feather-home me-1"></i>Packers and Movers</p>
                  </div>
                  <div class="popular-list-box">
                     <ul class="nav">
                        <li>0-10 Km</li>                       </ul>
                     <h4>Rs. 12,300 - 18,200</h4>
                  </div>
                  <p class="popular-foot">Moving a 3 BHK within the city (0-10 km) costs between Rs. 12,300 and Rs. 18,200. For city-to-city moves up to 500 km, the cost ranges from Rs. 20,400 to Rs. 30,100. If the distance exceeds 500 km, expect to pay between Rs. 25,200 and Rs. 40,200.</p>
               </div>
            </div>
            <div class="popular-group">
               <div class="blog-image">
                  <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/indicab-packers-movers/house-to-truck-load- (2).png')}}" alt="Indicab Packers and movers 4Bhk Shifting" title="Indicab Packers and movers 4Bhk Shifting"></a>
               </div>
               <div class="popular-content-blk">
                  <div class="head-popular">
                     <h4><a href="project.html">4 BHK or Villa</a></h4>
                     <p><i class="feather-home me-1"></i>Packers and Movers</p>
                  </div>
                  <div class="popular-list-box">
                     <ul class="nav">
                        <li>0-10 Km</li>                       </ul>
                     <h4>Rs. 15,000 - 25,200</h4>
                  </div>
                  <p class="popular-foot">Moving a 4 BHK or villa within the city (0-10 km) costs between Rs. 15,000 and Rs. 25,200. For city-to-city moves up to 500 km, the cost ranges from Rs. 25,200 to Rs. 40,200. If the distance exceeds 500 km, expect to pay between Rs. 35,000 and Rs. 50,100.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
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
                     <img src="{{ asset('resource/web/assets/img/icon/great5.svg')}}" class="img-fluid" alt="Indicab Packers and movers Commercial Shifting" title="Indicab Packers and movers Commercial">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great6.svg')}}" class="img-fluid" alt="Indicab Packers and movers Commercial Shifting" title="Indicab Packers and movers Commercial">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great7.svg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Karnataka">
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
                     <img src="{{ asset('resource/web/assets/img/icon/great8.svg')}}" class="img-fluid" alt="Indicab Packers and movers Office Shifting" title="Indicab Packers and movers Karnataka">
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
   <section class="section review">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header d-block  section-locate aos" data-aos="fade-up">
                  <div class="text-center">
                     <h2 class="header-title">Our Service Location</h2>
                     <p>Find your favorite packers and movers and enjoy the benefits of a hassle-free move.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row row-gap">
            <div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
               <div class="blog-article-group job-loc">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/city/karnataka.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Karnataka"></a>
                     <div class="article-blog-content">
                        <span> Karntaka, India</span>
                        <h4><a href="blog-details.html">Indicab Packers and Movers Karnataka</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
               <div class="blog-article-group job-loc">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/city/kerala.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Kerala"></a>
                     <div class="article-blog-content">
                        <span> Kerala, India</span>
                        <h4><a href="blog-details.html">Indicab Packers and Movers Kerala</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
               <div class="blog-article-group job-loc">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/city/tamilnadu.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Tamil Nadu"></a>
                     <div class="article-blog-content">
                        <span>Tamil Nadu, India</span>
                        <h4><a href="blog-details.html">Indicab Packers and Movers Tamil Nadu</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
               <div class="blog-article-group job-loc">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/city/hyderabad.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Hyderabad"></a>
                     <div class="article-blog-content">
                        <span>Hyderabad, India</span>
                        <h4><a href="blog-details.html">Indicab Packers and Movers Hyderabad</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
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
            <div class="review-blog">
               <div class="review-top d-flex align-items-center">
                  <div class="review-img">
                     <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-01.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Users"></a>
                  </div>
                  <div class="review-info">
                     <h3><a href="review.html">Harish N B</a></h3>
                     <p>Indicab Users</p>
                  </div>
               </div>
               <div class="review-content">
                  <p>"INDICAB Packers and Movers made my relocation from Bangalore to Mumbai a breeze. Their team was professional, efficient, and took great care of all my belongings. I was particularly impressed with their packing techniques and the timely delivery. Highly recommend their services!"</p>
                  <div class="rating">
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="review-blog">
               <div class="review-top d-flex align-items-center">
                  <div class="review-img">
                     <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-02.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Users"></a>
                  </div>
                  <div class="review-info">
                     <h3><a href="review.html">Yashwantha Kumar R</a></h3>
                     <h5>Indicab Users</h5>
                  </div>
               </div>
               <div class="review-content">
                  <p>"We recently moved our 3 BHK home within Delhi, and INDICAB Packers and Movers exceeded our expectations. The crew was punctual, courteous, and handled everything with utmost care. The entire process was smooth and hassle-free. Thank you, INDICAB, for making our move so easy!"</p>
                  <div class="rating">
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="review-blog">
               <div class="review-top d-flex align-items-center">
                  <div class="review-img">
                     <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-03.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Users"></a>
                  </div>
                  <div class="review-info">
                     <h3><a href="review.html">Merthun E</a></h3>
                     <h5>Indicab Users</h5>
                  </div>
               </div>
               <div class="review-content">
                  <p>"I had to move my office from Chennai to Hyderabad, and INDICAB Packers and Movers did a fantastic job. They managed the entire process professionally, ensuring all office equipment and furniture were safely transported. Their team’s dedication and attention to detail are commendable."</p>
                  <div class="rating">
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="review-blog">
               <div class="review-top d-flex align-items-center">
                  <div class="review-img">
                     <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-02.jpg')}}" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers Users"></a>
                  </div>
                  <div class="review-info">
                     <h3><a href="review.html">Kamal Kant</a></h3>
                     <h5>Indicab User</h5>
                  </div>
               </div>
               <div class="review-content">
                  <p>"Moving can be stressful, but INDICAB Packers and Movers made it a pleasant experience. From the initial consultation to the final unpacking, their service was top-notch. The team was friendly, efficient, and took special care of my fragile items. I couldn’t have asked for a better moving service."</p>
                  <div class="rating">
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star filled"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section platform-location">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="row">
                  <div class="col-md-6 flex-fill">
                     <div class="markrt-place-img aos" data-aos="fade-up">
                        <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/left-side.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers">
                     </div>
                  </div>
                  <div class="col-md-6 flex-fill">
                     <div class="d-flex flex-column row-gap">
                        <div class="markrt-place-img aos" data-aos="fade-up">
                           <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/right_one.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers">
                        </div>
                        <div class="markrt-place-img aos" data-aos="fade-up">
                           <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/right_two.jpg')}}" class="img-fluid" alt="Indicab Packers and movers household Shifting" title="Indicab Packers and movers">
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
   <section class="faq-section-three bg-white" id="faq">
      <div class="container">
         <div class="section-header section-header-three text-center aos  " data-aos="fade-up">
            <span class="badge title-badge">FAQ’S</span>
            <h2 class="header-title">Indicab Frequently Question Answer </h2>
         </div>
         <div class="row" id="accordionExample">
            <div class="col-lg-6">
               <div class="faq-card aos  " data-aos="fade-up">
                  <h4 class="faq-title">
                     <a class="collapseds active" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">1.  What services do INDICAB Packers and Movers offer?</a>
                  </h4>
                  <div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
                     <p>INDICAB Packers and Movers provide comprehensive moving services including packing, loading, transportation, unloading, and unpacking for residential moves ranging from 1 BHK apartments to large villas. They also offer city-to-city relocation services across India.</p>
                  </div>
               </div>
               <div class="faq-card aos  " data-aos="fade-up">
                  <h4 class="faq-title">
                     <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. How do I get a quote for my move?</a>
                  </h4>
                  <div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
                     <p>You can get a quote by contacting INDICAB Packers and Movers through their website or customer service. Provide details about your move such as the size of your home, the distance of the move, and any additional services you may need.</p>
                  </div>
               </div>
               <div class="faq-card aos  " data-aos="fade-up">
                  <h4 class="faq-title">
                     <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. How does INDICAB ensure the safety of my belongings?</a>
                  </h4>
                  <div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
                     <p>INDICAB Packers and Movers use high-quality packing materials and professional techniques to ensure the safe handling of your belongings. Their experienced team takes care of secure packing, loading, and transportation to prevent any damage during the move.</p>
                  </div>
               </div>
               <div class="faq-card aos  " data-aos="fade-up">
                  <h4 class="faq-title">
                     <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. What are the costs associated with moving a 2 BHK within the city?</a>
                  </h4>
                  <div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
                     <p>The cost of moving a 2 BHK within the city (0-10 km) ranges from Rs. 8,200 to Rs. 12,300. Prices vary based on the specific requirements of the move and any additional services requested.</p>
                  </div>
               </div>
               <div class="faq-card aos  " data-aos="fade-up">
                  <h4 class="faq-title">
                     <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5. How far in advance should I schedule my move with INDICAB?</a>
                  </h4>
                  <div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
                     <p>It is recommended to schedule your move at least 2-3 weeks in advance to ensure availability and allow adequate time for planning and preparation. This helps INDICAB Packers and Movers to provide a smooth and efficient moving experience.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="faq-imgs">
                  <img src="{{ asset('resource/web/assets/img/indicab-packers-movers/inner-banner.jpg')}}" alt="Indicab Packers and movers" title="Indicab Packers and movers">
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- <section class="section blog-article">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mx-auto">
               <div class="section-header section-header-four section-locate aos" data-aos="fade-up">
                  <div class="text-center">
                     <h2 class="header-title">Our Blog </h2>
                     <p>Read Our Article To Get Tricks </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row aos row-gap" data-aos="fade-up">
            <div class="col-lg-4 col-md-6">
               <div class="blog-article-group">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-15.jpg')}}" alt="Post Image"></a>
                     <div class="article-Production">
                        <span>Production</span>
                     </div>
                     <div class="article-blog-content">
                        <span> <i class="feather-calendar"></i> 13, Dec2022</span>
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="blog-article-group">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog1.jpg')}}" alt="Post Image"></a>
                     <div class="article-Production">
                        <span>Jobs</span>
                     </div>
                     <div class="article-blog-content">
                        <span><i class="feather-calendar"></i>12, Dec2022</span>
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="blog-article-group">
                  <div class="blog-image">
                     <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog2.jpg')}}" alt="Post Image"></a>
                     <div class="article-Production">
                        <span>Production</span>
                     </div>
                     <div class="article-blog-content">
                        <span><i class="feather-calendar"></i>10, Dec2022</span>
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}

  {{-- Main Content End --}}
    
@endsection
