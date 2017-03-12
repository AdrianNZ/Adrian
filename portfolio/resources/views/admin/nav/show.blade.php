<h3>Navigation Update</h3>
<hr>
<div class="nav_update">
    <form class="form-horizontal nav_edit_form">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <div class="form-group">
                <label for="nav_name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nav_name" name="nav_name" value="{{$nav->name}}"
                           required>
                </div>
                <label for="nav_slug" class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nav_slug" name="nav_slug"
                           value="{{$nav->href}}" required>
                </div>

                <label for="nav_status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" name="nav_status" value="published"
                               @if($nav->status=='published') checked @endif>
                        published
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nav_status" value="unpublished"
                               @if($nav->status=='unpublished') checked @endif>
                        unpublished
                    </label>
                </div>
            </div>
            <div class="col-sm-3 pull-right">
                <a data-link="{{route('nav.idupdate', $nav->id)}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_nav_update">Update</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>