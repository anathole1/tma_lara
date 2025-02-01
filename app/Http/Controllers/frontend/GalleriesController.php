<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index(){
        $galleries = Gallery::latest()->paginate(10);
        return view("frontend.gallery.index", compact("galleries"));
    }
}