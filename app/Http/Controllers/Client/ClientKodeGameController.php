<?php

namespace App\Http\Controllers\Client;

use App\Models\Kode_game;
use App\Http\Requests\StoreKode_gameRequest;
use App\Http\Requests\UpdateKode_gameRequest;
use App\Models\Leaderboard;
use App\Models\Table_score;
use Illuminate\Http\Request;

/**
 * Controller Redeem Code
 * Dev by *Hans Bonatua
 *        *Ibnu Prayogi
 *        *Khalil Faza
 * PPLK 2022 Ardhames
 */


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

    public function sumscore(Request $request, $id){
        $nomor = $request->nomor;
        $kodeinput = $request->code;
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

                    Leaderboard::where('kelompok',$kelompok)->update(['score'=>$current_score]);

                    $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();

                    return view('client.games.redeem-code.success',compact('leaderboards'));
                }else{
                    $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();
                    return view('client.games.redeem-code.failed',compact('leaderboards'));
                }
            }else {
                // echo "<script>
                // alert('Kode Tidak Valid ');
                // window.location.href='/redeem-failed';
                // </script>";
                $leaderboards=Leaderboard::where('kelompok',$kelompok)->first();
                return view('client.games.redeem-code.failed',compact('leaderboards'));
            }

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
}
