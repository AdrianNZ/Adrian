<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Libraries\AjaxResponse;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $data['projects'] = Project::where('user_id', $user->id)->get();
        return View('project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rsp = new AjaxResponse();
        $data['html'] = \View::make('project.create')->render();
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
    public function store(Request $request)
    {
        $rsp = new AjaxResponse();
        $project = new Project();

        $user = \Auth::user();

        $project->user()->associate($user->id);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        $list['projects'] = Project::where('user_id', $user->id)->get();
        $data['html'] = \View::make('project.project_list', array('projects' => $list['projects']))->render();

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
    public function show($id)
    {
        $rsp = new AjaxResponse();
        $list['projects'] = Project::findOrFail($id);
        if ($list['projects'] == null) abort(404, $id . " Model has not found");
        $data['html'] = \View::make('project.show', array('projects' => $list))->render();
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
    public function edit($id)
    {
        $rsp = new AjaxResponse();
        $list['projects'] = Project::findOrFail($id);
        if ($list['projects'] == null) abort(404, $id . " Model has not found");
        $data['html'] = \View::make('project.edit', array('projects' => $list))->render();
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
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        return redirect('/project')->with('message', $project->name . " has been changed");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        foreach ($project->tasks as $task) {
            $task->delete();
        }

        $project->delete();

        return redirect('/project')->with('message', $project->name . " has been deleted");
    }

    public function ProjectUpdate(Request $request, $id)
    {
        $rsp = new AjaxResponse();

        $project = Project::findOrFail($id);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        $list['projects'] = Project::findOrFail($id);
        $data['html'] = \View::make('project.show', array('projects' => $list))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    public function ProjectDelete($id)
    {
        $rsp = new AjaxResponse();
        $user = \Auth::user();

        $project = Project::findOrFail($id);

        foreach ($project->tasks as $task) {
            $task->delete();
        }

        $project->delete();

        $list['projects'] = Project::where('user_id', $user->id)->get();
        $data['html'] = \View::make('project.project_list', array('projects' => $list['projects']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }
}
