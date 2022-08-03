<?php

namespace App\Http\Controllers\Client;

use App\Models\Ukm;
use Illuminate\Support\Facades\Cache;

class ClientUkmController extends Controller
{
    public function index()
    {
        $ukms = Ukm::all();
        return view('client.ormawa.ukm', compact('ukms'));
    }

    public function show($id)
    {
        $ukms = Ukm::where('id', $id)->first();
        return view('client.ormawa.detail-ukm', compact('ukms'));
    }
}
