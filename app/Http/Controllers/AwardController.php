<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pageone');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'award_name' => 'required|max:255|string',
            'award_date' => 'required',
            'award_description' => 'required'
        ]);

        $newAward = Award::create($data);

        return redirect('/admin/award');

        // dd($request)->files();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
