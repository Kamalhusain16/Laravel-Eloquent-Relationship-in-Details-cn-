<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){

    // $profile = profile::with('student')->get();
    // dd($profile);
     return profile::with('student')->get();
    }
}
