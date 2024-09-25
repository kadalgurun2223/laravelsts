<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $name = 'Hubungi Saya';
        return view('contact', [ 'name' => $name
        ]
    );
    }
}
