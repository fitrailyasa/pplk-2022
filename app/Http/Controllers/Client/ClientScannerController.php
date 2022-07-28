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
        return view('client.scannerPresensi', compact('users'));
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
                    return "galat";
                }else {
                    Presensi::create([
                        'user_id'=>$id,
                        'status'=>$request->input('status'),
                        'hari'=>$date,
                        'token' => $token

                    ]);
                }

        }
}

}
