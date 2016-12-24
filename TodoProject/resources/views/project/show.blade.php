@foreach($projects as $project)

    <div class="col-md-7">

        <div class="form-group">
            <label for="Project Name">Project Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" readonly="true"
                       value="{{$project->name}}">
            </div>
        </div>

        <div class="form-group">
            <label for="Project Description">Project Description</label>
            <div>
                <textarea name="description" id="description" class="form-control" row=""
                          readonly="true">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="Created">Created</label>
            <div>
                <input type="text" class="form-control" id="created_at" name="created_at" readonly="true"
                       value="{{$project->created_at}}">
            </div>
        </div>

        <div class="form-group">
            <label for="updated">Updated</label>
            <div>
                <input type="text" class="form-control" id="updated_at" name="updated_at" readonly="true"
                       value="{{$project->updated_at}}">
            </div>
        </div>
        <div class="form-group">
            <div>
                <a href="{{route('project.index')}}" class="btn btn-primary"> Project List</a>
                <a href="{{route('project.task.index', $project->id)}}" class="btn btn-primary pull-right">Task List</a>
            </div>
        </div>
    </div>
@endforeach