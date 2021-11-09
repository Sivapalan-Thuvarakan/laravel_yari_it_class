<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function myInfo()
    {
        // return 'welcome first Controller';
        return view('about');
    }
    public function fullName()
    {
        // return 'welcome first Controller';
        return 'Sivapala Thuvarakan';
    }
}
