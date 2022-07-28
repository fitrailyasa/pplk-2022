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
            $users = User::where('id', $id)->firstOrFail();
            $date = Date("m.d.y");
            $token = "$id"."$date";
            if  ($users->nim == $request->input('nim')){
                    Presensi::create([
                        'user_id'=>$id,
                        'status'=>$request->input('status'),
                        'hari'=>$date,
                        'token' => $token
                    ]);
            }
    }

}
