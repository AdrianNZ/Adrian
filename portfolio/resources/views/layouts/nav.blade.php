<div id="main-nav" class="navbar navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <!-- ======= LOGO ========-->
            <a class="navbar-brand scrollto" href="#home">{{$user->name}}<br><span>Web Developer</span></a>
            <!-- <a class="navbar-brand scrollto ir-logo" href="#">JOHN DOE<br><span>UI Designer</span></a> -->

        </div>

        <div id="site-nav" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="sr-only">
                    <a href="#home" class="scrollto">Home</a>
                </li>
                @foreach($navs as $nav)
                    <li>
                        <a href="#{{$nav->href}}" class="scrollto">{{$nav->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div><!--End navbar-collapse -->

    </div><!--End container -->

</div>