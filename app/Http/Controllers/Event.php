<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function postAddEvent(Request $request) {
    	$this->validate($request,[
            'title' => 'required',
        ]);

        $title_input = $request->title;

        $new_event = new \App\Event();

            
        $new_event->title = $title_input;
        $new_event->save();
   

    	return redirect("/thanks");
    }

    public function getEvents() {
    	return view("layouts.app")->nest("content", "event.index");
    }

    public function getEvent($id = null) {
    	return view("layouts.app")->nest("content", "attendee.add");
    }

    public function getConfirmDelete($id) {

    }

    public function getDoDelete($id) {

    }
}
