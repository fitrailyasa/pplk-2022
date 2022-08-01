<?php

namespace App\Http\Controllers\Admin;

use App\Models\Begalin;
use App\Models\Funfact;
use App\Models\Himpunan;
use App\Models\Jurusan;
use App\Models\Kabinet;
use App\Models\Kamusgaul;
use App\Models\Kode_game;
use App\Models\PPLK;
use App\Models\Presensi;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\Senat;
use App\Models\StatusKehadiran;
use App\Models\Ukm;
use App\Models\Upt;
use App\Models\User;
use Exception;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(AdminController $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminController $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, AdminController $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminController $id)
    {

    }
}
