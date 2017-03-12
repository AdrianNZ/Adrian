<h3>Navigation Create</h3>
<hr>
<div class="nav_add">
    <form class="form-horizontal nav_add_form">
        {{csrf_field()}}
        <div class="form-group">
            <div class="form-group">
                <label for="nav_name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nav_name" name="nav_name" value="{{old('nav_name')}}"
                           required>
                </div>
                <label for="nav_slug" class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nav_slug" name="nav_slug"
                           value="{{old('nav_slug')}}" required>
                </div>

                <label for="nav_status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" name="nav_status" value="published">
                        published
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nav_status" value="unpublished">
                        unpublished
                    </label>
                </div>
            </div>
            <div class="col-sm-3 pull-right">
                <a data-link="{{route('nav.store')}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_nav_store">Store</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>