<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

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


       return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('admin.student.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $img= $request->file('image');

      $img_ext=$img->getClientOriginalExtension();
      $img_name="student-$request->id.$img_ext";
      $img->move(public_path('images\student'),$img_name);
        Student::create(
            [
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'department_id'=>$request->department,
                'phone'=>$request->phone,
                'image'=>$img_name
            ]
        );
        return redirect()->back()->with('msg',"add successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::findorfail($id);
        return view('admin.student.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::FindOrFail($id);
        $departments=Department::all();
        return view('admin.student.edit',compact('student','departments'));
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
        $student=Student::findorfail($id);
       $student->id=$request->id;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->department_id=$request->department;
        $student->save();
        return redirect()->route('student.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $student=Student::findorfail($id);
        $student->delete();
        return redirect()->back()->with('msg',"Delete $student->name successful");
    }

    public function archive(){

       $students=Student::onlyTrashed()->get();
       return view('admin.student.archive',compact('students'));

    }
    public function restore($id){

        $student=Student::withTrashed()->findOrFail($id);
        $student->restore();
        return redirect()->route('student.index');

    }
    public function forceDelete($id){
        $student=Student::withTrashed()->findOrFail($id);
        $student->forceDelete();
        return redirect()->route('student.archive');
    }
}
