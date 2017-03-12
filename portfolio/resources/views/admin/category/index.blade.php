<h3>This is admin Category page</h3>
<hr>
<div class="category_control">
    <form class="form-horizontal category_form">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        @foreach($categories as $category)
            <div class="form-group">
                <label for="category" class="col-sm-2 control-label">User Category</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="category" name="category_name" value="{{$category->name}}"
                           readonly>
                </div>

                <div class="col-sm-offset-1 col-sm-3">
                    <a data-link="{{route('category.show', $category->id)}}"
                       class="btn btn-sm btn-success cursor-pointer" id="do_category_show">Edit</a>
                    <a data-link="{{route('category.iddelete', $category->id)}}"
                       class="btn btn-sm btn-danger cursor-pointer" id="do_category_delete">Delete</a>
                </div>
            </div>
        @endforeach
    </form>

    <hr>


    <div class="pull-right">
        <a data-link="{{route('category.create')}}"
           class="btn btn-sm btn-primary cursor-pointer" id="do_category_create">Category ADD</a>
    </div>

</div>
