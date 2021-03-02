@extends('layouts.app')
@section('content')
<section id="home-one-info" class="homebg ">
        <!-- view-ad -->
        <div id="home-section2">
            <div class="container p-0">
                <div class="row p-md-4 white-bg p-sm-0 m-0">
                    <div class="col-md-8 col-sm-12 p-5" id="summary-container">
                        <div class="row  position-relative">
                            <div class="d-flex pr-3">
                                <div class="z-index-10">
                                    <div class="profile-pic-container"> <img src="img/user/default-user.png"> </div>
                                </div>
                                <div class="d-flex justify-content-center flex-column mx-4">
                                    <h1 style="color: #fff" class="  mb-1 p-0 d-flex ">{{ Session::get('resource')['user_full_name']  }}</h1>
                                    <!-- <p class="  pb-0 mb-md-0 mb-sm-3 font-14-sm">Last seen: 14 May 19 6:40 AM</p> -->
                                </div>
                            </div>
                            <div class="favorites-user d-md-flex float-right pull-right d-sm-none">
                                <div class="my-ads pr-4"> <a ><strong class="text-white">
                                            <h2 class="text-white">{{$transactions->count()}}</h2>
                                        </strong><small class="text-white">My Transactions</small></a> </div>
                                <div class="favorites border-left pl-4"> <a href="#"><strong class="text-white">
                                            <h2 class="text-white">0</h2>
                                        </strong><small class="text-white">My Assets</small></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-md-block p-0">
                        <div id="carouselExampleSlidesOnly" class="row h-100 m-0 carousel slide p-0">
                            <div class="col-12 asset-sum-container pri-grad text-white   overflow-hidden carousel-inner px-5" >
                                <div class="row my-5 the-asset-count carousel-item active">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">vehicles</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/car.svg" class=""> </div>
                                    </div>
                                </div>

                                <div class="row m-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">house(s)</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/house.svg" class=""> </div>
                                    </div>
                                </div>

                                <div class="row my-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">market stalls(s)</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/stall.svg" class=""> </div>
                                    </div>
                                </div>

                                <div class="row my-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">businesses</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/biz.svg" class=""> </div>
                                    </div>
                                </div>

                                <div class="row my-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">plot(s) of land</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/field.svg" class=""> </div>
                                    </div>
                                </div>


                                <div class="row my-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">pending bills</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/bills.svg" class=""> </div>
                                    </div>
                                </div>

                                <div class="row my-5 the-asset-count carousel-item">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="col-">
                                            <h1 class="text-white mb-2 p-0"><strong class="sec-txt2">0</strong></h1>
                                            <p class="sec-txt2 m-0 p-0">all assets</p>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center justify-content-center"> <img src="img/icons/assets-icons/flag.svg" class=""> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="profile-nav my-3">
                            <ul class="nav   font-14-sm">
                                <li class="nav-item  account-link"> <a class="nav-link active">Account</a> </li>
                                <!-- <li class="nav-item assets-link"> <a class="nav-link">assets</a> </li>
                                <li class="nav-item bills-link"> <a class="nav-link">bills</a> </li> -->
                                <li class="nav-item transactions-link"> <a class="nav-link">Transactions</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-12   position-relative py-3 text-black px-sm-4 account-txt-block">
                        <img src="img/bg/text-loader.jpg" class="position-absolute ml-0 mt-0 txt-loader d-none">
                        <h4 class="mb-1 p-md-0">Profile details</h4>
                        <p class=" p-md-0 font-12-sm">Here are your personal details. Use this section to update an item on your profile.</p>
                        <hr>
                    </div>

                    <!--          account form-->
                    <div class="col-lg-7 col-md-12 col-sm-12 animated my-profile-linker" id="my-account">
                        <div class="mb-3 pr-lg-3">
                            <form class="acount-details-form mt-0">
                                <div class="d-none alert" id="update_message"></div>
                                <div class="row">
                                    
                                    <div class="form-group col-sm-12 col-md-4 pl-md-0 pl-lg-3">
                                        <label for="exampleInputEmail1" class=" ">First name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="first name eg John" value="{{$user->first_name}}" name="first_name">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 pl-md-0 ">
                                        <label for="exampleInputEmail1" class=" ">Middle name</label>
                                        <input type="text" class="form-control" id="other-names" placeholder="first name eg Doe" value="{{$user->middle_name}}" name="middle_name">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 pl-md-0 ">
                                        <label for="exampleInputEmail1" class=" ">Surname</label>
                                        <input type="text" class="form-control" id="other-names" placeholder="first name eg Doe" value=" {{$user->last_name}} " name="last_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4 pl-md-0 pl-lg-3">
                                        <label for="exampleInputEmail1" class=" ">Phone number</label>
                                        <input type="text" class="form-control" id="fname" placeholder="eg 07..." value="{{$user->phone_no}}">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small> </div>
                                    <div class="form-group form-group col-sm-12 col-md-4 pl-md-0">
                                        <label for="exampleInputEmail1" class=" ">Your email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}" name="email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>

                                        <div class="form-group col-sm-12 col-md-4 pl-md-0 pl-lg-3">
                                        <label for="exampleInputEmail1" class=" ">ID number</label>
                                        @if(is_null($user->id_no))
                                        <input type="text" class="form-control" placeholder="Enter national ID"  value="{{old('national_id')}}" name="national_id">
                                        @else
                                        <input type="text" class="form-control"  value="{{$user->id_no}}" name="national_id" readonly>
                                        @endif
                                         </div>

                                         <button type="button" id="updateProfile"   class="btn btn-primary   text-white font-14">Update your details</button>
                                </div>

                                <div class="row">
                                    <div class="col-12  ">
                                        <hr>
                                        <p>Use this section to have your password changed</p>
                                    </div>
                                </div>

                            </form>
                            <form  id="myForm" >

                                @csrf
                            <div class="row">
                                <p  class="alert alert-success" id="msg" style="display:none">Saved</p>
                                <p  class="alert alert-danger" id="msg-error" style="display:none">Saved</p>
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="old" class=" ">Old password</label>
                                        <input type="password" class="form-control" name="old_password"  placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="password" class=" ">New password</label>
                                        <input type="password" class="form-control" name="new_password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 pl-md-0">
                                        <label for="exampleInputPassword1" class=" ">User id</label>
                                        <input type="text" class="form-control "  name="user_id" value="{{ Session::get('resource')['user_id'] }}" placeholder="User Id" readonly>
                                    </div>
                                </div>
                                <button type="button"   onclick="save_pswd()" class="btn btn-primary   text-white font-14">save changed password</button>
                            </form>
                        </div>
                    </div>
                    <!--          account form-->

                    <!--          loader container-->
                    <div class="col-lg-7 col-md-12 col-sm-12 animated  p-0 profile-loader  justify-content-center align-content-center align-items-center d-none">
                        <div class=" ">
                            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                        </div>
                    </div>
                    <!--          loader container-->

                    <!--          my assets container -->
                    <div class="col-lg-7 col-md-12 col-sm-12 p-0 animated d-none my-profile-linker" id="the-assets">
                        <div class="mb-3 px-lg-3 assets-main-coontainer position-relative">

                            <!--            assets form-->
                            <div class="assets-form-container py-2 px-5">
                                <div class="col-12 border-bottom pt-4 px-0">
                                    <p class="  d-flex text-primary position-relative"> <span class="trans-txt text-primary mt-0 position-relative drop-title" >  <span class="the-assets-text">vehicles</span><i data-feather="chevron-down" class="ml-2 ml-2 position-absolute mb-0 mt-2px"></i> </span> <span id="close-asset-form" title="close the form"><i data-feather="x"></i></span>
                                    <ul class="item_list list-unstyled   p-3 drop-container the-assets-form-group">
                                        <li class="gari">vehicles</li>
                                        <li class="soko">stall</li>
                                        <li class="nyumba">house</li>
                                        <li class="shamba">land</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="row">
                                    <!--                  vehicles form inputs-->
                                    <div class="car-form-inputs col-12 the-assets-form col-sm-12 p-0">
                                        <form>
                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="number-plate" class=" ">registration number</label>
                                                <input type="text" class="form-control" id="number-plate" placeholder="Password">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="exampleInputPassword1" class=" ">car type</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>-- select car type --</option>
                                                    <option>canter</option>
                                                    <option>pickup</option>
                                                    <option>lorry</option>
                                                    <option>personal</option>
                                                    <option>bus</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary text-capitaliz text-white font-14 pull-right">add to assets</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--                  end of vehicles form-->


                                    <!--                  vehicles form inputs-->
                                    <div class="stalls-form-inputs col-12 d-none the-assets-form p-0">
                                        <form>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="exampleInputPassword1" class=" ">market</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>-- select the market --</option>
                                                    <option>market name</option>
                                                    <option>market name</option>
                                                    <option>market name</option>
                                                    <option>market name</option>
                                                    <option>market name</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="stall_type" class=" ">stall type</label>
                                                <select class="form-control" id="stall_type">
                                                    <option>-- select stall type --</option>
                                                    <option>type name</option>
                                                    <option>type name</option>
                                                    <option>type name</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="stall_number" class=" ">stall number</label>
                                                <select class="form-control" id="stall_number">
                                                    <option>-- stall number --</option>
                                                    <option>stall number</option>
                                                    <option>stall number</option>
                                                    <option>stall number</option>
                                                    <option>stall number</option>
                                                    <option>stall number</option>

                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary text-capitaliz text-white font-14 pull-right">add to assets</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--                  end of stalls form-->

                                    <!--                  house form inputs-->
                                    <div class="house-form-inputs col-12 d-none the-assets-form p-0">
                                        <form>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="house-estate" class=" ">select the estate</label>
                                                <select class="form-control" id="house-estate">
                                                    <option>-- select the estate --</option>
                                                    <option>estate name</option>
                                                    <option>estate name</option>
                                                    <option>estate name</option>
                                                    <option>estate name</option>
                                                    <option>estate name</option>

                                                </select>
                                            </div>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="house_type" class=" ">select house type</label>
                                                <select class="form-control" id="house_type">
                                                    <option>-- select house type --</option>
                                                    <option>type name</option>
                                                    <option>type name</option>
                                                    <option>type name</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="stall_number" class=" ">select house number</label>
                                                <select class="form-control" id="stall_number">
                                                    <option>-- house number --</option>
                                                    <option>house number</option>
                                                    <option>house number</option>
                                                    <option>house number</option>
                                                    <option>house number</option>
                                                    <option>house number</option>

                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary text-capitaliz text-white font-14 pull-right">add to assets</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--                  end of house form-->



                                    <!--                  land form inputs-->
                                    <div class="land-form-inputs col-12 d-none the-assets-form p-0">
                                        <form>
                                            <div class="form-group col-sm-12 col-md-12">
                                                <label for="plot_number" class=" ">enter the plot number</label>
                                                <input type="text" class="form-control" id="plot_number" placeholder="plot number">
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary text-capitaliz text-white font-14 pull-right">add to assets</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--                  end of land form-->


                                </div>
                            </div>
                            <!--            assets form-->

                            <!--            the assets go here use pegination kindly not more than five assets per page-->
                            <div class="assets-container py-2 px-4 animated p-sm-0 py-md-4">
                                <div class="col-12 border-bottom pt-4 px-0 px-sm-4">
                                    <p class="  d-flex text-primary position-relative "> <span class="trans-txt text-primary mt-0 drop-title" > <span class="the-assets-text">all assets</span><span><i data-feather="chevron-down" class="ml-2 position-absolute mb-0 mt-2px"></i></span> </span> <span id="add-asset" title="Add new asset"><i data-feather="plus"></i></span>
                                    <ul class="item_list list-unstyled   p-3 drop-container">
                                        <li>all assets</li>
                                        <li>vehcles</li>
                                        <li>stall</li>
                                        <li>house</li>
                                        <li>land</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-12 white-bg p-4">
                                    <table id="example" class="the-assets-are col-12 table mt-3 p-0">
                                        <thead class="border-0">
                                        <tr class="d-none">
                                            <td></td>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>

                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 257P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>

                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td></td>
                                            <td class="p-3 px-4">
                                                <div>KAH 587P</div>
                                                <small class="  opacity-7">pick-up</small>
                                            </td>
                                            <td>
                                                <a title="view more informaytion about this asset" ><i data-feather="eye"></i></a>
                                                <a title="start a transaction" ><i data-feather="play"></i></a>
                                                <a title="delete this asset" ><i class="text-danger" data-feather="trash-2"></i></a>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!--            end of assets container-->
                        </div>
                    </div>
                    <!--          my assets container -->

                    <!--         bill container -->
                    <div class="col-lg-7 col-md-12 col-sm-12 animated my-profile-linker d-none" id="my-bills">
                        <div class="mb-3 pr-lg-3">
                            <table class="col-12 table table-striped p-0" id="bill-table">
                                <thead class="thead-dark">
                                <tr>
                                    <th class="pb-3">Bill</th>
                                    <th class="pb-3">Date</th>
                                    <th class="text-right pb-4">Bill amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class=" ">
                                    <td>
                                        <div>bill title</div>
                                        <small class="  opacity-7">205825479</small>
                                    </td>
                                    <td>
                                        <div>May 22</div>
                                        <small class="  opacity-7">2019</small>
                                    </td>

                                    <td class="text-right">
                                        <strong>KES 2000</strong>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td>
                                        <div>bill title</div>
                                        <small class="  opacity-7">2058479</small>
                                    </td>
                                    <td>
                                        <div>May 22</div>
                                        <small class="  opacity-7">2019</small>
                                    </td>

                                    <td class="text-right">
                                        <strong>KES 2000</strong>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td>
                                        <div>bill title</div>
                                        <small class="  opacity-7">2058479</small>
                                    </td>
                                    <td>
                                        <div>May 22</div>
                                        <small class="  opacity-7">2019</small>
                                    </td>

                                    <td class="text-right">
                                        <strong>KES 2000</strong>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td>
                                        <div>bill title</div>
                                        <small class="  opacity-7">2058479</small>
                                    </td>
                                    <td>
                                        <div>May 22</div>
                                        <small class="  opacity-7">2019</small>
                                    </td>

                                    <td class="text-right">
                                        <strong>KES 2000</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--          bill container -->

                    <!--          transactions-->
                    <div class="col-md-12 col-lg-5 col-sm-12 py-4 h-100 recent-transactions-container border dot-border py-3 mt-md-5 mt-lg-0" id="transactions-minor">
                        <div class="recent-transactions p-y-3">
                            <div class="row">
                                <div class="col-12 border-bottom">
                                    <p class="  d-flex text-primary"><span class="trans-txt text-primary mt-0">Recent transactions</span><span class="transactions-link"><i data-feather="arrow-right"></i></span></p>
                                </div>
                                @if($recent_transactions)
                                @foreach($recent_transactions as $recent)
    
                                <div class="col-12 border-bottom pb-3 pt-3 the-transaction dot-bottom-border">
                                    <div class="row">
                                        <div class="col-2 text-center">
                                            <p class="text-uppercase mb-2 ppvx_text--md">{{date('M', strtotime($recent->date))}}</p>
                                            <p class="m-0">
                                                {{date('d', strtotime($recent->date))}}
                                            </p>
                                        </div>

                                        <div class="col-7">
                                            <p class="  mb-2 ppvx_text--md">{{$recent->description}}</p>
                                            <p class="m-0 ppvx_text--md-det">
                                                {{$recent->brief_description}}
                                            </p>
                                        </div>

                                        <div class="col-3 text-right">
                                            <p class="  mb-2 ppvx_text--md">KES {{number_format($recent->amount)}}</p>

                                        </div>
                                    </div>



                                </div>
                                @endforeach
                                <a  class="  font-14 mt-5 ml-2   text-primary   text-primary d-flex transactions-link">See more transactions<i data-feather="arrow-right" class="ml-2"></i></a>
                                @else
                                <p>No recent transactions</p>
                                @endif

                                
                            </div>
                        </div>
                    </div>
                    <!--          transactions-->

                    <!--      transactions pager-->
                    <div class="col-sm-12 p-0 transactions-page d-none animated" id="transactions-main">
                        <div class="mb-3">
                            <div class="transactions-container px-3 py-3">
                                <h2 class="d-none">completed transactions</h2>
                                <!--        single transaction history-->
                                <!--              fiter transactions-->
                                @if($transactions)
                                @foreach($transactions as $transaction)
                                <div class="single-transaction">
                                    <div class="main-transaction-container"> <span>
                                        <div class="date">
                                          <ul>
                                            <li>{{date('M', strtotime($transaction->date))}}</li>
                                            <li>{{date('d', strtotime($transaction->date))}}</li>
                                          </ul>
                                        </div>
                                        <div class="type-of-transaction">
                                          <ul>
                                            <li>{{$transaction->description}}</li>
                                            <li>{{$transaction->brief_description}}</li>
                                          </ul>
                                        </div>
                </span>
                                        <div class="transaction-amount"> KES {{number_format((int)$transaction->amount)}} </div>
                                    </div>
                                    <div class="transaction-more-details"> <span class="close-panel-container">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"    width="20" height="20" viewBox="0 0 16383 16383" enable-background="new 0 0 16383 16383" xml:space="preserve">
                  <g>
                    <path d="M311.277,16071.723c98.298,98.297,226.086,145.809,355.512,145.809c127.787,0,257.213-49.148,355.511-147.447
                                l7169.2-7177.393l7170.84,7179.031c98.297,98.297,226.084,147.447,355.51,147.447c127.789,0,257.215-49.15,355.512-145.811
                                c196.596-194.957,196.596-512.787,0-709.383L8909.076,8191.5l7162.646-7170.84c194.959-196.596,194.959-514.426,0-709.383
                                c-196.596-196.597-514.426-196.597-709.383,0L8191.5,7490.308L1020.661,311.277c-196.596-196.597-514.426-196.597-709.384,0
                                c-196.596,194.957-196.596,512.787,0,709.383l7161.01,7170.84l-7161.01,7170.84
                                C114.682,15558.934,114.682,15876.764,311.277,16071.723z"/>
                  </g>
                </svg>
                </span>
                                        <div class="row">
                                            <div class="process-info col-sm-12 col-md-6">
                                                <ul>
                                                    <li>Date</li>
                                                    <li>{{date('d M Y', strtotime($transaction->date))}}</li>
                                                    <li>Receipt number</li>
                                                    <li>{{$transaction->receipt_no}}</li>
                                                    <li></li>
                                                </ul>
                                                @if($transaction->category == 'PARKING')
                                                <a class="print-details" target="new" href="{{route('view-parking-receipt', ['id' => $transaction->identifier])}}">
                                                    <i data-feather="printer" class="ml-1"></i>
                                                    <span>Print Receipt</span>
                                                </a>
                                                @else
                                                <a class="print-details" target="new" href="{{route('view-receipt', ['id' => $transaction->identifier])}}">
                                                    <i data-feather="printer" class="ml-1"></i>
                                                    <span>Print Receipt</span>
                                                </a>
                                                @endif
                                            </div>
                                            <div class="transaction-info col-sm-12 col-md-6 float-right pull-right">
                                                <ul>
                                                    <li>Transaction identifier</li>
                                                    <li>{{$transaction->identifier}}</li>
                                                    <li>Transaction details</li>
                                                    <li>
                                                        <p>{{$transaction->brief_description}}</p>
                                                        <p></p>
                                                    </li>
                                                    <li>
                                                        <p>Total</p>
                                                        <p>KES {{number_format($transaction->amount)}}</p>
                                                    </li>
                                                </ul>
                                                <p class="report">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16383px" height="16383px" viewBox="0 0 16383 16383" enable-background="new 0 0 16383 16383" xml:space="preserve">
                      <g>
                          <g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">
                              <path d="M78554.836-5910.839c-2226.445-784.746-3858.195-1944.667-4862.469-3388.008
                                            c-658.594-1004.276-58277.594-101594.25-68284.328-119253.484c-3512.519-6148.531-3920.454-7308.453-3732.05-9942.828
                                            c312.915-3700.922,2445.986-7026.688,5645.585-8814.063l1662.871-909.266H81910.07h72925.633l1662.891,909.266
                                            c4297.25,2383.719,6680.984,7809.781,5301.531,12044.781c-815.859,2445.969-71264.414,125464.281-72770,127001
                                            C86584.148-5691.308,82005.102-4687.03,78554.836-5910.839z M83572.961-13563.338
                                            c439.055-407.939,16623.828-28449.08,35977.07-62324.203c31742.047-55518.695,35161.188-61665.617,35003.922-62607.617
                                            c-126.156-532.453-532.469-1317.219-909.266-1662.875l-720.859-689.734l-71169.375,62.25l-71171.039,95.016l-720.85,1066.547
                                            c-407.939,596.344-720.85,1379.438-720.85,1756.25s4736.328,9002.461,10539.179,19164.844
                                            C58762.543-50294.02,79840.914-13594.471,80279.977-13250.428C81094.203-12622.957,82725.945-12778.592,83572.961-13563.338z"/>
                              <path d="M79056.164-45901.742c-4674.07-1756.25-7182.305-5802.852-7182.305-11605.711
                                            c0-2321.477,658.594-6523.711,3137.344-19823.43c2319.836-12514.969,3574.766-20324.75,4233.359-26191.492
                                            c689.727-6399.219,784.75-6680.992,1818.516-7025.039c532.453-188.398,1159.914-188.398,1725.125,0
                                            c753.617,250.664,878.133,501.313,1097.656,2164.203c1317.195,10539.18,2070.813,15400.016,3545.281,23493.219
                                            c4485.664,24277.957,4955.859,27790.469,4077.734,31240.73c-815.875,3199.598-2917.813,5865.117-5834,7370.711
                                            C84262.68-45524.938,80592.883-45338.168,79056.164-45901.742z"/>
                              <path d="M79244.563-116256.883c-2634.383-973.148-4862.469-4139.977-4862.469-6962.773
                                            c0-3951.578,3607.539-7590.25,7527.984-7590.25c3889.328,0,7528,3638.672,7528,7527.984
                                            c0,1975.805-720.859,3576.406-2352.617,5175.391C84827.891-115817.82,82160.734-115190.359,79244.563-116256.883z"/>
                          </g>
                      </g>
                    </svg>
                                                    report an issue </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    @endif
                                <!--              fiter transactions-->
                        </div>
                    </div>
                    
                    <!--      transactions pager-->
                </div>

                <!-- row -->
            </div>
            <!-- contaioner -->
        </div>
        </div>
        <!-- view-ad -->

        <!-- container -->
    </section>
@endsection