<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table='students';
    protected $fillable=['name','email','address','phone'];

    public function coursess()
    {
        return $this->hasMany(StudentCourses::class, 'studentId');
    }
}
