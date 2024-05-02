<?php

namespace App\Http\Controllers;

use App\Models\League;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreLeagueRequest;

class LeagueController extends Controller
{

    public function index()
    {
        $leagues = League::all();

        return view('leagues.leagues', ['leagues' => $leagues]);
    }

    public function create()
    {
        return view('leagues.create');
    }

    public function store(StoreLeagueRequest $request)
    {
        // ->validated() will validate the incoming request with the rules specified in the StoreLeagueRequest class.
        $data = $request->validated();

        // Create a new team with the data from the form.
        League::create($data);

        return redirect()->route('leagues.index');
    }

    public function show(League $league)
    {
        // Soon we'll show the league details.
        // return view('leagues.show', ['league' => $league]);
        echo "<h1>This soon will the show leagues's details</h1>";
    }

    public function edit(League $league)
    {
        return view('leagues.edit', ['league' => $league]);
    }

    public function update(StoreLeagueRequest $request, League $league)
    {
        $data = $request->validated();

        $league->update($data);

        return redirect()->route('leagues.index');
    }

    public function destroy(League $league)
    {
        // ->delete() is the function associated with destroying a model instance.
        $league->delete();

        return redirect()->route('leagues.index');
    }
}
