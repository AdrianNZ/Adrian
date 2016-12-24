@extends('layouts.app')

@section('title')
    Task List
@endsection

@section('content')

    <div class="container">

        <div class="col-md-12">

            <p>
                <a data-link="{{route('project.task.create', $tasks[0]->project_id)}}"
                   class="btn btn-success cursor-pointer" id="task_create">Create
                    Task</a>
            </p>

            @if(\Session::has('message'))
                <div class="alert alert-info">{{\Session::get('message')}}</div>
            @endif


        </div>
        <div class="Task_Panel">
            @include('project.task.task_list')
        </div>
    </div>

@endsection
