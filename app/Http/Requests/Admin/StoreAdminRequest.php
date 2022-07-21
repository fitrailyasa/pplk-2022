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
            // 'namaLengkap'=>['string'],
            // 'namaSingkat'=>['string'],
            // 'visi'=>['string'],
            // 'misi'=>['string'],
            // 'pembina'=>['string'],
            // 'ketuaUmum'=>['string'],
            // 'tahunBerdiri'=>['integer'],
            // 'logo'=>['string'],
            // 'filosogiLogo'=>['string'],
            // //UKM
            // 'qrCode'=>['string'],
            // 'deskripsi'=>['string'],
            // 'dokumentasi1'=>['string'],
            // 'dokumentasi2'=>['string'],
            // 'dokumentasi3'=>['string'],
            // //Prodi
            // 'kepalaProdi'=>['string','nullable'],
            // 'akreditas'=>['string','nullable'],
            // 'ruangProdi'=>['string','nullable'],
            // 'jumlahMahasiswa'=>['integer','nullable'],
            //Begalin & Funfact
            'judul'=>['string'],
            'isi'=>['string'],
            //Senat
            'ketua'=>['string'],
            'deskripsi'=>['string'],
            'website'=>['string'],
            'yputube'=>['string'],
            'instagram'=>['string'],
            //Himpunan
            'kodeWarna'=>['string'],
            'ketuaHimpunan'=>['string']


        


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
