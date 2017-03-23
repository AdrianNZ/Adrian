<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;

use Image;
use Validator;
use Illuminate\Support\Facades\Storage;


class adminProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $list['profile'] = $user->profile()->get();
        $data['html'] = \View::make('admin.profile.index', array('profile' => $list['profile'], 'user' => $user))->render();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'description' => 'required',
            'phone' => 'required',
            'address' => 'required'
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

        $profile = Profile::findOrFail($id);

        $profile->description = $request->description;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->linkto_facebook = $request->linkto_facebook;
        $profile->linkto_twitter = $request->linkto_twitter;
        $profile->linkto_linkedin = $request->linkto_linkedin;

        if ($request->hasFile('userimg')) {

            $oldFilename = $profile->img;
            Storage::delete($oldFilename);

            $image = $request->file('userimg');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/upload/img/' . $filename);
            Image::make($image)->resize(360, 360)->save($location);

            $profile->img = $filename;
        }

        $profile->save();
        $list['profile'] = $user->profile()->get();
        $data['html'] = \View::make('admin.profile.index', array('profile' => $list['profile'], 'user' => $user))->render();
        $rsp->messages = 'Successfully update profile';
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
