<h3>This is admin Skill page</h3>
<hr>
<div class="skill_control">
    <form class="form-horizontal skill_form">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        @foreach($skills as $skill)
            <div class="form-group">
                <label for="skill" class="col-sm-1 control-label">User Skill</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="skill" name="skill_name" value="{{$skill->name}}"
                           readonly>
                </div>
                <label for="skill_percent" class="col-sm-2 control-label">Percentage</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="skill_percent" name="percentage"
                           value="{{$skill->percentage}}" readonly>
                </div>

                <div class="col-sm-3">
                    <a data-link="{{route('skill.show', $skill->id)}}"
                       class="btn btn-sm btn-success cursor-pointer" id="do_skill_show">Edit</a>
                    <a data-link="{{route('skill.iddelete', $skill->id)}}"
                       class="btn btn-sm btn-danger cursor-pointer" id="do_skill_delete">Delete</a>
                </div>
            </div>
        @endforeach
    </form>

    <hr>


    <div class="pull-right">
        <a data-link="{{route('skill.create')}}"
           class="btn btn-sm btn-primary cursor-pointer" id="do_skill_create">Skill ADD</a>
    </div>


</div>
