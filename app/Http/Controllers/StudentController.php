<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $names = ["Egypt","USA","Phlastin","Europe","France","Qatar","Moracoo",
        "Germany","Dubai","soudai arabia","Albania","Korea","China","Japan","Tailand","Armenia"];
        return view('index', compact('names'));
    }
}
