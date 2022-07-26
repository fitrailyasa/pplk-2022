<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController 
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    protected $redirectTo;
    
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function redirectTo()
    {
        
        switch(auth()->user()->roles_id){
            case 1:
                $this->redirectTo = '/superAdmin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/himpunan';
                return $this->redirectTo;
                break;
            case 4:
                $this->redirectTo = '/ukm';
                return $this->redirectTo;
                break;
            case 5:
                $this->redirectTo = '/kedisiplinan';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/dapmen';
                return $this->redirectTo;
                break;
            case 7:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
                break;
            case 8:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/beranda';
                return $this->redirectTo;
        }
        
       
    }
    
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
