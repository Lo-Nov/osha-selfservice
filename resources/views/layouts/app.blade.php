<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('global.siteTitle') }}</title>
    <!-- Bootstrap CSS -->

    <!--ICON FONTS -->
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_1.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_2.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_3.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_4.css')}}">
    <!-- ICON FONTS -->

    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('css/animate/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!--	bootstrap css-->
    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('css/navigation-temp.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/style2.css"> -->

    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropify2.css')}}">
    <link rel="icon" type="image/jpg" href="{{asset('img/logo/RevenueSure_NoText.png')}}">

</head>

<body>
<!--	!--	MENU CONTROLS-->

<!-- header -->
<!--		navigation bar -->
<!-- search -->
<!-- <div class="inline-search-block fixed with-close big" id="toogle-search-bar">
    <div class="maxwidth-theme" >
        <div class="col-md-12">
            <div class="search-wrapper">
                <div id="title-search">
                    <form action="#" class="search">
                        <div class="search-input-div">
                            <input class="search-input" id="title-search-input" type="text" name="q" value="" placeholder="Search" size="20" maxlength="50" autocomplete="off">
                        </div>
                        <div class="search-button-div">
                            <button class="btn btn-search btn-default bold btn-lg" type="submit" name="s" value="services">Search</button>
                            <span class="close-block inline-search-hide"><span class="svg svg-close close-icons"></span></span> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="header_wrap visible-lg visible-md title-v3 index">
    <header id="header">
        <div class="header-v4 header-wrapper">
            <div class="logo_and_menu-row container">
                <div class="logo-row">
                    <div class="maxwidth-theme">
                        <div class="row d-flex">
                           <div class="col-12">
                            <div class="logo-block col-md-6 col-sm-6 logo-text-cont">
                                <div class="logo"> <a href="{{ url('/') }}"><img src="{{asset('img/logo/RevenueSure_NoText.png')}}" alt="e-Pay RevenueSure" class="e-logo" title="HOME"></a> </div>
                                <a title="home" href="{{ url('/') }}" class="text-heding-container">
                                    <h2>RevenueSure</h2>
                                    <p class="text-black">Self Service Portal</p>
                                </a>
                            </div>

                            <div class="right-icons pull-right float-right header-btns">
                                <div class="pull-right block-link"></div>
                                <div class="pull-right">
                                    <div class="wrap_icon inner-table-block">
                                        @if (is_null(Session::get('resource')))
                                        <div class="wrap_icon inner-table-block">
                                            <div id="bxdynamic_header-auth-block1_start"></div>
                                            <!-- noindex -->
                                            <a rel="nofollow" title="sign in" class="personal-link dark-color animate-load" data-event="jqm" data-param-type="auth" data-param-backurl="/" data-name="auth" href="{{ route('login') }}"><!-- <i class="svg inline big svg-inline-cabinet" aria-hidden="true" title="log in">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"> <
                                                        </defs>
                                                        <path data-name="Rounded Rectangle 110" class="loccls-1" d="M1433,132h-15a3,3,0,0,1-3-3v-7a3,3,0,0,1,3-3h1v-2a6,6,0,0,1,6-6h1a6,6,0,0,1,6,6v2h1a3,3,0,0,1,3,3v7A3,3,0,0,1,1433,132Zm-3-15a4,4,0,0,0-4-4h-1a4,4,0,0,0-4,4v2h9v-2Zm4,5a1,1,0,0,0-1-1h-15a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h15a1,1,0,0,0,1-1v-7Zm-8,3.9v1.6a0.5,0.5,0,1,1-1,0v-1.6A1.5,1.5,0,1,1,1426,125.9Z" transform="translate(-1415 -111)"></path>
                                                    </svg>
                                                </i> -->
                                                </a>
                                                <!-- <span class="wrap"><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sign In </font>
                                                </span> -->
                                                <a href="{{route('login')}}">
                                                    <span id="add-shop" class="btn-secondary text-black show-signup">Sign In</span>

                                                </a>
                                                <span class="title"><font style="vertical-align: inherit;"></font></span><!-- /noindex -->
                                        </div>
                                        @else
                                        <div class="profile-pic  logged-in">

                                            <img src="{{ asset('img/user/default-user.png') }}" height="80px" width="80px">
                                            <ul class="dropdown">
                                                <li class="menu_back"> <a class="dark-color" href="{{ route('client-profile') }}" title="check out your profile details"><img src="{{ asset('img/user/default-user.png') }}" height="40px" width="40px"> </a>
                                                    <ul>
                                                        <li><strong><a class="dark-color" href="{{ route('client-profile') }}" title="check out your profile details">{{ Session::get('resource')['user_full_name']  }}</a></strong> </li>
                                                        <li><a class="dark-color" href="{{ route('client-profile') }}" title="check out your profile details">{{Session::get('resource')['email']}}</a></li>
                                                    </ul>
                                                <!-- <li> <a class="dark-color" href="{{ route('client-profile') }}" title="check out your profile details"><i data-feather="user"></i> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profile</font></font></span> </a> </li> -->

                                                <li>
                                                    <a href="{{ route('logout') }}" class="dark-color"
                                                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" title="Close Account">
                                                        <span><i data-feather="log-out"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Log Out</font></font></span>
                                                    </a>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>{{ Session::get('resource')['user_full_name']  }}</strong></li>
                                                <li>{{ Session::get('resource')['email']  }}</li>
                                            </ul>
                                        </div>
                                            @endif
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="wrap_icon inner-table-block btn-span-margin"> <a ><span id="get-a-receipt"><i class="fa fa-print"></i> Print receipt </span></a>
                                        <!-- <a href="{{route('register')}}">
                                            @if (is_null(Session::get('resource')))
                                            <span id="add-shop" class="btn-secondary text-black show-signup">Sign Up</span>
                                                @else
                                            @endif
                                        </a> --> </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-row middle-block bgcolored ">
                <div class="maxwidth-theme"style="background-color: #00431b;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="menu-only">
                                    <nav class="mega-menu sliced ovisible initied">
                                        <div class="table-menu">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="menu-item dropdown catalog wide_menu" style="visibility: visible;"><div class="wrap"> <a class="dropdown-toggle" href="#">
                                                                <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Services</font></font>
                                                                    <div class="line-wrapper"><span class="line"></span></div>
                                                                </div>
                                                            </a> <span class="tail"></span>
                                                            <ul class="dropdown-menu  ">
                                                                 <!-- PARKING MEN-->
                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/parking.svg')}}" alt="cars & vehcles" title="services to be paid for your land rates"></div>
                                                                    <div  title="Parking" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parking fees</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('daily-parking')}}"  title="pay for your daily parking fees" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Daily parking</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('seasonal-parking')}}" title="pay parking for a specified period of time" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Seasonal parking</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item d-none"> <a href="#" title="pay monthly parking for your sacco fleet" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Sacco parking</font> </font> </span> </a> </li>

                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a href="{{route('offstreet-parking')}}" title="offstreet parking fees" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Offstreet parking</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a href="{{route('parking-penalties')}}" title="pay for parking penalties" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Penalties</font> </font> </span> </a> </li>

                                                                        <li class="menu-item"> <a href="{{route('view-seasonal-stickers')}}" title="print seasonal parking stickers" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print seasonal parking stickers</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a href="#" class="get-a-receipt" title="have a look at some of your parking receipts" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipts</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->

                                                                    </ul>
                                                                </li>
                                                                <!-- SBP MENU -->
                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/case.svg')}}" alt="cars & vehcles" title="cars & vehcles"></div>
                                                                    <div  title="Trade License" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trade License</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('renew-business-permit')}}" title="renew your business permits" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew Trade License</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item"> <a href="{{route('register-business')}}" title="Register new business" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Register new business</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item"> <a href="{{route('get-permit-form')}}" title="print a permit" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print permit</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item"> <a class="get-a-receipt" title="print receipt for specific permit" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                    </ul>
                                                                </li>
                                                                <!-- END OF SBP MENU -->
                                                                                                                                <!-- RENTS MENU -->
                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/key.svg')}}" alt="cars & vehcles" title="services to be paid for your land rates"></div>
                                                                    <div  title="Rents" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rent</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('house-rents')}}" title="pay for your house rents" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">House rent</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a href="{{route('market-rents')}}" title="pay for your market stalls rental fees" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Market rent</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a class="get-a-receipt" href="#" class="get-a-receipt" title="search for receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->

                                                                    </ul>
                                                                </li>
                                                                <!-- END OF RENTS MENU -->

                                                                <!-- LAND RATES MENU -->
                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/house.svg')}}" alt="cars & vehcles" title="services to be paid for your land rates"></div>
                                                                    <div  title="Land rates" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Land rates</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('land-rates')}}" title="pay for your land rates" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Pay land rates</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                        <!--									revenue stream service-->
                                                                        <li class="menu-item"> <a class="get-a-receipt"  class="get-a-receipt" title="print a transaction's receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                                        <!--									revenue stream service-->
                                                                    </ul>
                                                                </li>
                                                                <!-- END OF LAND RATES -->

                                                                <!-- BILLS MENU -->
                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/receipt.svg')}}" alt="cars & vehcles" title="Bills"></div>
                                                                    <div  title="County Bills" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">County Bills</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--                                    revenue stream service-->
                                                                        <!-- <li class="menu-item "> <a href="{{route('create-bill')}}" title="pay for your land rates" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">create a bill</font> </font> </span> </a> </li> -->
                                                                        <!--                                    revenue stream service-->

                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('pay-bill')}}" title="pay for a bill" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Pay for a bill</font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->
                                                                        <!--                                    revenue stream service-->
                                                                        <li class="menu-item"> <a class="get-a-receipt" href="#" title="print a transaction's receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt </font> </font> </span> </a> </li>
                                                                        <!--                                    revenue stream service-->

                                                                    </ul>
                                                                </li>
                                                                <!-- END OF BILLS MENU -->

                                                                <!-- FOOD HANDLERS MENU -->

                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/food-handlers.svg')}}" alt="cars & vehcles" title="apply for county food handlers certificate"></div>
                                                                    <div  title="county food handlers certificate" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class=""><font style="vertical-align: inherit;">Food Handlers</font></font> </span> <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--									revenue stream service-->
                                                                        {{-- <li class="menu-item "> <a href="{{route('create-food-handlers-bill')}}" title="apply for food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply</font> </font> </span> </a> </li> --}}
                                                                        <li class="menu-item "> <a href="{{route('apply-food-handler')}}" title="apply for food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply for food handler</font> </font> </span> </a> </li>
                                                                        {{-- <li class="menu-item "> <a href="{{route('health-application')}}" title="renew food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food handlers </font> </font> </span> </a> </li> --}}
                                                                        <li class="menu-item "> <a href="{{route('renew-handler')}}" title="renew food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food handler</font> </font> </span> </a> </li>
                                                                        <!--revenue stream service-->
                                                                        <!--revenue stream service-->
                                                                        {{-- <li class="menu-item"> <a href="{{route('health-credentials')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print certificate</font> </font> </span> </a> </li> --}}
                                                                        <li class="menu-item"> <a href="{{route('print-handler-cert')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get Certificate</font> </font> </span> </a> </li>
                                                                        <li class="menu-item"> <a href="{{route('print-health-slip')}}" title="print a food handlers slip" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get result slip</font> </font> </span> </a> </li>

                                                                        <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                                                                        <!--revenue stream service-->

                                                                    </ul>
                                                                </li>

                                                                <!-- END OF FOOD HANDLERS MENU -->


                                                                <!-- FOOD hygene menu -->

                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/nutrition.svg')}}" alt="cars & vehcles" title="apply for county food handlers certificate"></div>
                                                                    <div  title="county food handlers certificate" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class="">
                                                                        <font style="vertical-align: inherit;">Food Hygiene</font></font> </span>
                                                                        <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <!--revenue stream service-->
                                                                        <li class="menu-item "> <a href="{{route('food-hygiene-business-details')}}" title="apply for food hygiene license" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply for food hygiene </font> </font> </span> </a> </li>
                                                                        <li class="menu-item "> <a href="{{route('renew-food-hygiene')}}" title="renew food hygiene license" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food hygiene</font> </font> </span> </a> </li>
                                                                        <!--revenue stream service-->
                                                                        <!--revenue stream service-->
                                                                        {{--  <li class="menu-item"> <a href="{{route('health-credentials')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Cert</font> </font> </span> </a> </li>  --}}
                                                                        <li class="menu-item"> <a href="{{route('get-corp-cert-form')}}" title="Print food handlers license" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get license</font> </font> </span> </a> </li>
                                                                        <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                                                                        <!--revenue stream service-->


                                                                    </ul>
                                                                </li>

                                                                <!-- end of food hygene menu -->


                                                                <!-- FOOD HANDLERS MENU -->

                                                                <li class="dropdown-submenu  has_img">
                                                                    <div class="menu_img"><img src="{{asset('img/new-icons/cooporate.svg')}}" alt="cars & vehcles" title="apply for county food handlers certificate"></div>
                                                                    <div  title="county food handlers certificate" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class="">
                                                                        <font style="vertical-align: inherit;">Corporate</font></font> </span>
                                                                        <span class="arrow"><i></i></span></div>
                                                                    <ul class="dropdown-menu toggle_menu  ">
                                                                        <li class="menu-item "> <a href="{{  route('get-corporate') }}" title="apply for food hygiene certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get Started</font> </font> </span> </a> </li>
                                                                    </ul>
                                                                </li>

                                                                <!-- END OF FOOD HANDLERS MENU -->
                                                            </ul>
                                                        </div></td>
                                                    <td class="menu-item dropdown" style="visibility: visible;"><div class="wrap"> <a href="#" class="help-show">
                                                                Help
                                                            </a>
                                                        </div>
                                                    </td>
                                                        <td class="menu-item dropdown" style="visibility: visible;"><div class="wrap"> <a href="{{route('nbk-branches')}}" class="">
                                                                BANK Branches
                                                            </a>
                                                        </div></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-row visible-xs"></div>
        </div>
    </header>
</div>
<div class="jqmOverlay search"></div>
<div id="headerfixed">
    <div class="maxwidth-theme container">
        <div class="logo-row v2 row margin0 menu-row">
            <div class="inner-table-block nopadding logo-block">
                <div class="logo"> <a href="{{route('welcome')}}"><img src="{{asset('img/logo/logo_hr.png')}}" alt="NCCG ePay" title="Epayments" height="88px"></a> </div>
            </div>
            <div class="inner-table-block menu-block" style="width: 70%;">
                <div class="navs table-menu js-nav opacity1" >
                    <nav class="mega-menu sliced ovisible initied">
                        <div class="table-menu">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="menu-item dropdown catalog wide_menu" style="visibility: visible;"><div class="wrap"> <a class="dropdown-toggle" href="#">
                                                <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Services</font></font>
                                                    <div class="line-wrapper"><span class="line"></span></div>
                                                </div>
                                            </a> <span class="tail"></span>
                                            <ul class="dropdown-menu  ">
                                                <!-- PARKING SUB MENU -->
                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/parking.svg')}}" alt="cars & vehcles" title="services to be paid for your parking fees"></div>
                                                    <div  title="county parking fees" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parking fees</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('daily-parking')}}" title="pay for your daily parking fees" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Daily parking</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('seasonal-parking')}}" title="pay parking for a specified period of time" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Seasonal parking</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!-- <li class="menu-item"> <a href="#" title="pay monthly parking for your sacco fleet" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Sacco parking</font> </font> </span> </a> </li> -->

                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('offstreet-parking')}}" title="offstreet parking fees" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Offstreet parking</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('parking-penalties')}}" title="pay for parking penalties" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Penalties</font> </font> </span> </a> </li>


                                                        <li class="menu-item"> <a href="{{route('view-seasonal-stickers')}}" title="print seasonal parking stickers" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print seasonal parking stickers</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item"> <a href="#" class="get-a-receipt" title="have a look at some of your parking receipts" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipts</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!--                                    revenue stream service-->

                                                    </ul>
                                                </li>
                                                <!-- END OF PARKING SUB MENU -->
                                                <!-- SBP SUB MENU -->
                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/case.svg')}}" alt="cars & vehcles" title="cars & vehcles"></div>
                                                    <div  title="Si" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trade License</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('renew-business-permit')}}" title="renew your business permits" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew Trade License</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('register-business')}}" title="register a new business" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Register new business</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->

                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('get-permit-form')}}" title="print a permit" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print permit</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->

                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a class="get-a-receipt" title="print receipt for specific permit" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->
                                                    </ul>
                                                </li>
                                                <!-- END OF SBP SUB MENU -->

                                                <!-- RENTS SUB MENU -->
                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/key.svg')}}" alt="cars & vehcles" title="services to be paid for your house and stall rents"></div>
                                                    <div  title="pay your rents" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rent</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('house-rents')}}" title="pay for your house rents" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">House rent</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a href="{{route('market-rents')}}" title="pay for your market stalls rental fees" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Market rent</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a href="#" class="get-a-receipt" title="search for receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->

                                                    </ul>
                                                </li>
                                                <!-- RENTS SUB MENU -->
                                                <!-- LAND RATES SUB MENU -->
                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/house.svg')}}" alt="cars & vehcles" title="services to be paid for your land rates"></div>
                                                    <div  title="county land rates services" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Land rates</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('land-rates')}}" title="pay for your land rates" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Pay land rates</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                        <!--                                    revenue stream service-->
                                                        <li class="menu-item"> <a class="get-a-receipt" title="print a transaction's receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipt</font> </font> </span> </a> </li>
                                                        <!--                                    revenue stream service-->
                                                    </ul>
                                                </li>
                                                <!-- END OF LAND RATES SUB MENU -->

                                                <!-- BILLS SUB MENU -->

                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/receipt.svg')}}" alt="cars & vehcles" title="paid for your county bills"></div>
                                                    <div  title=" Bills" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">County Bills</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--									revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('pay-bill')}}" title="pay for your  bills" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Pay for a bill</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->

                                                        <!--									revenue stream service-->
                                                        <li class="menu-item"> <a href="#" class="get-a-receipt" title="print  bills receipts" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print receipts</font> </font> </span> </a> </li>
                                                        <!--									revenue stream service-->

                                                        <!--									revenue stream service-->
                                                        <!-- <li class="menu-item"> <a href="#" title="print a transaction's receipt" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">print bill</font> </font> </span> </a> </li> -->
                                                        <!--									revenue stream service-->

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/food-handlers.svg')}}" alt="cars & vehcles" title="apply for county food handlers certificate"></div>
                                                    <div  title="county food handlers certificate" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class=""><font style="vertical-align: inherit;">Food Handlers</font></font> </span> <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--									revenue stream service-->
                                                        {{-- <li class="menu-item "> <a href="{{route('create-food-handlers-bill')}}" title="apply for food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply</font> </font> </span> </a> </li> --}}
                                                        <li class="menu-item "> <a href="{{route('apply-food-handler')}}" title="apply for food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply  for food handler</font> </font> </span> </a> </li>
                                                        {{-- <li class="menu-item "> <a href="{{route('health-application')}}" title="renew food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food handlers </font> </font> </span> </a> </li> --}}
                                                        <li class="menu-item "> <a href="{{route('renew-handler')}}" title="renew food handlers certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food handler </font> </font> </span> </a> </li>
                                                        <!--revenue stream service-->
                                                        <!--revenue stream service-->
                                                        {{-- <li class="menu-item"> <a href="{{route('health-credentials')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Print certificate</font> </font> </span> </a> </li> --}}
                                                        <li class="menu-item"> <a href="{{route('print-handler-cert')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get Certificate</font> </font> </span> </a> </li>
                                                        <li class="menu-item"> <a href="{{route('print-health-slip')}}" title="print a food handlers slip" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get result slip</font> </font> </span> </a> </li>
                                                        <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                                                        <!--revenue stream service-->

                                                    </ul>
                                                </li>

                                                <!-- END OF FOOD HANDLERS MENU -->


                                                <!-- FOOD HANDLERS MENU -->

                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/nutrition.svg')}}" alt="cars & vehcles" title="apply for county food hygiene license"></div>
                                                    <div  title="county food hygiene license" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class="">
                                                        <font style="vertical-align: inherit;">Food Hygiene</font></font> </span>
                                                        <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <!--revenue stream service-->
                                                        <li class="menu-item "> <a href="{{route('food-hygiene-business-details')}}" title="apply for food hygiene license" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Apply for food hygiene</font> </font> </span> </a> </li>
                                                        <li class="menu-item "> <a href="{{route('renew-food-hygiene')}}" title="renew food hygiene license" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Renew food hygiene </font> </font> </span> </a> </li>
                                                        <!--revenue stream service-->
                                                        <!--revenue stream service-->
                                                        {{--  <li class="menu-item"> <a href="{{route('health-credentials')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Cert</font> </font> </span> </a> </li>  --}}
                                                        <li class="menu-item"> <a href="{{route('get-corp-cert-form')}}" title="Print food hygiene license" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get license</font> </font> </span> </a> </li>
                                                        <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                                                        <!--revenue stream service-->


                                                    </ul>
                                                </li>

                                                <!-- END OF FOOD HANDLERS MENU -->


                                                <!-- cooporate -->

                                                <li class="dropdown-submenu  has_img">
                                                    <div class="menu_img"><img src="{{asset('img/new-icons/cooporate.svg')}}" alt="cars & vehcles" title="apply for county food handlers certificate"></div>
                                                    <div  title="county food handlers certificate" class="service-link-title pb-4"> <span class="name"><font style="vertical-align: inherit;" class="">
                                                        <font style="vertical-align: inherit;">Corporate</font></font> </span>
                                                        <span class="arrow"><i></i></span></div>
                                                    <ul class="dropdown-menu toggle_menu  ">
                                                        <li class="menu-item "> <a href="{{  route('get-corporate') }}" title="apply for food hygiene certificate" style="white-space: normal;" > <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get Started</font> </font> </span> </a> </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div></td>
                                    <td class="menu-item dropdown" style="visibility: visible;"><div class="wrap">
                                        <a  href="#" class="help-show">
                                               Help
                                            </a>

                                        </div></td>
                                        <td class="menu-item dropdown" style="visibility: visible;"><div class="wrap">
                                        <a  href="{{route('nbk-branches')}}" class="">
                                               NBK Branches
                                            </a>

                                        </div></td>
                                    <td class="menu-item dropdown js-dropdown nosave" style="display: none; visibility: visible;"><div class="wrap"> <a class="dropdown-toggle more-items" href="#"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yet</font></font></span> </a> <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="inner-table-block nopadding small-block">
                <div class="wrap_icon wrap_cabinet">
                    <div id="bxdynamic_header-auth-block2_start" style="display:none"></div>
                    <!-- noindex --><a rel="nofollow" title="log in" class="personal-link dark-color animate-load" data-event="jqm" data-param-type="auth" data-param-backurl="/" data-name="auth" href="#"><i class="svg inline big svg-inline-cabinet" aria-hidden="true" title="log in">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                                <defs>
                                    <style>
                                        .loccls-1 {
                                            Fill: #222;
                                            Fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <!-- <path data-name="Rounded Rectangle 110" class="loccls-1" d="M1433,132h-15a3,3,0,0,1-3-3v-7a3,3,0,0,1,3-3h1v-2a6,6,0,0,1,6-6h1a6,6,0,0,1,6,6v2h1a3,3,0,0,1,3,3v7A3,3,0,0,1,1433,132Zm-3-15a4,4,0,0,0-4-4h-1a4,4,0,0,0-4,4v2h9v-2Zm4,5a1,1,0,0,0-1-1h-15a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h15a1,1,0,0,0,1-1v-7Zm-8,3.9v1.6a0.5,0.5,0,1,1-1,0v-1.6A1.5,1.5,0,1,1,1426,125.9Z" transform="translate(-1415 -111)"></path> -->
                            </svg>
                        </i></a><!-- /noindex -->
                    <div id="bxdynamic_header-auth-block2_end" style="display:none"></div>
                </div>
            </div>
            <div class="inner-table-block small-block nopadding inline-search-show" data-type_search="fixed">
                <!-- <div class="search-block top-btn"><i class="svg svg-search lg"></i></div> -->
            </div>
        </div>
    </div>
</div>
<div id="mobileheader" class="visible-xs visible-sm">
    <div class="mobileheader-v2">
        <form>
            <!--			mobile search bar-->
            <input type="text" placeholder="search" id="mobile-search-box" class="search-expand">
            <input type="submit">
            <!--			mobile search bar-->
            <!--		mobile search bar quick options -->
            <div class="search-options-panel d-none">
                <!--				search option item	-->
                <span class="search-option"> <img src="images/97d3a6a67f5daf82e471d9a4bc44726b.png" width="30px" height="30px"/>
        <p class="option-item"><b>Samsung Galaxy S8 </b><i>Phones & Accessories</i></p>
        </span>
                <!--				search option item-->
                <!--				search option item	-->
                <span class="search-option"> <img src="images/97d3a6a67f5daf82e471d9a4bc44726b.png" width="30px" height="30px"/>
        <p class="option-item"><b>Nikon D40</b><i>Electronics & Gadgets</i></p>
        </span>
                <!--				search option item-->
                <!--				search option item	-->
                <span class="search-option"> <img src="images/97d3a6a67f5daf82e471d9a4bc44726b.png" width="30px" height="30px"/>
        <p class="option-item"><b>Samsung TV 45" </b><i>Electronics & Gadgets</i></p>
        </span>
                <!--				search option item-->
                <!--				search option item	-->
                <span class="search-option"> <img src="images/97d3a6a67f5daf82e471d9a4bc44726b.png" width="30px" height="30px"/>
        <p class="option-item"><b>BMW X6</b><i>Cars & Vehcles</i></p>
        </span>
                <!--				search option item-->
                <!--				search option item	-->
                <span class="search-option"> <img src="images/97d3a6a67f5daf82e471d9a4bc44726b.png" width="30px" height="30px"/>
        <p class="option-item"><b>Canono T3200</b><i>Electronics & Gadgets</i></p>
        </span>
                <!--				search option item-->
            </div>
            <!--			mobile search bar quick options -->
        </form>
        <i class="txt-box-back text-black"><i data-feather="arrow-left" class="text-black"></i></i> <i class="txt-box-clear"><i data-feather="x" class="text-black"></i></i>
        <div class="burger pull-left"> <i class="svg inline  svg-inline-burger dark svg-inline-cabinet" aria-hidden="true" data-feather="menu"></i> <i class="svg inline  svg-inline-close dark" aria-hidden="true" data-feather="x">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <defs>
                        <style>
                            .cccls-1 {
                                Fill: #222;
                                Fill-rule: evenodd;
                            }
                        </style>
                    </defs>
                    <path data-name="Rounded Rectangle 114 copy 3" class="cccls-1" d="M334.411,138l6.3,6.3a1,1,0,0,1,0,1.414,0.992,0.992,0,0,1-1.408,0l-6.3-6.306-6.3,6.306a1,1,0,0,1-1.409-1.414l6.3-6.3-6.293-6.3a1,1,0,0,1,1.409-1.414l6.3,6.3,6.3-6.3A1,1,0,0,1,340.7,131.7Z" transform="translate(-325 -130)"></path>
                </svg>
            </i> </div>
        <div class="title-block col-sm-6 col-xs-5 pull-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">RevenueSure<br> <small>ePayments Portal</small></font></font> </div>
        <div class="right-icons pull-right">
            <!-- <div class="pull-right">
                <div class="wrap_icon">
                    <a href="{{url('/')}}" class="top-btn twosmallfont"> <i class="svg inline big text-white" aria-hidden="true" data-feather="home"></i> </a>
                </div>
            </div> -->
            <div class="pull-right">
                <div class="wrap_icon wrap_cabinet">
                    <div id="bxdynamic_hpowereader-auth-block3_start" style="display:none"></div>
                    <a href="{{url('/')}}" class="top-btn twosmallfont home-icon"> <i class="svg inline big text-white " aria-hidden="true" data-feather="home"></i> </a>
                    <!-- noindex -->
                    <!-- @if(Session::has('resource'))
                    <a rel="nofollow" title="log-in" class="personal-link dark-color animate-load" data-event="jqm" data-param-type="auth" data-param-backurl="/" data-name="auth" href="{{route('login')}}"> <i class="svg inline big white svg-inline-cabinet text-white" aria-hidden="true" title="log-in" data-feather="power"></i></a>
                    @else
                    <a rel="nofollow" title="log-in" class="personal-link dark-color animate-load" data-event="jqm" data-param-type="auth" data-param-backurl="/" data-name="auth" href="{{route('login')}}"> <i class="svg inline big white svg-inline-cabinet text-white" aria-hidden="true" title="log-in" data-feather="power" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"></i></a>

                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    @endif -->
                    <!-- /noindex -->
                    <div id="bxdynamic_header-auth-block3_end" style="display:none"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="mobilemenu-overlay"></div>
    <div id="mobilemenu-overlay"></div>
</div>
<div id="mobilemenu" class="leftside">
    <div class="mobilemenu-v1 scroller">
        <div class="wrap">
            <div class="prof-container">
                <div class="prof-bg-img"> <img src="img/bg/nairobibg.jpg"/> </div>
                <div class="user-dp"><img src="img/user/default-user.png"></div>
                @if(!is_null(Session::get('resource')) ) }})
                <p class="mt-2">{{Session::get('resource')['user_full_name']  }}</p>
                <p class="email-address">{{Session::get('resource')['email']  }}</p>
                <a href="{{ route('logout') }}" class="log-out" title="log out" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" title="Close Account">
                    <i class="icon-off">
                            <!-- <i data-feather="power"></i> -->
                        </i>
                </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>

                @else
                <p class="mt-2">
                    <a href="{{route('login')}}" class="wrap"><span class="name  btn btn-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sign in</font></font></a>

                </p>
                @endif

            </div>
            <div class="menu top">
                <ul class="top  ">
                    <li>
                        <!--my profile-->
                        <a class="dark-color parent" title="Account details"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">   My account</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My Account</font></font></a></li>
                            <!--my profile links-->
                            <li> <a class="dark-color" href="{{route('client-profile')}}" title="check out your profile details"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My profile</font></font></span> </a> </li>
                            <!--my profile links-->
                            <!-- <li> <a class="dark-color" href="#" title="My ads"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Transactions history</font><span class="count-item d-none">0</span></font></span> </a> </li> -->
                            <!--my profile links-->
                            <!-- <li> <a class="dark-color" href="#" title="Your registered assets"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My assets</font><span class="count-item">0</span></font></span> </a> </li> -->
                            <!--my profile links-->
                            <!-- <li> <a class="dark-color" href="#" title="your created bills"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">My bills</font><span class="count-item">0</span></font></span> </a> </li> -->
                            <!--my profile links-->
                            <!-- <li> <a class="dark-color" href="#" title="change your account's password"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Change password</font></font></span> </a> </li> -->
                            <!--my profile links-->
                            <!-- <li> <a class="dark-color" href="#" title="log out my account"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">log out</font><span class="count-item d-none">0</span></font></span> </a> </li> -->
                        </ul>
                    </li>
                    <li class="selected"> <a class="dark-color parent"  title="Trade License"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trade License</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trade License</font></font></a></li>
                            <li> <a class="dark-color" href="{{route('renew-business-permit')}}" title="renew permit for an existing business"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Renew Trade License</font></font></span></a> </li>
                            <!--category-->
                            <li> <a class="dark-color" href="{{route('register-business')}}" title="register a new business"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register new business</font></font></span></a> </li>
                            <li> <a class="dark-color" href="{{route('get-permit-form')}}" title="register a new business"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print permit</font></font></span></a> </li>
                            <li> <a class="dark-color get-a-receipt" title="print a receipt"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print receipt</font></font></span> </a> </li>
                            <!--category-->
                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="Land rates"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Land rates</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				land rate sub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Land rates</font></font></a></li>
                            <!--				land rate sub menu-->
                            <li> <a class="dark-color" href="{{route('land-rates')}}" title="pay for your land rates"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pay land rate</font></font></span> </a> </li>
                            <!--				land rate sub menu-->
                            <li> <a class="dark-color get-a-receipt" title="print a receipt"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print receipt</font></font></span> </a> </li>
                            <!--				land rate sub menu-->
                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="county rental fees"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rent</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				rents ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rent</font></font></a></li>

                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('house-rents')}}" title="pay for house rents"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">House rent</font></font></span> </a> </li>
                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('market-rents')}}" title="pay for stall rents"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stall rent</font></font></span> </a> </li>
                            <!--				rents ssub menu-->
                            <li> <a class="dark-color get-a-receipt" title="print a receipt"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print receipt </font></font></span> </a> </li>
                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="Company"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parking</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				rents ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parking</font></font></a></li>
                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('daily-parking')}}" title="pay for your daily parking"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Daily parking</font></font></span> </a> </li>
                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('seasonal-parking')}}" title="parking fee for seasonal parking"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seasonal parking</font></font></span> </a> </li>

                            <!--				rents ssub menu-->
                            <!-- <li> <a class="dark-color" href="#" title="parking for a fleet of cars"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sacco parking</font></font></span> </a> </li> -->

                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('offstreet-parking')}}" title="offstreet parking"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Offstreet parking</font></font></span> </a> </li>

                            <!--				rents ssub menu-->
                            <li> <a class="dark-color" href="{{route('parking-penalties')}}" title="parking penalties"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penalties</font></font></span> </a> </li>

                            <li> <a class="dark-color" href="{{route('view-seasonal-stickers')}}" title="print seasonal parking stickers"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print seasonal parking stickers</font></font></span> </a> </li>

                            <!--				rents ssub menu-->
                            <li> <a class="dark-color get-a-receipt" href="#" title="transactions receipts"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parking receipts</font></font></span> </a> </li>
                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="county bills"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">County bills</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				bills ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">County bills</font></font></a></li>

                            <!--				bills ssub menu-->
                            <li> <a class="dark-color" href="{{route('pay-bill')}}" title="pay for an already created county bill"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pay for a bill</font></font></span> </a> </li>
                            <!--				bills  ssub menu-->
                            <li> <a class="dark-color get-a-receipt" href="#" title="print a bill"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print receipt</font></font></span> </a> </li>
                            <!--				bills ssub menu-->

                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="Food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Food Handlers</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				bills ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Food Handlers</font></font></a></li>

                            <!--				bills ssub menu-->
                            <li> <a class="dark-color" href="{{route('create-food-handlers-bill')}}" title="apply for food hygiene certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apply for food handlers certificate</font></font></span> </a> </li>
                            <li> <a class="dark-color" href="{{route('health-application')}}" title="Renew food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Renew food handlers certificate</font></font></span> </a> </li>
                            <!--				bills  ssub menu-->
                            <li> <a class="dark-color" href="{{route('health-credentials')}}" title="print food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print certificate</font></font></span> </a> </li>
                            <li class="menu-item"> <a href="{{route('print-health-slip')}}" title="print a food handlers certificate" style="white-space: normal;"> <span class="name pb-1"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">Get result slip</font> </font> </span> </a> </li>

                            <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                            <!--				bills ssub menu-->

                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="Food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Food Hygiene</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				bills ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Food Hygiene</font></font></a></li>

                            <!--				bills ssub menu-->
                            <li> <a class="dark-color" href="{{ route('food-hygiene-business-details') }}" title="apply for food hygiene License"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apply for food hygiene License</font></font></span> </a> </li>
                            <li> <a class="dark-color" href="{{route('renew-food-hygiene')}}" title="Renew  food hygiene license"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Renew  food hygiene License</font></font></span> </a> </li>
                            <!--				bills  ssub menu-->
                            <li> <a class="dark-color" href="{{route('get-corp-cert-form')}}" title="print food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Print certificate</font></font></span> </a> </li>
                            <li><a href="#" class="get-a-receipt">Print receipt </a></li>
                            <!--				bills ssub menu-->

                        </ul>
                    </li>
                    <li> <a class="dark-color parent" title="Food handlers certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Corparete</font></font></span> <span class="arrow"><i class="text-black" data-feather="chevron-right"></i></span> </a>
                        <ul class="dropdown">
                            <li class="menu_back"><a  class="dark-color  d-flex align-items-center" rel="nofollow"><i class="text-black" data-feather="arrow-left"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Go back</font></font></a></li>
                            <!--				bills ssub menu-->
                            <li class="menu_title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Corporate</font></font></a></li>

                            <!--				bills ssub menu-->
                            <li> <a class="dark-color" href="{{  route('get-corporate') }}" title="apply for food hygiene certificate"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Get Started</font></font></span> </a> </li>

                            <!--				bills ssub menu-->

                        </ul>
                    </li>


                </ul>
               <ul>
                <li class="help-show">
                    <a class="dark-color" title="Help you with something">
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Help</font></font></span></span>
                    </a>
                </li>
                <li class="">
                    <a class="dark-color" title="NBK branches">
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NBK Branches</font></font></span></span>
                    </a>
                </li>
                </ul>
                <!--my profile-->

            </div>
        </div>
    </div>
