@extends('layouts.web.app')
@section('content')

    {{-- Main Content Start --}}

    <section class="section home-banner row-middle home-two">
        <div class="container">
           <div class="row align-items-center">
              <div class=" col-lg-6 col-md-12">
                 <div class="banner-content aos" data-aos="fade-up">
                    <div class="market-place">
                       <h3>With the world's #1 Developers Marketplace</h3>
                    </div>
                    <h1>Get the perfect <br>Developers & Projects</h1>
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
                    <div class="home-count">
                       <ul class="nav">
                          <li class="course-count"><span class="counter-up">9,207</span><span class="list-count">Freelance developers</span></li>
                          <li class="course-count"><span class="counter-up">6000 </span><span>+</span><span class="list-count">Projects Added</span></li>
                          <li class="course-count"><span class="counter-up">919,207</span><span class="list-count">Completed projects</span></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-lg-5">
                 <div class="banner-two-img aos" data-aos="fade-up">
                    <img src="{{ asset('resource/web/assets/img/home-two-banner-bg-01.png')}}" class="img-fluid trusted-user-img aos" data-aos="zoom-in" alt="banner" data-aos-duration="3000">
                    <img src="{{ asset('resource/web/assets/img/home-two-banner-bg-02.png')}}" class="img-fluid best-marketing-img aos" data-aos="zoom-in" alt="banner" data-aos-duration="3000">
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section update-project">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12 col-12 mx-auto">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Recently Updated <span>Projects for you</span></h2>
                    <p>Get work done in over 60 different categories</p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box ">
                       <div class="update-content">
                          <h6>Website design</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Python</h6>
                          <p>60 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Photoshop</h6>
                          <p>221 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Android Apps</h6>
                          <p>40 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Software Architecture</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Ecommerce</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Banner Design</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Link Building</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>JavaScript</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Marketing</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>MYSQL</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="aos" data-aos="fade-up">
                    <a href="project.html" class="update-project-blk move-box">
                       <div class="update-content">
                          <h6>Illustration</h6>
                          <p>400 Projects Available</p>
                       </div>
                       <div class="update-icon-end">
                          <i class="feather-arrow-right"></i>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-xl-12">
                 <div class="more-project text-center aos" data-aos="fade-up">
                    <a href="project.html" class="btn btn-primary">View More Projects</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section platform">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="plat-form-img aos" data-aos="fade-up">
                    <img src="{{ asset('resource/web/assets/img/plat-form.png')}}" alt="Img" class="img-fluid">
                 </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                 <div class="platform-group aos" data-aos="fade-up">
                    <h1>Discover Project Around your Location <span> In Our Platform</span></h1>
                    <h5>Get Inspired by Development Projects</h5>
                    <p>We Provide Stable Service With Experts Freelancers around the globe, are looking for work and provide the best they have .Experience state-of-the-art marketplace platform with the Kofejob. We combine the experience of our global community around the globe for a best marketplace theme.</p>
                    <div class="market-place-btn platform-btn">
                       <a href="project.html" class="btn btn-primary market-project me-2">View Projects</a>
                       <a href="project.html" class="btn btn-primary project-post">Post a Project</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section feature-project home-two-projects">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12 col-12 mx-auto">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Featured Projects <span> For You</span></h2>
                    <p>We have over 2000+ Projects waiting for you</p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-19.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                          <span><i class="far fa-clock me-1"></i> 1 min ago</span>
                       </div>
                       <h4><a href="project.html">3D Renders and Amazon Product</a></h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>UI/UX Designer</li>
                          <li><i class="feather-map-pin me-1"></i>Germany</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-01.svg')}}" class="me-1" alt="icon">
                             <span>AMAZE TECH</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-20.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary sky-active">Part Time</a>
                          <span><i class="far fa-clock me-1"></i> 10 min ago</span>
                       </div>
                       <h4><a href="project.html">Web Development for a Shopify Store</a></h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>Web Development</li>
                          <li><i class="feather-map-pin me-1"></i>Kentucky, USA</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-02.svg')}}" class="me-1" alt="icon">
                             <span>PARK INC</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-21.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                          <span><i class="far fa-clock me-1"></i> 5 min ago</span>
                       </div>
                       <h4><a href="project.html">Website Design for a Consumer Shop</a></h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>Angular Developer</li>
                          <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-01.svg')}}" class="me-1" alt="icon">
                             <span>AMAZE TECH</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-22.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                          <span><i class="far fa-clock me-1"></i> 6 min ago</span>
                       </div>
                       <h4><a href="project.html">UI/UX for Cryptocurrency Exchange</a></h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>Flutter Development</li>
                          <li><i class="feather-map-pin me-1"></i>Germany</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-03.svg')}}" class="me-1" alt="icon">
                             <span>AMAZE TECH</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-23.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary sky-active">Part Time</a>
                          <span><i class="far fa-clock me-1"></i> 2 min ago</span>
                       </div>
                       <h4><a href="project.html">Landing Page Redesign / Sales Page</a> </h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>Web Development</li>
                          <li><i class="feather-map-pin me-1"></i>Kentucky, USA</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-02.svg')}}" class="me-1" alt="icon">
                             <span>ABC SOFTWARE</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex">
                 <div class="project-item feature-project-item aos" data-aos="fade-up">
                    <div class="project-img">
                       <a href="project.html"><img src="{{ asset('resource/web/assets/img/project/project-24.jpg')}}" alt="Img" class="img-fluid"></a>
                    </div>
                    <div class="feature-content">
                       <div class="feature-time-blk">
                          <a href="javascript:void(0);" class="btn btn-primary green-active">Full Time</a>
                          <span><i class="far fa-clock me-1"></i> 1 min ago</span>
                       </div>
                       <h4><a href="project.html">Build a Coaching Website Product</a> </h4>
                       <ul class="feature-project-list nav">
                          <li><i class="feather-user me-1"></i>Angular Developer</li>
                          <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                       </ul>
                       <div class="feature-foot">
                          <div class="logo-company">
                             <a href="project.html">
                             <img src="{{ asset('resource/web/assets/img/icon/logo-icon-04.svg')}}" class="me-1" alt="icon">
                             <span>AMAZE TECH</span>
                             </a>
                          </div>
                          <a href="project-details.html" class="bid-now">Bid Now <i class="feather-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-xl-12">
                 <div class="more-project text-center aos" data-aos="fade-up">
                    <a href="project.html" class="btn btn-primary">View More Projects</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section feature-developer home-two-developers">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12 col-12 mx-auto">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Featured <span>Developers</span></h2>
                    <p>We have over 1400+ Developers </p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-21.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Dran Gonzalez</a></h4>
                          <p>React Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$34 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Florida, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-22.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Nicole Black</a></h4>
                          <p>Angular Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$32 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Nevada, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-23.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Megan Torres</a></h4>
                          <p>Java Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$24 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-24.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Shan Morris</a></h4>
                          <p>React Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$28 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Florida, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-25.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Dran Gonzalez</a></h4>
                          <p>React Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$34 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-26.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Nicole Black</a></h4>
                          <p>Angular Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$312 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Nevada, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-27.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Megan Torres</a> </h4>
                          <p>Java Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$234 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="feature-develop-blk aos" data-aos="fade-up">
                    <div class="developer-sub-blk">
                       <div class="img-developer">
                          <a href="developer-details.html"><img src="{{ asset('resource/web/assets/img/user/avatar-28.jpg')}}" class="me-2" alt="Img"></a>
                       </div>
                       <div class="developer-content">
                          <h4><a href="developer-details.html">Shan Morris</a></h4>
                          <p>React Developer</p>
                          <div class="rating">
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <i class="fas fa-star filled"></i>
                             <span class="average-rating">5.0 (30)</span>
                          </div>
                       </div>
                    </div>
                    <div class="hour-rate">
                       <ul class="nav">
                          <li><i class="feather-dollar-sign me-1"></i>$28 Hourly</li>
                          <li><i class="feather-map-pin me-1"></i>Florida, USA</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-12">
                 <div class="more-project text-center aos" data-aos="fade-up">
                    <a href="developer-details.html" class="btn btn-primary">View More Freelancers</a>
                 </div>
                 <div class="review-bottom text-center aos" data-aos="fade-up">
                    <div class="client-rate">
                       <h4>Clients rate our Data Processing Executives</h4>
                       <div class="rating">
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <i class="fas fa-star filled"></i>
                          <span class="average-rating">5.0 (30)</span>
                       </div>
                       <p>from 4227 reviews</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section top-skill">
        <div class="container">
           <div class="section-header section-header-two text-center aos" data-aos="fade-up">
              <h2 class="header-title">Featured <span> Skills</span></h2>
              <p>Get work done in over 1800 different categories </p>
           </div>
           <div class="row justify-content-center aos" data-aos="fade-up">
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
                    <span>Software Architecture</span>
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
     </section>
     <section class="section great-about">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12 col-12 mx-auto">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">What's Great About <span>Kofejob</span></h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xl-3 col-md-6">
                 <div class="great-blk aos" data-aos="fade-up">
                    <div class="great-icon">
                       <img src="{{ asset('resource/web/assets/img/icon/great-icon-01.svg')}}" alt="Img">
                    </div>
                    <div class="great-content">
                       <h4>Browse portfolios</h4>
                       <p>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="great-blk aos" data-aos="fade-up">
                    <div class="great-icon">
                       <img src="{{ asset('resource/web/assets/img/icon/great-icon-02.svg')}}" alt="Img">
                    </div>
                    <div class="great-content">
                       <h4>Fast bids</h4>
                       <p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="great-blk aos" data-aos="fade-up">
                    <div class="great-icon">
                       <img src="{{ asset('resource/web/assets/img/icon/great-icon-03.svg')}}" alt="Img">
                    </div>
                    <div class="great-content">
                       <h4>Quality work</h4>
                       <p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-6">
                 <div class="great-blk aos" data-aos="fade-up">
                    <div class="great-icon">
                       <img src="{{ asset('resource/web/assets/img/icon/great-icon-04.svg')}}" alt="Img">
                    </div>
                    <div class="great-content">
                       <h4>Track progress</h4>
                       <p>Keep up-to-date and on-the-go with our time tracker, and mobile app. Always know what freelancers are up to.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section about-project">
        <div class="about-position">
           <div class="container">
              <div class="row justify-content-center">
                 <div class="col-md-6 d-flex">
                    <div class="about-it-blk w-100 aos" data-aos="fade-up">
                       <div class="about-it-img">
                          <a href="javascript:void(0);"><img class="img-fluid" src="{{ asset('resource/web/assets/img/about-it-01.jpg')}}" alt="Img"></a>
                       </div>
                       <div class="about-it-content text-center">
                          <h4>I need a developed Project</h4>
                          <p>Get the perfect Developed project for your budget from our creative community.</p>
                          <div class="more-project text-center mt-0">
                             <a href="project.html" class="btn btn-primary project-post">Post a Project</a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6 d-flex">
                    <div class="about-it-blk w-100 aos" data-aos="fade-up">
                       <div class="about-it-img">
                          <a href="javascript:void(0);"><img class="img-fluid" src="{{ asset('resource/web/assets/img/about-it-02.jpg')}}" alt="Img"></a>
                       </div>
                       <div class="about-it-content text-center">
                          <h4>Find Your Next Great Job Opportunity!</h4>
                          <p>Do you want to earn money, find unlimited clients and build your freelance career?</p>
                          <div class="more-project text-center mt-0">
                             <a href="developer-details.html" class="btn btn-primary start-bid">Start Bidding</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section job-location home-two-jobsec">
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12 col-12 mx-auto">
                 <div class="section-header section-header-two d-block text-center section-locate aos" data-aos="fade-up">
                    <h2 class="header-title">Jobs By <span>Locations</span></h2>
                    <p>Find your favourite jobs and get the benefits of yourself</p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-01.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Nevada, USA</h6>
                       <ul class="nav job-locate-foot">
                          <li>80 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-02.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>London, UK</h6>
                       <ul class="nav job-locate-foot">
                          <li>40 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-03.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Bangalore, India</h6>
                       <ul class="nav job-locate-foot">
                          <li>50 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-04.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Newyork, USA</h6>
                       <ul class="nav job-locate-foot">
                          <li>60 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-05.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Paris, France</h6>
                       <ul class="nav job-locate-foot">
                          <li>80 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-06.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Berlin, Germany</h6>
                       <ul class="nav job-locate-foot">
                          <li>50 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-07.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>Amsterdam, Netherland</h6>
                       <ul class="nav job-locate-foot">
                          <li>30 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-3 col-md-4">
                 <div class="job-locate-blk aos" data-aos="fade-up">
                    <div class="location-img">
                       <a href="project.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/location/location-08.jpg')}}" alt="Img"></a>
                    </div>
                    <div class="job-it-content">
                       <h6>California, USA</h6>
                       <ul class="nav job-locate-foot">
                          <li>70 Companies</li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-xl-12">
                 <div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
                    <a href="project.html" class="btn btn-primary">View More Locations</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section review review-two">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Reviews Of The <span>Users</span></h2>
                    <p>What our Clients say about us </p>
                 </div>
              </div>
           </div>
           <div class="row aos" data-aos="fade-up">
              <div class="col-lg-4 col-md-6">
                 <div class="review-blog user-review">
                    <div class="review-top ">
                       <div class="review-img mx-auto">
                          <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-01.jpg')}}" alt="Post Image"></a>
                       </div>
                       <div class="review-info text-center">
                          <h3><a href="review.html">Durso Raeen</a></h3>
                          <h5>Project Lead</h5>
                       </div>
                    </div>
                    <div class="review-content text-center">
                       <p>Respond to every review, both positive and negative. Thank clients for positive feedback and address concerns in negative reviews professionally and empathetically.</p>
                    </div>
                    <div class="rating">
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star"></i>
                       <span class="average-rating">5.0</span>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6">
                 <div class="review-blog user-review">
                    <div class="review-top ">
                       <div class="review-img mx-auto">
                          <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
                       </div>
                       <div class="review-info text-center">
                          <h3><a href="review.html">Camelia Rennesa</a></h3>
                          <h5>Team Lead</h5>
                       </div>
                    </div>
                    <div class="review-content text-center">
                       <p>Respond promptly to reviews. Aim to acknowledge and reply to reviews within a reasonable timeframe, ideally within 24-48 hours.</p>
                    </div>
                    <div class="rating">
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star"></i>
                       <span class="average-rating">5.0</span>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6">
                 <div class="review-blog user-review">
                    <div class="review-top ">
                       <div class="review-img mx-auto">
                          <a href="review.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/review/review-03.jpg')}}" alt="Post Image"></a>
                       </div>
                       <div class="review-info text-center">
                          <h3><a href="review.html">Brayan</a></h3>
                          <h5>Project Lead</h5>
                       </div>
                    </div>
                    <div class="review-content text-center">
                       <p>Maintain a professional and courteous tone in all responses, even when addressing negative reviews. Avoid getting defensive or confrontational.</p>
                    </div>
                    <div class="rating">
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star filled"></i>
                       <i class="fas fa-star"></i>
                       <span class="average-rating">5.0</span>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section top-company-two border-bottom-0">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Trusted By The <span>World’s Best</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
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
     </section>
     <section class="section blog-tricks">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="section-header section-header-two text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Featured <span>Blogs</span></h2>
                    <p>Read Our Article To Get Tricks </p>
                 </div>
              </div>
           </div>
           <div class="row aos" data-aos="fade-up">
              <div class="col-lg-4 col-md-6">
                 <div class="grid-blog blog-two aos" data-aos="fade-up">
                    <div class="blog-image">
                       <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-12.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                       <div class="feature-time-blk">
                          <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                          <span><i class="far fa-calendar me-1"></i> 06 Oct, 2023</span>
                       </div>
                       <h3 class="blog-title mt-0"><a href="blog-details.html">Top 10 Resume Tips for Landing Your Dream Job</a></h3>
                       <p>Customize your resume for each job application. Highlight skills and experiences that align...</p>
                       <div class="blog-read">
                          <a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6">
                 <div class="grid-blog blog-two aos" data-aos="fade-up">
                    <div class="blog-image">
                       <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-13.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                       <div class="feature-time-blk">
                          <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                          <span><i class="far fa-calendar me-1"></i> 06 Oct, 2023</span>
                       </div>
                       <h3 class="blog-title mt-0"><a href="blog-details.html">Navigating the Gig Economy: Freelancing and Side Hustles</a></h3>
                       <p>Start by evaluating your skills, interests, and passions. What are you good at, and what...</p>
                       <div class="blog-read">
                          <a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6">
                 <div class="grid-blog blog-two aos" data-aos="fade-up">
                    <div class="blog-image">
                       <a href="blog-details.html"><img class="img-fluid" src="{{ asset('resource/web/assets/img/blog/blog-14.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                       <div class="feature-time-blk">
                          <span class="badge bg-pink d-flex align-items-center"><i class="feather-tag me-1"></i>Jobs</span>
                          <span><i class="far fa-calendar me-1"></i> 06 Oct, 2023</span>
                       </div>
                       <h3 class="blog-title mt-0"><a href="blog-details.html">Interview Success: How to Ace Common Interview Questions</a></h3>
                       <p>Select a weakness that is not a critical skill for the job and discuss how you've been working...</p>
                       <div class="blog-read">
                          <a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section class="section job-register-two">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="register-job-blk justify-content-center">
                    <div class="job-content-blk text-center aos" data-aos="fade-up">
                       <h2>Find Your Next Great Job Opportunity!</h2>
                       <p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet.</p>
                    </div>
                    <div class="bg-img">
                       <img src="{{ asset('resource/web/assets/img/bg/job-sec-bg-01.png')}}" class="img-fluid job-right-bg" alt="Img">
                       <img src="{{ asset('resource/web/assets/img/bg/job-sec-bg-02.png')}}" class="img-fluid job-left-bg" alt="Img">
                    </div>
                 </div>
                 <div class="sign-in-btn text-center mt-5 aos" data-aos="fade-up">
                    <a href="login.html" class="btn btn-primary">Register Kofejob </a>
                 </div>
              </div>
           </div>
        </div>
     </section>

    {{-- Main Content End --}}
    
@endsection