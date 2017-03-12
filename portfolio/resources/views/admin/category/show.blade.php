<h3>category Update</h3>
<hr>
<div class="category_update">
    <form class="form-horizontal category_edit_form">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">User Category</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="category" name="category_name" value="{{$category->name}}"
                       required>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('category.idupdate', $category->id)}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_category_update">Update</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>