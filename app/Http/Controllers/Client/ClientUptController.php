<?php

namespace App\Http\Controllers\Client;

use App\Models\Upt;
use App\Http\Requests\StoreUptRequest;
use App\Http\Requests\UpdateUptRequest;

class ClientUptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upts = Upt::all();
        return view('client.upt', compact('upts'));
    }

}
