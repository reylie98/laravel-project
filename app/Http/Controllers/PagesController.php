<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function Heri(){
        $title = 'welcome to TutupLapak';
        return view ('pages.index')->with('title',$title);
    }

    public function about(){
        $about ='About';
        return view ('pages.about')->with('about',$about);
    }

    public function services(){
        $services = 'Category';
        return view('pages.services')->with('services',$services);
    }
}

