<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        // dd($events);
        return view('dashboard.event.index', compact('events'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('dashboard.event.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validatedData = $request->validated();
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images', 'public');
        }

        Event::create([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'image_path' => $imagePath,
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'price' => $validatedData['price'],
            'capacity' => $validatedData['capacity'],
            'categorie_id' => $validatedData['categorie_id'],
            'organisateur_id' => Auth::id(),
        ]);

        // dd($event);
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('dashboard.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Categorie::all();
        return view('dashboard.event.edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validatedData = $request->validated();

        // Handle image upload
        $newImagePath = $event->image_path;
        if ($request->hasFile('image')) {
            // Delete the old image from storage
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
            }

            // Upload the new image
            $newImagePath = $request->file('image')->store('event_images', 'public');
        }

        // Update the category
        $event->update([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'image_path' => $newImagePath,
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'price' => $validatedData['price'],
            'capacity' => $validatedData['capacity'],
            'categorie_id' => $validatedData['categorie_id'],
            'organisateur_id' => Auth::id(),
        ]);

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Storage::disk('public')->delete($event->image_path);
        $event->delete();
        return redirect()->route('event.index');
    }
}
