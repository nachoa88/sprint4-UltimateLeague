<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;


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
    public function store(StoreTeamRequest $request)
    {
        // ->validated() will validate the incoming request with the rules specified in the StoreTeamRequest class.
        $data = $request->validated();
        
        if($request->hasFile('logo')) {
            // The file is stored in the public disk.
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        // Create a new team with the data from the form.
        Team::create($data);
        
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
