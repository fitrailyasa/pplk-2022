<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ukm;
use App\Models\Presensi;

class ClientScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '2')->firstOrFail();
        return view('client.scannerPresensi', compact('users'));
    }

    public function indexPolling()
    {
        $ukms = Ukm::where('id', '2')->firstOrFail();
        return view('client.scannerPolling', compact('ukms'));
    }

    public function presensi(Request $request,  $id)
    {
        $users = User::where('id', $id)->firstOrFail();
        $date = Date("m.d.y");
        $token = "$id"."$date";
        $check = Presensi::where('token', $token)->get();
        $checkCount = $check->count();
        if  ($users->nim == $request->input('nim')){
                if ($checkCount >= 1) {
                    echo "<script>
                    alert('Anda sudah absen hari ini');
                    window.location.href='/scanner'
                  </script>";

                }else {
                    Presensi::create([
                        'user_id'=>$id,
                        'status'=>$request->input('status'),
                        'hari'=>$date,
                        'token' => $token
                    ]);
                    echo "<script>
                    alert('Anda Sudah Berhasil absen');
                    window.location.href='/scanner'
                  </script>";
                }
        }else{
            echo "<script>
        alert('Qr Code yang discan tidak cocok');
        window.location.href='/scanner'
      </script>";
}

}

public function polling(Request $request,  $id)

    {
        $idUkm = $id;
        $nim = $request->input('NIM');
        $checkMaba = User::where('nim', $nim)->firstOrFail();
        $idMaba = $checkMaba->id;
        $token = "$idUkm"."$nim";
        $check = Polling::where('token', $token)->get();
        $checkCount = $check->count();

        $check2 = Polling::where('usersid', $idMaba)->get();
        $checkCount2 = $check2->count();
        if ($checkCount2 <= 5) {
        if ($checkCount >= 1){
            echo "<script>
            alert('Maba Sudah Pernah Anda Scan');
            window.location.href='/polling'
          </script>";
        }else {
            polling::create([
                'ukmsid'=>$idUkm,
                'usersid'=>$idMaba,
                'token' => $token
            ]);
            echo "<script>
            alert('Anda Sudah Berhasil absen');
            window.location.href='/polling'
          </script>";
        }

    }
}

}

