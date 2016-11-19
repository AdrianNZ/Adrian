@extends('layouts.master')

@section('title')
    laravel project service
@endsection

@section('body')
    <div class="container ver2navbar">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-6">
                <div class="navfollow text-right">
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
            <div class="col-xs-8 col-sm-4 col-md-3 title-2">
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
                        <ul class="nav navbar-nav">
                            @foreach($menus as $menu)
                                <li><a href="{{$menu->href}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </nav>
            </div>
        </div>


    </div>
    <!-- /NAVBAR========================================= -->
    <div class="container-fluid no-margin no-padding">
        <div class="jumbo-wrap no-margin no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 jumbotext">
                        <h2 class="text-uppercase">
                            our services
                        </h2>
                    </div>
                    <div class="col-md-2 col-md-offset-6 jumbobutton">
                        <p class="text-right"><a class="btn btn-default btn-second" href="#" role="button">GET IN TOUCH</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                Construction Theme &nbsp; &lt; &nbsp; Our Services
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <!-- container1 start-->
    <div class="container service">

        <!-- Thumbnail-->
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive center-block" src="{{$img_path}}{{$service->href}}" alt="...">
                        <div class="caption">
                            <h3>{{$service->title}}</h3>
                            <p>{{$service->desc}}</p>
                            <p><a href="#">{{$service->btn}}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    @endsection