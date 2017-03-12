<header id="home" class="jumbotron">

    <div class="container">

        <div class="message-box clearfix">

            <div class="left-col">
                <p>I AM <span>{{$user->name}}</span><br/>and I'm a </p>
            </div>

            <div class="right-col flexslider home-slider" style="z-index:1;">

                <ul class="slides">
                    @foreach($titles as $title)
                        <li><p>{{$title->name}}</p></li>
                    @endforeach
                </ul>

            </div><!--End home-slider -->

        </div><!--End message-box -->

    </div><!--End container -->

</header>