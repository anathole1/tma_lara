<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy("created_at","desc")->paginate(10);
        return view("admin.events.index", compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.events.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
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
          $input['user_id'] = Auth::user()->id;
          Event::create($input);
          return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
       $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'description'=>'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          ]);
        
          $input = $request->all();
    
          if ($image = $request->file('image')) {
              $destinationPath = 'media/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move(public_path($destinationPath), $profileImage);
              $input['image'] = "$profileImage";
          }else{
              unset($input['image']);
          }
              
          
          $input['user_id'] = Auth::user()->id;
          $event->update($input);
          return redirect()->route('events.index')->with('success', 'Event updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success','Event deleted successfully');
    }

    public function upload(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension= $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_'. time() .'.' .$extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/'.$fileName);
            return response()->json(['fileName'=>$fileName, 'uploaded'=>1, 'url'=>$url]);
        }

    }
}