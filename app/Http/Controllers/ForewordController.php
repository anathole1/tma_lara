<?php

namespace App\Http\Controllers;

use App\Models\Foreword;
use File;
use Illuminate\Http\Request;

class ForewordController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index()
    {
        $forewords = Foreword::all();
        return view("admin.foreword.index", compact("forewords"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.foreword.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'position' => 'required',
            'name'=>'required',
            'message'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          ]);
        
          $input = $request->all();
    
          if ($image = $request->file('image')) {
              $destinationPath = 'images/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }
        
          Foreword::create($input);
          return redirect()->route('forewords.index')->with('success', 'Foreword created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foreword $foreword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foreword $foreword)
    {
        return view('admin.foreword.edit', compact('foreword'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foreword $foreword)
    {
        $request->validate([
            'title' => 'required',
            'position' => 'required',
            'name'=>'required',
            'message'=>'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        
          $input = $request->all();
    
        if ($request->file('image') && request('image') != '') {
            $imagePath = public_path('images/'.$foreword->image);
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
              
          $foreword->update($input);
            return redirect()->route('forewords.index')->with('success','Foreword updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foreword $foreword)
    {
        $foreword->delete();
        return redirect()->route('forewords.index')->with('success','Foreword deleted successfully');
    }
}