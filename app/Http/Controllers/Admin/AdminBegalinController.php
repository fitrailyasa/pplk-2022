<?php

namespace App\Http\Controllers\Admin;

use App\Models\Begalin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;


class AdminBegalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $begalins = Begalin::all();
        return view('admin.begalin.index', compact('begalins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.begalin.create', compact('begalins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebegalinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Begalin::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return 'Begalin Berhasil';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function show(begalin $begalin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function edit(begalin $begalin)
    {
        return view('admin.begalin.edit', compact('begalins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebegalinRequest  $request
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $begalin = Begalin::where('id', $request->id)->first();
        $begalin->update(
            [
                'judul' => $request->judul,
                'isi' => $request->isi
            ]
        );
        return $this->index()->with('sukses', ' Success Inserted ' . $begalin->isi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function destroy(begalin $begalin, $id)
    {
        $data = Begalin::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }
}
