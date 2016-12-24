<div class="col-md-7">
    <form class="form-horizontal create_form">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Project Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="" style="resize:none"
                    >{{old('description')}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="created_at" class="col-sm-2 control-label">Created</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="created_at" name="created_at" value="{{old('created_at')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="updated_at" class="col-sm-2 control-label">Updated</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="updated_at" name="created_at" value="{{old('updated_at')}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a data-link="{{route('project.store')}}" class="btn btn-primary cursor-pointer"
                   id="do_Create">Create</a>
            </div>
        </div>
    </form>
</div>
