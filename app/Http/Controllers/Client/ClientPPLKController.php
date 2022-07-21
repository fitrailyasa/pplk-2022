<?php

namespace App\Http\Controllers\Client;

use App\Models\PPLK;
use App\Http\Requests\StorePPLKRequest;
use App\Http\Requests\UpdatePPLKRequest;

class PPLKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pplks = PPLK::all();
        return view('client.pplk', compact('pplks'));
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
     * @param  \App\Http\Requests\StorePPLKRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePPLKRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PPLK  $pPLK
     * @return \Illuminate\Http\Response
     */
    public function show(PPLK $pPLK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPLK  $pPLK
     * @return \Illuminate\Http\Response
     */
    public function edit(PPLK $pPLK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePPLKRequest  $request
     * @param  \App\Models\PPLK  $pPLK
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePPLKRequest $request, PPLK $pPLK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPLK  $pPLK
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPLK $pPLK)
    {
        //
    }
}
