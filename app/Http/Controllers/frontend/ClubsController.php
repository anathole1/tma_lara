<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index(){
        $clubs = Program::where("category","=","club")->latest()->get();
        return view("frontend.club.index",compact("clubs"));
    }
}