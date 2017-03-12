<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProject;
use App\Image;
use App\Navbar;
use App\Project;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['img_path'] = \Config::get('app.imageRoot.src');

        $hasCate = CategoryProject::all()->groupBy('category_id')->keys()->all();
        $admin = User::where('position', '=', 'admin')->first();
        return view('layouts.master', $data)
            ->with('user', $admin)
            ->with('info', $admin->profile()->get())
            ->with('titles', $admin->titles()->where('status', '=', 'high')->orderBy('name')->take(3)->get())
            ->with('navs', Navbar::where('status', '=', 'published')->get())
            ->with('skills', $admin->skills()->orderBy('percentage', 'DESC')->take(4)->get())
            ->with('categories', Category::find($hasCate)->all())
            ->with('projects', Project::all());
    }
}
