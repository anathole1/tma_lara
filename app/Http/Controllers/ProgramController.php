<?php

namespace App\Http\Controllers;

use App\Models\Program;
use File;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::orderBy("id","desc")->paginate(10); 
        return view("admin.programs.index", compact("programs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.programs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          ]);
        
          $input = $request->all();
    
          if ($image = $request->file('image')) {
              $destinationPath = 'media/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }
        
          Program::create($input);
          return redirect()->route('programs.index')->with('success', 'programs created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
         $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description'=>'required',
          ]);
        
          $input = $request->all();
    
         if ($request->file('image') && request('image') != '') {
            $imagePath = public_path('media/'.$program->image);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('image');
              $destinationPath = 'media/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }else{
              unset($input['image']);
          }
              
          $program->update($input);
            return redirect()->route('programs.index')->with('success','programs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success','programs deleted successfully.');
    }
}