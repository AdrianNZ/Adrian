<h3>Category Create</h3>
<hr>
<div class="category_add">
    <form class="form-horizontal category_add_form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="category" class="col-sm-1 control-label">Category</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="category" name="category_name"
                       value="{{old('category_name')}}"
                       required>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('category.store')}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_category_store">Store</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>