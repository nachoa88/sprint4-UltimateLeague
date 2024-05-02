<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{

    public function index()
    {
        $leagues = League::all();
        
        return view('leagues.leagues', ['leagues' => $leagues]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(League $league)
    {
        //
    }

    public function edit(League $league)
    {
        //
    }

    public function update(Request $request, League $league)
    {
        //
    }

    public function destroy(League $league)
    {
        //
    }
}
