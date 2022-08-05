<?php

namespace App\Http\Controllers\Client;

use App\Models\Himpunan;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreHimpunanRequest;
use App\Http\Requests\UpdateHimpunanRequest;

class ClientHimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $himpunans = Himpunan::all();
        return view('client.ormawa.himpunan', compact('himpunans'));
    }

    public function show($id)
    {
        $himpunans = Himpunan::where('id', $id)->first();
        return view('client.ormawa.detail-himpunan', compact('himpunans'));
    }
}
