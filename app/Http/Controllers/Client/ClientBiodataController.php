<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;

class ClientBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = User::where('id', '1')->firstOrFail();;
        return view('client.biodata.biodata', compact('biodata'));
    }

    public function indexEditBio()
    {
        $viewbiodata = User::where('id', '1')->firstOrFail();;
        return view('client.biodata.edit-biodata', compact('viewbiodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::all();
        return view('registrasi', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBiodataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBiodataRequest $request)
    {
        User::create([
            'nama'=>$request->name,
            'nim'=>$request->nim,
            'email'=>$request->email,
            'kelompok'=>$request->devisi,
            'instagram'=>$request->instagram,
            'nomorHp'=>$request->nohp,
            'qrcode'=>$request->nim,
            'logo'=>$request->logo,
            'filosofiLogo'=>$request->filosofiLogo,
            'qrCode'=>$request->nim,
            'riwayatPenyakit'=>$request->riwayatPenyakit,
            'roles_id'=>$request->roles,
            'prodi'=>$request->prodi
        ]);
        return 'daftar Berhasil';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $Biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $Biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBiodataRequest  $request
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiodataRequest $request, Biodata $Biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $Biodata)
    {
        //
    }
}
