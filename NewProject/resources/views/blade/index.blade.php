@extends('layouts.master')

@section('title')
    laravel project index
@endsection

@section('body')
    <div class="container">
        <!-- NAVBAR========================================= -->
        <div class="row">
            <div class="col-md-offset-4 col-md-4 title">
                <div class="logo-wrap">
                    <img src="img/noun_144778_cc.png" alt="">
                </div>
                <h3>Construction</h3>
            </div>
        </div>
        <hr class="featurette-divider">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
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
            </div>
        </nav>

    </div>
    <!-- /NAVBAR========================================= -->


    <!-- Carousel======================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            @foreach($notices as $notice)
                <div class="item {{$notice->beauty}}">
                    <img src="{{$img_path}}{{$notice->href}}" alt="" class="first-slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{$notice->title}}</h1>
                            <p>{{$notice->desc}}</p>
                            <p><a class="btn btn-first" href="#" role="button">{{$notice->btn1}}</a>
                                <a class="btn btn-default btn-second" href="#" role="button">{{$notice->btn2}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /Carousel======================================== -->

    <!-- container1 start-->
    <div class="container marketing">

        <!-- Thumbnail-->
        <div class="row">
            @foreach($thumbnails_top as $thumbnail_top)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive center-block" src="{{$img_path}}{{$thumbnail_top->href}}" alt="...">
                        <div class="caption">
                            <h3>{{$thumbnail_top->title}}</h3>
                            <p>{{$thumbnail_top->desc}}</p>
                            <p><a href="{{$thumbnail_top->goto}}">{{$thumbnail_top->btn}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /Thumbnail end-->
        <hr class="featurette-divider">


        <!-- feature-->

        <div class="row featurette">
            <div class="col-md-12">
                <h3 class="featurette-heading">U.S. Certified Contractors</h3>
            </div>
            @foreach($thumbnails_middle as $thumbnail_middle)
                <div class="col-md-4">
                    <img class="featurette-image img-responsive center-block"
                         src="{{$img_path}}{{$thumbnail_middle->href}}" alt="">

                    <h4>{{$thumbnail_middle->title}}</h4>
                    <h6>{{$thumbnail_middle->desc}}</h6>
                </div>
            @endforeach
        </div>

        <!-- /feature end-->

        <div class="clearfix"></div>
        <hr class="featurette-divider">

        <!-- Hire -->
        <div class="row hire">
            <div class="col-md-12">
                <img class="img-responsive center-block" src="img/demo_1_compresed_10.jpg" alt="">
                <div class="hiremessage-warp">
                    <h5>working with us</h5>
                    <h3>constractors & construction</h3>
                    <h3>managers since 1989</h3>

                    <a class="btn btn-default btn-second" href="#" role="button">Lorem ipsum.</a>
                </div>

            </div>
        </div>
        <!-- Hire end-->
        <div class="clearfix"></div>
        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

        <!-- What We Do -->
        <div class="row featurette">
            <div class="col-md-12">
                <h3 class="featurette-heading">What We Do</h3>
            </div>
            @foreach($thumbnails_bottom as $thumbnail_bottom)
                <div class="col-md-4">
                    <img class="featurette-image img-responsive center-block"
                         src="{{$img_path}}{{$thumbnail_bottom->href}}" alt="">

                    <h4>{{$thumbnail_bottom->title}}</h4>
                    <h6>{{$thumbnail_bottom->desc}}</h6>
                </div>
            @endforeach
        </div>
        <!-- what we do end-->

    </div>
    <!-- container1 end-->

    <div class="clearfix"></div>


    <!-- container-fluid start-->


    <!-- work-->
    <div class="container-fluid no-margin no-padding">
        <div class="work_wrap no-margin">
            <div class="container">
                <div class="row work">
                    <div class="col-md-12">
                        <h3 class="featurette-heading">Featured Works</h3>
                    </div>
                    @foreach($projects as $project)
                        <div class="col-md-4">
                            <img class="featurette-image img-responsive center-block"
                                 src="{{$img_path}}{{$project->href}}"
                                 alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid end-->


    <!-- container2 start -->

    <div class="container">
        <!-- news -->
        <div class="row featurette news">
            <div class="col-md-12">
                <h3 class="featurette-heading">Recent News</h3>
            </div>
            @foreach($newses as $news)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive center-block" src="{{$img_path}}{{$news->href}}" alt="...">
                        <div class="caption">
                            <h3>{{$news->title}}</h3>
                            <hr class="featurette-divider">
                            <div class="row">
                                <div class="col-xs-6">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                    <h6 class="no-padding no-margin">{{$news->updated_at}}</h6>
                                </div>
                                <div class="col-xs-6">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <h6 class="no-padding no-margin">NO COMMENTS</h6>
                                </div>
                            </div>
                            <hr class="featurette-divider">
                            <p>{{$news->desc}}</p>
                            <p><a class="btn btn-default btn-second" href="#" role="button">{{$news->btn}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- news end-->

        <!-- client, testimonials-->
        <div class="row clitest">

            <!-- client-->

            <div class="col-md-6 client">
                <h3 class="featurette-heading">Our Clients</h3>
                <div class="row">
                    @foreach($clients as $client)
                        <div class="col-xs-6 col-sm-6 col-md-4">
                            <img class="img-responsive center-block" src="{{$img_path}}{{$client->href}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>


            <!-- testimonials-->

            <div class="col-md-6 testimon">
                <h3 class="featurette-heading">Testimonials</h3>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem odit nemo, repudiandae, unde
                            provident debitis laborum necessitatibus, blanditiis sit enim fuga id voluptatem aspernatur
                            rerum possimus quo. Voluptatem, adipisci mollitia.
                        </p>
                        <div class="foundation">
                            <img src="img/spacey_2011_a_p.jpg" class="img-responsive center-block img-circle" alt="">
                            <h5>Howard K.stern</h5>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection