@foreach($projects as $project)

    <div class="col-md-7">
        <form class="form-horizontal edit_form">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Project Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
                </div>
            </div>
            <div class="form-group">
                <label for="desc" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="10"
                              style="resize:none">{{$project->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Created</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="created_at" name="created_at"
                           value="{{$project->created_at}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a data-link="{{route('projectid.update', $project->id)}}" class="btn btn-info cursor-pointer"
                       id="do_Save">Update</a>
                </div>
            </div>
        </form>
    </div>

@endforeach
