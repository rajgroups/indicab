{{-- @dd(Auth::guard('admin')->user()->role) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raj Groups || Indicab Admin System</title>
    @include('layouts.admin.dependency.css')
    @stack('css')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            <!-- sidebar @s -->
            @include('layouts.admin.partition.left-menu')

            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.admin.partition.header')

                <!-- main header @e -->
                <!-- start Page-content -->
                {{-- <div id="loader" style="display:none;">
                    <img src="https://cdn.dribbble.com/users/2973561/screenshots/5757826/loading__.gif" alt="Loading..." />
                </div> --}}
                @section('content')

                @show
                <!-- end main content-->

                <!-- footer @s -->
                @include('layouts.admin.partition.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

    <!-- JAVASCRIPT -->
    @include('layouts.admin.dependency.js')
    @stack('scripts')
</body>

</html>
