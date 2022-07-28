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

        return view('admin.index', compact('begalins', 'funfacts', 'himpunans', 'jurusans', 'kabinets', 'kamusgauls', 'kode_games', 'pplks', 'presensis', 'prodis', 'senats', 'roles', 'status_kehadirans', 'ukms', 'upts', 'users'));
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

        return view('admin.index', compact('begalins', 'funfacts', 'himpunans', 'jurusans', 'kabinets', 'kamusgauls', 'kode_games', 'pplks', 'presensis', 'prodis', 'senats', 'roles', 'status_kehadirans', 'ukms', 'upts', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUkm(Request $request)
    {





        Ukm::create([

            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'pembina' => $request->pembina,
            'ketuaUmum' => $request->ketuaUmum,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo' => $request->logo,
            'filosofiLogo' => $request->filosofiLogo,
            'qrCode' => $request->qrCode,
            'deskripsi' => $request->deskripsi,
            'dokumentasi1' => $request->dokumentasi1,
            'dokumentasi2' => $request->dokumentasi2,
            'dokumentasi3' => $request->dokumentasi3
        ]);

        return 'Ukm Berhasil';
        //
    }


    public function storefunFact(Request $request)
    {
        Funfact::create([
            'isi' => $request->isi
        ]);

        return 'funFact Berhasil';
    }

    public function storeHimpunan(Request $request)
    {
        Himpunan::create([
            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'deskripsi' => $request->deskripsi,
            'pembina' => $request->pembina,
            'ketuaHimpunan' => $request->ketuaHimpunan,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo' => $request->logo,
            'filosofiLogo' => $request->filosofiLogo,
            'kodeWarna' => $request->kodeWarna
        ]);

        return 'Himpunan sukses';
    }


    public function storeUser(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'nim' => $request->nim,
            'kelompok' => $request->kelompok,
            'instagram' => $request->instagram,
            'qrCode' => $request->qrCode,
            'Prodi' => $request->Prodi,
            'nomorHp' => $request->nomorHp,
            'golonganDarah' => $request->golonganDarah,
            'riwayatPenyakit' => $request->riwayatPenyakit,
            'fotoProfil' => $request->fotoProfil,
            'roles_id' => $request->roles_id

        ]);

        return 'User Berhasil';
    }

    public function storeProdi(Request $request)
    {

        Prodi::create([
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
            'logo' => $request->logo,
            'prestasi' => $request->prestasi,
            'jurusan_id' => $request->jurusan_id
        ]);
    }

    public function storeUpt(Request $request)
    {

        Upt::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return 'Upt Berhasil';
    }

    public function storeBegalin(Request $request)
    {

        Begalin::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return 'Begalin Berhasil';
    }

    public function storeKamusgaul(Request $request)
    {

        Kamusgaul::create([
            'gaul' => $request->gaul,
            'asli' => $request->asli,
            'contohPenggunaan' => $request->contohPenggunaan
        ]);

        return 'Kamus Gaul Berhasil';
    }
    //UPDATE FUNFACT
    public function getKamusGaulId($id)
    {
        $kamusgaul = Kamusgaul::where('id', $id)->first();
        return view('admin.edit.update-kamus-gaul', compact('kamusgaul'));
    }
    public function updateKamusGaul(Request $request)
    {
        $kamusgaul = Kamusgaul::where('id', $request->id)->first();
        $kamusgaul->update(
            [
                'gaul' => $request->gaul,
                'asli' => $request->asli,
                'contohPenggunaan' => $request->contohPenggunaan
            ]
        );
        return $this->index()->with('sukses', ' Success Inserted ' . $kamusgaul->isi);
    }


    //UPDATE FUNFACT
    public function getfunFactId($id)
    {
        $funfact = Funfact::where('id', $id)->first();
        return view('admin.edit.update-funfact', compact('funfact'));
    }
    public function updatefunFact(Request $request)
    {
        $funfact = Funfact::where('id', $request->id)->first();
        $funfact->update(
            [
                'isi' => $request->isi
            ]
        );
        return redirect()->back()->with('succes', ' Success Inserted ' . $funfact->isi);
    }


    //UPDATE BEGALIN
    public function getBegalinId($id)
    {
        $begalin = Begalin::where('id', $id)->first();
        return view('admin.edit.update-begalin', compact('begalin'));
    }
    public function updateBegalin(Request $request)
    {
        $begalin = Begalin::where('id', $request->id)->first();
        $begalin->update(
            [
                'judul' => $request->judul,
                'isi' => $request->isi
            ]
        );
        return $this->index()->with('sukses', ' Success Inserted ' . $begalin->isi);
    }

    //UPDATE UPT

    public function getUptId($id)
    {
        $upt = Upt::where('id', $id)->first();
        return view('admin.edit.update-upt', compact('upt'));
    }
    public function updateUpt(Request $request)
    {
        $upt = Upt::where('id', $request->id)->first();
        $upt->update(
            [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
            ]
        );
        return $this->index()->with('sukses', ' Success Inserted ' . $upt->isi);
    }

    //UPDATE HIMPUNAN
    public function getHimpunanId($id)
    {
        $himpunan = Himpunan::where('id', $id)->first();
        return view('admin.edit.update-himpunan', compact('himpunan'));
    }
    public function updateHimpunan(Request $request)
    {
        $himpunan = Himpunan::where('id', $request->id)->first();
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
                'logo' => $request->logo,
                'filosofiLogo' => $request->filosofiLogo,
                'kodeWarna' => $request->kodeWarna
            ]
        );
        return $this->index();;
    }

    //UPDATE UKM
    public function getUkmId($id)
    {
        $ukm = Ukm::where('id', $id)->first();
        return view('admin.edit.update-ukm', compact('ukm'));
    }
    public function updateUkm(Request $request)
    {
        $ukm = Ukm::where('id', $request->id)->first();
        $ukm->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'pembina' => $request->pembina,
                'ketuaUmum' => $request->ketuaUmum,
                'tahunBerdiri' => $request->tahunBerdiri,
                'logo' => $request->logo,
                'filosofiLogo' => $request->filosofiLogo,
                'qrCode' => $request->qrCode,
                'deskripsi' => $request->deskripsi,
                'dokumentasi1' => $request->dokumentasi1,
                'dokumentasi2' => $request->dokumentasi2,
                'dokumentasi3' => $request->dokumentasi3
            ]
        );
        return $this->index();
    }


    //UPDATE PRODI
    public function getProdiId($id)
    {
        $prodi = Prodi::where('id', $id)->first();
        return view('admin.edit.update-prodi', compact('prodi'));
    }
    public function updateProdi(Request $request)
    {
        $prodi = Prodi::where('id', $request->id)->first();
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
                'logo' => $request->logo,
                'prestasi' => $request->prestasi,
                'jurusan_id' => $request->jurusan_id
            ]
        );
        return $this->index();
    }


    //HAPUS Upt
    public function destroyUpt($id)
    {
        $data = Upt::where('id', $id)->firstor();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS Funfact
    public function destroyFunfact($id)
    {
        $data = Funfact::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS Begalin
    public function destroyBegalin($id)
    {
        $data = Begalin::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS KamusGaul
    public function destroyKamusGaul($id)
    {
        $data = Kamusgaul::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS Prodi
    public function destroyProdi($id)
    {
        $data = Prodi::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS Himpunan
    public function destroyHimpunan($id)
    {
        $data = Himpunan::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
    }

    //HAPUS Ukm
    public function destroyUkm($id)
    {
        $data = Ukm::where('id', $id)->first();
        $data->delete();

        return 'hapus sukses';
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
        try {
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
        } catch (Exception $ex) {
            return redirect('admin.index')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('admin.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}
