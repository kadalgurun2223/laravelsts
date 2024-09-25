<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function portofolio() {
        $ngaran = 'Project';
        return view('portofolio', [ 'ngaran' => $ngaran
        ]
    );
    }
}
