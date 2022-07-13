<?php

namespace App\Http\Controllers\Client;

use App\Models\Funfact;
use App\Http\Requests\StoreFunfactRequest;
use App\Http\Requests\UpdateFunfactRequest;

class ClientFunfactController extends Controller
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
     * @param  \App\Http\Requests\StoreFunfactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFunfactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function show(Funfact $funfact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function edit(Funfact $funfact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunfactRequest  $request
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFunfactRequest $request, Funfact $funfact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funfact $funfact)
    {
        //
    }
}
