<footer id="main-footer">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 left-col">
                <h1 class="small-logo">{{$user->name}}<br><span>Web Developer</span></h1>
                <ul class="footer-nav">
                    @foreach($navs as $nav)
                        <li><a class="scrollto" href="#{{$nav->href}}">{{$nav->name}}</a></li>
                    @endforeach
                </ul>
                <p>&copy;Copyright 2013 / All Rights Reserved</p>
            </div>

            <div class="col-sm-6 right-col">
                <h2><a href="{{url('docs/adrian.md')}}">Who Am I?</a></h2>
                <p>I am an enthusiast who enjoys online digital and offline world. I make high quality graphics and
                    clean html5 and css3 codes.</p>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->

</footer>