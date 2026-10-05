<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();

        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'identity_number' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'information_source' => 'nullable',
        ]);

        Guest::create([
            'name' => $request->name,
            'identity_number' => $request->identity_number,
            'phone' => $request->phone,
            'address' => $request->address,
            'information_source' => $request->information_source,
        ]);

        return redirect('/guests');
    }

    public function edit($id)
    {
        $guest = Guest::findOrFail($id);

        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'identity_number' => 'nullable',
        'phone' => 'nullable',
        'address' => 'nullable',
        'information_source' => 'nullable',
    ]);

    $guest = Guest::findOrFail($id);

    $guest->update([
        'name' => $request->name,
        'identity_number' => $request->identity_number,
        'phone' => $request->phone,
        'address' => $request->address,
        'information_source' => $request->information_source,
    ]);

    return redirect('/guests');
}
    public function destroy($id)
{
    $guest = Guest::findOrFail($id);
    $guest->delete();

    return redirect('/guests');
}
}