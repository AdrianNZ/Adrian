<?php

namespace App\Http\Controllers;

use App\Navbar;
use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;

use Validator;

class adminNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rsp = new AjaxResponse();
        $list['navs'] = Navbar::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();
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
        $data['html'] = \View::make('admin.nav.add')->render();
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
            'nav_name' => 'required|max:255',
            'nav_slug' => 'required|max:255',
            'nav_status' => 'required'
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
        $nav = new Navbar();
        $nav->name = $request->nav_name;
        $nav->href = $request->nav_slug;
        $nav->status = $request->nav_status;
        $nav->save();

        $list['navs'] = Navbar::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();
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
        $list['nav'] = Navbar::findOrFail($id);
        $data['html'] = \View::make('admin.nav.show', array('nav' => $list['nav']))->render();
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
            'nav_name' => 'required|max:255',
            'nav_slug' => 'required|max:255',
            'nav_status' => 'required'
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
        $nav = Navbar::findOrFail($id);
        $nav->name = $request->nav_name;
        $nav->href = $request->nav_slug;
        $nav->status = $request->nav_status;
        $nav->save();

        $list['navs'] = Navbar::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function iddelete($id)
    {
        $rsp = new AjaxResponse();
        $nav = Navbar::findOrFail($id);
        $nav->delete();

        $list['navs'] = Navbar::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
