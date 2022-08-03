<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DapmenUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kelompok = auth()->user()->kelompok;
        $users = User::where('kelompok', $kelompok )->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' => $request->password,
            'roles_id' => '8',
            'prodi' => $request->prodi,
            'kelompok' => auth()->user()->kelompok,
            'instagram' => $request->instagram,
            'golonganDarah' => $request->golonganDarah,
            'riwayatPenyakit' => $request->riwayatPenyakit,
            'nomorHp' => $request->nomorHp,
        ]);

        return redirect('/cms-dapmen')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan $himpunan
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = User::where('kelompok', auth()->user()->kelompok)->first();
        return view('admin.user.read', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan $himpunan
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.update', compact('user'));
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
        $user = User::where('id', $id)->first();
        $user->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'nim' => $request->nim,
                'password' => $request->password,
                'prodi' => $request->prodi,
                'kelompok' => auth()->user()->kelompok,
                'instagram' => $request->instagram,
                'golonganDarah' => $request->golonganDarah,
                'riwayatPenyakit' => $request->riwayatPenyakit,
                'nomorHp' => $request->nomorHp,
            ]
        );
        return redirect('/cms-dapmen')->with('sukses', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();

        return redirect('/cms-dapmen')->with('sukses', 'Berhasil Hapus Data!');
    }
}
