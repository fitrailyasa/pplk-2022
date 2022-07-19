<?php

namespace App\Http\Controllers\Client;

use App\Models\Begalin;
use App\Models\Funfact;
use App\Models\Himpunan;
use App\Models\Jurusan;
use App\Models\Kabinet;
use App\Models\Kamusgaul;
use App\Models\Kode_game;
use App\Models\PPLK;
use App\Models\Presensi;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\Senat;
use App\Models\StatusKehadiran;
use App\Models\Ukm;
use App\Models\Upt;
use App\Models\User;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $begalins =  Cache::rememberForever('begalins', function () { return Begalin::all(); });
        $funfacts =  Cache::rememberForever('funfacts', function () { return Funfact::all(); });
        $himpunans =  Cache::rememberForever('himpunans', function () { return Himpunan::all(); });
        $jurusans =  Cache::rememberForever('jurusans', function () { return Jurusan::all(); });
        $kabinets =  Cache::rememberForever('kabinets', function () { return Kabinet::all(); });
        $kamusgauls =  Cache::rememberForever('kamusgauls', function () { return Kamusgaul::all(); });
        $kode_games =  Cache::rememberForever('kode_games', function () { return Kode_game::all(); });
        $pplks =  Cache::rememberForever('pplks', function () { return PPLK::all(); });
        $presensis =  Cache::rememberForever('presensis', function () { return Presensi::all(); });
        $prodis =  Cache::rememberForever('prodis', function () { return Prodi::all(); });
        $senats =  Cache::rememberForever('senats', function () { return Senat::all(); });
        $roles =  Cache::rememberForever('kamusGauls', function () { return KamusGaul::all(); });
        $status_kehadirans =  Cache::rememberForever('status_kehadirans', function () { return StatusKehadiran::all(); });
        $ukms =  Cache::rememberForever('ukms', function () { return Ukm::all(); });
        $upts =  Cache::rememberForever('upts', function () { return Upt::all(); });
        $users =  Cache::rememberForever('users', function () { return User::all(); });

        return view('admin.index', compact('begalins','funfacts','himpunans','jurusans','kabinets','kamusgauls','kode_games','pplks','presensis','prodis','senats','roles','status_kehadirans','ukms','upts','users'));
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
