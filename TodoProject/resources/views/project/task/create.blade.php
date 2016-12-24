<div class="col-md-7">
    <form class="form-horizontal task_create_form">
        {{csrf_field()}}
        {{--<div class="form-group hidden">--}}
        {{--<input type="text" id="id" name="project_id" value="{{$project}}">--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="project_id" class="col-sm-2 control-label">Project</label>
            <div class="col-sm-10">
                @foreach($projects as $project)
                    <label class="radio-inline">
                        <input type="radio" name="project_id" id="{{$project->id}}" value="{{$project->id}}">
                        {{$project->name}}
                    </label>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Task Name</label>
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
            <label for="created_at" class="col-sm-2 control-label">Due Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="due_date" name="due_date" value="{{old('due_date')}}">
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
                <a data-link="{{route('project.task.store', $project)}}" class="btn btn-primary cursor-pointer"
                   id="do_TaskCreate">Create</a>
            </div>
        </div>
    </form>
</div>
