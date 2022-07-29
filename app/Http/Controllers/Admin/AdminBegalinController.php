<?php

namespace App\Http\Controllers\Admin;

use App\Models\Begalin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
        $begalins = Begalin::all();
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

    public function edit($id)
    {
        $begalin=Begalin::where('id',$id)->first();
        return view('admin.begalin.update', compact('begalin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebegalinRequest  $request
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $begalin=Begalin::where('id',$id)->first();
        $begalin->update(
            [
                'judul' => $request->judul,
                'isi' => $request->isi
            ]
        );
        return redirect('/adminBegalin')->with('sukses', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Begalin::where('id', $id)->first();
        $data->delete();

        return redirect('/adminBegalin')->with('sukses', 'Berhasil Hapus Data!');
    }
}
