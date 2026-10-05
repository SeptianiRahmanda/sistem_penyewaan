<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BookingController extends Controller
{
    public function index()
{
    $bookings = Booking::with(['guest', 'room'])->get();

    return view('bookings.index', compact('bookings'));
}
    public function create()
    {
        $guests = Guest::all();

        $rooms = Room::where('status', 'available')->get();

        return view('bookings.create', compact('guests', 'rooms'));
    }
    public function store(Request $request)
{
    $request->validate([
        'guest_id' => 'required',
        'room_id' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date|after:check_in',
    ]);

    $room = Room::findOrFail($request->room_id);

    $checkIn = Carbon::parse($request->check_in);
    $checkOut = Carbon::parse($request->check_out);

    $nights = $checkIn->diffInDays($checkOut);

    $totalPrice = $nights * $room->price;

    Booking::create([
        'guest_id' => $request->guest_id,
        'room_id' => $request->room_id,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'total_price' => $totalPrice,
        'status' => 'checked_in',
    ]);

    $room->update([
        'status' => 'occupied',
    ]);

    return redirect('/bookings/create');
}
    public function checkout($id)
{
    $booking = Booking::findOrFail($id);

    $booking->update([
        'status' => 'checked_out',
    ]);

    $room = Room::findOrFail($booking->room_id);

    $room->update([
        'status' => 'available',
    ]);

    return redirect('/bookings');
}
}