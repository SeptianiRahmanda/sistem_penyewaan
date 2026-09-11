<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }
    public function update(Request $request, Room $room)
    {
    $request->validate([
        'room_number' => 'required',
        'room_type' => 'required',
        'price' => 'required|numeric',
        'status' => 'required',
    ]);

    $room->update([
        'room_number' => $request->room_number,
        'room_type' => $request->room_type,
        'price' => $request->price,
        'description' => $request->description,
        'status' => $request->status,
    ]);

    return redirect('/rooms');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required',
            'room_type' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
        ]);

        Room::create([
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/rooms');
    }
}