</div>
<div id="mobilemenu-overlay"></div>

<!-- old	search receipt pop up-->
<!-- <section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="search-receipt">
    <div class="container p-5">
        <div class="row p-5">
            <div class="receipt-search-container m-5 d-flex flex-column-md animated" id="get-receipt-container">
                <div class="col-lg-6 receipt-img-container">
                    <div class="col-lg-8 col-md-12 position-relative p-5">
                        <h2 class="mb-4   text-white">Print a receipt for a transaction</h2>

                    </div>
                </div>
                <div class="col-lg-6 p-5 position-relative">
                    <span class="close-receipt-form position-absolute"> <i data-feather="x"></i></span>
                    <form class="transaction-info" target="new" action="{{route('generate-receipt')}}">
                        <div class="">
                            <h4 class="mb-5 pb-2  ">Correctly fill in the form below to continue</h4>
                        </div>
                        <div class="row m-0">



                        </div>

                        <div class="row m-0">

                            <div class="form-group col-sm-12 pl-md-0 mb-3">
                                <label for="identifier" class=" "><small>Enter the bill number</small></label>
                                <input type="text" class="form-control" id="identifier" placeholder="eg MS1908-23253" required name="bill_number" value="{{old('bill_number')}}">
                            </div>
                            <div class="col-sm-2 float-right d-none" id="loader" >
                                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
                              </div>
                        </div>
                        <div class="row m-0">
                            <button  href="" id="receipt-print" class="btn btn-primary loader  text-white font-14 submit-btn">get receipt</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- end of old receipt form -->

