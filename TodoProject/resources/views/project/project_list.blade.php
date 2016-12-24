<table class="table table-striped">

    <thead>
    <tr class="lead">
        <td>Name</td>
        <td>Description</td>
        <td>Created</td>
        <td></td>
        <td></td>

    </tr>
    </thead>

    <tbody>
    @foreach($projects as $project)
        <tr>
            <td><a data-link="{{route('project.show', $project->id)}}" class="cursor-pointer"
                   id="project_show">{{$project->name}}</a></td>
            <td>{{$project->description}}</td>
            <td>{{$project->created_at}}</td>
            <td><a data-link="{{route('project.edit', $project->id)}}" class="btn btn-info cursor-pointer"
                   id="project_edit">Edit</a></td>

            <td>
                <form class="form-horizontal">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <a data-link="{{route('projectid.destroy', $project->id)}}" class="btn btn-danger cursor-pointer"
                       id="do_Delete">Delete</a>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>