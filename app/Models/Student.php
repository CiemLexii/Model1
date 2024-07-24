<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubjectGrade;

class Student extends Model
{
public function getFullnameAttribute()
   {

    return $this->fname . ' '. $this->lname;

   }

   public function grades()
   {
    return $this->hasMany(SubjectGrade::class, 'student_id');
   }
}