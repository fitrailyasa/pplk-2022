<?php
namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
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
        return view('client.scanner', compact('users'));
    }

    public function presensi(Request $request,  $id)
    {
        $check = Presensi::where('user_id', $id)->firstOrFail();
        $users = User::where('id', $id)->firstOrFail();

        if  ($users->nim == $request->input('nim')){

        $date = Date("m.d.y");
            if ($check->date != $date && $check == true) {
                 Presensi::create([
                    'user_id'=>$id,
                    'hari'=> $date,
                    'status'=>$request->input('status')
                ]);

                return "absen berhasil";
            }else {
            return "galat";
        }

    }
}

}
