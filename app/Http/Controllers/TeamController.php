<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() 
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function show($id) 
    {
        $team = Team::with('players')->findOrFail($id);
        return view('teams.show', compact('team'));
    }
}
