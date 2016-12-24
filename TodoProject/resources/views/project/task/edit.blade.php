<div class="col-md-7">
    <form class="form-horizontal task_edit_form">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Task Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="desc" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" rows="10"
                          style="resize:none">{{$task->description}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Due Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="due_date" name="due_date" value="{{$task->due_date}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a data-link="{{route('taskid.update', [$task->project_id,$task->id])}}" class="btn btn-info cursor-pointer"
                   id="do_TaskSave">Update</a>
            </div>
        </div>
    </form>
</div>
