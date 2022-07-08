<?php

namespace App\Http\Controllers;

use App\Models\Kabinet;
use App\Http\Requests\StoreKabinetRequest;
use App\Http\Requests\UpdateKabinetRequest;

class KabinetController extends Controller
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
     * @param  \App\Http\Requests\StoreKabinetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKabinetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kabinet  $kabinet
     * @return \Illuminate\Http\Response
     */
    public function show(Kabinet $kabinet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kabinet  $kabinet
     * @return \Illuminate\Http\Response
     */
    public function edit(Kabinet $kabinet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKabinetRequest  $request
     * @param  \App\Models\Kabinet  $kabinet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKabinetRequest $request, Kabinet $kabinet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kabinet  $kabinet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kabinet $kabinet)
    {
        //
    }
}
