<?php

namespace App\Http\Controllers;

use App\Player;
use App\Pair;
use App\Result;
use App\Tournament;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function seed(Request $request) {

        for ($i = 0; $i < $request->pairCount; $i++) {
            $players[] = $request->{"pair" . $i }[0];
            $players[] = $request->{"pair" . $i }[1];

            
        }
            foreach ($players  as $key => $playerName) {
                $player = new Player;
                $player->name = $playerName;
                $player->tournament_id = $request->tournamentId;
                $player->save();
                $player->load('tournament');

                if($key % 2 === 0 ) {
                    $pair = new Pair;
                    $pair->player_id1 = $player->id;
                $player->tournament_id = $request->tournamentId;
                    $pair->save();
                    $pairList[] = $pair->id;
                }
                if ($key % 2 != 0) {
                    $pair->player_id2 = $player->id;
                $player->tournament_id = $request->tournamentId;
                    $pair->save();
                }

            }

            if ($request->pairCount == 3){

                $result1 = new Result;
                $result1->pair1_id =  $pairList[0];
                $result1->pair2_id =  $pairList[1];
                $result1->pair1_score =  0;
                $result1->pair2_score =  0;
                $result1->tournament_id =  $player->tournament_id;
                $result1->save();

                $result1 =  Result::find($result1->id);

                $result2 = new Result;
                $result2->pair1_id =  $pairList[0];
                $result2->pair2_id =  $pairList[2];
                $result2->tournament_id =  $player->tournament_id;
                $result2->save();
                $result2 =  Result::find($result2->id);

                $result3 = new Result;
                $result3->pair1_id =  $pairList[1];
                $result3->pair2_id =  $pairList[2];
                $result3->tournament_id =  $player->tournament_id;
                $result3->save();
                $result3=  Result::find($result3->id);

                return view('/results/table3', with([
                        'tournamentId' => $player->tournament_id,
                        'player' => $player,
                        'result1' => $result1,
                        'result2' => $result2,
                        'result3' => $result3,
                        'pair1' => $request->pair0,
                        'pair2' => $request->pair1,
                        'pair3' => $request->pair2,
                        ]));
            }
    }

    public function index() {
        return view('results.table3');
    }

    public function edit($id) {
        $result = Result::find($id);
        return view('results.edit', compact('result'));
    }

    public function update(Request $request,$id)
    {
        $result = Result::find($id);
        $result->pair1_score = $request->pair1_score;
        $result->pair2_score = $request->pair2_score;
        $result->save();
        return redirect()->route('results.index', $id);
    }
}
