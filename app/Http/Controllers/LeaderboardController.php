<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Leaderboard;
use App\Http\Requests\StoreLeaderboardRequest;
use App\Http\Requests\UpdateLeaderboardRequest;

/**
 * Controller leader Board
 * Dev by   *Ibnu Prayogi
 *          *KhalilFaza
 *
 * PPLK 2022 Ardhames
 */

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengirim data 11 besar di leaderboard
        $leaderboards = DB::table('leaderboards')
        ->orderByRaw('score DESC')
        ->get()
        ->take(11);
        return view('client.games.games', compact('leaderboards'));
    }

}
