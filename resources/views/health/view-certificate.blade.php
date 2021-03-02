@extends('layouts.app')

@section('content')
<!--certificate details modal		-->
<div class="modal fade" id="certificate-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">food handlers certificate details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  <!--		  clicked certificate number-->
            <h6 class="text-uppercase" ><strong>No:- sdfsd5645fd</strong></h6>
            <ul class="certs-list">
                <li>
                  <h1 class="">certificate owner</h1>
                  <h12>jane doe</h12>
                </li>

                <li>
                  <h1 class="">certificate type</h1>
                  <h12>individual</h12>
                </li>

                <li>
                  <h1 class="">validity duration</h1>
                  <h12>29<sup>th</sup> Jan 2020 - 29 <sup>th</sup> June 2020 <strong>(28 days to go)</strong></h12>
                </li>

                 <li>
                  <h1 class="">next renewal date</h1>
                  <h12>29 <sup>th</sup> June 2020</h12>
                </li>

                <li>
                  <h1 class="">approved by</h1>
                  <h12>Mr John Kibe (County government medical officer)</h12>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white font-12 text-primary border-2 text-capitalize text-prev border-1 text-light " data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary font-12 text-white">print certificate</button>
        </div>
      </div>
    </div>
  </div>
  <!--certificate details modal		-->
<!--	main content -->
<section id="service-form-section" class="">
    <div class="container">
      <div class="row p-5 ">
        <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
          <div class="col-lg-7 service-form-img-container" id="health-img">
            <div class="col-lg-8 col-md-12 position-relative p-5">
              <h2 class="mb-4  text-white">RevenueSure health department</h2>
              <!-- <p class="font-14 mb-3 ">List of available bills</p> -->
            </div>
          </div>
          <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
               <div class="col-12 p-0 the-transaction-form animated">
                   <div class="">
                    @if($bills)
                      <div class="">
                           <!--					 if certificate is available-->
                       <p class="text-capitalize m-0 p-0"><strong>List of available bills</strong></p>
                       <!-- <small class="mb-5 pb-2 "><strong></strong> active certificates</small> -->
                          <hr>
                          <ul class="certs-list to-print-cert">
                            @foreach($bills as $bill)

                           <li>
                               <h1 class="">{{$bill->BillNo}}</h1>
                              <h12>{{date('d-m-Y', strtotime($bill->DateCreated))}}</h12>
                              <br>
                              <h12 class="text-danger" >{{$bill->Billstatus}}</h12>
                              @if($bill->Approved ==1)
                              <div class="print" title="print this certificate"><a target="new" href="{{route('print-certificate', ['bill_id' => $bill->BillID])}}"><i data-feather="printer"></i></a></div>
                              @endif
                           </li>
                           @endforeach

                       </ul>
                       </div>
                      @else
  <!--					 if its empty-->
                       <div class="empty-cert ">
                           <img class="img" src="{{asset('img/bg/no-file.jpg')}}">
                           <h2>Sorry, no certificates found</h2>
                           <p>this means that you are yet to create a certificate, or your previous certificates have expired</p>

                       </div>
                      @endif
            </div>

              </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
