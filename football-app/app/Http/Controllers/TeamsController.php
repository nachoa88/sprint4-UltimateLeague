<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        // Team::all() gets all the teams from the database.
        $teams = Team::all();
        // For example we'll sort the teams by name.
        $teams = $teams->sortBy('name');
        return view('teams', ['teams' => $teams]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        //
    }

    public function update(Request $request, Team $team)
    {
        //
    }

    public function destroy(Team $team)
    {
        //
    }
}
