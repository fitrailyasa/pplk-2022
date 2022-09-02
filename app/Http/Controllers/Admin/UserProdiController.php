<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use App\Models\Presensi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $prodi = auth()->user()->prodi;
        $users = User::where('prodi', $prodi )->get();
        return view('admin.user.index', compact('users'));
    }

}
