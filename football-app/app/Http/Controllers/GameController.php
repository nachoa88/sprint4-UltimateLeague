<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\TeamService;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreGameRequest;

class GameController extends Controller
{
    public function index()
    {
        // Game::all() gets all the teams from the database.
        $games = Game::all();
        // Sort by date latest to oldest.
        $games = $games->sortByDesc('date');
        return view('games.games', ['games' => $games]);
    }

    public function create(TeamService $teamService)
    {
        // As we need the teams to select when creating a new game, we use a service to import them.
        $teams = $teamService->getAllTeams();
        // Show the create view, and then pass the $teams info from the database.
        return view('games.create', ['teams' => $teams]);
    }

    public function store(StoreGameRequest $request)
    {
        //First we validate the incoming request with the rules specified in the StoreGameRequest class.
        $data = $request->validated();
        // Create a new game with the data from the form.
        Game::create($data);
        // Redirect to the games index.
        return redirect()->route('games.index');
    }

    public function show(Game $game)
    {
        //
    }

    public function edit(Game $game, TeamService $teamService)
    {
        // As we need the teams to select when editing a game, we use a service to import them.
        $teams = $teamService->getAllTeams();
        // Edit will show the edit view with the game data, then update will be called.
        return view('games.edit', ['game' => $game, 'teams' => $teams]);
    }

    public function update(StoreGameRequest $request, Game $game)
    {
        $data = $request->validated();

        $game->update($data);

        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        // ->delete() is the function associated with destroying a model instance.
        $game->delete();

        return redirect()->route('games.index');
    }
}
