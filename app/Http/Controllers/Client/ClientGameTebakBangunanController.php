<?php

namespace App\Http\Controllers\Client;

use App\Models\Tebak_bangunan;
use App\Models\TokenTebakBangunan;
use App\Http\Requests\StoreTebak_bangunanRequest;
use App\Http\Requests\UpdateTebak_bangunanRequest;
use App\Models\ScoreTebakBangunan;

class ClientGameTebakBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals=Tebak_bangunan::all();
        return view('client.games.tebak-bangunan.home',compact('soals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTebak_bangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,$jawaban)
    {
        $soal=Tebak_bangunan::where('id',$id)->get()->first();

        $userid= auth()->user()->id;
        $kelompok=auth()->user()->kelompok;
        
        $jawaban_benar=$soal->jawabanBenar;
        

        if($jawaban_benar == $jawaban){
            $token=$userid.$soal->namaBangunan;
            $check=TokenTebakBangunan::where('token',$token)->get();
            $jumlahToken=$check->count();
            if($jumlahToken==0){
                TokenTebakBangunan::create([
                    'user_id'=>$userid,
                    'token'=>$token,
                    'kelompok'=>$kelompok
                ]);
                $player=ScoreTebakBangunan::where('id',$userid)->get()->first();
                $player->score=$player->score+1;
                $player->update(['score'=>$player->score]);

                return 'Jawaban Benar';
            }
            else{
                $token=TokenTebakBangunan::where('token',$token)->get()->first();
                $token->delete();
                return'kode sudah digunakan';
            }
            
        }
        else{
            return 'Jawaban salah';
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal=Tebak_bangunan::where('id',$id)->get()->first();
        return view('client.games.tebak-bangunan.game',compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tebak_bangunan $tebak_bangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTebak_bangunanRequest  $request
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTebak_bangunanRequest $request, Tebak_bangunan $tebak_bangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tebak_bangunan $tebak_bangunan)
    {
        //
    }
}
