<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = ['id'];

    protected $hidden =  [];

//    public function courses()
//    {
//        $this->hasMany(course::class);
//    }
//
//    public function addCourse($course)
//    {
//        $this->courses()->create($course);
//    }
}
