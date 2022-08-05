<?php

namespace App\Http\Controllers\Client;

use App\Models\Kamusgaul;
use App\Http\Requests\StoreKamusgaulRequest;
use App\Http\Requests\UpdateKamusgaulRequest;

class ClientKamusgaulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamus_gauls = Kamusgaul::all();
        return view('client.kamus-gaul', compact('kamus_gauls'));
    }

}
