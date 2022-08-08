<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukms = Ukm::all();
        return view('admin.ukm.index', compact('ukms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ukm.create');
    }


    public function show($id)
    {
        $ukm = Ukm::where('id', $id)->first();
        return view('admin.ukm.read', compact('ukm'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $Ukm
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $ukm = Ukm::where('id', $id)->first();
        return view('admin.ukm.update', compact('ukm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUkmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'qrCode' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
            'logo' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
            'dokumentasi1' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
            'dokumentasi2' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
            'dokumentasi3' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
        ]);

        $file = $validatedData[('qrCode')];
        $filename = time() . '_' . $file->getClientOriginalName();
        $location = '../public/assets/qrCodeUkm/';

        $file1 = $validatedData[('logo')];
        $filename1 = time() . '_' . $file1->getClientOriginalName();
        $location1 = '../public/assets/ukm/logo/';

        $file2 = $validatedData[('dokumentasi1')];
        $filename2 = time() . '_' . $file2->getClientOriginalName();
        $location2 = '../public/assets/ukm/dokumentasi1';

        $file3 = $validatedData[('dokumentasi2')];
        $filename3 = time() . '_' . $file3->getClientOriginalName();
        $location3 = '../public/assets/ukm/dokumentasi2';

        $file4 = $validatedData[('dokumentasi3')];
        $filename4 = time() . '_' . $file4->getClientOriginalName();
        $location4 = '../public/assets/ukm/dokumentasi3';


        Ukm::create([
            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'pembina' => $request->pembina,
            'ketuaUmum' => $request->ketuaUmum,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo'  => $filename1,
            'filosofiLogo' => $request->filosofiLogo,
            'qrCode' => $filename,
            'deskripsi' => $request->deskripsi,
            'dokumentasi1'  => $filename2,
            'dokumentasi2'  => $filename3,
            'dokumentasi3'  => $filename4,
        ]);

        // Upload file
        $file->move($location, $filename);
        $file1->move($location1, $filename1);
        $file2->move($location2, $filename2);
        $file3->move($location3, $filename3);
        $file4->move($location4, $filename4);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/ukm')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/ukm')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 4) {
            return redirect('ukms/ukm')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUkmRequest  $request
     * @param  \App\Models\Ukm  $Ukm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ukm = Ukm::where('id', $id)->first();
        $ukm->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'pembina' => $request->pembina,
                'ketuaUmum' => $request->ketuaUmum,
                'tahunBerdiri' => $request->tahunBerdiri,
                'filosofiLogo' => $request->filosofiLogo,
                'deskripsi' => $request->deskripsi,
                'dokumentasi1'  => $request->dokumentasi1,
                'dokumentasi2'  => $request->dokumentasi2,
                'dokumentasi3'  => $request->dokumentasi3,
            ]
        );

        if ($request->hasFile('qrCode')) { {

                $validatedData = $request->validate([
                    'qrCode' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
                ]);

                $file = $validatedData[('qrCode')];

                $ukms = Ukm::find($id);
                $ukms->qrCode = time() . '_' . $file->getClientOriginalName();
                $ukms->update();
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = '../public/assets/qrCodeUkm/';

                // Upload file
                $file->move($location, $filename);
            }

            if ($request->hasFile('logo')) {
                $validatedData = $request->validate([
                    'qrCode' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
                ]);

                $file = $validatedData[('logo')];

                $ukms = Ukm::find($id);
                $ukms->logo = time() . '_' . $file->getClientOriginalName();
                $ukms->update();
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = '../public/assets/ukm/logo/';

                // Upload file
                $file->move($location, $filename);
            }

            if ($request->hasFile('dokumentasi1')) {
                $validatedData = $request->validate([
                    'dokumentasi1' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
                ]);

                $file = $validatedData[('dokumentasi1')];

                $ukms = Ukm::find($id);
                $ukms->dokumentasi1 = time() . '_' . $file->getClientOriginalName();
                $ukms->update();
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = '../public/assets/ukm/dokumentasi1';

                // Upload file
                $file->move($location, $filename);
            }

            if ($request->hasFile('dokumentasi2')) {
                $validatedData = $request->validate([
                    'dokumentasi2' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
                ]);

                $file = $validatedData[('dokumentasi2')];

                $ukms = Ukm::find($id);
                $ukms->dokumentasi2 = time() . '_' . $file->getClientOriginalName();
                $ukms->update();
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = '../public/assets/ukm/dokumentasi2';

                // Upload file
                $file->move($location, $filename);
            }

            if ($request->hasFile('dokumentasi3')) {
                $validatedData = $request->validate([
                    'dokumentasi3' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:5120 ',
                ]);

                $file = $validatedData[('dokumentasi3')];

                $ukms = Ukm::find($id);
                $ukms->dokumentasi3 = time() . '_' . $file->getClientOriginalName();
                $ukms->update();
                $filename = time() . '_' . $file->getClientOriginalName();

                // File upload location
                $location = '../public/assets/ukm/dokumentasi3';

                // Upload file
                $file->move($location, $filename);
            }

            if (auth()->user()->roles_id == 1) {
                return redirect('super/ukm')->with('sukses', 'Berhasil Edit Data!');
            } elseif (auth()->user()->roles_id == 2) {
                return redirect('admin/ukm')->with('sukses', 'Berhasil Edit Data!');
            } elseif (auth()->user()->roles_id == 4) {
                return redirect('ukms/ukm')->with('sukses', 'Berhasil Edit Data!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ukm::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/ukm')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/ukm')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 4) {
            return redirect('ukms/ukm')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