<!-- new search receipt -->
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="search-receipt">
  <div class="container p-5">
    <div class="row p-5">
      <div class="receipt-search-container m-5 d-flex flex-column-md animated" id="get-receipt-container">
        <div class="col-lg-6 receipt-img-container">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4  text-white">Print a receipt for a transaction</h2>
            <p class="font-14 mb-3 ">Make sure all inputs are correct.</p>
          </div>
        </div>
        <div class="col-lg-6 p-5 position-relative">
            <span class="close-receipt-form position-absolute"> <i data-feather="x"></i></span>
          <form class="transaction-info" action="{{route('get-receipt-details')}}" method="post" target="_blank">
            @csrf
            <div class="">
              <h4 class="mb-5 pb-2">Correctly fill in the form below to continue</h4>
            </div>
            <div class="row m-0 d-none">

                <div  class="form-group col-sm-12 pl-md-0">
                  <label for="sel1"><small>What was the transaction type?</small></label>
                  <select class="form-control mb-3" id="sel1" required name="type">
                    <option value="parking">Parking</option>
                    <option value="sbp">Trade License</option>
                    <option value="land" class="">Land rates</option>
                    <option value="rents" class="">House or market rents</option>
                    <option value="health" class="">Food handlers</option>
                    <option value="bills" class="">County bills</option>
                    <option></option>
                  </select>
                </div>

            </div>
            <div class="row m-0">

            <div class="form-group col-sm-12 pl-md-0 mb-3">
              <label for="identifier" class=""><small>Unique identifier for transaction eg bill number etc</small></label>
              <input type="text" class="form-control" id="billNo" placeholder="Bill Number" name="billNo" value="{{old('billNo')}}" required>
            </div>
            <button type="submit" class="btn btn-primary  text-white font-14 submit-btn"><i class="fa fa-print"></i> Print Receipt</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of new search receipt -->

