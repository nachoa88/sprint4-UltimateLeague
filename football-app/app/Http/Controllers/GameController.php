<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\TeamService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Game::all() gets all the teams from the database.
        $games = Game::all();
        // Sort by date latest to oldest.
        $games = $games->sortBy('date');
        return view('games.games', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TeamService $teamService)
    {
        // As we need the teams to select when creating a new game, we use a service to import them.
        $teams = $teamService->getAllTeams();
        // Show the create view, and then pass the $teams info from the database.
        return view('games.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Need to add validations here.
        $data = $request->validate([
            'home_team_id' => 'required',
            'away_team_id' => 'required',
            'date' => 'required',
            'home_team_goals' => 'required',
            'away_team_goals' => 'required',
        ]);

        Game::create($data);

        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
