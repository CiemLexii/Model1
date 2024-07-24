<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubjectGrade;

class Student extends Model
{
    use HasFactory;
    protected $table= "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'zip',
        'dirthdate'
    ];
   // protected $guarded = [];

   protected $appends = ['fullname'];
//    protected $appends = ['fullname', 'birthday'];

   public function getFullnameAttribute() 
   {

   

   }

//    public function getBirthdayAttribute()
//    {
//     $dirthdate = $this->attributes['dirthdate'];
//     if($dirthdate){
//         return Carbon::parse($dirthdate)->format('F d, Y');
//     }
//    }

   public function grades()
   {
    return $this->hasMany(SubjectGrade::class, 'student_id');
   }
}