<!--	search receipt pop up-->
<!--		navigation bar -->
<!-- header -->
<!--	MENU CONTROLS-->
<!-- help section -->
<div class="col-sm-12 col-md-4 col-xl-3 help-container right-neg100">
    <div class="help-section">
        <div class="help-btns help-header">
            <div class="back d-none"><i class="ti-arrow-left"></i><span class="ml-3">Back</span></div>
            <h2>Help</h2>
            <div class="close"><i class="ti-close"></i></div>
        </div>
        <div class="help-topics">
            <h1>Common questions</h1>

            <div class="the-quizs">
                <p>How do I create an account?</P>
                    <ol type="1" class="animated d-none">
                        <h3>How do I create an online account?</h3>
                        <p><strong>Follow the following easy steps while creating an account with RevenueSure portal</strong></P>
                        <li>Click <a target="_blank" href="{{route('register')}}">here</a> or the <strong>sign up</strong>  option on the navigation bar.</li>
                        <li>Fill in the form that appears correctly.</li>
                        <li>Click on the create button to finish account creation.</li>
                    </ol>
                <p>What services can I access?</P>
                    <ol type="1"  class="animated d-none">
                        <h3>What services can I access?</h3>
                        <p><strong>You can pay for the following services using any of our ePayments platforms</strong></P>
                        <li>Parking (daily parking, seasonal parking and offstreet parking including payment of parking penalties).</li>
                        <li>Trade License(It includes business registration and renewal of business permits) </li>
                        <li>Rent payments (for houses and markets stalls).</li>
                        <li>Land rates (you can pay your annual land rates and penalties).</li>
                        <li>Food handlers certificate (health department)</li>
                        <li>County bills eg court fees and every other bill created at the county</li>
                    </ol>
                <p>I have forgotten my RevenueSure self service portal password. How do I recover my account?</p>
                <ol type="1"  class="animated d-none">
                    <h3>I have forgotten my RevenueSure self service portal password. How do I recover my account?</h3>
                    <p><strong>Follow the following easy steps when trying to recover a forgotten password for an existing account.</strong></P>
                    <li>Click <a target="_blank" href="{{route('forgot-password')}}">here</a> or on the sign in link on the navigation bar.</li>
                    <li>Click on the forgot password link that is located immediately below the password text box.</li>
                    <li>Enter your email address on the available field then click get password.</li>
                    <li>A 4 digit PIN will be sent to the phone number under which the account was created  and you will be redirected to the login page.</li>
                    <li>At this point you will be required to enter your email address and the PIN as your new password</li>
                </ol>
                <p>Can I make payments via bank transfer? (RTGS / EFT/ Pesalink)</p>
                    <ol class="d-none animated" type="1">
                        <h3>Can I make payments via bank transfer? (RTGS / EFT/ Pesalink)</h3>
                    <p><strong>Yes, you can print a bill for all services except daily and offstreet parking to be used at any NBK Branch</strong></P>

                    </ol>
                <p>Can I pay for county services without necessarily opening an ePayments account?</p>
                <ol type="1"  class="animated d-none">
                    <h3>Do I need an account to pay for the services?</h3>
                    <p><strong>Only parking and County bills services are available without an account. Kindly create an account to get the best experience on the portal.</strong></P>


                </ol>


                <p>What are the current daily parking charges?</p>
                <ol class="d-none animated wobble parking-charges" type="1">
                    <h1>Daily parking charges</h1>
                        <li>Please click <a href="{{route('daily-parking')}}">here</a> and select the  parking zone and vehicle type to check the current parking rates.</li>
                </ol>

                <p>How can I get to know more about RevenueSure?</p>
                    <ol class="d-none animated" type="1">
                        <h1>Get to know more about RevenueSure</h1>
                    <p> You can contact NCC Contact Centre on telephone 0793072903 </P>
                    </ol>
                    <p>How do I pay for services that are not listed on your ePayments platforms??</p>
                    <ol class="d-none animated" type="1">
                        <h1>Paying for unlisted services</h1>
                        <p><strong>Follow the following easy steps so as to pay for unlisted services</strong> </P>
                            <li>Visit the cash office located at City hall </li>
                            <li>While with the teller, describe what you would like to pay for </li>
                            <li>A bill will be created for you</li>
                            <li class="mb-4">Pay for your specific bill using the web portal on the <strong>County Bills</strong> section</li>
                            <hr>
                            <p class="my-4"><strong>Map View of city hall location</strong></p>
                            <div class=" w-100 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8137988946187!2d36.82066761534033!3d-1.2857300359896378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d7ae63e7f7%3A0x3af232b38a4c4641!2sCity%20Hall%20Annex%20Basement!5e0!3m2!1sen!2ske!4v1581512543365!5m2!1sen!2ske" width="100%" height="35%"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </ol>
            </div>
        </div>
    </div>
