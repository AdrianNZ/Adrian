<h3>Skill Create</h3>
<hr>
<div class="skill_add">
    <form class="form-horizontal skill_add_form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="skill" class="col-sm-1 control-label">User Skill</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="skill" name="skill_name" value="{{old('skill_name')}}"
                       required>
            </div>
            <label for="skill_percent" class="col-sm-2 control-label">Percentage</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="skill_percent" name="percentage"
                       value="{{old('percentage')}}" required>
            </div>

            <div class="col-sm-3">
                <a data-link="{{route('skill.store')}}"
                   class="btn btn-sm btn-success cursor-pointer" id="do_skill_store">Store</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>