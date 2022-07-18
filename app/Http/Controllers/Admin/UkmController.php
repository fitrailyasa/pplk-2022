<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ukm;
use App\Models\Upt;
use App\Models\Senat;
use App\Models\Prodi;
use App\Models\Funfact;
use App\Models\Begalin;
use App\Models\Kamusgaul;
use App\Models\User;

use App\Http\Requests\StoreUkmRequest;
use App\Http\Requests\UpdateUkmRequest;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::get();
        $begalins = Begalin::get();
        $funfacts = Funfact::get();
        $upts = Upt::all();
        $ukms = Ukm::get();
        $senats = Senat::all();
        $prodis = Prodi::get();
        $kamusgauls = Kamusgaul::get();

        return view('admin.index', compact('ukms','upts','senats','prodis','funfacts','begalins','kamusgauls','users'));
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
     * @param  \App\Http\Requests\StoreUkmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUkmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function show(Ukm $ukm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukm $ukm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUkmRequest  $request
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUkmRequest $request, Ukm $ukm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukm $ukm)
    {
        //
    }
}
