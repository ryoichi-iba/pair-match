<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create(Request $request) {
        if(intval($request->count) === 3) {
            return view('/match/table3')->with(
                ['pair1' => $request->pair1, 
                'pair2' => $request->pair2,
                'pair3' => $request->pair3
                ]
            
            );
        }
    }
}
