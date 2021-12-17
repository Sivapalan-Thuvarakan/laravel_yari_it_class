<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentNewController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentSubjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
//.................................get............................................................
// Route::get('/', function () {
//     return view('about');
// })->name('home');

// Route::post('test', function (Request $request) {
//     $fna = $request->input('fname');
//     // return $request->all();
//     return view('test',compact('fna'));
// });





// Route::get('/welcome', function () {
//     return "welcome to the page";
// });

// Route::get('/home', function () {
//     return 'This is a Home page';
// });




// Route::get('/results', function () {
//     $x=30;
//     $y=20;

//     return ($x>$y)?"pass":"fail";
// });

// Route::get('/error', function () {
//     return "<i style='color:red'>Your Messga is wrong</i>";
// });

// Route::get('/about/{page?}', function ($page = "10") {
//     $page="<i>Thuvarakan</i>";
//     return view('about')->with('page',$page);
// });

// Route::get('/test/{page?}', function ($page = "10") {
//     return view('test')->with('page',$page);
// });


// //laravel Homework-1 Route

// Route::get('/homework_method1/{page?}', function ($page = null) {

//     if($page == "video")
//         return view('pages.video')->with('page',$page);
//     else if($page == "about")
//         return view('pages.about')->with('page',$page);
//     else if($page == "gallery")
//         return view('pages.gallery')->with('page',$page);
//     else if($page == "contactus")
//         return view('pages.contactus')->with('page',$page);
//     else if($page == "myinfo")
//         return view('pages.myInfo')->with('page',$page);
//     else
//         return view('pages.home')->with('page',$page);
// });


// Route::get('homework_method2/{page?}',function($page=null){
//     // return view('pages/'.$page)->with('page',$page);
//     // return view('pages/'.$page)->withPage($page);

//     // return view('pages/'.$page,['page'=>$page]);
//     // return view('pages/'.$page,array('page'=>$page));
//     //doubt
//     return view('pages/'.$page,compact('page'));
// })->where('page', '[A-Za-z]+');

// //3.Link Between pages

// Route::get('homework-3-link/{page?}',function($page="home"){
//     return view('pages/'.$page,compact('page'));
// })->where('page', '[A-Za-z]+')->name('myLink');

// //4.changing color according to path variable

// Route::get('homework-4-color/{page?}/{color?}',function($page="home",$color="yellow"){
//     $color="background-color:".$color;
//     return view('pages/'.$page,compact('page','color'));
// })->where('page', '[A-Za-z]+')->name('myLink');



//.................................post............................................................

//................................Homework05..........................


// Route::get('/', function () {
//     return view('about');
// })->name('myLink');


// Route::post('test', function (Request $request) {
//     $page= $request->input('page');
//     $color="background-color:".$request->input('color');
//     // return $request->all();
//     return view('pages/'.$page,compact('page','color'));
// });

//get and post

// Route::get('test', function (Request $request) {
//     $page= $request->input('page');
//     $color="background-color:".$request->input('color');
//     // return $request->all();
//     return view('pages/'.$page,compact('page','color'));
// });

// Route::get('test', function (Request $request) {
//     $page= $request->input('page');
//     $color="background-color:".$request->input('color');
//     // return $request->all();
//     return view('pages/'.$page,compact('page','color'));
// });



//3.put method

// Route::get('/put', function () {
//     return view('put');
// });

// Route::put('put', function (Request $request) {
//   return 'put';
// });


// //4.delete method
// Route::get('/delete', function () {
//     return view('delete');
// });

// Route::delete('delete', function (Request $request) {
//     return 'delete';
// });


// //************Controller *******************
// Route::get('/my-info',[HomeController::class,'myInfo']);


//********************Home work 06************************

// Route::get('/homework-05/home',[PageController::class,'homePage'])->name('myLink');

// Route::get('/video',[PageController::class,'videoPage'])->name('Video');

// Route::get('/gallery',[PageController::class,'galleryPage'])->name('Gallery');

// Route::get('/contact-us',[PageController::class,'contactusPage'])->name('Contact-Us');

// Route::get('/about',[PageController::class,'aboutPage'])->name('About');

// Route::get('/myInfo',[PageController::class,'myInfo'])->name('My-Info');


Route::resource('students', StudentController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('students-new', StudentNewController::class);
Route::get('/addbook/students/{id}',[StudentNewController::class,'addsubjects'])->name('select_book');
Route::post('/addbook/students',[StudentNewController::class,'addstudentsubjects'])->name('store_student_subject');
Route::resource('subjects', SubjectController::class);
Route::resource('grades', GradeController::class);
Route::resource('phones', PhoneController::class);


Route::resource('students.subjects',StudentSubjectController::class);
