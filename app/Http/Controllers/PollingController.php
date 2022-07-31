<?php

namespace App\Http\Controllers;

use App\Models\polling;
use App\Http\Requests\StorepollingRequest;
use App\Http\Requests\UpdatepollingRequest;

class PollingController extends Controller
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
     * @param  \App\Http\Requests\StorepollingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepollingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function show(polling $polling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function edit(polling $polling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepollingRequest  $request
     * @param  \App\Models\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepollingRequest $request, polling $polling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\polling  $polling
     * @return \Illuminate\Http\Response
     */
    public function destroy(polling $polling)
    {
        //
    }
}
