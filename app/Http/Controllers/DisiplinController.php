<?php

namespace App\Http\Controllers;

use App\Models\Disiplin;
use App\Http\Requests\StoreDisiplinRequest;
use App\Http\Requests\UpdateDisiplinRequest;

class DisiplinController extends Controller
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
     * @param  \App\Http\Requests\StoreDisiplinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisiplinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disiplin  $disiplin
     * @return \Illuminate\Http\Response
     */
    public function show(Disiplin $disiplin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disiplin  $disiplin
     * @return \Illuminate\Http\Response
     */
    public function edit(Disiplin $disiplin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisiplinRequest  $request
     * @param  \App\Models\Disiplin  $disiplin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisiplinRequest $request, Disiplin $disiplin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disiplin  $disiplin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disiplin $disiplin)
    {
        //
    }
}
