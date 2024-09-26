<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Profile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//   all student get
        // $Student = Student::get();
        // dd($Student);

        //   get student id,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

        // $Student = Student::findOrFail(12);
        // dd($Student);

// ,,,,,,,,,,,,,,,,,,,,,,,,
        //  $Student = Student::findOrFail(2);
        //  $profile = $Student -> profile;
        // dd($profile);
        // ..................................
        $Students = Student::with('Profile')->get();
       
        dd($Students);
       
        
    }
}
