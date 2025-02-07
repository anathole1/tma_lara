<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::orderBy("created_at","desc")->paginate(10);
        return view("admin.announcement.index", compact("announcements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.announcement.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'duedate' => 'required',
            'files' => 'required|file|mimes:pdf,doc,docx,xlx,csv,jpg,png|max:6144',
          ]);
        
          $input = $request->all();
    
          if ($filesId = $request->file('files')) {
              $destinationPath = 'files/';
              $profilefiles = date('YmdHis') .  "." . $filesId->getClientOriginalExtension();
              $filesId->move(public_path($destinationPath), $profilefiles);
              $input['files'] = "$profilefiles";
          }
        
          Announcement::create($input);
          return redirect()->route('announcement.index')->with('success', 'announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view('admin.announcement.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
          $request->validate([
            'title' => 'required',
            'duedate' => 'required',
            // 'files' => 'required|file|mimes:pdf,doc,docx,xlx,csv,jpg,png|max:6144',
          ]);
        
          $input = $request->all();
    
         if ($request->file('files') && request('files') != '') {
            $imagePath = public_path('files/'.$announcement->files);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('files');
              $destinationPath = 'files/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['files'] = "$profileImage";
          }else{
              unset($input['files']);
          }
              
          $announcement->update($input);
            return redirect()->route('announcement.index')->with('success','announcement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcement.index')->with('success','announcement deleted successfully');
    }
}