<h3>This is admin profile page</h3>
{{$user->email}}
<hr>

<div id="messages" class="hidden alert alert-success alert-dismissible" role="alert">
    <h5>Successfully update profile</h5>
</div>

<div class="profile_update">
    <form class="form-horizontal" id="profile_edit_form" enctype="multipart/form-data">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="username">User Profile</label>
            <div>
                <input type="text" class="form-control" id="username" name="name" value="{{$user->name}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="userdescription">User Description</label>
            <div>
                <textarea name="description" id="userdescription" class="form-control"
                          row="" required>{{$profile[0]->description}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="userimg">User Image</label>
            <div>
                <input type="file" class="form-control" id="userimg" name="userimg" required>
            </div>
        </div>

        <div class="form-group">
            <label for="userphone">User phone</label>
            <div>
                <input type="text" class="form-control" id="userphone" name="phone" value="{{$profile[0]->phone}}"
                       required>
            </div>
        </div>

        <div class="form-group">
            <label for="useraddress">User address</label>
            <div>
                <input type="text" class="form-control" id="useraddress" name="address"
                       value="{{$profile[0]->address}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="userfacebook">User facebook link</label>
            <div>
                <input type="text" class="form-control" id="userfacebook" name="linkto_facebook"
                       value="{{$profile[0]->linkto_facebook}}">
            </div>
        </div>

        <div class="form-group">
            <label for="usertwitter">User twitter link</label>
            <div>
                <input type="text" class="form-control" id="usertwitter" name="linkto_twitter"
                       value="{{$profile[0]->linkto_twitter}}">
            </div>
        </div>

        <div class="form-group">
            <label for="userlinkedin">User linkedin link</label>
            <div>
                <input type="text" class="form-control" id="userlinkedin" name="linkto_linkedin"
                       value="{{$profile[0]->linkto_linkedin}}">
            </div>
        </div>

        <div class="form-group">
            <label for="Created">Created</label>
            <div>
                <input type="text" class="form-control" id="created_at" name="created_at" readonly="true"
                       value="{{$profile[0]->created_at}}">
            </div>
        </div>

        <div class="form-group">
            <div>
                <a data-link="{{route('profile.idupdate', $profile[0]->id)}}"
                   class="btn btn-primary pull-right cursor-pointer" id="do_profile_update">Profile Update</a>
            </div>
        </div>
    </form>
</div>

<div id="error-msg"></div>