</div>

<section class="not-found-section animated d-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 h-sm-100vh  col-md-4 col-lg-4 not-found-container p-5 animated zoomInUp">
                <div class="close"><i class="ti-close"></i></div>
                <img src="img\no-receipt.jpg">
                <h4>Pending Bill payment</h4>
                <p id="unpaid_bill"></p>
                <p>Click <a href="{{route('pay-bill')}}"><strong>here</strong></a> to complete payment</p>
                <p></p>
            </div>
        </div>
    </div>
</section>

@if(Session::has('unpaid'))
<section class="not-found-section animated">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 h-sm-100vh  col-md-4 col-lg-4 not-found-container p-5 animated zoomInUp">
                <div class="close"><i class="ti-close"></i></div>
                <img src="img\no-receipt.jpg">
                <h4>Pending Bill payment</h4>
                <p>{{Session::get('unpaid')}}</p>
                <p>Click <a href="{{route('pay-bill')}}"><strong>here</strong></a> to complete payment</p>
                <p></p>
            </div>

        </div>
    </div>
</section>
@endif


@yield('content')


<!-- download -->
<section id="download" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>RevenueSure ePayments Platforms</h2>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- download-app -->
            <div class="col-md 4 col-sm-4"> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nouveta.new_nccg" class="download-app mb-2"> <img src="{{asset('img/logo/google-play.png')}}" alt="Image" class="img-responsive"> <span class=""> <span>available on</span> <strong class="text-white d-block" style="
                font-size: 25px;
            ">Google Play</strong> </span> </a> </div>
            <!-- download-app -->

            <!-- download-app -->
            <div class="col-md 4 col-sm-4"> <a href="tel:*235%23" class="download-app mb-2 "> <img src="{{asset('img/logo/ussd.svg')}}" alt="Image" class="img-responsive"> <span class=""> <span >USSD services</span> <strong class="text-white d-block" style="
                font-size: 25px;
            ">*000#</strong> </span> </a> </div>
            <!-- download-app -->
            <div class="col-md 4 col-sm-4"> <a href="{{route('nbk-branches')}}" class="download-app mb-2"> <img src="{{asset('img/bank.svg')}}" alt="Image" class="img-responsive"> <span class="text-left"> <span >Bank & Agents</span> <strong class="text-white d-block" style="
                font-size: 25px;
            ">Bank Payments</strong> </span> </a> </div>

            <!-- download-app -->
            <!-- <div class="col-sm-4"> <a href="#" class="download-app mb-2"> <img src="img/logo/web.svg" alt="Image" class="img-responsive"> <span class="pull-left"> <span>available on</span> <strong class="text-white">Web Portal</strong> </span> </a> </div> -->
            <!-- download-app -->
        </div>
        <!-- row -->
    </div>
    <!-- contaioner -->
