
@extends('layouts.app')
@section('content')
<section id="main" class="clearfix contact-us">
    <div class="container">

        <!-- breadcrumb -->
        <ol class="breadcrumb text-primary d-none">
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
        </ol><!-- breadcrumb -->
        <h2 class="title text-white">Contact Us</h2>

        <!-- gmap -->
        <div id="gmap" class="mb-4 p-5 bg-white">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.2581472000566!2d36.8204307242381!3d-1.2866272947362694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafd849404a05edf9!2sNairobi%20City%20Council!5e0!3m2!1sen!2ske!4v1581493360480!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- gmap -->
        <div class="corporate-info p-5 bg-white">
            <div class="row">
                <!-- contact-info -->
                <div class="col-md-4 col-sm-12">
                    <div class="contact-info">

                        <h2>Corporate Info</h2>
                        <address>
                            <p><strong>adress: </strong>City-Hall Way, Nairobi</p>
                            <p><strong>Phone:</strong> <a href="tel:0202222181">020-2222181</a></p>
                            <p><strong>BANK:</strong> <a href="tel:+254703088900">0703 088 900</a></p>
                            <p><strong>Email: </strong><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxTmGqvPkXzJdZvlpKHHhMcdlJPhwRzxRPcpvQWgxSZGkhfKCVgfxNsKmrzdBKSxNjhKMN">info@nairobi.go.ke</a></p>
                        </address>

                        <ul class="social">
                            <li><a href="https://www.facebook.com/CountyGovernment047/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxTmGqvPkXzJdZvlpKHHhMcdlJPhwRzxRPcpvQWgxSZGkhfKCVgfxNsKmrzdBKSxNjhKMN"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxTmGqvPkXzJdZvlpKHHhMcdlJPhwRzxRPcpvQWgxSZGkhfKCVgfxNsKmrzdBKSxNjhKMN"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div><!-- contact-info -->

                <!-- feedback -->
                <div class="col-md-8 col-sm-12">
                    <div class="feedback">
                        <h2>Send Us Your Feedback</h2>
                        <form id="contact-form" class="contact-form" name="contact-form" method="post" action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="Email Id">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-white font-14">Submit Your Message</button>
                            </div>
                        </form>
                    </div>
                </div><!-- feedback -->
            </div><!-- row -->
        </div>
    </div><!-- container -->
</section>
@endsection
