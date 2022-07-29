<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ukm;
use App\Models\Presensi;
use App\Models\polling;

class ClientScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '1')->firstOrFail();
        return view('client.scannerPresensi', compact('users'));
    }

    public function indexPolling()
    {
        $ukms = Ukm::where('id', '2')->firstOrFail();
        return view('client.scannerPolling', compact('ukms'));
    }

    public function indexMaba()
    {
        $users = User::where('id', '2')->firstOrFail();
        return view('client.scannerMaba', compact('users'));
    }

    public function presensi(Request $request,  $id)
    {

        $users = User::where('qrCode', $request->input('nim'))->firstOrFail();
        $date = Date("m.d.y");
        $token = "$users->id"."$date";
        $check = Presensi::where('token', $token)->get();
        $checkCount = $check->count();

        if  ($users->qrCode == $request->input('nim')){
                if ($checkCount >= 1) {
                    echo "<script>
                    alert('Anda sudah absen hari ini');
                    window.location.href='/scanner'
                  </script>";

                }else {
                    Presensi::create([
                        'user_id'=>$users->id,
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

public function presensiMaba(Request $request,  $id)
{
    $qrCodeScanner = $request->input('nim');
    $dapmen = User::where('id', $id)->firstOrFail();
    $maba = User::where('qrCode', $qrCodeScanner)->firstOrFail();
    $checkMaba = User::where('qrCode', $qrCodeScanner)->get();
    $countMaba = $checkMaba->count();
    $date = Date("m.d.y");
    $token = "$maba->id"."$date";
    $checkToken = Presensi::where('token', $token)->get();
    $countToken = $checkToken->count();


    if ($countMaba >= 1) {
        if ($dapmen->kelompok == $maba->kelompok){
            if ($countToken >= 1) {
                echo "<script>
                alert('Anda Hari Ini Sudah Absen');
                window.location.href='/presensiMaba'
            </script>";
            }else {
                Presensi::create([
                    'user_id'=>$maba->id,
                    'status'=>$request->input('status'),
                    'hari'=>$date,
                    'token' => $token
                ]);
                echo "<script>
                alert('Anda Sudah Berhasil absen');
                window.location.href='/presensiMaba'
              </script>";
            }
        }else{
            echo "<script>
            alert('Maba Bukan Anggota Kelompok Anda');
            window.location.href='/presensiMaba'
          </script>";
        }
    }else{
        echo "<script>
        alert('QrCode Tidak Cocok Dengan Data Manapun');
        window.location.href='/presensiMaba'
      </script>";
    }



}

public function polling(Request $request,  $id)

    {
        $qrCode =$request->input('qrCode');
        $checkMaba = User::where('qrCode', $qrCode)->firstOrFail();
        $nim= $checkMaba->nim;
        $idukm=$id;
        $idMaba = $checkMaba->id;
        $token = "$idukm"."$nim";
        $check = polling::where('token', $token)->get();
        $checkCount = $check->count();

        $check2 = polling::where('usersid', $idMaba)->get();

        $checkCount2 = $check2->count();
        if ($checkCount2 <= 5) {
            if ($checkCount >= 1){

                echo "<script>
                alert('Maba Sudah Pernah Anda Scan');
                window.location.href='/polling'
            </script>";

            }else {
                polling::create([
                    'ukmsid'=>$idukm,
                    'usersid'=>$idMaba,
                    'token' => $token
                ]);

                echo "<script>
                alert('berhasil scan');
                window.location.href='/polling'
            </script>";

            }

         }
    }

}

