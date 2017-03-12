<h3>This is admin Title page</h3>
<hr>
<div class="title_control">
    <form class="form-horizontal title_form">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        @foreach($titles as $title)
            <div class="form-group">
                <label for="title" class="col-sm-1 control-label">User Title</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="title" name="title_name" value="{{$title->name}}"
                           readonly>
                </div>
                <div class="col-sm-5">
                    <input type="checkbox" name="status" value="high" disabled
                           @if($title->status=='high') checked @endif> High
                    <input type="checkbox" name="status" value="medium" disabled
                           @if($title->status=='medium') checked @endif>
                    Medium
                    <input type="checkbox" name="status" value="low" disabled @if($title->status=='low') checked @endif>
                    Low
                </div>

                <div class="col-sm-3">
                    <a data-link="{{route('title.show', $title->id)}}"
                       class="btn btn-sm btn-success cursor-pointer" id="do_title_show">Edit</a>
                    <a data-link="{{route('title.iddelete', $title->id)}}"
                       class="btn btn-sm btn-danger cursor-pointer" id="do_title_delete">Delete</a>
                </div>
            </div>
        @endforeach
    </form>

    <hr>


    <div class="pull-right">
        <a data-link="{{route('title.create')}}"
           class="btn btn-sm btn-primary cursor-pointer" id="do_title_create">Title ADD</a>
    </div>


</div>
