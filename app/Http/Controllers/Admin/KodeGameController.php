<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kode_game;
use App\Http\Requests\StoreKode_gameRequest;
use App\Http\Requests\UpdateKode_gameRequest;

class KodeGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function show(Kode_game $kode_game)
    {
        //
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
