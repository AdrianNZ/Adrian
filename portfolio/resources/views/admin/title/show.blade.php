<h3>Title Update</h3>
<hr>
<div class="title_update">
    <form class="form-horizontal title_edit_form">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-sm-1 control-label">User Title</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="title" name="title_name" value="{{$title->name}}"
                       required>
            </div>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="radio" name="status" value="high" @if($title->status=='high') checked @endif> High
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="medium" @if($title->status=='medium') checked @endif>
                    Medium
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="low" @if($title->status=='low') checked @endif> Low
                </label>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('title.idupdate', $title->id)}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_title_update">Update</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>