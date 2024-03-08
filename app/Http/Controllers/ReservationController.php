<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Support\Facades\Request;


class ReservationController extends Controller
{

    public function book(Request $request, Event $event)
    {
        $event = Event::find($event->id);

        if ($event->type_reservation == 'auto') {
            $reservation = Reservation::create([
                'user_id' => auth()->id(),
                'event_id' => $event->id,
                'status' => 'approved',
            ]);
            return redirect()->route('eventDetails', $event->id);
        } else {
            $reservation = Reservation::create([
                'user_id' => auth()->id(),
                'event_id' => $event->id,
                'status' => 'pending',
            ]);
            return redirect()->route('eventDetails', $event->id);
        }
    }

    public function allreservations()
    {
        $organizerId = auth()->id();

        $reservations = Reservation::whereHas('event', function ($query) use ($organizerId) {
            $query->where('organisateur_id', $organizerId);
        })
            ->where('status', 'pending')
            ->get();

        return view('dashboard.event.reservations', compact('reservations'));
    }


    public function approve( Reservation $reservation)
    {
        $reservation = Reservation::find($reservation->id);
        $reservation->status = 'approved';
        $reservation->save();

        return redirect()->route('reservations');
    }
}
