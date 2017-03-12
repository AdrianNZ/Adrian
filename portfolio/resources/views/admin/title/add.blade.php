<h3>Title Create</h3>
<hr>
<div class="title_add">
    <form class="form-horizontal title_add_form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-sm-1 control-label">User Title</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="title" name="title_name" value="{{old('title_name')}}"
                       required>
            </div>
            <div class="col-sm-4">
                <label class="radio-inline">
                    <input type="radio" name="status" value="high"> High
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="medium" checked>Medium
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="low"> Low
                </label>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('title.store')}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_title_store">Store</a>
            </div>
        </div>
    </form>
</div>


<div id="error-msg"></div>