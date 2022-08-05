<?php

namespace App\Http\Controllers;

use App\Models\Tebak_bangunan;
use App\Http\Requests\StoreTebak_bangunanRequest;
use App\Http\Requests\UpdateTebak_bangunanRequest;

class TebakBangunanHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal=Tebak_bangunan::all();
        return view('client.games.tebak-bangunan.home',compact('soal'));
    }
}
