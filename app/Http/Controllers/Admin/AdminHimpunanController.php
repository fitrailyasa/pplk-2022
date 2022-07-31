<?php

namespace App\Http\Controllers\Admin;

use App\Models\Himpunan;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminHimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $himpunans = Himpunan::all();
        return view('admin.himpunan.index', compact('himpunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.himpunan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehimpunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Himpunan::create([
            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'deskripsi' => $request->deskripsi,
            'kodeWarna' => $request->kodeWarna,
            'pembina' => $request->pembina,
            'ketuaHimpunan' => $request->ketuaHimpunan,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo' => $request->logo,
            'filosofiLogo' => $request->filosofiLogo
        ]);

        return redirect('/adminHimpunan')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan $himpunan
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $himpunan = Himpunan::where('id', $id)->first();
        return view('admin.himpunan.update', compact('himpunan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehimpunanRequest  $request
     * @param  \App\Models\himpuan $himpunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Himpunan $himpunan)
    {
        $himpunan->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'deskripsi' => $request->deskripsi,
                'kodeWarna' => $request->kodeWarna,
                'pembina' => $request->pembina,
                'ketuaHimpunan' => $request->ketuaHimpunan,
                'tahunBerdiri' => $request->tahunBerdiri,
                'logo' => $request->logo,
                'filosofiLogo' => $request->filosofiLogo
            ]
        );
        return redirect('/adminHimpunan')->with('sukses', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Himpunan::where('id', $id)->first();
        $data->delete();

        return redirect('/adminHimpunan')->with('sukses', 'Berhasil Hapus Data!');
    }
}
