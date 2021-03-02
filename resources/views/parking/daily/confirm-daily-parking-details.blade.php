@extends('layouts.app')
@section('content')
<section id="service-form-section" class="parallax-section">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="parking-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">Nakuru County Government Daily Parking</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     
			
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Transaction details</strong></p>
					 
					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>parking zone</span></p>
						 <strong>{{$zone->description}}</strong>
						 <hr>
						 <p class="m-0"><span>vehicle type</span></p>
						 <strong>{{$vehicle->description}}</strong>
						 <hr>
						 
						<p class="m-0"> <span>plate number</span></p>
						 <strong class="text-uppercase">{{$number_plate}}</strong>
						 <hr>
						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">Total</span> <strong> KES {{$charges}}</strong></p>
						 </div>
						 <hr>
						 
		<form action="{{route('initiate-parking-payment')}}">
							 
			<div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">M-pesa phone number</label>
              <input type="text" class="form-control" id="number-plate" value="{{$phone_number}}" name="phone_number">
              <input type="hidden" name="duration_code" value="{{$duration_code}}">
              <input type="hidden" name="vehicle_category_code" value="{{$vehicle->category_code}}">
              <input type="hidden" name="zone_code" value="{{$zone->zone_code}}">
              <input type="hidden" name="amount" value="{{$charges}}">
              <input type="hidden" name="registration_number" value="{{$number_plate}}">
            </div>
							 
			<div class="col-12 p-0 text-uppercase mt-5">
           <button type="submit" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 confirm-btn">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12">pay KES {{$charges}}</span> 
				  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
				  </i>
				  </div>
				  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
								  </button>
            </div>
						 	
	</form>
					 </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

