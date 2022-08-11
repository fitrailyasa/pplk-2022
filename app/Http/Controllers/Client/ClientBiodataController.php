<?php
namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\HtmlString;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Facades\Storage;

use App\Models\User;
use App\Models\Prodi;

use App\Http\Requests\Admin\StoreClientRequest;
use App\Http\Requests\Client\UpdateBiodataRequest;


/**
 * Controller Biodata || system CRUD table user
 * Dev by KhalilFaza
 * Informasi tentang kode ini https://instagram.com/khalilfaza._
 */

class ClientBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengirim compact variable biodata ke halaman biodata
        $biodata = User::where( 'id', auth()->user()->id )->firstOrFail();
        return view('client.biodata.biodata', compact('biodata'));
    }

    public function ViewRegister()
    {
        // mengirim compact prodi ke halaman register
        $prodis = Prodi::all();
        return view('registrasi', compact('prodis'));
    }

    public function indexEditBio()
    {
        // mengirim compact biodata user dan list prodi ke halaman edit biodata
        $prodis = Prodi::all();
        $viewbiodata = User::where('id', auth()->user()->id)->firstOrFail();;
        return view('client.biodata.edit-biodata', compact('viewbiodata','prodis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mengirim compact data semua user ke halaman cms admin user
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
        // function menyimpan data user baru dari form register

        // proses validasi request input dari user
        $data = $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'nim'=> ['required', 'unique:users', 'max:255'],
            'instagram'=> ['required', 'unique:users', 'max:255'],
            'nomorHp'=>['required', 'unique:users', 'max:255']
        ]);
        // deklarasi variable yang dibutuhkan agar lebih mudah di masukan ke dalam query
        $nim =$data['nim'];
        $date = Date("Ymd");
        $time = time();
        $time = microtime(true);
        $qrCode = "$date"."$time"."$date"."$date"."$date"."$date"."$time"."svg";

        // proses upload data user ke database
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
            'roles_id'=>'7',
            'prodi'=>$request->prodi,
            'qrCode'=>$qrCode
        ]);
        // model untuk generate qrCode
        QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");

            echo "<script>
                        alert('Daftar Berhasil');
                        window.location.href='/login'
                    </script>";
;
    }

    public function editBiodata($id)
    {
         // mengirim data user ke halaman edit biodata untuk
        $viewbiodata = User::find($id);
        return view('client.biodata.edit-biodata', compact('viewbiodata'));
    }

    public function updateProfil(Request $request, $id)
    {
        // validasi data agar file yang di upload terfilter
        $validatedData = $request->validate([
            'fotoProfil' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',

           ]);

        // deklarasi variable yang dibutuhkan
        $file = $validatedData[('fotoProfil')];
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

        // mencari row user yang ingin di update
            $viewbiodata = User::find($id);
            $password = 'password';

            if ($request->input('password') ==  $viewbiodata->password) {
                $password = $viewbiodata->password;
            }else {
                $password =  Hash::make($request->password) ;
            }
                    // memberikan nilai baru ke column
                $nim = $request->input('nim');
                $viewbiodata->nama = $request->input('name');
                $viewbiodata->golonganDarah = $request->input('golonganDarah');
                $viewbiodata->nim = $nim;
                $viewbiodata->password = $password;
                $viewbiodata->email = $request->input('email');
                $viewbiodata->instagram = $request->input('instagram');
                $viewbiodata->nomorHp = $request->input('nomorHp');
                $viewbiodata->riwayatPenyakit = $request->input('riwayatPenyakit');
                $viewbiodata->prodi = $request->input('prodi');

                // eksekusi proses update
                $viewbiodata->update();

                echo "<script>
                alert('Data update');
                window.location.href='/edit-biodata'
                </script>";


    }

    // public function hitunguser(){

    //     $user = User::where('id', '<' , 8000)->get();
    //     $count = $user->count();
    //     return $count;
    // }

    // public function generateAllQrCode()
    // {
    //     for($n=6501;$n<=6635;$n++){

    //         $date = Date("Ymd");
    //         $time = microtime(true);
    //         $qrCode = "$date"."$time"."$date"."$date"."$date"."$date"."$time".".svg";
    //         $user = User::where('id',$n)->first();
    //         // $user->qrCode = 'kosong';
    //         $user->update(['qrCode' => $qrCode]);
    //         QrCode::format('svg')->margin(2)->size(200)->errorCorrection('H')->generate("$qrCode", "../public/assets/qrcode/"."$qrCode");
    //     }
    //         echo "<script>
    //         alert(' Semuaa Data update');
    //         window.location.href='/hitung'
    //          </script>";
    // }
}


