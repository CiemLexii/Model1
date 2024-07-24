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
        return Student::all();
        $data['students'] = Student::all();
        return view('students.index', $data);
       // return Student::all();


        //return Student::where('province', 'Florida')->get();

    }


    public function create()
    {
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
        // $student = new Student();
        // $student->fname=$request['fname'];
        // $student->lname=$request['lname'];
        // $student->email=$request['email'];
        // $student->phone=$request['phone'];
        // $student->address=$request['address'];
        // $student->city=$request['city'];
        // $student->province=$request['province'];
        // $student->zip=$request['zip'];
        // $student->dirthdate=$request['dirthdate'];
        // $student->save();

        return view('students.create');

    }

    public function store(Request $request){
        $student->zip=$request['zip'];
        $student->dirthdate=$request['dirthdate'];
        $student->save();

        return redirect()->to('students');
    }

    
    public function show(string $id)
{
        // $student = Student::find($id);
        // return $student->fullname;
        // $data['student'] = Student::find($id);
        // return view('students.edit', $data);
        

        }

    
   
    public function edit(string $id)
    {

        //
        $data['student'] = Student::find($id);
        return view('students.edit', $data);
    }

    
    public function update(Request $request, string $id){
        $student->zip=$request['zip'];
        $student->dirthdate=$request['dirthdate'];
        $student->save();

        //return redirect()->back;
        return redirect()->to('students');
    }

    
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->to('students');
    }
}