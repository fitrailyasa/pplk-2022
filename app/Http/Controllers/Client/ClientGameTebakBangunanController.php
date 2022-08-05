<?php

namespace App\Http\Controllers\Client;

use App\Models\Tebak_bangunan;
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
     * Display the specified resource.
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
