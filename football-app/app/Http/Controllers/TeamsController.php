<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Team::all() gets all the teams from the database.
        $allTeams = Team::all();
        return view('teams', ['teams' => $allTeams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $game)
    {
        //
    }
}
