<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODEL
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::get();
        return view('admin.ev.events', compact('events'));
        // return view('parts.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ev.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'evtitle' => 'required|max:255|string',
            'evdate' => 'required|date',
            'evdescription' => 'required|max:255|string'
        ]);

        Event::create([
            'evtitle' => $request->evtitle,
            'evdate' => $request->evdate,
            'evdescription' => $request->evdescription,
        ]);

        return redirect('/admin/events')->with('status', 'A new Event is added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.ev.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'evtitle' => 'required|max:255|string',
            'evdate' => 'required|date',
            'evdescription' => 'required|max:255|string'
        ]);

        Event::findOrFail($id)->update([
            'evtitle' => $request->evtitle,
            'evdate' => $request->evdate,
            'evdescription' => $request->evdescription,
        ]);

        return redirect()->back()->with('status', 'The update is successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
