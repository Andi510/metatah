<?php

namespace App\Http\Controllers;

use App\Models\EventConfiguration;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        $event = EventConfiguration::all()->pluck('value', 'key');
        $latestGuests = Guest::orderBy('created_at', 'desc')->take(10)->get();

        return view('welcome', compact('event', 'latestGuests'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'attendance' => 'required|in:hadir,tidak_hadir',
            'message' => 'required|string|max:1000',
        ]);

        Guest::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih atas konfirmasi dan ucapan yang diberikan.',
            ]);
        }

        return redirect()->back()->with('success', 'Terima kasih atas konfirmasi dan ucapan yang diberikan.');
    }

    public function getGuests()
    {
        $guests = Guest::orderBy('created_at', 'desc')->take(20)->get();

        return response()->json($guests);
    }
}