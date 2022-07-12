<?php

namespace App\Http\Controllers\Admin;

use App\Models\Senat;
use App\Http\Requests\StoreSenatRequest;
use App\Http\Requests\UpdateSenatRequest;

class SenatController extends Controller
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
     * @param  \App\Http\Requests\StoreSenatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSenatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senat  $senat
     * @return \Illuminate\Http\Response
     */
    public function show(Senat $senat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senat  $senat
     * @return \Illuminate\Http\Response
     */
    public function edit(Senat $senat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSenatRequest  $request
     * @param  \App\Models\Senat  $senat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSenatRequest $request, Senat $senat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senat  $senat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senat $senat)
    {
        //
    }
}
