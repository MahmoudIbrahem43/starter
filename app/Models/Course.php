<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $table='courses';
    protected $fillable=['name','houres','instructor_name'];

    public function students()
    {
        return $this->hasMany(StudentCourses::class, 'courseId');
    }
}
