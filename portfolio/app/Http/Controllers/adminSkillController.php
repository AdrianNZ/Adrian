<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;

use Validator;

class adminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $list['skills'] = $user->skills()->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rsp = new AjaxResponse();
        $data['html'] = \View::make('admin.skill.add')->render();
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
        $roles = [
            'skill_name' => 'required|max:255',
            'percentage' => 'required'
        ];
        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.valid', array('errors' => $list['errors']))->render();
            $rsp->error_msg = $list['errors'];
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }

        $rsp = new AjaxResponse();
        $skill = new Skill();
        $user = \Auth::user();
        $skill->user()->associate($user->id);
        $skill->name = $request->skill_name;
        $skill->percentage = $request->percentage;
        $skill->save();

        $list['skills'] = $user->skills()->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills'], 'user' => $user))->render();
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
        $list['skill'] = Skill::findOrFail($id);
        $data['html'] = \View::make('admin.skill.show', array('skill' => $list['skill']))->render();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function idupdate(Request $request, $id)
    {
        $roles = [
            'skill_name' => 'required|max:255',
            'percentage' => 'required'
        ];
        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.valid', array('errors' => $list['errors']))->render();
            $rsp->error_msg = $list['errors'];
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }

        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $skill = Skill::findOrFail($id);
        $skill->name = $request->skill_name;
        $skill->percentage = $request->percentage;
        $skill->save();

        $list['skills'] = $user->skills()->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function iddelete($id)
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $skill = Skill::findOrFail($id);
        $skill->delete();

        $list['skills'] = $user->skills()->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
