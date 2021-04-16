<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('list',[StudentController::class,'getAllStudents']);

//Route::group(['prefix'=>'student'],function(){
//    Route::get('list',[StudentController::class,'getAllStudents']);
//    Route::put('update',[StudentController::class,'updateStudentStudents']);
//    Route::delete('delete',[StudentController::class,'deleteStudentStudents']);
//    Route::post('insert',[StudentController::class,'insertStudent']);
//
//});

