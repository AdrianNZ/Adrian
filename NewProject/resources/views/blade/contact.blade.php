@extends('layouts.master')

@section('title')
    laravel project contact
@endsection

@section('body')
    <div class="container-fluid ver3navbar">
        <div class="contact-nav-wrap">
            <div class="container">


                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-6">
                        <div class="contact-navfollow text-right">
                            <h6>Toll Free</h6>
                            <h6 class="orange">1.800.123.4567</h6>
                            <ul class="icons">
                                <li><a href="#" class="icon-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon-linkedin-squared"><span class="label">LinkedIn</span></a></li>
                                <li><a href="#" class="icon-gplus-squared"><span class="label">Google</span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- NAVBAR========================================= -->
                <div class="row">
                    <div class="col-xs-8 col-sm-4 col-md-3 title-3">
                        <div class="logo-wrap">
                            <img src="img/noun_144778_cc.png" alt="">
                        </div>
                        <h3>Construction</h3>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-1">
                        <nav class="navbar navbar-static-top">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav contactnav">
                                    @foreach($menus as $menu)
                                        <li><a href="{{$menu->href}}">{{$menu->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="contact-jumbo-wrap no-margin no-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 jumbotext">
                                    <h2 class="text-uppercase">
                                        get in touch with us.
                                    </h2>
                                    <h5>
                                        Lorem ipsum dolor sit.
                                    </h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /NAVBAR========================================= -->


    <hr class="featurette-divider">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                Construction Theme &nbsp; &lt; &nbsp; Our Services
            </div>
        </div>
    </div>
    <hr class="featurette-divider">

    <!-- container start-->
    <div class="container contact">
        <div class="row featurette">
            <div class="col-md-12">
                <h3 class="featurette-heading">Contact Us</h3>
            </div>

            <div class="col-md-6 contact-form">
                <h5 class="text-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quasi nihil asperiores, voluptate explicabo nulla.
                </h5>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputfirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputlastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Your Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputphoneNumber" placeholder="Your Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message">

                                </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-warning">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 contact-detail">
                <div class="row">
                    <div class="col-xs-6">
                        <h4 class="text-uppercase">mailing address</h4>
                        <h6>{{$offices[0]->address}}</h6>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="text-uppercase">contact info</h4>
                        <h6>{{$offices[0]->phone}}</h6>
                        <h6 class="tx-orange">{{$offices[0]->email}}</h6>

                    </div>
                    <div class="col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.6593319852295!2d174.76271441590498!3d-36.85063408731887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47e53acb30f9%3A0xcdba81ddcbdef30c!2zMjkwIFF1ZWVuIFN0LCBBdWNrbGFuZCwgMTAxMCDribTsp4jrnpzrk5w!5e0!3m2!1sko!2skr!4v1478813630252"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 blahbox">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nostrum!
                </p>
            </div>
        </div>


    </div>
    @endsection