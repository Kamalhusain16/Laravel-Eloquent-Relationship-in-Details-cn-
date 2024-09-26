<?php

namespace App\Http\Controllers;
use App\Models\subject;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subject(){
        return subject::with('students')->get();
    }
}
