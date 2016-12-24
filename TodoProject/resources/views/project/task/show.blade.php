 <div class="col-md-7">

            <div class="form-group">
                <label for="Project Name">Project Name</label>
                <div>
                    <input type="text" class="form-control" id="project_name" name="project_name" readonly="true" value="{{$project->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="Task Name">Task Name</label>
                <div>
                    <input type="text" class="form-control" id="task_name" name="task_name" readonly="true" value="{{$task->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="Task Description">Task Description</label>
                <div>
                    <textarea name="description" id="description" class="form-control" row="" readonly="true">{{$task->description}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="Created">Due_date</label>
                <div>
                    <input type="text" class="form-control" id="due_date" name="due_date" readonly="true" value="{{$task->due_date}}">
                </div>
            </div>

            <div class="form-group">
                <label for="Created">Created</label>
                <div>
                    <input type="text" class="form-control" id="created_at" name="created_at" readonly="true" value="{{$task->created_at}}">
                </div>
            </div>

            <div class="form-group">
                <label for="updated">Updated</label>
                <div>
                    <input type="text" class="form-control" id="updated_at" name="updated_at" readonly="true" value="{{$task->updated_at}}">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <a href="{{route('project.task.index', $task->project_id)}}"><button type="submit" class="btn btn-primary">Task List</button></a>
                </div>
            </div>
        </div>
