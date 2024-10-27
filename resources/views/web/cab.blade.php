@extends('layouts.web.app')
@section('content')

{{-- main content start --}}

<section class="section home-banner home-five row-middle">
    <div class="container">
       <div class="row align-items-center justify-content-center">
          <div class="col-lg-12 ">
             <div class="banner-blk-five justify-content-center">
                <div class="banner-content text-center aos" data-aos="fade-up">
                   <h1>Get the Perfect Developers & Projects</h1>
                   <p>With the world's #1 Developers Marketplace</p>
                   <form class="form" name="store" id="store" method="post" action="https://kofejob.dreamstechnologies.com/html/template/project.html">
                      <div class="form-inner">
                         <div class="input-group">
                            <span class="drop-detail">
                               <select class="form-control select" name="storeID">
                                  <option value="project.html">Projects</option>
                                  <option value="developer.html">Freelancers</option>
                               </select>
                            </span>
                            <input type="email" class="form-control" placeholder="Keywords">
                            <button class="btn btn-primary sub-btn" type="submit">Search</button>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <div class="trusted-by-section">
    <span>Trusted By :</span>
    <ul>
       <li>
          <img src="{{ asset('resource/web/assets/img/icon/trusted1.svg')}}" alt="Img">
       </li>
       <li>
          <img src="{{ asset('resource/web/assets/img/icon/trusted2.svg')}}" alt="Img">
       </li>
       <li>
          <img src="{{ asset('resource/web/assets/img/icon/trusted3.svg')}}" alt="Img">
       </li>
       <li>
          <img src="{{ asset('resource/web/assets/img/icon/trusted4.svg')}}" alt="Img">
       </li>
       <li>
          <img src="{{ asset('resource/web/assets/img/icon/trusted5.svg')}}" alt="Img">
       </li>
    </ul>
 </div>
 <section class="project-by-category">
    <div class="container">
       <div class="row ">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Browse Projects By Category</h2>
                <p>Get work done in over 60 different categories</p>
             </div>
          </div>
       </div>
       <div class="category-slider-section">
          <div id="category-slider" class="owl-carousel owl-theme blog-trick-five blog-slider aos" data-aos="fade-up">
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-1.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Social Media</h5>
                   <p class="mb-0">Reach our Customers</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-2.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>SEO</h5>
                   <p class="mb-0">Unlock Growth Online</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-3.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Illustration</h5>
                   <p class="mb-0">Color Your Dream</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-4.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Translation</h5>
                   <p class="mb-0">Go Global</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-5.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Data Entry</h5>
                   <p class="mb-0">Learn Your Business</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-1.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Social Media</h5>
                   <p class="mb-0">Reach our Customers</p>
                </div>
             </div>
             <div class="project-by-category-widget">
                <a href="project.html" class="category-widget-img">
                <img src="{{ asset('resource/web/assets/img/slider/category-img-1.jpg')}}" class="img-fluid" alt="slider-image">
                </a>
                <div class="category-widget-content">
                   <h5>Social Media</h5>
                   <p class="mb-0">Reach our Customers</p>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="home-five-section-btn">
                <a href="project.html" class="btn btn-primary">View all Categories</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section projects">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Need something done?</h2>
                <p>Kofejob is here to help you to get job completed</p>
             </div>
          </div>
       </div>
       <div class="row row-gap">
          <div class="col-xl-3 col-md-6 aos d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
             <div class="feature-items">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/great1.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3>Browse Portfolios</h3>
                   <p>Find professionals you can trust by browsing their samples of previous work .</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6 aos d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
             <div class="feature-items ">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/great2.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3>Fast Bids</h3>
                   <p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6 aos d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2000">
             <div class="feature-items ">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/great3.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3>Quality Work</h3>
                   <p>Kofejob.com has by far the largest pool of quality freelancers globally- over 50 million to choose from.</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6 aos d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2500">
             <div class="feature-items ">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/great4.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3>Track Progress</h3>
                   <p>Keep up-to-date and on-the-go with our time tracker Always know what freelancers are up to.</p>
                </div>
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
                <h2 class="header-title">Popular Projects near you</h2>
                <p>Bid and stary the new Jobs</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
             <div class="project-item project-popular-item aos" data-aos="fade-up">
                <div class="project-img">
                   <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-35.jpg')}}" alt="Img" class="img-fluid"></a>
                </div>
                <div class="feature-content">
                   <h4><a href="project.html">3D Renders and Amazon Product</a></h4>
                   <ul class="feature-project-list nav">
                      <li><i class="feather-user me-1"></i>UI/UX Designer</li>
                      <li>$200</li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
             <div class="project-item project-popular-item aos" data-aos="fade-up">
                <div class="project-img">
                   <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-36.jpg')}}" alt="Img" class="img-fluid"></a>
                </div>
                <div class="feature-content">
                   <h4><a href="project.html">Website Design for a Consumer Shop</a></h4>
                   <ul class="feature-project-list nav">
                      <li><i class="feather-user me-1"></i>Web Development</li>
                      <li>$350</li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
             <div class="project-item project-popular-item aos" data-aos="fade-up">
                <div class="project-img">
                   <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-37.png')}}" alt="Img" class="img-fluid"></a>
                </div>
                <div class="feature-content">
                   <h4><a href="project.html">3D Renders and Amazon Product </a></h4>
                   <ul class="feature-project-list nav">
                      <li><i class="feather-user me-1"></i>Php Development</li>
                      <li>$99</li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-md-12">
             <div class="home-five-section-btn">
                <a href="project.html" class="btn btn-primary">View More Projects</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section review">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="work-set-image">
                <img src="{{ asset('resource/web/assets/img/work4.png')}}" alt="Img" class="img-fluid ">
             </div>
          </div>
          <div class="col-lg-6">
             <div class="aos " data-aos="fade-up">
                <div class="demand-professional">
                   <h2>More than 50 million professionals on demand</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="demand-post-job">
                   <div class="demand-post-img">
                      <img src="{{ asset('resource/web/assets/img/icon/recent-icon-04.svg')}}" alt="Img" class="img-fluid">
                   </div>
                   <div class="demand-content">
                      <h6>Post a job</h6>
                      <p>Publish the job posting on your selected platforms. Follow the specific submission process for each platform.</p>
                   </div>
                </div>
                <div class="demand-post-job">
                   <div class="demand-post-img">
                      <img src="{{ asset('resource/web/assets/img/icon/recent-icon-05.svg')}}" alt="Img" class="img-fluid">
                   </div>
                   <div class="demand-content">
                      <h6>Hire Freelancers</h6>
                      <p>Depending on the platform, you can either wait for freelancers to apply or invite specific freelancers to submit proposals.</p>
                   </div>
                </div>
                <div class="demand-post-job">
                   <div class="demand-post-img">
                      <img src="{{ asset('resource/web/assets/img/icon/recent-icon-06.svg')}}" alt="Img" class="img-fluid">
                   </div>
                   <div class="demand-content">
                      <h6>Get Work Done</h6>
                      <p>Utilize productivity tools and apps to help you stay organized, manage tasks, and set reminders.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section market-place-join">
    <div class="container">
       <div class="market-place-bg">
          <div class="row">
             <div class="col-md-6 d-flex align-items-center">
                <div class="join-market-world aos" data-aos="fade-up">
                   <h2>Join World’s Best Marketplace for developers</h2>
                   <p>Why hire people when you can simply integrate our talented cloud workforce instead?</p>
                   <div class="market-place-btn bidding-btn">
                      <a href="project.html" class="btn btn-primary market-project me-2">Post a Project</a>
                      <a href="project.html" class="btn btn-primary project-post">Start Bidding</a>
                   </div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="join-platform-img aos" data-aos="fade-up">
                   <img src="{{ asset('resource/web/assets/img/platform-img1.png')}}" alt="Img" class="img-fluid">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="most-hired-section">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Most Hired Developers</h2>
                <p>Work with talented people at the most affordable price</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             <div class="hired-developers aos" data-aos="fade-up">
                <div class="hired-developers-img">
                   <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/developer/developer-13.jpg')}}" class="img-fluid" alt="Img"></a>
                </div>
                <div class="hired-developers-img-content d-flex justify-content-between align-items-start">
                   <div>
                      <a data-toggle="modal" href="#rating" class="favourite color-active"><i class="feather-heart"></i></a>
                      <h4><a href="developer-details.html">Steven Picard</a></h4>
                      <span>Angular Developer</span>
                      <h6><img src="{{ asset('resource/web/assets/img/icon/dollar-developper.svg')}}" class="me-1" alt="Img">$32 /hr</h6>
                   </div>
                   <div class="rating">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <span class="average-rating">5.0</span>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             <div class="hired-developers aos" data-aos="fade-up">
                <div class="hired-developers-img">
                   <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/developer/developer-14.jpg')}}" class="img-fluid" alt="Img"></a>
                </div>
                <div class="hired-developers-img-content d-flex justify-content-between align-items-start">
                   <div>
                      <a data-toggle="modal" href="#rating" class="favourite color-active"><i class="feather-heart"></i></a>
                      <h4><a href="developer-details.html">Aroon Merkel</a></h4>
                      <span>Java Developer</span>
                      <h6><img src="{{ asset('resource/web/assets/img/icon/dollar-developper.svg')}}" class="me-1" alt="Img">$72 /hr</h6>
                   </div>
                   <div class="rating">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <span class="average-rating">5.0</span>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             <div class="hired-developers aos" data-aos="fade-up">
                <div class="hired-developers-img">
                   <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/developer/developer-15.jpg')}}" class="img-fluid" alt="Img"></a>
                </div>
                <div class="hired-developers-img-content d-flex justify-content-between align-items-start">
                   <div>
                      <a data-toggle="modal" href="#rating" class="favourite color-active"><i class="feather-heart"></i></a>
                      <h4><a href="developer-details.html">Durso Raeen</a></h4>
                      <span>React Developer</span>
                      <h6><img src="{{ asset('resource/web/assets/img/icon/dollar-developper.svg')}}" class="me-1" alt="Img">$452 /hr</h6>
                   </div>
                   <div class="rating">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <span class="average-rating">5.0</span>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             <div class="hired-developers aos" data-aos="fade-up">
                <div class="hired-developers-img">
                   <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/developer/developer-16.jpg')}}" class="img-fluid" alt="Img"></a>
                </div>
                <div class="hired-developers-img-content d-flex justify-content-between align-items-start">
                   <div>
                      <a data-toggle="modal" href="#rating" class="favourite color-active"><i class="feather-heart"></i></a>
                      <h4><a href="developer-details.html">Andrew Jene</a></h4>
                      <span>Html Developer</span>
                      <h6><img src="{{ asset('resource/web/assets/img/icon/dollar-developper.svg')}}" class="me-1" alt="Img">$63 /hr</h6>
                   </div>
                   <div class="rating">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <span class="average-rating">5.0</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="faq-section-three" id="faq">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Frequently Question Answer</h2>
                <p>View all the questions, answered for users</p>
             </div>
          </div>
       </div>
       <div class="row" id="accordionExample">
          <div class="col-lg-12">
             <div class="faq-card aos  " data-aos="fade-up">
                <h4 class="faq-title">
                   <a class="collapseds active" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">1. What are the costs to buy a house?</a>
                </h4>
                <div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
                </div>
             </div>
             <div class="faq-card aos  " data-aos="fade-up">
                <h4 class="faq-title">
                   <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. What are the costs to buy a house?</a>
                </h4>
                <div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
                </div>
             </div>
             <div class="faq-card aos  " data-aos="fade-up">
                <h4 class="faq-title">
                   <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. Do you have loan consultants?</a>
                </h4>
                <div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
                </div>
             </div>
             <div class="faq-card aos  " data-aos="fade-up">
                <h4 class="faq-title">
                   <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. What are the costs to buy a house?</a>
                </h4>
                <div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
                </div>
             </div>
             <div class="faq-card aos  " data-aos="fade-up">
                <h4 class="faq-title">
                   <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5. What are the costs to buy a house?</a>
                </h4>
                <div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section feature-count feature-count-three">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
             <div class="section-header aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Achievement We Have Earned</h2>
                <p>At Freelancer, we believe that talent is borderless and opportunity should be too.</p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <div class="count-sec">
    <div class="container">
       <div class="row">
          <div class="col-xl-3 col-md-6">
             <div class="feature-item freelance-count aos aos-init aos-animate" data-aos="fade-up">
                <div class="feature-icon ">
                   <img src="{{ asset('resource/web/assets/img/icon/count-icon-01.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3 class="counter-up">9,207</h3>
                   <p>Freelance developers</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6">
             <div class="feature-item aos aos-init aos-animate" data-aos="fade-up">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/count-icon-02.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3><span class="counter-up">6000</span></h3>
                   <p>Projects Added</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6">
             <div class="feature-item comp-project aos aos-init aos-animate" data-aos="fade-up">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/count-icon-03.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3 class="counter-up">919,207</h3>
                   <p>Completed projects</p>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-md-6">
             <div class="feature-item comp-project aos aos-init aos-animate" data-aos="fade-up">
                <div class="feature-icon">
                   <img src="{{ asset('resource/web/assets/img/icon/count-icon-04.svg')}}" class="img-fluid" alt="Img">
                </div>
                <div class="feature-content course-count">
                   <h3 class="counter-up">998</h3>
                   <p>Companies Registered</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <section class="section review-five">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-12 mx-auto">
             <div class="section-header text-center aos" data-aos="fade-up">
                <h2 class="header-title">Top Review</h2>
                <p>People love to come again for Kofejob </p>
             </div>
          </div>
       </div>
       <div class="offset-xl-1 col-xl-10">
          <div class="slid-review-group">
             <div class="slider say-about slider-for aos " data-aos="fade-up">
                <div>
                   <div class="testimonial-all d-flex justify-content-center">
                      <div class="row">
                         <div class="col-md-3">
                            <div class="img-reviews">
                               <div class="review-quote">
                                  <img src="{{ asset('resource/web/assets/img/quote-02.svg')}}" alt="Img">
                               </div>
                               <img src="{{ asset('resource/web/assets/img/user/avatar-4.jpg')}}" alt="Img">
                            </div>
                         </div>
                         <div class="col-md-9">
                            <div class="testimonial-two-head ">
                               <h3>George Wells</h3>
                               <span>Product Designer</span>
                               <p>Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="testimonial-all d-flex justify-content-center">
                      <div class="row">
                         <div class="col-md-3">
                            <div class="img-reviews">
                               <div class="review-quote">
                                  <img src="{{ asset('resource/web/assets/img/quote-02.svg')}}" alt="Img">
                               </div>
                               <img src="{{ asset('resource/web/assets/img/user/avatar-2.jpg')}}" alt="Img">
                            </div>
                         </div>
                         <div class="col-md-9">
                            <div class="testimonial-two-head ">
                               <h3>Timothy Smith</h3>
                               <span>Product Designer</span>
                               <p>Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae.Lorem ipsum dolor sit amet consectetur. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="testimonial-all d-flex justify-content-center">
                      <div class="row">
                         <div class="col-md-3">
                            <div class="img-reviews">
                               <div class="review-quote">
                                  <img src="{{ asset('resource/web/assets/img/quote-02.svg')}}" alt="Img">
                               </div>
                               <img src="{{ asset('resource/web/assets/img/user/avatar-3.jpg')}}" alt="Img">
                            </div>
                         </div>
                         <div class="col-md-9">
                            <div class="testimonial-two-head ">
                               <h3>Janet Paden</h3>
                               <span>Product Designer</span>
                               <p>Faucibus varius condimentum adipiscingLorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="testimonial-all d-flex justify-content-center">
                      <div class="row">
                         <div class="col-md-3">
                            <div class="img-reviews">
                               <div class="review-quote">
                                  <img src="{{ asset('resource/web/assets/img/quote-01.svg')}}" alt="Img">
                               </div>
                               <img src="{{ asset('resource/web/assets/img/user/avatar-4.jpg')}}" alt="Img">
                            </div>
                         </div>
                         <div class="col-md-9">
                            <div class="testimonial-two-head ">
                               <h3>James Douglas</h3>
                               <span>Product Designer</span>
                               <p>Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae.Lorem ipsum dolor sit amet consectetur. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                   <div class="testimonial-all d-flex justify-content-center">
                      <div class="row">
                         <div class="col-md-3">
                            <div class="img-reviews">
                               <div class="review-quote">
                                  <img src="{{ asset('resource/web/assets/img/quote-01.svg')}}" alt="Img">
                               </div>
                               <img src="{{ asset('resource/web/assets/img/user/avatar-5.jpg')}}" alt="Img">
                            </div>
                         </div>
                         <div class="col-md-9">
                            <div class="testimonial-two-head ">
                               <h3>Timothy Smith</h3>
                               <span>Product Designer</span>
                               <p>Faucibus varius condimentum adipiscingLorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. Faucibus varius condimentum adipiscing Lorem ipsum dolor sit amet consectetur. Nam nulla velit ullamcorper tellus arcu ligula id nulla vitae. Sed laoreet turpis elementum egestas vestibulum lacinia a. </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class=" slider client-img slider-nav aos " data-aos="fade-up">
                <div class="testimonial-thumb">
                   <img src="{{ asset('resource/web/assets/img/user/avatar-4.jpg')}}" alt="Img">
                </div>
                <div class="testimonial-thumb">
                   <img src="{{ asset('resource/web/assets/img/user/avatar-2.jpg')}}" alt="Img">
                </div>
                <div class="testimonial-thumb">
                   <img src="{{ asset('resource/web/assets/img/user/avatar-3.jpg')}}" alt="Img">
                </div>
                <div class="testimonial-thumb">
                   <img src="{{ asset('resource/web/assets/img/user/avatar-4.jpg')}}" alt="Img">
                </div>
                <div class="testimonial-thumb">
                   <img src="{{ asset('resource/web/assets/img/user/avatar-5.jpg')}}" alt="Img">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section blog-tricks">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="section-header text-center aos aos-init aos-animate" data-aos="fade-up">
                <h2 class="header-title">Featured Blogs</h2>
                <p>Read Our Article To Get Tricks </p>
             </div>
          </div>
       </div>
       <div class="row aos aos-init aos-animate" data-aos="fade-up">
          <div class="col-lg-4 col-md-6">
             <div class="grid-blog blog-two aos aos-init aos-animate" data-aos="fade-up">
                <div class="blog-image">
                   <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-12.jpg')}}" alt="Post Image"></a>
                </div>
                <div class="blog-content">
                   <div class="feature-time-blk">
                      <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                      <span><i class="feather-calendar me-1"></i> 06 Oct, 2023</span>
                   </div>
                   <h3 class="blog-title mt-0"><a href="blog-details.html">Top 10 Resume Tips for Landing Your Dream Job</a></h3>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="grid-blog blog-two aos aos-init aos-animate" data-aos="fade-up">
                <div class="blog-image">
                   <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-13.jpg')}}" alt="Post Image"></a>
                </div>
                <div class="blog-content">
                   <div class="feature-time-blk">
                      <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                      <span><i class="feather-calendar me-1"></i> 06 Oct, 2023</span>
                   </div>
                   <h3 class="blog-title mt-0"><a href="blog-details.html">Navigating the Gig Economy: Freelancing and Side Hustles</a></h3>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="grid-blog blog-two aos aos-init aos-animate" data-aos="fade-up">
                <div class="blog-image">
                   <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-14.jpg')}}" alt="Post Image"></a>
                </div>
                <div class="blog-content">
                   <div class="feature-time-blk">
                      <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                      <span><i class="feather-calendar me-1"></i> 06 Oct, 2023</span>
                   </div>
                   <h3 class="blog-title mt-0"><a href="blog-details.html">Interview Success: How to Ace Common Interview Questions</a></h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section job-registers">
    <div class="container position-relative job-register">
       <div class="float-img">
          <img src="{{ asset('resource/web/assets/img/opportunity.png')}}" alt="img">
       </div>
       <div class="row">
          <div class="col-12">
             <div class="register-job-blk">
                <div class="job-content-blk aos aos-init aos-animate" data-aos="fade-up">
                   <h2>Find Your Next Great Job Opportunity!</h2>
                   <p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet.</p>
                   <a href="register.html" class="btn all-btn">Join Now</a>
                </div>
             </div>
          </div>
       </div>
    </div>

{{-- main content end --}}

@endsection
