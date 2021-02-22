<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function create(Request $request) {
        $CourtCount = intval($request->input('courts'));
        $playersCount = intval($request->input('players'));

        if($playersCount === 3 ) {
            return view('players.count3');
        }

    }

}
