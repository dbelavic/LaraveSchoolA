<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    // Prikaz forme za stvaranje nove aktivnosti
    public function create()
    {
        return view('activities.create');
    }

    // Spremanje nove aktivnosti u bazu
    public function store(Request $request)
    {
        $request->validate([
            'nameActivity' => 'required|string|max:255',
        ]);

        Activity::create([
            'nameActivity' => $request->nameActivity,
            'user_id' => Auth::id(), // Korisnik je voditelj aktivnosti
        ]);

        return redirect()->route('activities.index')->with('success', 'Aktivnost je uspješno dodana!');
    }

    // Prikaz svih aktivnosti
    public function index()
    {
        $activities = Activity::with('user')->get();
        return view('activities.index', compact('activities'));
    }
}
