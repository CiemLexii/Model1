<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Student::all();
        return Student::all();

        //return Student::where('province', 'Florida')->get();
    
   

        //return Student::where('province', 'New York')->first();

        return Student::with('grades')->get();
         //return Student::with('grades')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $student = new Student();
        $student->  fname=$request('fname');
        $student->  lname=$request('lname');
        $student->  email=$request('email');
        $student->  phone=$request('phone');
        $student->  address=$request('address');
        $student->  city=$request('city');
        $student->  province=$request('state');
        $student->  zip=$request('zip');
        $student->  dirthdate=$request('dirthdate');
        $student->save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $student = new Student();
        $student->fname=$request['fname'];
        $student->lname=$request['lname'];
        $student->email=$request['email'];
        $student->phone=$request['phone'];
        $student->address=$request['address'];
        $student->city=$request['city'];
        $student->province=$request['province'];
        $student->zip=$request['zip'];
        $student->dirthdate=$request['dirthdate'];
        $student->save();
    }

    
    public function edit(string $id){

    }
    
    public function update(Request $request, string $id)
    {
        //
        $student = Student::find($id);
        $student->fname=$request['fname'];
        $student->lname=$request['lname'];
        $student->email=$request['email'];
        $student->phone=$request['phone'];
        $student->address=$request['address'];
        $student->city=$request['city'];
        $student->province=$request['province'];
        $student->zip=$request['zip'];
        $student->dirthdate=$request['dirthdate'];
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::find($id);
        $student->delete();
    }
}