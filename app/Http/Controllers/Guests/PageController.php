<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        
        $movies=Movie::all();

        return view('guests.home', compact('movies'));
    }
    public function about()
    {
        return view('guests.about');
    }
    public function contacts()
    {       

        return view('guests.contacts');
    }
    
}
