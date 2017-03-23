<script src="/js/select2/select2.min.js"></script>
<script src="/js/tinymce/tinymce.min.js"></script>


<script>
    tinymce.init({
        selector: '#project_create_desc',
        resize: false,
        menubar: false
    });
</script>

<h3>Project Create</h3>
<hr>
<div class="project_add">
    <form class="form-horizontal" id="project_add_form" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="project_name" class="col-sm-3 control-label">Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="project_name" name="project_name"
                       value="{{old('project_name')}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="project_desc" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea name="project_desc" class="form-control" id="project_create_desc" cols="30"
                          rows="10" value="">{{old('project_desc')}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="project_category" class="col-sm-3 control-label">Category</label>
            <div class="col-sm-9">
                <select name="categories[]" id="multiple_select" class="form-control" multiple="multiple">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="project_img" class="col-sm-3 control-label">Representative IMG</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="project_img" name="project_img" required>
            </div>
        </div>

        <div class="form-group">
            <label for="project_slide_img" class="col-sm-3 control-label">For Slide show IMG</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="project_slide_img" name="project_slide_imges[]" multiple="true">
            </div>
        </div>

        <div class="form-group">
            <label for="project_slug" class="col-sm-3 control-label">Link to</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="project_slug" name="project_slug"
                       value="{{old('project_slug')}}" required>
            </div>
        </div>

        <div class="form-group hidden">
            <input type="text" value="fake_img" name="fake_img">
        </div>

        <div class="form-group">
            <div class="col-sm-9 pull-right">
                <a data-link="{{route('project.store')}}"
                   class="btn btn-sm btn-block btn-success cursor-pointer" id="do_project_store">Store</a>
            </div>
        </div>

    </form>
</div>
<div id="error-msg"></div>
<script>
        $('#multiple_select').select2();
</script>

