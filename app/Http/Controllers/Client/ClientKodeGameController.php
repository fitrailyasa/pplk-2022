<?php

namespace App\Http\Controllers\Client;

use App\Models\Kode_game;
use App\Http\Requests\StoreKode_gameRequest;
use App\Http\Requests\UpdateKode_gameRequest;
use App\Models\Leaderboard;
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

    public function sumscore(Request $request){
        $nilai=Kode_game::where('kode',$request->code)->value('nilai');
        $current_score=Leaderboard::where('id','1')->value('score');
        $current_score=$current_score+$nilai;

        Leaderboard::where('id','1')->update(['score'=>$current_score]);



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
