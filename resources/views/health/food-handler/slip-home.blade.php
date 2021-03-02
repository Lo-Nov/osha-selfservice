@extends('layouts.app')
@section('content')


<!--  pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="health-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4 text-capitalize text-white">Food handlers result slip</h2>
            <p class="font-14 mb-3 text-capitalize">Download your food handlers result slip</p>
          </div>

        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
           <div class="col-12 p-0 the-transaction-form animated">

            <div class="col-12 p-0 animated">
              <div class="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                 <p class="mb-5 pb-2 text-capitalize">
                <h2 class="mt-0 mb-0 p-0"><strong>Header details</strong></h2>
                </p>
                <hr class="mt-1 p-0">


                <div class="transactions-details-container text-capitalize">
                  <p class="m-0"><span>Uniques Patient ID & ID Number</span></p>
                  <strong>{{  $getResults->data->Header->uniquePatientId }}  ︱  <strong class="text-uppercase">{{  $getResults->data->Header->idNo }}</strong></strong>
                  <hr>
                  <p class="m-0"><span>Bill ID Number</span></p>
                  <strong>{{  $getResults->data->Header->billId }}</strong>
                  <hr>
                  <p class="m-0"> <span>Certificate status</span></p>
                  @if($getResults->data->Header->isActive === "1")
                    <strong class="text-uppercase text-success">Active</strong>
                    @else
                    <strong class="text-uppercase text-danger">Not Active</strong>
                    @endif
                  <hr>
                  <p class="m-0"><span>Create Date - Test Date</span></p>
                  <strong>{{ date('d-m-Y h:i', strtotime($getResults->data->Header->testDate))  }}  -  {{  date('d-m-Y h:i', strtotime($getResults->data->Header->dateCreated))  }}</strong>

                 <div class=" text-right">
                       <div class="col-12 p-0 text-uppercase mt-5">
                        <a href="{{ route('get-result-slip',$getResults->data->Header->idNo) }}" target="_blank" type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0">
                           <div class="btn-txt animated"> <span class="btn-text text-uppercase font-12"> <i class="fa fa-print"></i> print Slip</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"> </i> </div>
                        </a>
                      </div>

                  </div>
                  <hr>
                </div>

               </div>

           </div>

    </form>


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
//<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

  <script type="text/javascript">
    $('.deleteIndv').click(function(){
        var id = $(this).data("id");
        alert(id);


    }
  </script>
@endsection
