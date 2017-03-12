<h3>Skill Update</h3>
<hr>
<div class="skill_update">
    <form class="form-horizontal skill_edit_form">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="skill" class="col-sm-1 control-label">User Skill</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="skill" name="skill_name" value="{{$skill->name}}"
                       required>
            </div>
            <label for="skill_percent" class="col-sm-2 control-label">Percentage</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="skill_percent" name="percentage"
                       value="{{$skill->percentage}}" required>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('skill.idupdate', $skill->id)}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_skill_update">Update</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>