</section>
<!-- download -->

<!--	pop up section-->
<!--<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center d-none animated" id="pop">
    <div class="container">
        <div class="row">
            <div class="coll-12">
                <div class="pop-item p-5 plposition-relative animated m-5"> <a href="#" class="close-pop position-absolute text-white"><i data-feather="x"></i></a>
                    <div class="col-sm-10 col-md-8 col-lg-6 p-md-5"> <span class="text-uppercase p-3 bg-light-green mb-3 font-12">made simple</span>
                        <h2 class="mb-4 mt-4   text-white">make your transactions seamless</h2>
                        <p class="font-14 mb-3  ">make your experience while transacting simple and easy by registering for an account. by doing so you will get to store your assests and track your transactions history.</p>
                        <form class="mb-5 form-inline">
                            <input type="email" class="form-control font-14 mr-3 mb-3"   title="enter email address" placeholder="Enter email to continue">
                            <button type="submit" class="btn btn-secondary px-4 font-14 text-black mb-3">Continue</button>
                        </form>
                        <a class="d-flex align-items-center text-white pt-4" href="#"> <span class="pop-pointer mr-2"><i data-feather="chevron-right"></i></span>
                            <span class=" ">Or Login to your account</span> </a> </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--	pop up section-->

<!-- chatting API -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-067635cb-20b1-4640-aedf-0baf632e220d"></div>
<!-- chatting API -->


