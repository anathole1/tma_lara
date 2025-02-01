<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use File;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view("admin.gallery.index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // "title"=>["required","string"],
            // "content"=>["required",],
            "image"=>"required|image|mimes:jpeg,png,jpg,gif,svg",
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
              $destinationPath = 'media/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }
        
          Gallery::create($input);
          return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $input = $request->all();
        if ($request->file('image') && request('image') != '') {
            $imagePath = public_path('media/'.$gallery->image);
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
              
          $gallery->update($input);

          return redirect()->route('galleries.index')->with('success','Image update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success','Image deleted successfully');
    }
}