<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TournamentsController extends Controller
{
    public function create() {
        return view('tournaments.create');
    }

    public function store(Request $request) {
        $token = Str::random(8);
       $tournament =  new Tournament;
        $tournament->name = $request->name;
        
        $tournament->token = $token;
        $tournament->save();

        return view('index')->with([
            'tournamentName' => $request->name,
            'token' => $token,
            'tournamentId' => $tournament->id,
            ]);
    }
}
