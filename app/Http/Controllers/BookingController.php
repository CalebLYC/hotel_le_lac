<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $reservations = Booking::all();
        return view('admin.pages.bookings', ['bookings' => $reservations]);
    }

    public function create(String $room_id){
        $room = Room::findOrFail($room_id);
        return view('pages.booking', ['room' => $room]);
    }

    public function store(Request $request, String $room_id){
        $request->validate([
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
        ]);

        Booking::create([
            'user_id' => auth()->user()->id,
            'room_id' => $room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Réservation effectuée avec succèss');
    }

    public function update(Request $request, String $room_id, String $id){
        $request->validate([
            'checkin_date' => 'required|date',
            'checking_date' => 'required|date',
        ]);

        $booking = Booking::findOrFail($id);

        $booking->update([
            'user_id' => auth()->user()->id,
            'room_id' => $room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Réservation effectuée avec succèss');
    }

    public function delete(String $id){
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('rooms.index')->with('success', 'Réservation annulée avec succèss');
    }
}