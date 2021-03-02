@extends('layouts.app')
@section('content')


<!--  pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-md-5 service-form-img-container" id="health-img">
            <div class="">
                <p class="mb-5 pb-2  "><strong>Dashboard</strong></p>
              </div>
         <ul class="ml-5 pl-2">
             <li><a href="{{  route('get-corporate-individual',Session::get('corporateId')) }}">Home</a><li>
             <li><a href="">Add {{ Session::get('corporateId') }}</a><li>
             <li>Home<li>
            <li>Home<li>
         </ul>

        </div>
        <div class="col-lg-7 p-5 position-relative transactions-form-container d-flex">
           <div class="col-12 p-0 the-transaction-form animated">
         <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>


        <!-- application form-->
        <div class="row food-application animated">
            <div class="col">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>

           <form class="transaction-form p-0 w-100 row" action="{{ route('get-corporate-cert') }}" method="post" target="_blank">

               @csrf

             <div class="form-group col-md-12 col-lg-4 mt-2">
                 <label for="lname" class="text-capitalize"> ID Number <strong class="text-danger">*</strong></label>
                 <input type="text" class="form-control " id="idNo" placeholder="XXXXXXXXXX" value="{{old('idNo')}}" name="idNo">
               </div>

              <div class="col-sm-12 pt-3">

                <button type="submit"  class="btn btn-primary text-white font-12 border-0 text-capitalize"><i class="fa fa-user"></i>
                    Get Cert</button>
              </div>
           </form>


     </div>
      </div>

      <div class="col-12 d-none p-0 animated details-confirm">
         <div class="">
            <p class="mb-5 pb-2  ">
        <span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Enter the PIN sent to your phone</strong>
           </p>
           <hr class="mt-1 p-0">

          </div>

      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--form section-->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{asset('js/select2.full.min.js')}}"></script>


@endsection
