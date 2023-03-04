<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(auth()->guest()){
            abort(403);
        };

        $is_admin=Auth::user()->is_admin;

        if($is_admin=='1')
        {
            return view('home.adminDashboard');
        }
        else
        {
            return view('dashboard');
        }
    }

    public function register()
    {
        $this->authorize('register');
        return view('auth.register');
    }

    public function view_account()
    {
        $is_admin=Auth::user()->is_admin;

        if($is_admin=='1')
        {
            return view('home.accountTable');
        }
        else
        {
            abort(403, 'Unauthorized action');
        }
    }

    public function view_profit()
    {
        return view('home.profit');
    }
}