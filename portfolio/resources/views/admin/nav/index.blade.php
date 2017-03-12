<h3>This is admin Navigation page</h3>
<em class="text-danger text-right">Only 4 menus available (possible to publish)</em>
<hr>
<div class="nav_control">
    <form class="form-horizontal nav_form">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        @foreach($navs as $nav)
            <div class="form-group">
                <label for="nav_name" class="col-sm-1 control-label">Name</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nav_name" name="nav_name" value="{{$nav->name}}"
                           readonly>
                </div>
                <label for="nav_href" class="col-sm-1 control-label">Slug</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nav_href" name="nav_href"
                           value="{{$nav->href}}" readonly>
                </div>
                <label for="nav_status" class="col-sm-1 control-label">Status</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nav_status" name="nav_status"
                           value="{{$nav->status}}" readonly>
                </div>
                <div class="col-sm-3">
                    <a data-link="{{route('nav.show', $nav->id)}}"
                       class="btn btn-sm btn-success cursor-pointer" id="do_nav_show">Edit {{$nav->id}}</a>
                    <a data-link="{{route('nav.iddelete', $nav->id)}}"
                       class="btn btn-sm btn-danger cursor-pointer" id="do_nav_delete">Delete</a>
                </div>
            </div>
        @endforeach
    </form>

    <hr>


    <div class="pull-right">
        <a data-link="{{route('nav.create')}}"
           class="btn btn-sm btn-primary cursor-pointer" id="do_nav_create">NAV ADD</a>
    </div>


</div>
