<h3>This is admin Project page</h3>
<hr>
<div class="project_control">
    <form class="form-horizontal project_form">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        @foreach($projects as $project)
            <div class="form-group">
                <label for="project_name" class="col-sm-2 control-label">User Project</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="project_name" name="project_name" value="{{$project->name}}"
                           readonly>
                </div>

                <div class="col-sm-offset-1 col-sm-3">
                    <a data-link="{{route('project.show', $project->id)}}"
                       class="btn btn-sm btn-success cursor-pointer" id="do_project_show">Edit</a>
                    <a data-link="{{route('project.iddelete', $project->id)}}"
                       class="btn btn-sm btn-danger cursor-pointer" id="do_project_delete">Delete</a>
                </div>
            </div>
        @endforeach
    </form>

    <hr>


    <div class="pull-right">
        <a data-link="{{route('project.create')}}"
           class="btn btn-sm btn-primary cursor-pointer" id="do_project_create">Project ADD</a>
    </div>

</div>
