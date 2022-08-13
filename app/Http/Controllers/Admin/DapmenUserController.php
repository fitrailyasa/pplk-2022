<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use App\Models\Presensi;
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
        $time = microtime(true);
        $qrCode = "$date"."$time"."$date"."$date"."$date"."$date"."$time";


        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' =>  Hash::make($request->password),
            'roles_id' => '8',
            'prodi' => $request->prodi,
            'kelompok' => auth()->user()->kelompok,
            'instagram' => $request->instagram,
            'golonganDarah' => $request->golonganDarah,
            'riwayatPenyakit' => $request->riwayatPenyakit,
            'nomorHp' => $request->nomorHp,
        ]);
        QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");

        if (auth()->user()->roles_id == 1) {
            return redirect('super/dapmenUser')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/dapmenUser')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 6) {
            return redirect('dapmen/dapmenUser')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dapmenUser $dapmenUser
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
     * @param  \App\Models\dapmenUser $dapmenUser
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $prodis =Prodi::all();
        $user = User::where('id', $id)->first();
        return view('admin.user.update', compact('user','prodis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedapmenUserRequest  $request
     * @param  \App\Models\himpuan $dapmenUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        if ($request->input('password') ==  $user->password) {
            $password = $user->password;
        }else {
            $password =  Hash::make($request->password) ;
        }

        $user->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'nim' => $request->nim,
                'password' =>  $password,
                'prodi' => $request->prodi,
                'kelompok' => auth()->user()->kelompok,
                'instagram' => $request->instagram,
                'golonganDarah' => $request->golonganDarah,
                'riwayatPenyakit' => $request->riwayatPenyakit,
                'nomorHp' => $request->nomorHp,
            ]
        );

        if (auth()->user()->roles_id == 1) {
            return redirect('super/dapmenUser')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/dapmenUser')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 6) {
            return redirect('dapmen/dapmenUser')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dapmenUser  $dapmenUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/dapmenUser')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/dapmenUser')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 6) {
            return redirect('dapmen/dapmenUser')->with('sukses', 'Berhasil Hapus Data!');
        }
    }

    public function detailPresensi($id){
        $user=User::where('id',$id)->get()->first();
        $dataPresensi=Presensi::where('user_id',$user->id)->where('status','hadir')->get();
        $jumlahHadir=$dataPresensi->count();
        $status1=Presensi::where('hari','08.12.22')->where('user_id',$user->id)->value('status');
        $status2=Presensi::where('hari','08.13.22')->where('user_id',$user->id)->value('status');
        $status3=Presensi::where('hari','08.15.22')->where('user_id',$user->id)->value('status');
        $status4=Presensi::where('hari','08.16.22')->where('user_id',$user->id)->value('status');
        $status5=Presensi::where('hari','08.17.22')->where('user_id',$user->id)->value('status');
        $status6=Presensi::where('hari','08.18.22')->where('user_id',$user->id)->value('status');
        $status7=Presensi::where('hari','08.19.22')->where('user_id',$user->id)->value('status');
        $status8=Presensi::where('hari','08.20.22')->where('user_id',$user->id)->value('status');

        return view('admin.user.presensi',['status1'=>$status1,'status2'=>$status2,'status3'=>$status3,'status4'=>$status4,'status5'=>$status5,'status6'=>$status6,'status7'=>$status7,'status8'=>$status8],compact('user','dataPresensi','jumlahHadir'));

    }
}
