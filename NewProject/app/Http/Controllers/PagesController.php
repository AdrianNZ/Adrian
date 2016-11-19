<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Menu;
use App\Notice;
use App\Thumbnail;
use App\Image;
use App\Office;

class PagesController extends Controller
{
    public function index()
    {
        $data['img_path'] = \Config::get('app.image.Thumb');
        $data['offices'] = Office::where('active', 'active')->take(1)->get();
        $data['footer_menus'] = Menu::all()->take(8);
        $data['clients'] = Image::where('position', 'client')->orderBy('created_at','desc')->take(6)->get();
        $data['newses'] = Thumbnail::where('position','news')->orderBy('created_at','desc')->take(3)->get();
        $data['projects'] = Thumbnail::where('position','project')->orderBy('created_at','desc')->take(3)->get();
        $data['thumbnails_bottom'] = Thumbnail::where('position','main_bottom')->orderBy('title','desc')->take(3)->get();
        $data['thumbnails_middle'] = Thumbnail::where('position','main_middle')->orderBy('title','desc')->take(3)->get();
        $data['thumbnails_top'] = Thumbnail::where('position','main_top')->orderBy('title','desc')->take(3)->get();
        $data['notices'] = Notice::all(); //carousel
        $data['menus'] = Menu::all()->take(7);


        if (View::exists('blade.index'))
            return view('blade.index', $data);
        else
            return 'No View available';
    }

    public function project()
    {
        $data['img_path'] = \Config::get('app.image.Thumb');
        $data['projects'] = Thumbnail::where('position','project')->orderBy('created_at','desc')->take(9)->get();
        $data['offices'] = Office::where('active', 'active')->take(1)->get();
        $data['footer_menus'] = Menu::all()->take(8);
        $data['menus'] = Menu::all()->take(7);

        if (View::exists('blade.project'))
            return view('blade.project', $data);
        else
            return 'No View available';
    }

    public function service()
    {
        $data['img_path'] = \Config::get('app.image.Thumb');
        $data['services'] = Thumbnail::where('position','service')->orderBy('created_at','desc')->take(6)->get();
        $data['offices'] = Office::where('active', 'active')->take(1)->get();
        $data['footer_menus'] = Menu::all()->take(8);
        $data['menus'] = Menu::all()->take(7);

        if (View::exists('blade.service'))
            return view('blade.service', $data);
        else
            return 'No View available';
    }

    public function contact()
    {
        $data['offices'] = Office::where('active', 'active')->take(1)->get();
        $data['footer_menus'] = Menu::all()->take(8);
        $data['menus'] = Menu::all()->take(7);

        if (View::exists('blade.contact'))
            return view('blade.contact', $data);
        else
            return 'No View available';
    }

}
