<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('thuva');
})->name('home');

Route::get('/welcome', function () {
    return "welcome to the page";
});

Route::get('/home', function () {
    return 'This is a Home page';
});




Route::get('/results', function () {
    $x=30;
    $y=20;

    return ($x>$y)?"pass":"fail";
});

Route::get('/error', function () {
    return "<i style='color:red'>Your Messga is wrong</i>";
});

Route::get('/about/{page?}', function ($page = "10") {
    $page="<i>Thuvarakan</i>";
    return view('about')->with('page',$page);
}); 

Route::get('/test/{page?}', function ($page = "10") {
    return view('test')->with('page',$page);
}); 


//laravel Homework-1 Route

Route::get('/homework_method1/{page?}', function ($page = null) {
    
    if($page == "video")
        return view('pages.video')->with('page',$page);
    else if($page == "about")
        return view('pages.about')->with('page',$page);
    else if($page == "gallery")
        return view('pages.gallery')->with('page',$page);
    else if($page == "contactus")
        return view('pages.contactus')->with('page',$page);
    else if($page == "myinfo")
        return view('pages.myInfo')->with('page',$page);
    else
        return view('welcome')->with('page',$page);
}); 


Route::get('homework_method2/{page?}',function($page=null){
    // return view('pages/'.$page)->with('page',$page);
    // return view('pages/'.$page)->withPage($page);

    // return view('pages/'.$page,['page'=>$page]);
    // return view('pages/'.$page,array('page'=>$page));

    return view('pages/'.$page,compact('page'));
})->where('page', '[A-Za-z]+');