<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('booking.guest', 'booking.room')->get();

        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $bookings = Booking::with('guest', 'room')
            ->where('status', 'checked_in')
            ->get();

        return view('payments.create', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'amount' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'payment_method' => 'required',
            'status' => 'required',
        ]);

        Payment::create([
            'booking_id' => $request->booking_id,
            'amount' => $request->amount,
            'payment_date' => $request->payment_date,
            'payment_method' => $request->payment_method,
            'status' => $request->status,
        ]);

        return redirect('/payments');
    }
}