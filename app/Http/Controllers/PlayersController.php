<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function create(Request $request) {
        $pairCount = intval($request->input('players'));
        $tournamentId = $request->tournamentId;
            return view('players.input', compact('pairCount', 'tournamentId'));

    }

}
