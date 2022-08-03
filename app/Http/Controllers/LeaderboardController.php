<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Leaderboard;
use App\Http\Requests\StoreLeaderboardRequest;
use App\Http\Requests\UpdateLeaderboardRequest;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderboards = DB::table('leaderboards')
        ->orderByRaw('score DESC')
        ->get()
        ->take(10);

        $juara1 = DB::table('leaderboards')
        ->orderByRaw('score DESC')
        ->get()
        ->take(1);

        foreach ($juara1 as $b)
            {
                $c =  $b->score;
            }

        $juara2 = DB::table('leaderboards')
        ->where('score', '<' , $c)
        ->orderByRaw('score DESC')
        ->get()
        ->take(1);

        foreach ($juara2 as $j)
        {
            $p =  $j->score;
        }

        $juara3 = DB::table('leaderboards')
        ->where('score', '<' , $p)
        ->orderByRaw('score DESC')
        ->get()
        ->take(1);

        return view('client.games.games', compact('leaderboards','juara1','juara2','juara3'));
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
     * @param  \App\Http\Requests\StoreLeaderboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaderboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function show(Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaderboardRequest  $request
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaderboardRequest $request, Leaderboard $leaderboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaderboard $leaderboard)
    {
        //
    }
}
