<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $userInfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!\Auth::attempt($userInfo)) {
            return ['code' => 0, 'message' => 'Login Failed'];
        }
        return ['code' => 1, 'message' => 'Login Success'];
    }
}
