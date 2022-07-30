<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ukm;
use App\Models\Presensi;
use App\Models\polling;

/**
 * Controller Scanner || system Presensi Staff || System Presensi Maba || System Polling
 * Dev by KhalilFaza
 * Informasi tentang kode ini https://instagram.com/khalilfaza._
 */

class ClientScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengirim data login ke scanner presensi
        $users = User::where('id', auth()->user()->id)->firstOrFail();
        return view('scanner.scannerPresensi', compact('users'));
    }

    public function indexPolling()
    {
        // mengirim data login ke scanner polling
        $ukms = Ukm::where('id', auth()->user()->id)->firstOrFail();
        return view('scanner.scannerPolling', compact('ukms'));
    }

    public function indexMaba()
    {
        // mengirim data login ke scanner presensi Maba
        $users = User::where('id', auth()->user()->id)->firstOrFail();
        return view('scanner.scannerMaba', compact('users'));
    }

    public function presensi(Request $request,  $id)
    {

        // mencari user dengan kode QrCode yang sama dengan hasil Scanner
        $users = User::where('qrCode', $request->input('nim'))->firstOrFail();

        // membuat token unik gabungan antara user id dengan hari
        $date = Date("m.d.y");
        $token = "$users->id"."$date";

        // mengecek token apakah sudah pernah digunakan
        $check = Presensi::where('token', $token)->get();
        $checkCount = $check->count();

         // membandingkan qrcode yang discan dengan milik user yang ditemukan
        if  ($users->qrCode == $request->input('nim')){
            // mengecek apakah token sudah pernah digunakan
                if ($checkCount >= 1) {
                    echo "<script>
                    alert('Anda sudah absen hari ini');
                    window.location.href='/scanner'
                  </script>";

                }else {
                    // melakukan upload data ke table presensi
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
    // menampung data dari scanner
    $qrCodeScanner = $request->input('nim');

    // mencari user user yang bersangkutan dengan hasil scan
    $dapmen = User::where('id', $id)->firstOrFail(); // yang melakukan scan
    $maba = User::where('qrCode', $qrCodeScanner)->firstOrFail(); // User dari QrCode Hasil Scan

    // menghitung data maba
    $checkMaba = User::where('qrCode', $qrCodeScanner)->get();
    $countMaba = $checkMaba->count();

    // membuat token unik mengunkan iduser dan hari
    $date = Date("m.d.y");
    $token = "$maba->id"."$date";

    // menghingtung jumlah kali token digunakan
    $checkToken = Presensi::where('token', $token)->get();
    $countToken = $checkToken->count();

    // mengecek apakah data maba ditemukan atau tidak
    if ($countMaba >= 1) {
        // mengcek apakah kelompok 2 pengguna sama
        if ($dapmen->kelompok == $maba->kelompok){
            //mengecek apakah token sudah pernah digunakan
            if ($countToken >= 1) {
                echo "<script>
                alert('Anda Hari Ini Sudah Absen');
                window.location.href='/presensiMaba'
            </script>";
            }else {
                // upload data presensi
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
        // menampung data dari  hasil scann
        $qrCode =$request->input('qrCode');

        //mencari data maba yang sesuai dengan hasil scan
        $checkMaba = User::where('qrCode', $qrCode)->firstOrFail();
        // menampung nim maba
        $nim= $checkMaba->nim;
        // menampung id ukm yang melakukan scan
        $idukm=$id;
        // menampung id maba yang discan || sebenernya panitia juga bisa di scan
        $idMaba = $checkMaba->id;

        // membuat token unik dengan menggabungkan idukm dan iduser yang discan
        $token = "$idukm"."$nim";
        // menghitung jumlah token yang ada di tabel polling
        $check = polling::where('token', $token)->get();
        $checkCount = $check->count();

        // menghitung jumlah kali user/maba telah di scan sebelumnya
        $check2 = polling::where('usersid', $idMaba)->get();
        $checkCount2 = $check2->count();

        // mengecek apakah user/maba telah discan lebih dari 5 kali
        if ($checkCount2 <= 5) {
            // mengecek apakan token unik || untuk cek apakah user/maba sudah pernah divote oleh ukm yang sama
            if ($checkCount >= 1){

                echo "<script>
                alert('Maba Sudah Pernah Anda Scan');
                window.location.href='/polling'
            </script>";

            }else {
                // upload data polling
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

