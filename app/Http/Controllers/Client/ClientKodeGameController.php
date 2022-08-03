<?php

namespace App\Http\Controllers\Client;

use App\Models\Kode_game;
use App\Http\Requests\StoreKode_gameRequest;
use App\Http\Requests\UpdateKode_gameRequest;
use App\Models\Leaderboard;
use App\Models\Table_score;
use Illuminate\Http\Request;


class ClientKodeGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kode_games = Kode_game::all();
        return view('client.games.redeem-code.card-list', compact('kode_games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function sumscore(Request $request, $id){

        $nomor = $request->input('nomor');
        $kodeinput = $request->input('code');
        $kode=Kode_game::where('no',$nomor)->first();
        $kelompok=auth()->user()->kelompok;
        $token="$kelompok"."$kode->kode";
        $userid = $id ;
        $check = Table_score::where('token', $token)->get();
        $checkCount = $check->count();



        if ($kode->kode == $kodeinput) {

        if($checkCount==0){

            Table_score::create([
                'token' => $token,
                'userid' => $userid,
                'score' => $kode->nilai,
                'kelompok' => $kelompok
            ]);

            $current_score= Leaderboard::where('kelompok',$kelompok)->value('score');

            $current_score= $current_score + $kode->nilai;
            $scoreCheck = Leaderboard::where('score', $current_score)->get();
            $checkScore = $scoreCheck->count();

            if ($checkScore == 0) {


            Leaderboard::where('kelompok',$kelompok)->update(['score'=>$current_score]);

            $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();

            return view('client.games.redeem-code.success',compact('leaderboards'));

            }else {
                $newCurrentScore = $current_score + 1 ;
                Leaderboard::where('kelompok',$kelompok)->update(['score'=> $newCurrentScore]);

                $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();

                return view('client.games.redeem-code.success',compact('leaderboards'));
            }
        }

        else{
            $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();

            return view('client.games.redeem-code.failed',compact('leaderboards'));
        }
    }else {
        echo "<script>
        alert('Kode Tidak Valid ');
        window.location.href='/card-list'
         </script>";
    }




    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKode_gameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKode_gameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kode_game  $kode_game
     * @param int $no
     * @return \Illuminate\Http\Response
     */
    public function show(Kode_game $kode_game, $no)
    {
        $kode_game = Kode_game::where('no', $no)->first();

        // $data = $kode_game->select('nama')->where('no', '=', $no)->get();

        return view('client.games.redeem-code.redeem', compact('kode_game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kode_game  $kode_game
     * @return \Illuminate\Http\Response
     */
    public function edit(Kode_game $kode_game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKode_gameRequest  $request
     * @param  \App\Models\Kode_game  $kode_game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKode_gameRequest $request, Kode_game $kode_game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kode_game  $kode_game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kode_game $kode_game)
    {
        //
    }
}
