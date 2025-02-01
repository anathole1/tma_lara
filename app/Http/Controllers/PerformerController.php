<?php

namespace App\Http\Controllers;

use App\Models\Performer;
use File;
use Illuminate\Http\Request;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performers = Performer::orderBy("created_at","desc")->paginate(10);
        return view("admin.performers.index", compact("performers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.performers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "role"=>"required|string",
            "experience"=>"required|string",
            "category"=>"required",
            "summary"=>"required",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        
          $input = $request->all();
    
          if ($image = $request->file('image')) {
              $destinationPath = 'images/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }
        
          Performer::create($input);
          return redirect()->route('performers.index')->with('success', 'Best Performer added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Performer $performer)
    {
        return view('admin.performers.show', compact('performer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Performer $performer)
    {
         return view('admin.performers.edit', compact('performer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Performer $performer)
    {
         $request->validate([
              "name"=> "required|string",
            "role"=>"required|string",
            "experience"=>"required|string",
            "category"=>"required",
            "summary"=>"required",
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        
          $input = $request->all();
    
         if ($request->file('image') && request('image') != '') {
            $imagePath = public_path('images/'.$performer->image);
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
              
          $performer->update($input);
            return redirect()->route('performers.index')->with('success','Best Performer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Performer $performer)
    {
        $performer->delete();
        return redirect()->route('performers.index')->with('success','Best Performer removed successfully');
    }
}