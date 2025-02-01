<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class OtherssController extends Controller
{
    public function index(){
        $others = Program::where("category","=","other")->latest()->get();
        return view("frontend.activities.index",compact("others"));
    }
}