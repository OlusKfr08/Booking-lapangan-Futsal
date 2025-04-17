<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::with('user')->get();
        return view('booking.index', compact('booking'));
    }

    public function create()
    {
        $users = User::all();
        return view('booking.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking created.');
    }

    public function edit(Booking $booking)
    {
        $users = User::all();
        return view('booking.edit', compact('booking', 'users'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $booking->update($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking updated.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking deleted.');
    }
}
