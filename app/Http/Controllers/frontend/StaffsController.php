<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    public function index(){
        $categories =['APPES Executive Committee', 'APPES Audit Committee', 'APPES Conflict Resolution Committee', 'TMA Administrative Staff', 'Other APPES Members', 'Honour APPES Members'];
        $staffs = Staff::all();
        return view("frontend.staff.index",compact("staffs","categories"));
    }
        public function filter($category)
    {
        $categories =['APPES Executive Committee', 'APPES Audit Committee', 'APPES Conflict Resolution Committee', 'TMA Administrative Staff', 'Other APPES Members', 'Honour APPES Members'];
        $staffs = Staff::where('category', '=',$category)->get();
        return view('frontend.staff.index', compact('categories', 'staffs', 'category'));
    }
}