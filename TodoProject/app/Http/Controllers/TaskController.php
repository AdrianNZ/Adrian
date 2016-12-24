<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;
use App\User;
use App\Http\Libraries\AjaxResponse;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $user = \Auth::user();
        $data['tasks'] = $user->tasks()->get();
        return View('project.task.index', $data);
    }

    public function index($pid)
    {
        $project = Project::findOrFail($pid);
        $task = Task::where('project_id','=',$pid)->first();
        $tasks = $project->tasks();

        if ($task != null) {
            $data['tasks'] = $tasks->get();

            return View('project.task.index', $data);
        } else {
            $user = \Auth::user();
            $data['tasks'] = $user->tasks()->get();

            return redirect('/task')->with($data)->with('message', $project->name . " do not have any task");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pid)
    {
        $user = \Auth::user();

        $rsp = new AjaxResponse();
        $list['project'] = $pid;

        $list['projects'] = Project::where('user_id', $user->id)->get();

        $data['html'] = \View::make('project.task.create', array('project' => $list['project'], 'projects'=>$list['projects']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pid)
    {
        $rsp = new AjaxResponse();
        $task = new Task();

        $task->project_id = $request->project_id;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->save();

        $list['tasks'] = Task::where('project_id', $pid)->get();
        $data['html'] = \View::make('project.task.task_list', array('tasks' => $list['tasks']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($pid, $tid)
    {
        $rsp = new AjaxResponse();
        $list['project'] = Project::findOrFail($pid);
        if ($list['project'] == null) abort(404, $pid . " Project Model has not found");
        $list['task'] = Task::findOrFail($tid);
        if ($list['task'] == null) abort(404, $tid . " Task Model has not found");

        $data['html'] = \View::make('project.task.show', array('project' => $list['project'], 'task' => $list['task']))->render();
        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pid, $tid)
    {
        $rsp = new AjaxResponse();
        $list['project'] = Project::findOrFail($pid);
        if ($list['project'] == null) abort(404, $pid . " Project Model has not found");
        $list['task'] = Task::findOrFail($tid);
        if ($list['task'] == null) abort(404, $tid . " Task Model has not found");

        $data['html'] = \View::make('project.task.edit', array('project' => $list['project'], 'task' => $list['task']))->render();
        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pid, $tid)
    {
        $task = Task::findOrFail($tid);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect('/task')->with('message', $task->name . " has been changed");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid, $tid)
    {
        $task = Task::findOrFail($tid);

        $task->delete();

        return redirect('/task')->with('message', $task->name . " has been deleted");
    }

    public function TaskUpdate(Request $request, $pid, $tid)
    {
        $rsp = new AjaxResponse();

        $project = Project::findOrFail($pid);
        $task = Task::findOrFail($tid);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->save();

        $list['project'] = Project::findOrFail($pid);
        if ($list['project'] == null) abort(404, $pid . " Project Model has not found");
        $list['task'] = Task::findOrFail($tid);
        if ($list['task'] == null) abort(404, $tid . " Task Model has not found");

        $data['html'] = \View::make('project.task.show', array('project' => $list['project'], 'task' => $list['task']))->render();
        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    public function TaskDelete($pid, $tid)
    {
        $rsp = new AjaxResponse();
        $task = Task::findOrFail($tid);
        $task->delete();

        $list['tasks'] = Task::where('project_id', $pid)->get();
        $data['html'] = \View::make('project.task.task_list', array('tasks' => $list['tasks']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }
}
