<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function postAddEvent() {
    	return redirect("/thanks");
    }

    public function getEvents() {
    	return view("layout.master")->nest("content", "event.index");
    }

    public function getEvent($id = null) {
    	return view("layout.master")->nest("content", "attendee.add");
    }

    public function getConfirmDelete($id) {

    }

    public function getDoDelete($id) {

    }
}
