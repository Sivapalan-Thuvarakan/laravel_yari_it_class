<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homePage()
    {
        return view('home');
    }

    public function videoPage()
    {
        $page="video";
        $color="background-color:yellow";
        return view('pages.video',compact('page','color'));
    }

    public function galleryPage()
    {
        $page="gallery";
        $color="background-color:red";
        return view('pages.gallery',compact('page','color'));
    }

    public function contactusPage()
    {
        $page="conatctus";
        $color="background-color:blue";
        return view('pages.contactus',compact('page','color'));
    }

    public function aboutPage()
    {
        $page="about";
        $color="background-color:green";
        return view('pages.about',compact('page','color'));
    }

    public function myInfo()
    {
        $page="myInfo";
        $color="background-color:orange";
        return view('pages.myInfo',compact('page','color'));
    }
}
