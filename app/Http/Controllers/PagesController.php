<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
    	return view('pages.welcome');
    }

    public function about() {
    	return view('pages.about');
    }
}
