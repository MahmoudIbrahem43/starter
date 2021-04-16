<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CourseController extends Controller
{

    public function index(){
        $courses =Course::all();
   return view('courses.courseList',compact('courses'));
    }

    public function store(Request $request ){

       $request ->validate([
           'name'=>'required',
           'houres'=>'required|numeric',
           'instructor_name'=>'required'
           ]);
        Course::create($request->all());
        return redirect()->route('courses.index');
    }


    public function create()
    {
        return view('courses.create');
    }


    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public  function update(Request $request , Course $course){
        $request ->validate([
            'name'=>'required',
            'houres'=>'required|numeric',
            'instructor_name'=>'required'
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index');
    }


    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('courses.index');
        //  ->with('success', 'Student deleted successfully');
    }

}
