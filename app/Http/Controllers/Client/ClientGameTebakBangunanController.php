<?php

namespace App\Http\Controllers\Client;

use App\Models\Leaderboard;
use App\Models\Tebak_bangunan;
use App\Models\ScoreTebakBangunan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoreTebak_bangunanRequest;
use App\Http\Requests\UpdateTebak_bangunanRequest;

class ClientGameTebakBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals=Tebak_bangunan::all();
        return view('client.games.tebak-bangunan.home',compact('soals'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTebak_bangunanRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store($id,$jawaban)
    {
        $id = Crypt::decrypt($id);
        $jawaban = Crypt::decrypt($jawaban);
        $soals=Tebak_bangunan::all();
        $userid= auth()->user()->id;
        $player=ScoreTebakBangunan::where('user_id',$userid)->get()->first();
        $soal=Tebak_bangunan::where('id',$id)->get()->first();


        $jawaban_benar=$soal->jawabanBenar;
        if($player->kesempatan >= 19){
            return view('client.games.tebak-bangunan.success',compact('player'));
        }
        else{
            $player->kesempatan= $player->kesempatan + 1;
            $player->update(['kesempatan'=>$player->kesempatan]);


            if($jawaban_benar == $jawaban){
                $id = $id +1;
                $soal=Tebak_bangunan::where('id',$id)->get()->first();
                $player->score = $player->score + 1;
                $player->update(['score'=>$player->score]);
                return view('client.games.tebak-bangunan.game',compact('id','soal'));

            }
            else{
                $id = $id +1;
                    $soal=Tebak_bangunan::where('id',$id)->get()->first();
                    return view('client.games.tebak-bangunan.game',compact('id','soal'));
            }
    }

    }

    public function restart($id){
        $player=ScoreTebakBangunan::where('user_id',$id)->get()->first();
        $current_value= '0';
        $player->update([
            'score'=>$current_value,
            'kesempatan'=>$current_value
        ]);
        $soals=Tebak_bangunan::all();

        $leaderboards=Leaderboard::all();

        return view('client.games.games',compact('soals','leaderboards'));


    }

    /**
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal=Tebak_bangunan::where('id',$id)->get()->first();
        return view('client.games.tebak-bangunan.game',compact('soal'));
    }

}
