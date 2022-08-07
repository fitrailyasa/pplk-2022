<?php

namespace App\Http\Controllers\Admin;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AdminKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhans = Keluhan::all();
        return view('admin.keluhan.index', compact('keluhans'));
    }

    public function download()
    {
        $url = Storage::temporaryUrl(
            'file.jpg', now()->addMinutes(5)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluhan = Keluhan::where('id', $id)->first();
        return view('admin.keluhan.read', compact('keluhan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Keluhan::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/keluhan')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 5) {
            return redirect('kedis/keluhan')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
