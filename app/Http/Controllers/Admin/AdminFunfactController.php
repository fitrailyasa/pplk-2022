<?php

namespace App\Http\Controllers\Admin;

use App\Models\Funfact;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminFunfactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funfacts = Funfact::all();
        return view('admin.funfact.index', compact('funfacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.funfact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFunfactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Funfact::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/funfact')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/funfact')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funfact  $Funfact
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $funfact = Funfact::where('id', $id)->first();
        return view('admin.funfact.read', compact('funfact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funfact  $Funfact
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $funfact = Funfact::where('id', $id)->first();
        return view('admin.funfact.update', compact('funfact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunfactRequest  $request
     * @param  \App\Models\Funfact  $Funfact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funfact=Funfact::where('id',$id)->first();
        $funfact->update(
            [
                'isi' => $request->isi
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/funfact')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/funfact')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funfact  $Funfact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Funfact::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/funfact')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/funfact')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
