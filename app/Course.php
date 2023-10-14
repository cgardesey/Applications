<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $guarded = ['id'];

    protected $hidden =  ['id'];

//    public function applicants()
//    {
//        $this->hasMany(applicant::class);
//    }
}
