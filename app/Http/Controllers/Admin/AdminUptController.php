<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upt;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminUptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upts = Upt::all();
        return view('admin.upt.index', compact('upts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUptRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Upt::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/adminUpt')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upt  $Upt
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $upt = Upt::where('id', $id)->first();
        return view('admin.upt.update', compact('upt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUptRequest  $request
     * @param  \App\Models\Upt  $Upt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upt = Upt::where('id', $id)->first();
        $upt->update(
            [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
            ]
        );
        return redirect('/adminUpt')->with('sukses', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upt  $Upt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Upt::where('id', $id)->first();
        $data->delete();

        return redirect('/adminUpt')->with('sukses', 'Berhasil Hapus Data!');
    }
}
