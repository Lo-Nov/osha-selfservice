@extends('layouts.app')
@section('content')
    <section id="home-one-info" class="homebg">
        <!-- view-ad -->
        <div id="home-section" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6  margin-120">
                        <h2 class=" mt-5 mb-3">Welcome to</h2>
                        <h2 class=" mt-0 mb-3">Self service portal</h2>
                        <h1 style="color: #fff" class="mt-3 d-none">Self service portal</h1>
                        @if(is_null(Session::get('resource')))
                        <p class="">Make payments easily and quickly. Create an account and get to enjoy paying for your services online.</p>
                        @else
                        <p class="">Access county services and make payments online conveniently and fast.</p>
                        @endif
                        @if (is_null(Session::get('resource')))
                        <div class="ad-btn"><a href="{{ route('register') }}" class="btn btn-secondary px-5 py-3 text-black text-uppercase">sign up</a> <a href="#services" class="btn btn-secondary px-5 py-3 text-black text-uppercase">Services</a> </div>
                        <div class="ad-btn">  </div>
                            @else

                        @endif

                    </div>
                    <div class="col-sm-6 text-center  phone-container d-none d-md-block  d-lg-block">
                        <img src="img/landing page images/phone.png" class="img animated hand-phone">
                        <div class="shadow d-none"></div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- contaioner -->
        </div>
        <!-- view-ad -->

        <!--    mobile view services-->
        <row class="hidden-links-container">
            <div class="col-lg-5 sub-link-container sub-link-container2">

                <!--            unified busines permit sub-links-->
                <div class="sub-link unified-biz-permit1 left" id="unified-biz-permit">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/case.svg"> </div>
                        <p>Trade License</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>
                        <li class="d-flex"><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('renew-business-permit')}}">Renew Trade License</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('register-business')}}">Register new business</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('get-permit-form')}}">Print permit</a></li>
                        <li><i class="fas fa-arrow-right " data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>
                    </ul>
                </div>
                <!--            unified busines permit sub-links-->
                <!--            land rates-->
                <div class="sub-link land-rate1 left" id="land-rate">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/land.svg"> </div>
                        <p>Land rates</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>
                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('land-rates')}}">Pay land rate</a></li>
                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>


                    </ul>
                </div>
                <!--            land rates-->
                <!--            Rent sub-links-->
                <div class="sub-link rent1 left" id="Rent">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/key.svg"> </div>
                        <p>Rent</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>

                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('house-rents')}}">House rent</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('market-rents')}}">Market rent</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt</a></li>
                    </ul>
                </div>
                <!--            unified busines permit sub-links-->
                <!--            parking sub-links-->
                <div class="sub-link parking1 left" id="parking">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/parking.svg"> </div>
                        <p>Parking</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('daily-parking')}}">Daily parking</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('seasonal-parking')}}">Seasonal parking</a></li>
                        <!--        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="">Sacco</a></li>-->
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('offstreet-parking')}}">Offstreet parking</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('parking-penalties')}}">Penalties</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('view-seasonal-stickers')}}">Print seasonal parking stickers</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('view-seasonal-stickers')}}">Print seasonal parking stickers</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a  class="get-a-receipt">Print receipt</a></li>
                    </ul>
                </div>
                <!--            unified busines permit sub-links-->
                <!--            wallet sub-links-->
                <div class="sub-link wallet1 left" id="wallet">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/bill.svg"> </div>
                        <p>County bills</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('pay-bill')}}">Pay for a bill</a> </li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt </a></li>
                    </ul>
                </div>
                <!--            wallet sub-links-->
                <!--            wallet sub-links-->
                <div class="sub-link construction1 left" id="construction">
                    <div class="subicon">

                        <div> <img src="img/new-icons/line/food-handlers.svg"> </div>
                        <p class="">Food Handlers</p>
                        <small>Proceed to any of the following options:</small> </div>
                    <ul>

                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('apply-food-handler')}}">Apply</a></li>
                        {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('create-food-handlers-bill')}}">Apply for food handlers certificate</a></li>  --}}
                         <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('renew-handler')}}">Renew</a></li>
                         {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-application')}}">Renew food handlers certificate</a></li>  --}}
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('print-handler-cert')}}">Print Cert</a></li>
                         <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('print-health-slip')}}">Get result Slip</a></li>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt </a></li>

                    </ul>
                </div>
                <!--            wallet sub-links-->


                 <!--            wallet sub-links-->
                 <div class="sub-link hygiene1 left" id="hygiene">
                    <div class="subicon">

                        <div> <img src="img/new-icons/line/nutrition.svg"> </div>
                        <p class="">Food Hygiene</p>
                        <small>Select an option from the menu:</small> </div>
                    <ul>
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('food-hygiene-business-details')}}" title="apply for food  hygiene license">Apply for food Hygiene license </a></li>
                        {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('create-food-handlers-bill')}}">Apply for food handlers certificate</a></li>  --}}
                         <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a  h href="{{route('renew-food-hygiene')}}" title="renew food hygiene license">Renew food hygiene license</a></li>
                         {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-application')}}">Renew food handlers certificate</a></li>  --}}
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a   href="{{route('get-corp-cert-form')}}" title="print a food hygiene license" title="print a food Food Hygiene">Print Food hygiene License</a></li>
                        {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-credentials')}}">Print certificate</a></li>  --}}
                        <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt </a></li>


                    </ul>
                </div>
                <!--            wallet sub-links-->
                <!--            wallet sub-links-->
                <div class="sub-link corporate1 left" id="corporate">
                    <div class="subicon">
                        <div> <img src="img/new-icons/line/cooporate.svg"> </div>
                        <p class="">Corporate</p>
                        <small>Using this option you can register your business, say a hotel business and enable you to generate certificates for your staff memebers.</small> </div>
                        <ul>
                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('food-hygiene-business-details')}}" title="apply for food hygiene certificate">Get started </a></li>
                        </ul>
                </div>
                <!--            wallet sub-links-->

            </div>
        </row>
        <!--    mobile view services-->

        <div class="container">
            <div class="row">
                <!-- row -->

                <!--                services go here-->

                <div class="container" id="services">
                    <div class="section services position-relative p-md-5 p-sm-4" >
                        <!-- single-service -->
                        <div class="col-sm-12  position-relative p-0">
                            <h2>Services</h2>
                            <p>Browse through the county services that are available to be paid for online</p>
                            <hr>
                        </div>
                        <section class="options-container p-0" id="options-container">
                            <div class="row p-0">
                                <div class="col-lg-8">
                                    <div class="col-md-3 col-lg-3 col-sm-6 option parking">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/parking.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Parking Fees</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Pay or top up your daily, seasonal & off-street parking & also pay for your parking penalties if any.</p>
                                            <span>
              <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <rect Fill="none" width="25" height="25" />
                  <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                  <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                </svg>
              </div>
              More </span> </div>
                                        <!--                more information about the option-->
                                    </div>
                                    <!--            option unified business permit-->
                                    <div class="col-md-3 col-lg-3 col-sm-6 option business-permit">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/case.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Trade License</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Using this option you can register, renew or print your County business permits.</p>
                                            <span>
              <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <rect Fill="none" width="25" height="25" />
                  <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                  <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                </svg>
              </div>
              More </span> </div>
                                        <!--                more information about the option-->
                                    </div>
                                    <!--            end of option-->
                                    <!--            option Rent payment-->
                                    <div class="col-md-3 col-lg-3 col-sm-6  option rents">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/key.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Rent</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Click here to pay your house and stall rent. </p>
                                            <span>
              <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <rect Fill="none" width="25" height="25" />
                  <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                  <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                </svg>
              </div>
              More </span> </div>
                                        <!--                more information about the option-->
                                    </div>
                                    <!--            end of option-->
                                    <!--            option landrates-->
                                    <div class="col-md-3 col-lg-3 col-sm-6 option land-rates">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/house.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Land rates</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p> Click here to pay for your land rates.</p>
                                            <span>
              <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <rect Fill="none" width="25" height="25" />
                  <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                  <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                </svg>
              </div>
              More </span> </div>
                                        <!--                more information about the option-->
                                    </div>
                                    <!--            end of option-->

                                    <!--            option parking fees-->

                                    <!--            end of option-->
                                    <!--            option-->
                                    <div class="col-md-3 col-lg-3 col-sm-6  option E-Wallet">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/receipt.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>County Bills</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Not sure where your county fees are to be paid for?  Visit this link to pay for them.</p>
                                            <span>
              <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <rect Fill="none" width="25" height="25" />
                  <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                  <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                </svg>
              </div>
              More </span> </div>
                                        <!--                more information about the option-->
                                    </div>
                                    <!--            end of option-->

                                    <!--            end of option-->
                                    <!--option-->
                                    <div class="col-md-3 col-lg-3 col-sm-6  option construction">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/food-handlers.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Food Handler</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Click this option to apply for or print your food handlers or food handler certificate.</p>
                                            <span>
                                        <div>
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                                            <rect Fill="none" width="25" height="25" />
                                            <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                                            <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                                            </svg>
                                        </div>More </span> </div>
                                        <!--more information about the option-->
                                    </div>
                                    <!--  end of option-->
                                     <!--option-->
                                     <div class="col-md-3 col-lg-3 col-sm-6  option hygiene">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/nutrition.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Food Hygiene</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Click this option to apply for or print your food handlers or Food Hygiene license.</p>
                                            <span>
                                        <div>
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                                            <rect Fill="none" width="25" height="25" />
                                            <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                                            <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                                            </svg>
                                        </div>More </span> </div>
                                        <!--more information about the option-->
                                    </div>
                                    <!--  end of option-->

                                      <!--option-->
                                      <div class="col-md-3 col-lg-3 col-sm-6  option corporate">
                                        <div class="active-triangle display-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.5px" height="33.5px">
                                                <path Fill-rule="evenodd" stroke="#066130" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" Fill="#066130" d="M38.084,1.007 L1.015,1.007 L1.015,31.423 L38.084,1.007 Z" />
                                            </svg>
                                        </div>
                                        <div class="icon-container"><img src="img/new-icons/cooporate.svg"></div>
                                        <div class="circular-bg"></div>
                                        <p>Corporate</p>
                                        <!--                more information about the option-->
                                        <div class="options-info left">
                                            <p>Register your business for corporate services.</p>
                                            <span>
                                        <div>
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                                            <rect Fill="none" width="25" height="25" />
                                            <polyline Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.946,35.891 9.057,25 19.947,14.11 " />
                                            <line Fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="41" y1="25" x2="9.662" y2="25" />
                                            </svg>
                                        </div>More </span> </div>
                                        <!--more information about the option-->
                                    </div>
                                    <!--  end of option-->

                                </div>
                                <div class="col-lg-4 sub-link-container desktop-link pd-0 ">
                                    <!--            unified busines permit sub-links-->
                                    <div class="sub-link unified-biz-permit1 left" id="unified-biz-permit">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/case.svg"> </div>
                                            <p>Trade License</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li class="d-flex"><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('renew-business-permit')}}">Renew Trade License</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('register-business')}}">Register new business</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('get-permit-form')}}">Print permit</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>

                                        </ul>
                                    </div>
                                    <!--            unified busines permit sub-links-->
                                    <!--            land rates-->
                                    <div class="sub-link land-rate1 left" id="land-rate">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/land.svg"> </div>
                                            <p>Land rates</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('land-rates')}}">Pay land rate</a></li>

                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>
                                        </ul>
                                    </div>
                                    <!--            land rates-->
                                    <!--            Rent sub-links-->
                                    <div class="sub-link rent1 left" id="Rent">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/key.svg"> </div>
                                            <p>Rent</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('house-rents')}}">House rent</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('market-rents')}}">Market rent</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>
                                        </ul>
                                    </div>
                                    <!--            unified busines permit sub-links-->
                                    <!--            parking sub-links-->
                                    <div class="sub-link parking1 left" id="parking">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/parking.svg"> </div>
                                            <p>Parking</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('daily-parking')}}">Daily parking</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('seasonal-parking')}}">Seasonal parking</a></li>
                                            <!--              <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="">Sacco</a></li>-->
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('offstreet-parking')}}">Offstreet parking</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('parking-penalties')}}">Penalties</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('view-seasonal-stickers')}}">Print seasonal parking stickers</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>
                                        </ul>
                                    </div>
                                    <!--            unified busines permit sub-links-->
                                    <!--            wallet sub-links-->
                                    <div class="sub-link wallet1 left" id="wallet">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/bill.svg"> </div>
                                            <p>County bills</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <!-- <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('create-bill')}}">create a bill</a> </li> -->
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('pay-bill')}}">Pay a bill</a> </li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a class="get-a-receipt">Print receipt</a></li>
                                        </ul>
                                    </div>
                                    <!--            wallet sub-links-->
                                    <!--            wallet sub-links-->
                                    <div class="sub-link construction1 left" id="construction">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/food-handlers.svg"> </div>
                                            <p class="">Food Handlers</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('apply-food-handler')}}">Apply for food handlers certificate</a></li>
                                            {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('create-food-handlers-bill')}}">Apply for food handlers certificate</a></li>  --}}
                                             <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('renew-handler')}}">Renew food handlers certificate</a></li>
                                             {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-application')}}">Renew food handlers certificate</a></li>  --}}
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('print-handler-cert')}}">Print certificate</a></li>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('print-health-slip')}}">Get result Slip</a></li>

                                            {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-credentials')}}">Print certificate</a></li>  --}}
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt </a></li>


                                        </ul>
                                    </div>
                                    <!--            wallet sub-links-->

                                    <!--            wallet sub-links-->
                                    <div class="sub-link hygiene1 left" id="construction">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/nutrition.svg"> </div>
                                            <p class="">Food hygiene</p>
                                            <small>Proceed to any of the following options:</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('food-hygiene-business-details')}}">Apply for Food Hygiene license</a></li>
                                            {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('create-food-handlers-bill')}}">Apply for food handlers certificate</a></li>  --}}
                                             <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('renew-food-hygiene')}}">Renew food Food Hygiene license</a></li>
                                             {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-application')}}">Renew food handlers certificate</a></li>  --}}
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('get-corp-cert-form')}}">Print Food Hygiene license</a></li>
                                            {{--  <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{route('health-credentials')}}">Print certificate</a></li>  --}}
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="#" class="get-a-receipt">Print receipt </a></li>


                                        </ul>
                                    </div>
                                    <!--            wallet sub-links-->

                                    <!--            wallet sub-links-->
                                    <div class="sub-link corporate1 left" id="corporate">
                                        <div class="subicon">
                                            <div> <img src="img/new-icons/line/cooporate.svg"> </div>
                                            <p class="">Corporate</p>
                                            <small>Using this option you can register your business, say a hotel business and enable you to generate certificates for your staff memebers.</small> </div>
                                        <ul>
                                            <li><i class="fas fa-arrow-right" data-feather="arrow-right"></i><a href="{{  route('get-corporate') }}">Get Started</a></li>
                                        </ul>
                                    </div>
                                    <!--            wallet sub-links-->
                                </div>
                            </div>
                            <!--    the revenue streams-->
                        </section>
                    </div>
                    <!-- services -->

                    <!--    mobile view services-->

                    <!--    mobile view services-->

                </div>
            </div>
            <!-- container -->
        </div>
    </section>
@endsection

<script type="text/javascript">
    function checkLogin()
    {
        alert('You need to log in');
    }

</script>
