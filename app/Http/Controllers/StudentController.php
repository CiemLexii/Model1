<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller{

    public function index()
    {

        //return Student::all();

        //return Student::where('province', 'Florida')->get();

        // return  Student::where('province', 'New York')
        // ->where('fname', 'Drake')->get();

        // return  Student::where('province', 'New York')
        // ->orwhere('province', 'Florida')
        // ->orwhere('fname', 'Rhoda')->get();

        //return Student::where('province', 'like', '%t%')->get();

        // return Student::orderBy('fname')->get();

        // return Student::orderBy('fname', 'desc')->get();

        // return Student::limit(5)->get();

        // return Student::whereIn('id', [1,3,5,7,9,11,])->get();

        return Student::where('province', 'New York')->first();
    }

    public function store(Request $request){


    }
    public function show(string $id)
    {
        //
        // return Student::find($id);

        // $student = Student::find($id);
        // return $student->fname . ' '. $student->lname;
        $student = Student::find($id);
        return $student->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}