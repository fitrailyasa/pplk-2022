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
        $himpunans = Himpunan::get();
        return view('client.ormawa.himpunan', compact('himpunans'));
    }

    public function show($id)
    {
        $himpunans = Cache::rememberForever('detail-himpunan' . $id, function () use ($id) {
            return Himpunan::where('id', $id)->first();
        });
        return view('client.ormawa.detail-himpunan', compact('himpunans'));
    }
}
