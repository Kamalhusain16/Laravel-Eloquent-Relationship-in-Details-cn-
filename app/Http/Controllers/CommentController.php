<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;


class CommentController extends Controller
{
 public function comment(){

    return comment::with('student')->get();
 }
}
