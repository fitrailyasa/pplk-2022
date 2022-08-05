<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $users = User::all();
        // return view('admin.user.index', compact('users'));

        return view('admin.user.index', [
            'users' => DB::table('users')->paginate(859)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('admin.user.create', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Date("m.d.y");
        $time = time();
        $time = $uTime = microtime(true);
        $qrCode = "$date"."$time"."$date"."$date"."$date"."$date"."$time";

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' =>  Hash::make($request->password),
            'roles_id' => $request->roles_id,
            'prodi' => $request->prodi,
            'kelompok' => $request->kelompok,
            'instagram' => $request->instagram,
            'golonganDarah' => $request->golonganDarah,
            'riwayatPenyakit' => $request->riwayatPenyakit,
            'nomorHp' => $request->nomorHp,
        ]);

        QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");

        return redirect('super/user')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan $himpunan
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = User::where('id', $id)->first();
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
        $prodis = Prodi::all();
        $user = User::where('id', $id)->first();
        return view('admin.user.update', compact('user','prodis'));
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
                'password' => Hash::make($request->password),
                'prodi' => $request->prodi,
                'kelompok' => $request->kelompok,
                'instagram' => $request->instagram,
                'golonganDarah' => $request->golonganDarah,
                'riwayatPenyakit' => $request->riwayatPenyakit,
                'nomorHp' => $request->nomorHp,
            ]
        );

        return redirect('super/user')->with('sukses', 'Berhasil Edit Data!');
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

        return redirect('super/user')->with('sukses', 'Berhasil Hapus Data!');
    }
}
