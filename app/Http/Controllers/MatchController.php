<?php

namespace App\Http\Controllers;

use App\Player;
use App\Pair;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create(Request $request) {

        for ($i = 0; $i < $request->pairCount; $i++) {
            $players[] = $request->{"pair" . $i }[0];
            $players[] = $request->{"pair" . $i }[1];

            
        }
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

            if ($request->pairCount == 3){
                return view('/match/table3', with([
                    
                        'pair1' => $request->pair0,
                        'pair2' => $request->pair1,
                        'pair3' => $request->pair2,
                        ]));

            }

        
    }
}
