<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

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


    public function view_terima()
    {
        return view('home.terima-servis');
    }

    public function view_proses()
    {
        return view('home.proses-servis');
    }

    public function view_ambil()
    {
        return view('home.bisa-diambil');
    }

    public function view_sudahambil()
    {
        return view('home.sudah-diambil');
    }

    public function view_report()
    {
        return view('home.report');
    }
}
