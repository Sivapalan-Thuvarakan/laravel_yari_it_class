<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Subject;
use Session;

class StudentNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $students=Student::all();
        $students=Student::with('grade')->get();
        return view('New_Student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all();
        return view('New_Student.create',compact('grades'));

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
        $validated = $request->validate([

            'fname' => 'required|max:255',
            'lname' => 'required',
            'gender' => 'required',
            'grade' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|unique:students',
            'tel' => 'required',
            'image' => 'nullable',
        ]);
        
     


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
        if($request->file('image')){
        $file = $request->file('image');
        $destinationPath = 'image/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile);
        }else{
            $originalFile=null;
        }

        //----------------------------------------------------------------------
        $student=new Student();
        $student->first_name=$fname;
        $student->last_name=$lname;
        $student->gender=$gender;
        $student->grade_id=$grade;
        // $student->grade_id=1;
        $student->address=$address;
        // if($request->subject){
        //     $student->subject=implode(',',$request->subject);
        // }
        $student->date_of_birth=$dob;
        $student->email=$email;
        $student->mobile_no=$tel;
        $student->photo=$originalFile;
        // $student->phone_id=1;

        $student->save();
        return redirect()->route('students-new.index');
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
        return view('New_Student.show',compact('student'));
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
        $grades=Grade::all();
        return view('New_Student.edit',compact('student','grades'));
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
        $student->grade_id=$request->grade;
        // $student->grade_id=1;
        // $student->phone_id=1;
        $student->address=$request->address;
        // if($request->subject){
        //     $student->subject=implode(',',$request->subject);
        // }



           //---------------------Age Validation------------------------------
           $dob=$request->date_of_birth;
           $currentDate = date("Y-m-d");

           $age = date_diff(date_create($dob), date_create($currentDate))->format("%y");

           if($age < 18){
               echo "<script type='text/JavaScript'>";
               echo 'alert("you are not eligible for registration")';
               echo "if(confirm('you are not eligible for registration'))";
               echo '{alert("You pressed OK!");}';
               echo '</script>';

           }


           //-------------------------------------------------------------------
        $student->date_of_birth=$dob;
        $student->email=$request->email;
        $student->mobile_no=$request->tel;



        //------------------------image storing process----------------------
        // return $request->file('image');
            if($request->file('image')){
            $file = $request->file('image');
            $destinationPath = 'image/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
            }else{
                $originalFile=null;
            }
        //---------------------------------------------------------------------
        $student->photo=$originalFile;
        $student->save();

        // $fname=$request->input('fname');
        // $lname=$request->input('lname');

        // $student=Student::find($id);
        // $student->first_name=$fname;
        // $student->last_name=$lname;
        // $student->save();
        return redirect()->route('students-new.index');
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

        return redirect()->route('students-new.index');
    }


    //student subject
    public function addsubjects($id)
    {
        $student_id=$id;
        $subjects=Subject::all();
        $existingSubject = StudentSubject::where('student_id',$student_id)->pluck('subject_id')->toArray();
        return view('New_Student.student-subject.index',compact('subjects','student_id','existingSubject'));
    }

    public function addstudentsubjects(Request $request)
    {
        // dd($request);
        $student_id=$request->student_id;
        if($request->subject)
        {
            $subjects=$request->subject;
        }
        else
        {
        $subjects=[];
        }
        $total_subject=count($subjects);

        $count=0;
        $existingSubject = StudentSubject::where('student_id',$student_id)->pluck('subject_id')->toArray();
        $new_inserts=array_diff($subjects,$existingSubject);
        $old_diff = array_diff($existingSubject,$subjects);
        // dd($old_diff,$new_inserts);
        // if($total_subject>0)
        // {
            if(!empty($old_diff) && !empty($new_inserts))
            {
                foreach($old_diff as $sub)
                {
                    $studentSubject=StudentSubject::where('subject_id',$sub)->where('student_id',$student_id)->delete();
                }
                foreach($new_inserts as $n_sub)
                {
                    $studentSubject=new  StudentSubject();
                    $studentSubject->student_id=$student_id;
                    $studentSubject->subject_id=$n_sub;
                    $studentSubject->save();
                }
                return redirect()->route('students-new.index');
            }
            if(!empty($old_diff) && empty($new_inserts))
            {
                foreach($old_diff as $sub)
                {
                    $studentSubject=StudentSubject::where('subject_id',$sub)->where('student_id',$student_id)->delete();
                }
                return redirect()->route('students-new.index');
            }
            if(empty($old_diff) && !empty($new_inserts))
            {
                foreach($new_inserts as $n_sub)
                {
                    $studentSubject=new  StudentSubject();
                    $studentSubject->student_id=$student_id;
                    $studentSubject->subject_id=$n_sub;
                    $studentSubject->save();
                }
                return redirect()->route('students-new.index');
            }

        // }
        return redirect()->route('students-new.index');
    }
}
