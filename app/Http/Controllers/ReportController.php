<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class ReportController extends Controller
{
    public function bookings()
    {
        $bookings = Booking::with(['guest', 'room'])->get();

        return view('reports.bookings', compact('bookings'));
    }
   public function payments()
{
    $payments = \App\Models\Payment::with('booking.guest', 'booking.room')->get();

    $totalPayments = \App\Models\Payment::where('status', 'paid')->sum('amount');

    return view('reports.payments', compact('payments', 'totalPayments'));
}
}