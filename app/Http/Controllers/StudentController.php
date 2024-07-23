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

        //return Student::where('province', 'New York')->first();
        //return Student::where('province', 'New York')->first();

        //return Student::with('grades')->get();

        return student::with(['grades' => function($query)
        {
            return $query->where('grade', '>=', 90);
        }])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthday = $request['phone'];
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

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthday = $request['birthday'];
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
    }

}
