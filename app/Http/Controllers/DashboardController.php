<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRooms = Room::count();

        $availableRooms = Room::where('status', 'available')->count();

        $occupiedRooms = Room::where('status', 'occupied')->count();

        $totalGuests = Guest::count();

        $totalBookings = Booking::count();

        $totalPayments = Payment::where('status', 'paid')->sum('amount');

        return view('dashboard', compact(
            'totalRooms',
            'availableRooms',
            'occupiedRooms',
            'totalGuests',
            'totalBookings',
            'totalPayments'
        ));
    }
}