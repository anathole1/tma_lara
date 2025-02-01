<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function index(){
        $schools = Program::where("category","=","school")->latest()->get();
        return view("frontend.school.index",compact("schools"));
    }
}