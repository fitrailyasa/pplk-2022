<?php

namespace App\Http\Controllers\Client;

use App\Models\Begalin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBegalinRequest;
use App\Http\Controllers\Client\Controller;
use App\Http\Requests\UpdateBegalinRequest;

class ClientBegalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $begalins = Begalin::all();
        return view('client.index', compact('begalins'));
    }
}
