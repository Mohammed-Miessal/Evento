<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Event; // Add this line
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $events = Event::where('status' ,'published')->take(3)->get();
        // dd($events);
        return view('home' , compact('categories' , 'events'));
    }

    public function allEvents()
    {
        $events = Event::where('status' ,'published')->paginate(10);
        return view('events' , compact('events'));
    }

    public function showDetails($id)
    {
        $event = Event::find($id);
        // dd($event);
        return view('singlepage' , compact('event'));
    }
}
