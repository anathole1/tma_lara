<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use File;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::orderBy("created_at","desc")->paginate(10);
        return view("admin.staff.index", compact("staffs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.staff.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'category'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        
          $input = $request->all();
    
          if ($image = $request->file('image')) {
              $destinationPath = 'images/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }
        
          Staff::create($input);
          return redirect()->route('staffs.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'category'=>'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        
          $input = $request->all();
    
          if ($request->file('image') && request('image') != '') {
            $imagePath = public_path('images/'.$staff->image);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('image');
              $destinationPath = 'images/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }else{
              unset($input['image']);
          }
              
          $staff->update($input);
            return redirect()->route('staffs.index')->with('success','Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index')->with('success','Staff deleted successfully');
    }
}