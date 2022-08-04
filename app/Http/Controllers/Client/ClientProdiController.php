<?php

namespace App\Http\Controllers\Client;

use App\Models\Prodi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;

class ClientProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodis = Prodi::all();
        return view('client.jurusan.prodi', compact('prodis'));
    }

    public function show($id)
    {
        $prodis = Cache::rememberForever('detail-prodi' . $id, function () use ($id) {
            return Prodi::where('id', $id)->first();
        });
        return view('client.jurusan.detail-prodi', compact('prodis'));
    }
}
