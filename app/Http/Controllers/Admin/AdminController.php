<?php

namespace App\Http\Controllers\Admin;

use App\Models\Begalin;
use App\Models\Funfact;
use App\Models\Himpunan;
use App\Models\Jurusan;
use App\Models\Kabinet;
use App\Models\Kamusgaul;
use App\Models\Kode_game;
use App\Models\PPLK;
use App\Models\Presensi;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\Senat;
use App\Models\StatusKehadiran;
use App\Models\Ukm;
use App\Models\Upt;
use App\Models\User;
use Exception;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $begalins = Begalin::all();
        $funfacts = Funfact::all();
        $himpunans = Himpunan::get();
        $jurusans = Jurusan::all();
        $kabinets = Kabinet::all();
        $kamusgauls = Kamusgaul::all();
        $kode_games = Kode_game::all();
        $pplks = PPLK::all();
        $presensis = Presensi::get();
        $prodis = Prodi::get();
        $senats = Senat::all();
        $roles = Role::all();
        $status_kehadirans = StatusKehadiran::all();
        $ukms = Ukm::get();
        $upts = Upt::all();     
        $users = User::get();

        return view('admin.index', compact('begalins','funfacts','himpunans','jurusans','kabinets','kamusgauls','kode_games','pplks','presensis','prodis','senats','roles','status_kehadirans','ukms','upts','users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $begalins = Begalin::all();
        $funfacts = Funfact::all();
        $himpunans = Himpunan::get();
        $jurusans = Jurusan::all();
        $kabinets = Kabinet::all();
        $kamusgauls = Kamusgaul::all();
        $kode_games = Kode_game::all();
        $pplks = PPLK::all();
        $presensis = Presensi::get();
        $prodis = Prodi::get();
        $senats = Senat::all();
        $roles = Role::all();
        $status_kehadirans = StatusKehadiran::all();
        $ukms = Ukm::get();
        $upts = Upt::all();     
        $users = User::get();

        return view('admin.index', compact('begalins','funfacts','himpunans','jurusans','kabinets','kamusgauls','kode_games','pplks','presensis','prodis','senats','roles','status_kehadirans','ukms','upts','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUkm(Request $request)
    {
<<<<<<< Updated upstream
        
=======
        return 'Ukm Berhasil';
>>>>>>> Stashed changes
        Ukm::create([

            'namaLengkap'=>$request->namaLengkap,
            'namaSingkat'=>$request->namaSingkat,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
            'pembina'=>$request->pembina,
            'ketuaUmum'=>$request->ketuaUmum,
            'tahunBerdiri'=>$request->tahunBerdiri,
            'logo'=>$request->logo,
            'filosofiLogo'=>$request->filosofiLogo,
            'qrCode'=>$request->qrCode,
            'deskripsi'=>$request->deskripsi,
            'dokumentasi1'=>$request->dokumentasi1,
            'dokumentasi2'=>$request->dokumentasi2,
            'dokumentasi3'=>$request->dokumentasi3
        ]);

        return 'Ukm Berhasil';
        //
    }


    public function storefunFact(Request $request){
        Funfact::create([
            'isi'=>$request->isi
        ]);

        return 'funFact Berhasil';
    }

    public function storeHimpunan(Request $request)
    {
        Himpunan::create([
            'namaLengkap'=>$request->namaLengkap,
            'namaSingkat'=>$request->namaSingkat,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
            'deskripsi'=>$request->deskripsi,
            'pembina'=>$request->pembina,
            'ketuaHimpunan'=>$request->ketuaHimpunan,
            'tahunBerdiri'=>$request->tahunBerdiri,
            'logo'=>$request->logo,
            'filosofiLogo'=>$request->filosofiLogo,
            'kodeWarna'=>$request->kodeWarna
        ]);

        return 'Himpunan sukses';
    }


<<<<<<< Updated upstream
    public function storeUser(StoreAdminRequest $request){
=======
    public function storeUser(Request $request){
>>>>>>> Stashed changes
        User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>$request->password,
            'nim'=>$request->nim,
            'kelompok'=>$request->kelompok,
            'instagram'=>$request->instagram,
            'qrCode'=>$request->qrCode,
            'Prodi'=>$request->Prodi,
            'nomorHp'=>$request->nomorHp,
            'golonganDarah'=>$request->golonganDarah,
            'riwayatPenyakit'=>$request->riwayatPenyakit,
            'fotoProfil'=>$request->fotoProfil,
            'roles_id'=>$request->roles_id

        ]);

        return 'User Berhasil';
    }

    public function storeUpt(Request $request){

        Upt::create([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi
        ]);

        return 'Upt Berhasil';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(AdminController $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminController $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, AdminController $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminController $id)
    {
        try{
            $begalins = Begalin::where('id', $id)->first();
            $funfacts = Funfact::where('id', $id)->first();
            $himpunans = Himpunan::where('id', $id)->first();
            $jurusans = Jurusan::where('id', $id)->first();
            $kabinets = Kabinet::where('id', $id)->first();
            $kamusgauls = Kamusgaul::where('id', $id)->first();
            $kode_games = Kode_game::where('id', $id)->first();
            $pplks = PPLK::where('id', $id)->first();
            $presensis = Presensi::where('id', $id)->first();
            $prodis = Prodi::where('id', $id)->first();
            $senats = Senat::where('id', $id)->first();
            $roles = Role::where('id', $id)->first();
            $status_kehadirans = StatusKehadiran::where('id', $id)->first();
            $ukms = Ukm::where('id', $id)->first();
            $upts = Upt::where('id', $id)->first();     
            $users = User::where('id', $id)->first();

            $begalins->delete();
            $funfacts->delete();
            $himpunans->delete();
            $jurusans->delete();
            $kabinets->delete();
            $kamusgauls->delete();
            $kode_games->delete();
            $pplks->delete();
            $presensis->delete();
            $prodis->delete();
            $senats->delete();
            $roles->delete();
            $status_kehadirans->delete();
            $ukms->delete();
            $upts->delete();     
            $users->delete();

        } catch(Exception $ex){
            return redirect('admin.index')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('admin.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
