<?php

namespace App\Http\Controllers;

use App\Models\Team;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        // Just show the create view, then store will be called.
        return view('teams.create');
    }

    // POST calls the store method.
    public function store(StoreTeamRequest $request)
    {
        // ->validated() will validate the incoming request with the rules specified in the StoreTeamRequest class.
        $data = $request->validated();

        if ($request->hasFile('logo')) {
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
        // Edit will show the edit view with the team data, then update will be called.
        return view('teams.edit', ['team' => $team]);
    }

    public function update(StoreTeamRequest $request, Team $team)
    {
        $data = $request->validated();
    
        if($request->hasFile('logo')) {
            // Delete the old logo
            Storage::disk('public')->delete($team->logo);
            // Store the new logo
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
    
        $team->update($data);
    
        return redirect()->route('teams.index');
    }

    public function destroy(Team $team)
    {
        // Delete the logo file in the storage folder associated with the team.
        Storage::disk('public')->delete($team->logo);
        // ->delete() is the function associated with destroying a model instance.
        $team->delete();

        return redirect()->route('teams.index');
    }
}
