<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "student";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'zip',
        'birthday',
    ];

    // protected $guarded = []
    protected $appends = ['fullname', 'birthday'];

    public function getBirthdayAttributes()
    {
        return $this->fname . '' . $this->lname;
    }

    public function getFullnameAttribute()
    {
        $birthday = $this->attributes['birthday'];
        if($birthday){
            return Carbon::parse($birthdate)->format('F d, Y,');
        }
    }

    public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
