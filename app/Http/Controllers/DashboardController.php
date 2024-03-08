<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function totalUsers()
    {
        return User::count();
    }

    public function totalEventsPublished()
    {
        return Event::where('status', 'published')->count();
    }


    public function totalEventsPending()
    {
        return Event::where('status', 'pending')->count();
    }

    public function totalCategories()
    {
        return Categorie::count();
    }


    // Role : Administrateur
    public function showStats()
    {
        $totalUsers = $this->totalUsers();
        $totalEventsPublished = $this->totalEventsPublished();
        $totalEventsPending = $this->totalEventsPending();
        $totalCategories = $this->totalCategories();
        return view('dashboard.home.index', compact('totalUsers', 'totalEventsPublished', 'totalEventsPending', 'totalCategories'));
    }

    // Role : Utilisateur
    public function showHistory()
    {
        return view('dashboard.home.history');
    }

    // Role : Organisateur
    public function showEvents()
    {
        $events = Event::where('organisateur_id', auth()->user()->id)->get();
        return view('dashboard.home.events', compact('events'));
    }


    public function index()
    {
        if (auth()->user()->hasRole('Administrateur')) {
            return $this->showStats();
        } elseif (auth()->user()->hasRole('Organisateur')) {
            return $this->showEvents();
        } else {
            return $this->showHistory();
        }
    }

    public function changeEventStatus(Request $request, Event $event)
    {
        $request->validate([
            'status' => 'required|in:published,unpublished',
        ]);

        $status = $request->status;
        // dd($status);
        $event = Event::find($event->id);
        // dd($event);
        if (!$event) {
            // Handle case where event is not found
            return redirect()->back()->with('error', 'Event not found.');
        }

        $event->status = $status;
        // dd($event->status);
        $event->save();

        return redirect()->back()->with('success', 'Event status updated successfully.');
    }
}
