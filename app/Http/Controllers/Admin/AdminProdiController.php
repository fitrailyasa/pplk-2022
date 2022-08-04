<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodis = Prodi::all();
        return view('admin.prodi.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFunfactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'logo' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
         ]);

        $file = $validatedData[('logo')];
        $filename = time() . '_' . $file->getClientOriginalName();
        $location = '../public/assets/logoProdi/';

        Prodi::create(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'deskripsi' => $request->deskripsi,
                'kepalaProdi' => $request->kepalaProdi,
                'akreditasi' => $request->akreditasi,
                'tahunBerdiri' => $request->tahunBerdiri,
                'ruangProdi' => $request->ruangProdi,
                'jumlahMahasiswa' => $request->jumlahMahasiswa,
                'prestasi1' => $request->prestasi1,
                'prestasi2' => $request->prestasi2,
                'prestasi3' => $request->prestasi3,
                'logo' => $file,
                'jurusan_id' => $request->jurusan_id,
            ]
        );
        $file->move($location, $filename);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/prodi')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/prodi')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/prodi')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $Prodi
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $prodi = Prodi::where('id', $id)->first();
        return view('admin.prodi.read', compact('prodi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $Prodi
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $prodi = Prodi::where('id', $id)->first();
        return view('admin.prodi.update', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdiRequest  $request
     * @param  \App\Models\Prodi  $Funfact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prodi = Prodi::where('id', $id)->first();


        $prodi->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'deskripsi' => $request->deskripsi,
                'kepalaProdi' => $request->kepalaProdi,
                'akreditasi' => $request->akreditasi,
                'tahunBerdiri' => $request->tahunBerdiri,
                'ruangProdi' => $request->ruangProdi,
                'jumlahMahasiswa' => $request->jumlahMahasiswa,
                'prestasi1' => $request->prestasi1,
                'prestasi2' => $request->prestasi2,
                'prestasi3' => $request->prestasi3,
                'jurusan_id' => $request->jurusan_id
            ]
        );
        if ($request->hasFile('logo')) {

            $validatedData = $request->validate([
                'logo' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
             ]);

            $file = $validatedData[('logo')];
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = '../public/assets/logoProdi/';
            $file->move($location, $filename);
        }
        if (auth()->user()->roles_id == 1) {
            return redirect('super/prodi')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/prodi')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/prodi')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $Funfact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prodi::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/prodi')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/prodi')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 3) {
            return redirect('himpunan/prodi')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
