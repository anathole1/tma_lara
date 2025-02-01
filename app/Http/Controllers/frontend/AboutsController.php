<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view("frontend.about.index",compact("abouts"));
    }
}