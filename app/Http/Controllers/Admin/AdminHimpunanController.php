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
        $validatedData = $request->validate([
            'logo' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',

           ]);
        $file = $validatedData[('logo')];

        Himpunan::create([
            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'deskripsi' => $request->deskripsi,
            'pembina' => $request->pembina,
            'ketuaHimpunan' => $request->ketuaHimpunan,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo'  =>  $file,
            'filosofiLogo' => $request->filosofiLogo
        ]);

        $filename = time().'_'.$file->getClientOriginalName();
        // File upload location
        $location = '../public/assets/logoProdi/';
        // Upload file
        $file->move($location,$filename);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/himpunan')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/himpunan')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/himpunan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan $himpunan
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $himpunan = Himpunan::where('id', $id)->first();
        return view('admin.himpunan.read', compact('himpunan'));
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
    public function update(Request $request, $id)
    {
        $himpunan = Himpunan::where('id', $id)->first();
        $himpunan->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'deskripsi' => $request->deskripsi,
                'pembina' => $request->pembina,
                'ketuaHimpunan' => $request->ketuaHimpunan,
                'tahunBerdiri' => $request->tahunBerdiri,
                'filosofiLogo' => $request->filosofiLogo
            ]
        );
        if ($request->hasFile('logo'))
           {
            $himpunan->update([
                'logo' => url($request->file('logo')->move('assets/himpunan', $himpunan->namaSingkat . '.' . $request->file('logo')->extension())),
            ]);
        }
        if (auth()->user()->roles_id == 1) {
            return redirect('super/himpunan')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/himpunan')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/himpunan')->with('sukses', 'Berhasil Edit Data!');
        }
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

        if (auth()->user()->roles_id == 1) {
            return redirect('super/himpunan')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/himpunan')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/himpunan')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
