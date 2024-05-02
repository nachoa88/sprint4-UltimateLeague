<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Services\LeagueService;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{
    // We create a variable for the leageService, so we can use it in the controller's functions.
    protected $leagueService;
    // The constructor will inject the LeagueService into the controller so code is more DRY.
    public function __construct(LeagueService $leagueService)
    {
        $this->leagueService = $leagueService;
        // Here goes middleware for authentication?
    }
    
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
        // As we need the Leagues to select when creating a new team, we use a service function to import them.
        $leagues = $this->leagueService->getAllLeagues();
        // Just show the create view, then store will be called.
        return view('teams.create', ['leagues' => $leagues]);
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
        // Soon we'll show the team details.
        // return view('teams.show', ['team' => $team]);
        echo "<h1>This soon will the show team's details</h1>";
    }

    public function edit(Team $team)
    {
        // As we need the Leagues to select when editing a new team, we use a service function to import them.
        $leagues = $this->leagueService->getAllLeagues();
        // Edit will show the edit view with the team data, then update will be called.
        return view('teams.edit', ['team' => $team, 'leagues' => $leagues]);
    }

    public function update(StoreTeamRequest $request, Team $team)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
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
