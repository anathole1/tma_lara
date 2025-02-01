<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Foreword;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function hero(){
        $heros = Foreword::all();
        return view("frontend.foreword",compact("heros"));
    }
}