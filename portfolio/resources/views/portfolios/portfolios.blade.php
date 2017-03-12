<section id="portfolio">

    <div id="portfolio-header" class="text-center">

        <h1 class="section-title scrollimation scale-in">The <span>works</span> I am proud of<i
                    class="fa fa-pencil"></i></h1>

        <!--==== Portfolio Filters ====-->
        <div id="filter-works">
            <ul>
                <li class="active">
                    <a href="#" data-filter="*">All</a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a href="#" data-filter=".{{$category->name}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div><!--End portfolio filters -->

    </div><!--End portfolio header -->

    <div class="container masonry-wrapper scrollimation fade-in">

        <div id="projects-container">

        @foreach($projects as $project)
            <!-- ==============================================
            SINGLE PROJECT ITEM
            =============================================== -->
                <a class="project-item @foreach($project->categories as $category) {{$category->name}} @endforeach"
                   href="{{$project->href}}"
                   {{--data-images="assets/projects/project-slide.jpg,assets/projects/project-slide.jpg,assets/projects/project-slide.jpg">--}}
                   data-images="@foreach($project->slideimages as $image){{$img_path}}projects/slide/{{$image->slug}}@if(!$loop->last),@endif @endforeach">

                    <img class="img-responsive project-image" src="{{$img_path}}projects/{{$project->title_img}}"
                         alt="{{$project->img}}">
                    <!--Project thumb -->

                    <div class="hover-mask">
                        <h2 class="project-title">{{$project->name}}</h2><!--Project Title -->
                        <p>{{$project->href}}</p><!--Project Subtitle -->
                    </div>

                    <!--==== Project Preview HTML ====-->

                    <div class="sr-only project-description">
                        <p class="clearfix">{{strip_tags($project->description)}}</p>
                        <img class="img-responsive img-center" src="assets/projects/company-logo.png"
                             alt="project_logo">
                    </div>
                </a>
                <!-- ==============================================
                END PROJECT ITEM
                =============================================== -->
            @endforeach

        </div><!-- End projects -->

    </div><!-- End container -->

    <!-- ==============================================
    PROJECT PREVIEW MODAL
    =============================================== -->
    <div id="project-modal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="left-col">
                        <img class="img-responsive" src="assets/imac.png" alt="project_outline">
                        <div class="loader"></div>
                        <div class="image-wrapper"></div>
                    </div>

                    <h1></h1>

                    <div class="project-descr"></div>

                    <div class="clearfix"></div>

                    <p class="text-center"><a class="btn btn-theme"><i class="fa fa-external-link"></i>Visit Website</a>
                    </p>

                </div><!-- End modal-body -->

            </div><!-- End modal-content -->

        </div><!-- End modal-dialog -->

    </div><!-- End modal -->

</section>