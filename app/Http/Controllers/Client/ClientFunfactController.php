<?php

namespace App\Http\Controllers\Client;

use App\Models\Funfact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFunfactRequest;
use App\Http\Controllers\Client\Controller;
use App\Http\Requests\UpdateFunfactRequest;
use Illuminate\Support\Facades\DB;
class ClientFunfactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $i = random_int(1, 29);
        $funfacts = DB::table('funfacts')
        ->orderByRaw('id ASC')
        ->get()
        ->take(29);
        return view('client.booklet', compact('funfacts','i'));
    }
}
