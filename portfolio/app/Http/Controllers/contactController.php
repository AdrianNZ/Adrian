<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class contactController extends Controller
{
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email',
            'contactName' => 'required',
            'comments' => 'required'
        ]);

        $data = array(
            'email' => $request->email,
            'contactName' => $request->contactName,
            'comments' => $request->comments
        );

        Mail::send('email.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@gmail.com');
            $message->subject($data['comments']);
        });

    }
}
