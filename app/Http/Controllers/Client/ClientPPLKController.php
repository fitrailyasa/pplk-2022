<?php

namespace App\Http\Controllers\Client;

use App\Models\PPLK;
use App\Http\Requests\StorePPLKRequest;
use App\Http\Requests\UpdatePPLKRequest;

class PPLKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pplks = PPLK::all();
        return view('client.pplk', compact('pplks'));
    }

}
