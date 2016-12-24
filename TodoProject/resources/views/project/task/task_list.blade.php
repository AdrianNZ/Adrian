<table class="table table-striped">

    <thead>
    <tr class="lead">
        <td>Project Name</td>
        <td>Task Name</td>
        <td>Description</td>
        <td>Due Date</td>
        <td></td>
        <td></td>

    </tr>
    </thead>

    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->project->name}}</td>
            <td><a data-link="{{route('project.task.show', [$task->project_id, $task->id])}}" class="cursor-pointer" id="task_show">{{$task->name}}</a></td>
            <td>{{$task->description}}</td>
            <td>{{$task->due_date}}</td>
            <td><a data-link="{{route('project.task.edit', [$task->project_id, $task->id])}}" class="btn btn-info cursor-pointer" id="task_edit">Edit</a></td>

            <td>
                <form class="form-horizontal">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <a data-link="{{route('taskid.destroy', [$task->project_id, $task->id])}}" class="btn btn-danger cursor-pointer"
                       id="do_TaskDelete">Delete</a>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>