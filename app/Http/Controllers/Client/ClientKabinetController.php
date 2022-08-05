<?php

namespace App\Http\Controllers\Client;

use App\Models\Kabinet;
use App\Http\Requests\StoreKabinetRequest;
use App\Http\Requests\UpdateKabinetRequest;

class ClientKabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabinets = Kabinet::all();
        return view('client.kabinet', compact('kabinets'));
    }
}
