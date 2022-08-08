<?php

namespace App\Http\Controllers\Admin;

use App\Models\Funfact;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminBookletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklet = Funfact::get()->first();
        return view('admin.booklet.index', compact('booklet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booklet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebookletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        booklet::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/booklet')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/booklet')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $booklet = Funfact::where('id', 1)->first();
        return view('admin.booklet.read', compact('booklet'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $booklet = Funfact::get()->first();
        return view('admin.booklet.update', compact('booklet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookletRequest  $request
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Funfact::where('id',1)->get()->first();
        $data->update(
            [
                'booklet' => $request->booklet
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/booklet')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/booklet')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funfact  $funfact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Funfact::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/booklet')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/booklet')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
