<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        return view('landing.landing',[
            'title'=>'True Game Website | Enjoy your moment'
        ]);
    }

    public function toSpinGame(){
        return view('game.spin_game',[
            'title'=>'SPINE GAME'
        ]);
    }
    public function toVoteGame(){
        echo "vote game";
    }
}
