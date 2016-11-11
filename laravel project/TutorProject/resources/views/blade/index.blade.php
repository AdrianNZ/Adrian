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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="/service">Services</a></li>
                        <li><a href="/project">Our Work</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="/contact">Contact Us</a></li>
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
            <div class="item active">
                <img class="first-slide" src="img/slider3.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia reiciendis tempora repudiandae necessitatibus maxime porro.</p>
                        <p><a class="btn btn-first" href="#" role="button">Lorem ipsum.</a>
                            <a class="btn btn-default btn-second" href="#" role="button">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="first-slide" src="img/slider3.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia reiciendis tempora repudiandae necessitatibus maxime porro.</p>
                        <p><a class="btn btn-first" href="#" role="button">Lorem ipsum.</a>
                            <a class="btn btn-default btn-second" href="#" role="button">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="first-slide" src="img/slider3.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia reiciendis tempora repudiandae necessitatibus maxime porro.</p>
                        <p><a class="btn btn-default btn-first" href="#" role="button">Lorem ipsum.</a>
                            <a class="btn btn-default btn-second" href="#" role="button">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
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
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/featured-1-1.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/serv9-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/renovation-tips-tricks.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Thumbnail end-->
        <hr class="featurette-divider">


        <!-- feature-->

        <div class="row featurette">
            <div class="col-md-12">
                <h3 class="featurette-heading">U.S. Certified Contractors</h3>
            </div>
            <div class="col-md-4">
                <img class="featurette-image img-responsive center-block" src="img/skyline.png" alt="">

                <h4>Government Buinding</h4>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus itaque ducimus alias, quasi obcaecati accusantium!</h6>
            </div>
            <div class="col-md-4">
                <img class="featurette-image img-responsive center-block" src="img/history.png" alt="">

                <h4>Health Care construction</h4>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus itaque ducimus alias, quasi obcaecati accusantium!</h6>
            </div>
            <div class="col-md-4">
                <img class="featurette-image img-responsive center-block" src="img/cup.png" alt="">

                <h4>Water Treatment</h4>
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus itaque ducimus alias, quasi obcaecati accusantium!</h6>
            </div>
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
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/KD7_4189_d-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>Metal Roofing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/KD7_2219_d-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>General Contracting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/KDM_2491_d-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>Construction Consultant</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a href="#">Lorem ipsum.</a></p>
                    </div>
                </div>
            </div>
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
                        <h3 class="featurette-heading">U.S. Certified Contractors</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="featurette-image img-responsive center-block" src="img/project-1-359x283.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="featurette-image img-responsive center-block" src="img/project-2-359x283.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="featurette-image img-responsive center-block" src="img/project-3-359x283.jpg" alt="">
                    </div>
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
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/Building-demolition-2-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <hr class="featurette-divider">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">FEBAURARY 12, 2015</h6>
                            </div>
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">NO COMMENTS</h6>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a class="btn btn-default btn-second" href="#" role="button">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/featured-1-1.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <hr class="featurette-divider">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">FEBAURARY 12, 2015</h6>
                            </div>
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">NO COMMENTS</h6>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a class="btn btn-default btn-second" href="#" role="button">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive center-block" src="img/KD7_4189_d-360x180.jpg" alt="...">
                    <div class="caption">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <hr class="featurette-divider">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">FEBAURARY 12, 2015</h6>
                            </div>
                            <div class="col-xs-6">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <h6 class="no-padding no-margin">NO COMMENTS</h6>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt debitis molestiae, quaerat porro fuga necessitatibus! Molestiae, animi, porro. Veniam, minus!</p>
                        <p><a class="btn btn-default btn-second" href="#" role="button">Read More</a></p>
                    </div>
                </div>
            </div>

        </div>
        <!-- news end-->

        <!-- client, testimonials-->
        <div class="row clitest">

            <!-- client-->

            <div class="col-md-6 client">
                <h3 class="featurette-heading">Our Clients</h3>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/40ConstructionLogos_10.jpg" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/Blue-Oak-Construction-Logo-Design.png" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/crew.jpg" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/hammer.jpg" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/jackhammer.jpg" alt="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <img class="img-responsive center-block" src="img/progressive.jpg" alt="">
                    </div>
                </div>
            </div>


            <!-- testimonials-->

            <div class="col-md-6 testimon">
                <h3 class="featurette-heading">Testimonials</h3>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem odit nemo, repudiandae, unde provident debitis laborum necessitatibus, blanditiis sit enim fuga id voluptatem aspernatur rerum possimus quo. Voluptatem, adipisci mollitia.
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