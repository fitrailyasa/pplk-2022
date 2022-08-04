<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Keluhan;

use Illuminate\Support\Facades\Hash;

class ClientKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where( 'id', auth()->user()->id )->firstOrFail();
        return view('client.form-keluhan', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id )
    {
        $validatedData = $request->validate([
            'bukti' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',

           ]);
        $file = $validatedData[('bukti')];
        $nim = $request->input('nim');
        $nama = $request->input('nama');
        $kelompok = $request->input('kelompok');
        $keluhan = $request->input('keluhan');

        Keluhan::create([
            'userid' => $id,
           'nama' => $nama,
           'nim' => $nim,
           'kelompok' => $kelompok,
           'keluhan' => $keluhan

        ]);

        $filename = time().'_'.$file->getClientOriginalName();
        // File upload location
        $location = '../public/assets/buktiKeluhan/';
        // Upload file
        $file->move($location,$filename);

        echo "<script>
        alert('Keluhan Anda sudah Terkirim ke Kedisiplinan');
        window.location.href='/form-keluhan'
    </script>";
;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluhanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $Keluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhan $Keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluhanRequest  $request
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluhanRequest $request, Keluhan $Keluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $Keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhan $Keluhan)
    {
        //
    }
}
