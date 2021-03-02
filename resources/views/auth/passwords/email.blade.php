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
                                <img src="img/logo/county-login.png" class="e-logo mt-3 mx-3 mb-2" height="168px";>
                                <img src="img/logo/portal-txt.png" class="logo-txt mt-3 mx-3 mb-2">

                                <hr class="my-3">
                            </center>

                    <form  id="myForm" >
                        <p  class="alert alert-success" id="msg" style="display:none">Saved</p>
                        <p>Kindly change your password before proceeding.</p>
                                <p  class="alert alert-danger" id="msg-error" style="display:none">Saved</p>
                                @csrf
                            <div class="row">
                                <p  class="alert alert-success" id="msg" style="display:none">Saved</p>
                                <p  class="alert alert-danger" id="msg-error" style="display:none">Saved</p>
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="old" class=" ">Old password</label>
                                        <input type="password" class="form-control" name="old_password"  placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="password" class=" ">New password</label>
                                        <input type="password" class="form-control" name="new_password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 pl-md-0">
                                        <!-- <label for="exampleInputPassword1" class=" ">User id</label> -->
                                        <input type="hidden" class="form-control "  name="user_id" value="{{ Session::get('resource')['user_id'] }}" placeholder="User Id" readonly>
                                    </div>
                                </div>
                                <button type="button"   onclick="save_pswd()" class="btn btn-primary   text-white font-14">save changed password</button>
                            </form>
                 </div>
                    </div>
                </row>
            </div>
        </div>
    </section>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

    <script type="text/javascript">

        function save_pswd(e){
            var old_password= $("input[name=old_password]").val();
            var new_password = $("input[name=new_password]").val();
            var user_id = $("input[name=user_id]").val();
            document.getElementById("myForm").reset();
            $.ajax({
                type:'POST',
                url:"<?php  echo url('/change-pswd')?>",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{user_id:user_id, old_password:old_password, new_password:new_password},
                success:function(data){
                     console.log(data.status_code);
                     var status = data.status_code;

                     if(status != 200){
                         $('#msg-error').html('Password do not match, please try again later ').fadeIn('slow');
                         //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message
                         $('#msg-error').delay(5000).fadeOut('slow');
                     }else{
                         // $('#msg').html('You have changed your password successfully, please log in with your new password').fadeIn('slow');
                         // //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message
                         // $('#msg').delay(5000).fadeOut('slow');

                         window.location = 'login';

                     }


                }
            });



        }


    </script>
   </body>
</html>
