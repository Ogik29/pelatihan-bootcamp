<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function show($namaIsi)
    {
        $data = [
            'title' => 'Welcome',
            'isi' => $namaIsi
        ];
        return view('welcome', $data);
    }
}
