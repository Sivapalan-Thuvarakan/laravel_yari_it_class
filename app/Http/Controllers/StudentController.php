<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Model;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('student.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $gender=$request->input('gender');
        $grade=$request->input('grade');
        $address=$request->input('address');
        // $subject=$request->input('subject');


                //---------------------Age Validation------------------------------
                $dob=$request->input('date_of_birth');
                $currentDate = date("Y-m-d");

                $age = date_diff(date_create($dob), date_create($currentDate))->format("%y");

                if($age < 18){
                    echo "<script type='text/JavaScript'>";
                    echo 'alert("you are not eligible for registration")';
                    echo '</script>';
                };
                //-------------------------------------------------------------------


        $email=$request->input('email');
        $tel=$request->input('tel');
        // $image=$request->input('image');


        //------------------------image storing process----------------------
        // return $request->file('image');
        $file = $request->file('image');
        $destinationPath = 'image/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile);

        //----------------------------------------------------------------------
        $student=new Student();
        $student->first_name=$fname;
        $student->last_name=$lname;
        $student->gender=$gender;
        $student->grade=$grade;
        $student->address=$address;
        $student->subject=implode(',',$request->subject);
        $student->date_of_birth=$dob;
        $student->email=$email;
        $student->mobile_no=$tel;
        $student->photo=$originalFile;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student=Student::find($id);
        $student->first_name=$request->fname;
        $student->last_name=$request->lname;
        $student->gender=$request->gender;
        $student->grade=$request->grade;
        $student->address=$request->address;
        $student->subject=$request->subject;


           //---------------------Age Validation------------------------------
           $dob=$request->date_of_birth;
           $currentDate = date("Y-m-d");

           $age = date_diff(date_create($dob), date_create($currentDate))->format("%y");

           if($age < 18){
               echo "<script type='text/JavaScript'>";
               echo 'alert("you are not eligible for registration")';
               echo '</script>';
           };
           //-------------------------------------------------------------------
        $student->date_of_birth=$dob;
        $student->email=$request->email;
        $student->mobile_no=$request->tel;



        //------------------------image storing process----------------------
        // return $request->file('image');
        $file = $request->file('image');
        $destinationPath = 'image/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile);

        //---------------------------------------------------------------------
        $student->photo=$originalFile;
        $student->save();

        // $fname=$request->input('fname');
        // $lname=$request->input('lname');

        // $student=Student::find($id);
        // $student->first_name=$fname;
        // $student->last_name=$lname;
        // $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();

        return redirect()->route('students.index');
    }
}
