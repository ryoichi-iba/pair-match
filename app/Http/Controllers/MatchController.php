<?php

namespace App\Http\Controllers;

use App\Player;
use App\Pair;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create(Request $request) {
        if(intval($request->count) === 3) {

            $players = [];
            $players = array_merge($request->pair1, $request->pair2, $request->pair3);

            $length = 10;
            $token = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', $length)), 0, $length);

            foreach ($players  as $key => $playerName) {
                $player = new Player;
                $player->name = $playerName;
                $player->save();

                if($key % 2 === 0 ) {
                    $pair = new Pair;
                    $pair->player_id1 = $player->id;
                    $pair->save();
                }
                if ($key % 2 != 0) {
                $pair->player_id2 = $player->id;
                    $pair->save();
                }
            }

            return view('/match/table3');
        }
}
    }
