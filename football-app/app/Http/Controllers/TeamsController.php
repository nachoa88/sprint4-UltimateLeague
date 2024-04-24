<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $allTeams = ['Barcelona', 'Girona', 'Real Madrid'];
        return view('teams', ['teams' => $allTeams]);
    }


}