<!--			footer-->
<footer id="footer" class="clearfix">
    <!-- footer-top -->
    <section class="footer-top clearfix bg-dark  ">
        <div class="container">
            <div class="row">
                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget news-letter mb-5">
                        <div class="">
                            <h3 class="text-white  ">RevenueSure Self Service portal</h3>
                            <p class="font-12">Make payments easily and quickly. Create an account and get to enjoy paying for services online.</p>
                        </div>
                        <div class="social-media mb-3">
                            <span><a href="https://www.facebook.com/CountyGovernment047/" target="new" title="visit our facebook page"><i data-feather="facebook"></i></a></span>
                            <span><a href="https://twitter.com/047County" target="new" title="visit our twitter page"><i data-feather="twitter"></i></a></span>
                            <span><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxTmGqvPkXzJdZvlpKHHhMcdlJPhwRzxRPcpvQWgxSZGkhfKCVgfxNsKmrzdBKSxNjhKMN" target="new" title="contact us via email"><i data-feather="mail"></i></a></span>
                        </div>
                        <a href="https://revenuesure.co.ke/" target="new"><img src="{{asset('img/logo/rev-white-text.png')}}" height="60px;" class="pr-2"> </div></a>
                </div>
                <!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget mb-5">
                        <h3 class="text-white">Information links</h3>
                        <ul>
                            <li><a class="help-show" href="#">FAQ</a></li>
                            <li><a href="{{route('privacy-policy')}}">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget social-widget mb-5">
                        <h3 class="text-white">Quick links</h3>
                        <ul>
                            <li><a href="{{route('client-profile')}}">My profile</a></li>
                            <li><a href="{{route('daily-parking')}}">Daily parking</a></li>
                            <li><a href="{{route('parking-penalties')}}">Parking penalties</a></li>
                            <li><a href="{{route('pay-bill')}}">Pay for county bills</a></li>
                            <li><a href="{{route('seasonal-parking')}}">Seasonal parking</a></li>
                            <li><a href="{{route('create-food-handlers-bill')}}">Apply for a food handlers certificate</a></li>

                        </ul>
                    </div>
                </div>

                <!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-sm-3">
                    <div class="footer-widget news-letter mb-5">
                        <!-- <h3 class="text-white  ">Android app</h3> -->
                        <p class="font-12 text-white">A Product of</p>
                        <a href="https://nouveta.tech/" target="blank" title="visit our website"> <img src="{{asset('img/logo/nouveta-white.png')}}" class="footer_img" height="90px"></a>
                        <!-- form -->
                        <form action="" class="d-none">
                            <input type="email" class="form-control" placeholder="Your E-mail">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                        <!-- form -->
                    </div>
                </div>
                <!-- footer-widget -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- footer-top -->

    <div class="footer-bottom clearfix  bg-dark">
        <div class="container">
            <p class="d-none">Copyright © 2018 Kemiio </p>
            <div class="row">
                <div class="col-6 p-md-0 px-sm-3">
                    <p class="  m-0 text-white font-12">RevenueSure self service portal helpline</p>
                    <h4 class="SiteStat-value text-white"><a href="tel:+254770387419" class="te">+254 770 387419</a></h4>
                </div>
                <!-- <div class="col-6 px-sm-3 p-md-0"> <img src="{{asset('img/logo/epay-gen.svg')}}" class="float-right" height="35px"> </div> -->
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
</footer>
<!--footer-->
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f72ef24f0e7167d00149d02/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!--scripts-->


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popmotion.global.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<!-- <script async="async" type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('js/cleave.js')}}"></script>
<script type="text/javascript" src="{{asset('js/submenuSlider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dropify2.js')}}"></script>
<script>
    $('.dropify').dropify();
