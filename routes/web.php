<?php
// namespace App\Http\Controller;
use App\Http\Controller\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentCortroller::class);
