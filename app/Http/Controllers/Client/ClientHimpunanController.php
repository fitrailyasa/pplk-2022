<?php

namespace App\Http\Controllers\Client;

use App\Models\Himpunan;
use App\Http\Requests\StoreHimpunanRequest;
use App\Http\Requests\UpdateHimpunanRequest;

class ClientHimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $himpunans = Himpunan::get();
        return view('client.ormawa.himpunan', compact('himpunans'));
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
     * @param  \App\Http\Requests\StoreHimpunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHimpunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function show(Himpunan $himpunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Himpunan $himpunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHimpunanRequest  $request
     * @param  \App\Models\Himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHimpunanRequest $request, Himpunan $himpunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Himpunan $himpunan)
    {
        //
    }
}
