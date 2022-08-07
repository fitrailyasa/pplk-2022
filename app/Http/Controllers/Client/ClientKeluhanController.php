<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Keluhan;

/**
 * Controller Form Keluhan
 * Dev by KhalilFaza
 * PPLK 2022 Ardhames
 */

class ClientKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where( 'id', auth()->user()->id )->firstOrFail();
        return view('client.form-keluhan', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id )
    {
        // memvalidasi file bukti harus berupa gambar
        $validatedData = $request->validate([
            'bukti' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
           ]);

        $file = $validatedData[('bukti')];
        $filename = time().'_'.$file->getClientOriginalName();
        // File upload location
        $location = '../public/assets/buktiKeluhan/';

        $nim = $request->input('nim');
        $kelompok = $request->input('kelompok');
        $keluhan = $request->input('keluhan');

        // mengisi table keluhan
        Keluhan::create([
            'userid' => $id,
           'nim' => $nim,
           'kelompok' => $kelompok,
           'keluhan' => $keluhan,
           'bukti' => $filename

        ]);

        // Upload file
        $file->move($location,$filename);

        echo "<script>
        alert('Keluhan Anda sudah Terkirim ke Kedisiplinan');
        window.location.href='/form-keluhan'
        </script>";
    }
}
