<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('resource/admin/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Login | ERP Application </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('resource/admin/assets/css/dashlite.css?ver=3.2.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('resource/admin/assets/css/theme.css?ver=3.2.3')}}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="index" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg w-100" src="{{asset('resource/admin/images/logo.jpeg')}}" srcset="{{asset('resource/admin/images/logo.jpeg')}} 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg w-100" src="{{asset('resource/admin/images/logo.jpeg')}}" srcset="{{asset('resource/admin/images/logo.jpeg')}} 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>User Admin Login panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach

                                        </ul>
                                    </div>
                                @enderror
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email or Username</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="login" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                                <!-- form -->

                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">

                                <div class="mt-3">
                                    <p>Copyright &copy;  2024 Gladindia . All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true" style="background-image: url(https://logosoft.com.tr/uploads/files/23-11-2022/e4056be7.jpg);background-size: cover;    background-position: -31%;">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835040-7201946.png')}}" srcset="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835040-7201946.png')}} 2x" alt="">
                                            </div>
                                            {{-- <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div> --}}
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835049-7201955.png')}}" srcset="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835049-7201955.png')}} 2x" alt="">
                                            </div>
                                            {{-- <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div> --}}
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835049-7201955.png')}}" srcset="{{asset('https://cdni.iconscout.com/illustration/premium/thumb/enterprise-resource-planning-system-8835049-7201955.png')}} 2x" alt="">
                                            </div>
                                            {{-- <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div> --}}
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('resource/admin/assets/js/bundle.js?ver=3.2.3')}}"></script>
    <script src="{{asset('resource/admin/assets/js/scripts.js?ver=3.2.3')}}"></script>


</html>
