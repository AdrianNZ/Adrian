<footer>
    <div class="container-fluid no-margin no-padding">
        <div class="footer_wrap no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- follow icon -->

                        <div class="follow">
                            <h6>Follow Us</h6>
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
                <!-- follow icon end-->

                <!-- FOOTER texts -->

                <div class="row footer-text">
                    <div class="col-md-3">

                        <!-- about company -->

                        <h4 class="title">about company</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint vero pariatur ea minus perferendis aut suscipit repudiandae eaque, est inventore.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, cumque?
                        </p>
                    </div>
                    <!-- about company end-->

                    <!-- about company2 -->
                    <div class="col-md-3">
                        <h4 class="title">about company</h4>
                            <div class="row">
                                @foreach($footer_menus as $footer_menu)
                                    <div class="col-xs-6">
                                        <h6 class="ft-wh"><a href="{{$footer_menu->href}}">{{$footer_menu->title}}</a></h6>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    <!-- about company2 end -->

                    <!-- office -->

                    <div class="col-md-3 office_detail">
                        <h4 class="title">construction office</h4>
                        <div class="row">
                            <div class="col-xs-2">
                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-10">
                                <h6 class="ft-gr">{{$offices[0]->address}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-10">
                                <h6 class="ft-gr">{{$offices[0]->phone}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-10">
                                <h6 class="ft-wh">{{$offices[0]->email}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-10">
                                <h6 class="ft-gr">{{$offices[0]->fax}}</h6>
                            </div>
                        </div>

                    </div>

                    <!-- office end-->

                    <!-- hours -->
                    <div class="col-md-3">
                        <h4 class="title">business hours</h4>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, cumque?
                        </p>

                        <div class="row">
                            <div class="col-xs-6">
                                <h6 class="ft-gr">Monday - Friday</h6>
                            </div>
                            <div class="col-xs-5 col-xs-offset-1">
                                <h6 class="ft-gr text-right">9am to 5pm</h6>
                            </div>
                        </div>

                        <div class="row row-border">
                            <div class="col-xs-6">
                                <h6 class="ft-gr">Saturday</h6>
                            </div>
                            <div class="col-xs-5 col-xs-offset-1">
                                <h6 class="ft-gr text-right">10am to 2pm</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <h6 class="ft-gr ">Sunday</h6>
                            </div>
                            <div class="col-xs-5 col-xs-offset-1">
                                <h6 class="ft-gr text-right">Closed</h6>
                            </div>
                        </div>
                    </div>
                    <!-- hours end-->

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-margin no-padding">
        <div class="policy-wrap no-margin">
            <div class="container">
                <div class="col-xs-4">
                    <h4 class="ft-gr">copyright Lorem ipsum dolor sit amet. <span class="ft-wh">WPCharming</span></h4>
                </div>
                <div class="col-xs-5 col-xs-offset-3 policy-list">
                    <ul class="ft-wh">
                        <li>Our Services</li>
                        <li>Projects</li>
                        <li>Contact Us</li>
                        <li>Disclaimer</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>