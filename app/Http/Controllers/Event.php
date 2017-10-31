<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function postAddEvent(Request $request) {
    	$this->validate($request,[
            'title' => 'required',
        ]);

        $id = \Auth::user()->id;
        $currentuser = \App\User::find($id);

        $title_input = $request->title;

        $new_event = new \App\Event();

            
        $new_event->title = $title_input;
        $new_event->save();

        $currentuser->events()->save($new_event);
   

    	return redirect("/thanks");
    }

    public function getEvents() {
        $id = \Auth::user()->id;
        $currentuser = \App\User::find($id);
        $user = \App\User::where("id","=", $currentuser->id)->with("events")->first();

        $events = $user->events;

    	return view("layouts.app")->nest("content", "event.index", ["data" => $events]);
    }

    public function getEvent($id = null) {
    	return view("layouts.app")->nest("content", "attendee.add");
    }

    public function getConfirmDelete($id) {

    }

    public function getDoDelete($id) {

    }
}
