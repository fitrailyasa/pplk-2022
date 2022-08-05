<?php

namespace App\Http\Controllers\Client;

use App\Models\Jurusan;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Controllers\Client\Controller;
use App\Http\Requests\UpdateJurusanRequest;


class ClientJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JTIK = Jurusan::where('namaSingkat', 'JTIK')->firstOrFail();
        $JTPI = Jurusan::where('namaSingkat', 'JTPI')->firstOrFail();
        $JS = Jurusan::where('namaSingkat', 'JS')->firstOrFail();
        return view('client.jurusan.jurusan', compact('JTIK','JTPI','JS'));
    }
}
