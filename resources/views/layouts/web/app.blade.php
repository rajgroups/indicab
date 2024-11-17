<!DOCTYPE html>
<html lang="en">
<head>
    @stack('meta_tag')
    @include('layouts.web.dependency.css')
</head>

<body class="home-page bg-one">

    {{-- @include('layouts.web.loader.index') --}}
    <div class="main-wrapper">
        <!-- Top Header-->
        @include('layouts.web.partition.header')

            @section('content')
            <!-- start Page-content -->
            <!-- end main content-->
            @show
        {{-- footer  --}}
        @include('layouts.web.partition.footer')
        <div class="main">
            <!--<div>-->
            <!--  <center>-->
            <!--    <H1>Bottom Navigation Bar</H1>-->
            <!--  </center>-->
            <!--</div>-->
            <div class="bottom-nav">
              <div class="nav-slot bg-white round-top-left">
                <a href="https://wa.me/+916380708606" target="_blank" class="nav-link" style="color: #075e54;">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
              </div>
              <div class="nav-slot bg-white">
                <a href="#features" target="_blank" class="nav-link" style="color: #964d4d;">
                  <i class="fa fa-list-tree"></i>
                </a>
              </div>
              <div class="nav-slot curve">
                <a href="tel:+916380708606" target="_blank" role="button" class="floating-button">
                  <i class="fa fa-phone"></i>
                </a>
              </div>
              <div class="nav-slot bg-white">
                <a href="#testimoni" class="nav-link" title="Testimoni" style="color: #4b5da1;">
                  <i class="fa fa-comments"></i>
                </a>
              </div>
              <div class="nav-slot bg-white round-top-right">
                <a href="https://maps.app.goo.gl/RMJ3kXzhUH6YKXrt7" target="_blank" class="nav-link" title="Lokasi pada peta" style="color:  #4a80f5;">
                  <i class="fa fa-map-location-dot"></i>
                </a>
              </div>
            </div>
          </div>

    </div>
    <!-- JAVASCRIPT -->
    @include('layouts.web.dependency.js')
</body>
</html>

<style>
    .main {
  margin: 0px;
  /*height: 300vh;*/
  background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
}

.bg-white {
  background: white;
}

.bottom-nav {
  display: flex;
  justify-content: center;
  flex-direction: row;
  width: 100%;
  height: 50px;
  filter: drop-shadow(0 0 5px rgba(31, 31, 31, 0.1));
  position: fixed;
  bottom: 0;

  .nav-slot {
    flex-basis: 15%;
    text-align: center;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .nav-link {
    width: 25px;
    height: 25px;
    line-height: 1.5;
    align-items: center;
    color: #aab2bd;
    border-radius: 50rem;
    padding: 0.5rem 0.5rem;
    transition: 0.3s all;
  }

  .nav-link:hover {
    transition: 0.3s all;
    background: rgba(31, 31, 31, 0.1);
  }

  .curve {
    flex-basis: auto !important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M99,0A36.33,36.33,0,0,0,70,15,25,25,0,0,1,30,15,36.33,36.33,0,0,0,1,0H0V50H100V0Z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: cover;
    background-position-y: center;
    width: 100px;
  }

  .floating-button {
    position: fixed;
    width: 50px;
    height: 50px;
    line-height: 3;
    text-align: center;
    color: #ffce54;
    border-radius: 50%;
    bottom: 35px;
    background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
    box-shadow: 0 10px 6px -6px #777;
    z-index: 1;
    transition: 0.3s all;
  }

  .floating-button:hover {
    bottom: 40px;
    transition: 0.3s all;
  }

  .round-top-left {
    border-top-left-radius: 15px;
  }

  .round-top-right {
    border-top-right-radius: 15px;
  }

  svg {
    height: 100%;
  }
}

</style>
