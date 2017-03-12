<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;

use Validator;

class adminTitleController extends Controller
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
        $list['titles'] = $user->titles()->get();
        $data['html'] = \View::make('admin.title.index', array('titles' => $list['titles'], 'user' => $user))->render();
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
        $data['html'] = \View::make('admin.title.add')->render();
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
            'title_name' => 'required|max:255',
            'status' => 'required'
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
        $title = new Title();
        $user = \Auth::user();
        $title->user()->associate($user->id);
        $title->name = $request->title_name;
        $title->status = $request->status;
        $title->save();

        $list['titles'] = $user->titles()->get();
        $data['html'] = \View::make('admin.title.index', array('titles' => $list['titles'], 'user' => $user))->render();
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
        $list['title'] = Title::findOrFail($id);
        $data['html'] = \View::make('admin.title.show', array('title' => $list['title']))->render();
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
            'title_name' => 'required|max:255',
            'status' => 'required'
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
        $title = Title::findOrFail($id);
        $title->name = $request->title_name;
        $title->status = $request->status;
        $title->save();

        $list['titles'] = $user->titles()->get();
        $data['html'] = \View::make('admin.title.index', array('titles' => $list['titles'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function iddelete($id)
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $title = Title::findOrFail($id);
        $title->delete();

        $list['titles'] = $user->titles()->get();
        $data['html'] = \View::make('admin.title.index', array('titles' => $list['titles'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
