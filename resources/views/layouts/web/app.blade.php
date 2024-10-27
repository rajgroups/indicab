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

    </div>
    <!-- JAVASCRIPT -->
    @include('layouts.web.dependency.js')
</body>
</html>

