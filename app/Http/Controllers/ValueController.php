<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function about() {
        return view('value.about');
    }

    public function skills() {
        return view('value.skills');
    }

    public function projects() {
        return view('value.projects');
    }

    public function contact() {
        return view('value.contact');
    }
}
