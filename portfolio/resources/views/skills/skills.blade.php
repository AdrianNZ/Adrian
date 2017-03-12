<section id="skills">

    <div class="container">

        <div class="row skills">

            @foreach($skills as $skill)
                <div class="col-sm-6 col-md-3 text-center">
                    <span class="chart" data-percent="{{$skill->percentage}}"><span
                                class="percent">{{$skill->percentage}}</span></span>
                    <h2 class="text-center">{{$skill->name}}</h2>
                </div>
            @endforeach

        </div><!--End row -->

    </div><!--End container -->

</section>