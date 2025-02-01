<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $events = Event::orderBy("created_at","desc")->get();
        return view("frontend.event.index", compact("events"));
    }

    public function ViewAll($id){
         $event = Event::findOrFail($id);
        return view('frontend.event.eventsdes',compact('event'));
    }
}