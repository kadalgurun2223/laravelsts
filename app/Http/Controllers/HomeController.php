<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $nama = 'Moch Fadilah Rifaldi';
        return view('home', [ 'nama' => $nama
        ]
    );
    }
}
