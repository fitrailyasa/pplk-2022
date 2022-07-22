<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namaSingkat'=>['string'],
            'namaLengkap'=>['string'],
            'visi'=>['string','nullable'],
            'misi'=>['string','nullable'],
            'deskrisi'=>['string','nullable'],
            'tahunBerdiri'=>['integer','nullable'],
            'logo'=>['string','nullable'],
            'filosogiLogo'=>['string','nullable'],
            //UKM
            'pembina'=>['string','nullable'],
            'ketuaUmum'=>['string','nullable'],
            'qrCode'=>['string','nullable'],
            'dokumentasi1'=>['string','nullable'],
            'dokumentasi2'=>['string','nullable'],
            'dokumentasi3'=>['string','nullable'],
            //Prodi
            'kepalaProdi'=>['string','nullable'],
            'akreditas'=>['string','nullable'],
            'ruangProdi'=>['string','nullable'],
            'jumlahMahasiswa'=>['integer','nullable'],
            //
        
        // ]);
        // Begalin::create([
        //     'isi'=>$request->isi,
        //     'judul'=>$request->judul
        // ]);




        // Senat::create([
        //     'ketua'=>$request->ketua,
        //     'deskripsi'=>$request->deskripsi,
        //     'website'=>$request->website,
        //     'youtube'=>$request->youtube,
        //     'instagram'=>$request->instagram
        // ]);


            // $table->string('kepalaProdi')->nullable();
            // $table->string('akreditasi')->nullable();
            // $table->integer('tahunBerdiri')->nullable();
            // $table->string('ruangProdi')->nullable();
            // $table->integer('jumlahMahasiswa')->nullable();
            // $table->string('Logo')->nullable();

            // $table->string('pembina')->nullable();
            // $table->string('ketuaUmum')->nullable();
            // $table->integer('tahunBerdiri')->nullable();
            // $table->string('logo')->nullable();
            // $table->text('filosofiLogo')->nullable();
            // $table->string('qrCode')->nullable();
            // $table->string('dokumentasi1')->nullable();
            // $table->string('dokumentasi2')->nullable();
            // $table->string('dokumentasi3')->nullable();
            
        ];
    }
}
