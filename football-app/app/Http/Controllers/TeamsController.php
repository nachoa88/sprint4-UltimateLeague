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
        // As the teams file is inside the view/teams folder, we need to specify the path to the view.
        return view('teams.teams', ['teams' => $teams]);
    }

    public function create()
    {
        return view('teams.create');
    }

    // POST calls the store method.
    public function store(Request $request)
    {
        // ->all() to get all the fields from the form, it will get pnly the fields that are in the fillable array in the Team model.
        Team::create($request->all());

        return redirect()->route('teams.index');
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
