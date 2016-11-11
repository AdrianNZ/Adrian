<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index(){
        if(View::exists('blade.index'))
        return view('blade.index');
        else
            return 'No View available';
    }

    public function project(){
        if(View::exists('blade.project'))
            return view('blade.project');
        else
            return 'No View available';
    }

    public function service(){
        if(View::exists('blade.service'))
            return view('blade.service');
        else
            return 'No View available';
    }

    public function contact(){
        if(View::exists('blade.contact'))
            return view('blade.contact');
        else
            return 'No View available';
    }
}
