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
        <div class="login-bg">
            <div class="container p-sm-0 p-5">

                <row class="d-flex justify-content-center align-items-center align-content-center min-100vh">
                    <div class="col-lg-6 col-md-9  login-wrap p-5 text-white">
                        <p  class="alert alert-success" id="msg" style="display:none">Saved</p>
                        <p  class="alert alert-danger" id="msg-error" style="display:none">Saved</p>
                        <div class="login col-12 p-0 ">
                        <center class="main-logo-container">
                        <img src="{{ asset('img/REVENUESURE.png') }}" class="e-logo mt-3 mx-3 mb-2" height="120px"; width="168px";>
                            <p>Recover you password</p>
                            {{-- <img src="img/logo/portal-txt.png" class="logo-txt mt-3 mx-3 mb-2"> --}}

                            <hr class="my-3">
                        </center>
                            <form id="myForm">
                                @csrf
                                <div class="form-group col-sm-12 col-md-12 p-0">
                                    <label for="number-plate" class=" ">Email used during registration</label>
                                    <input type="text"  name="username" class="form-control" id="number-plate" value="{{ old('username') }}" placeholder="Enter your username">
                                </div>
                                <div class="col-12 p-0 text-uppercase">
                                        <div class="btn-txt animated">
                                            <span class="btn-text text-uppercase font-12">
                                                <button type="button"   onclick="get_password()" class="btn btn-primary   text-white font-14">get password</button>
                                            </span>
                                            <span class="btn-text text-uppercase font-12 float-right">
                                               <a href="{{ url('/') }}">Home</a>
                                            </span>
                                        </div>


                                        <div class="lds-ellipsis d-none animated">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </row>
            </div>
        </div>
    </section>
    <script type="text/javascript">

        function get_password(e){
            var username= $("input[name=username]").val();
            document.getElementById("myForm").reset();

            $.ajax({
                type:'POST',
                url:"<?php  echo url('/get-password')?>",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{username:username},
                success:function(data){
                    console.log(data.status_code);
                    var status = data.status_code;

                    if(status != 200){
                        $('#msg-error').html('Username not found, please try again later ').fadeIn('slow');
                        //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message
                        $('#msg-error').delay(5000).fadeOut('slow');
                    }else{

                        window.location = 'login';
                        $('#msg').html('You OTP has been sent to your phone number').fadeIn('slow');
                        //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message
                        $('#msg').delay(5000).fadeOut('slow');

                    }


                }
            });



        }


    </script>
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
