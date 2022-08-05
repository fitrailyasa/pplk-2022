<?php

namespace App\Http\Controllers\Client;

use App\Models\Senat;
use App\Http\Requests\StoreSenatRequest;
use App\Http\Requests\UpdateSenatRequest;

class SenatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senats = Senat::all();
        return view('client.senat', compact('senats'));
    }
}
