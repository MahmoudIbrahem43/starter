<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\StudentCourses;


class StudentController extends Controller
{

    public function index(){
        $students = Student::all();
        return view('students.studentList',compact('students'));
    }


               //insert data
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students',
            'address' => 'required',
            'phone' => 'required'
        ]);
        //creation
       $student = Student::create($request->all());

        $StudentCourses = explode( ',' ,$request->get('coursesList'));
      foreach ( $StudentCourses as $studentcourse){
          $obj = ['studentId'=> $student->id ,'courseId'=> $studentcourse];
          StudentCourses::create($obj);
    }

       return redirect()->route('students.index');
//         //   ->with('success', 'Project created successfully.');
    }


       //calling the creat form only
    public function create()
    {
        $courses = Course::all();
        return view('students.create' ,compact('courses' ));
    }

     //calling edit view only
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

     //update
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email,'.$student->id,
            'address' => 'required',
            'phone' => 'required'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index');
          //  ->with('success', 'Student updated successfully');
    }
      //delete
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
          //  ->with('success', 'Student deleted successfully');
    }
}