</script>
<script type="text/javascript">
    var audio1 = document.getElementById("audioID");

    //Example of an HTML Audio/Video Method

    function playAudio() {
        audio1.play();
    }
    feather.replace();
</script>
<script type="text/javascript">
  $(document).ready(function() {

      $(".select2").select2();


    });
</script>

<script type="text/javascript">
    function showreceiptform(){
        $('#search-receipt').removeClass('zoomOut');
        $('#search-receipt').removeClass('d-none');
        $('#search-receipt').addClass('fadeIn');
        $('#get-receipt-container').removeClass('rollOut');
        $('#get-receipt-container').addClass('tada');
    }

    $('.close-receipt-form').on('click',function(){
        closereceiptform();
    });

    $('#get-a-receipt').on('click',function(){
        showreceiptform();
    });

    $('.get-a-receipt').on('click',function(){
        showreceiptform();
    });

    $('#get-bill-num').on('click', function(){
		var the_bill_num=$(this).parent().parent().siblings('.some-info').children().children('.the-bill-num').text();
        // alert(the_bill_num);
        $('.transaction-info #identifier').val(the_bill_num);
        $('.transaction-info #sel1').val("health");

	});

    function closereceiptform(){
        setTimeout($('#search-receipt').addClass('d-none'),2000);
        $('#search-receipt').removeClass('fadeIn');
        $('#get-receipt-container').removeClass('tada');

        $('#search-receipt').addClass('zoomOut');
        $('#get-receipt-container').addClass('rollOut');

    }

    $('.loader').on('click',function(){
        if($('#identifier').val() != '')
        $('#loader').removeClass('d-none');
        $('#loader').delay(5000).addClass('d-none');
    });

    $('.close').on('click', function(){
	$('.not-found-section').addClass('d-none');

    });

    $('#get-a-receipt').on('click',function(){
		$('#identifier').focus()
	});



</script>
<script type="text/javascript">
    $("#receipt-print").click(function(e){

      e.preventDefault();
      var bill_number = $("input[name=bill_number]").val();
      var type = $("select[name=type]").val();


      if(bill_number == "")
      {
        $('#identifier').addClass('border-danger');
        return;
      }


      $('#loader2').removeClass('d-none');
      $.ajax({

        url: "<?php echo url('generate-receipt')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {bill_number:bill_number, type:type},

        success:function(data){
          $('#loader2').addClass('d-none');
          console.log(data);
            if(data.status_code !=200)
            {
                closereceiptform();
                document.getElementById("unpaid_bill").innerHTML = 'The reference number ' +bill_number + ' has no payment.';
                $('.not-found-section').removeClass('d-none');
                return;
            }
            else
              {
                window.location = "view-receipt/" +bill_number;
              }



          // if(data.response_data.billInfo)


        }
        });

    } );
</script>

@yield('scripts')
<!--scripts-->
</body>
</html>
