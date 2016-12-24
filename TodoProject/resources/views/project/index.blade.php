@extends('layouts.app')

@section('title')
    Project List
@endsection

@section('content')

    <div class="container">

        <div class="col-md-12">
            <p>
                <a data-link="{{route('project.create')}}" class="btn btn-success cursor-pointer" id="project_create">Create
                    project</a>
            </p>

            @if(\Session::has('message'))
                <div class="alert alert-info">{{\Session::get('message')}}</div>
            @endif


        </div>
        <div class="Project_Panel">
            @include('project.project_list')
        </div>
    </div>

@endsection
