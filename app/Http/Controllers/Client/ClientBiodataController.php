<?php
namespace App\Http\Controllers\Client;

use Illuminate\Support\HtmlString;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreClientRequest;
use App\Http\Requests\Client\UpdateBiodataRequest;

use Illuminate\Support\Facades\Hash;

class ClientBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = User::where('id', '2')->firstOrFail();
        return view('client.biodata.biodata', compact('biodata'));
    }

    public function indexEditBio()
    {
        $viewbiodata = User::where('id', '2')->firstOrFail();;
        return view('client.biodata.edit-biodata', compact('viewbiodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::all();
        return view('registrasi.create', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request;
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'nim'=> ['required', 'unique:users', 'max:255'],
            'instagram'=> ['required', 'unique:users', 'max:255'],
            'nomorHp'=>['required', 'unique:users', 'max:255']
        ]);
        $nim =$data['nim'];
        $qrCode = "$nim"."$nim"."$nim"."$nim"."$nim"."$nim";
        User::create([
            'nama'=>$request->name,
            'golonganDarah'=>$request->golonganDarah,
            'nim'=>$nim,
            'email'=>$data['email'],
            'kelompok'=>$request->divisi,
            'instagram'=>$data['instagram'],
            'nomorHp'=>$data['nomorHp'],
            'password'=> Hash::make($request->password),
            'riwayatPenyakit'=>$request->riwayatPenyakit,
            'roles_id'=>$request->roles,
            'prodi'=>$request->prodi,
            'qrCode'=>$request->$qrCode
        ]);
        QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");

            echo "<script>
                        alert('Daftar Berhasil');
                        window.location.href='/registrasi'
                    </script>";
;
    }

    public function editProfil($id)
    {
        $viewbiodata = User::find($id);
        return view('Client.biodata.edit-biodata', compact('viewbiodata'));
    }

    public function editBiodata($id)
    {
        $viewbiodata = User::find($id);
        return view('Client.biodata.edit-biodata', compact('viewbiodata'));
    }

    public function updateProfil(Request $request, $id)
    {
        $file = $request->file('fotoProfil');
        $viewbiodata = User::find($id);
        $viewbiodata->fotoProfil = time().'_'.$file->getClientOriginalName();
        $viewbiodata->update();
        $filename = time().'_'.$file->getClientOriginalName();

        // File upload location
        $location = '../public/assets/profile/';

        // Upload file
        $file->move($location,$filename);

        return "<script>
        alert('Daftar update');
        window.location.href='/edit-biodata'
         </script>";

}


public function updateBiodata(Request $request, $id){

        $viewbiodata = User::find($id);
        $nim = $request->input('nim');
        $qrCode = "$nim"."$nim"."$nim"."$nim"."$nim"."$nim";
        $viewbiodata->nama = $request->input('name');
        $viewbiodata->golonganDarah = $request->input('golonganDarah');
        $viewbiodata->nim = $nim;
        $viewbiodata->password = Hash::make($request->input('password'));
        $viewbiodata->email = $request->input('email');
        $viewbiodata->instagram = $request->input('instagram');
        $viewbiodata->nomorHp = $request->input('nomorHp');
        $viewbiodata->riwayatPenyakit = $request->input('riwayatPenyakit');
        $viewbiodata->prodi = $request->input('prodi');
        $viewbiodata->qrCode = "$nim"."$nim"."$nim"."$nim"."$nim"."$nim";

        $viewbiodata->update();
        QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");
        echo "<script>
        alert('Data update');
        window.location.href='/edit-biodata'
         </script>";


}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $Biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $Biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request;  $request
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiodataRequest $request, Biodata $Biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $Biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $Biodata)
    {
        //
    }
}
