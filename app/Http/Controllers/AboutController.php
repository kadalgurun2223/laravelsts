<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $nami = 'Nama';
        return view('about', [ 'nami' => $nami
        ]
    );
    }
}
