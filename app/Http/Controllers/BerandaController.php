<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('user.beranda', [
            'tittle' => 'Beranda',
        ]);
    }

    public function admin()
    {
        return view('admin.beranda', [
            'tittle' => 'Beranda',
        ]);
    }
}
