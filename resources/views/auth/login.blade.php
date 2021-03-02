<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Theme Region">
<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title> {{ config('global.siteTitle') }}</title>
<!-- Bootstrap CSS -->

<script src="https://unpkg.com/feather-icons"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="css/animate/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<!--    bootstrap css-->
<!--  CSS -->
<link rel="stylesheet" href="css/navigation-temp.css">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/style2.css"> -->

<link rel="stylesheet" href="css/form.css">
</head>

<body>
<section class="p-sm-0 p-5" id="service-form-section">
    <div class="login-bg p-5">
        <div class="container ">
            <row class="d-flex justify-content-center align-items-center align-content-center min-100vh">
                <div class="col-lg-6 col-md-9  login-wrap p-5 text-white">
                    <div class="row login-header ad-profile section h-100">
                        <ul class="user-menu col-12 w-100 text-uppercase toogle-loginfforms">
                            <li class="py-2 float-left  active-log"><a href="{{route('login')}}">SIgn in</a> </li>
                            <li class="py-2 float-right ml-3 "><a href="{{route('register')}}"> Sign up</a></li>
                        </ul>
                    </div>
                    <div class="login col-12 p-0 text-uppercase">
                        <center class="main-logo-container">
                        <img src="{{ asset('img/REVENUESURE.png') }}" class="e-logo mt-3 mx-3 mb-2" height="100px"; width="108px";>
                            <p>Access your account</p>
                            {{-- <img src="img/logo/portal-txt.png" class="logo-txt mt-3 mx-3 mb-2"> --}}

                            <hr class="my-3">
                        </center>

                        @if($errors->any())
                            <p class="alert alert-danger">{{$errors->first()}}</p>
                        @endif
                        @if(Session::has('success'))
                            <p class="alert alert-success">{{Session::get('success')}}</p>
                        @endif
                        <form class="col-12 px-0 login-form pt-3 animated" id="login-form" action="{{route('login-customer')}}" method="POST">
                            @csrf
                            <div class="form-group col-sm-12 col-md-12 p-0">
                                <label for="number-plate" class=" ">Email</label>
                                <input type="text"  name="user_name" class="form-control" id="number-plate" value="{{ old('user_name') }}" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 p-0 my-5">
                                <label for="number-plate" class=" ">password</label>
                                <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="password" value="{{ old('password') }}">
                            </div>
                            <div class="col-12 p-0">
                                <!-- <input id="check" type="checkbox" class="check"> -->
                                <!-- <label for="check" class=" "><span class="icon"></span> Keep me Signed in</label> -->
                            </div>
                            <div class="col-12 p-0 text-uppercase">
                                <button type="submit" class="btn btn-primary text-white font-14 w-100 p-4 center mb-5">
                                    <div class="btn-txt animated"> <span class="btn-text text-uppercase font-12">Sign in</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"> </i> </div>
                                    <div class="lds-ellipsis d-none animated">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </button>
                            </div>
                            <hr class="mt-5">
                            <p>
                            <center>
                                <a href="{{ route('forgot-password') }}" class="text-center login-link ">Forgot Password?</a>
                            </center>
                            </p>
                        </form>

                    </div>
                </div>
            </row>
        </div>
    </div>
</section>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="js/slider.js"></script>
<script type="text/javascript" src="js/popmotion.global.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<!-- <script async="async" type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/cleave.js"></script>
<script type="text/javascript" src="js/submenuSlider.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript">
    var audio1 = document.getElementById("audioID");

    //Example of an HTML Audio/Video Method

    function playAudio() {
        audio1.play();
    }
     feather.replace();
    </script>
<!--scripts-->
</body>
</html>
