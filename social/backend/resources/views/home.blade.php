@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Add Friend</h3>

        <div class="col-sm-6">
            <vue-users title="Users List" action="Add" :list="users"></vue-users>
        </div>

        <div class="col-sm-6">
            <vue-users title="Friend List" action="Remove" :list="friends"></vue-users>
        </div>
    </div>
</div>
@endsection
