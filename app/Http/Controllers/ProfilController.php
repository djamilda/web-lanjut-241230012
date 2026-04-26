<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data profil bisa diambil dari database, untuk latihan kita hardcode dulu
        $data = [
            'nama' => 'Djamilda amanda putri fadlina',
            'nim' => '241230012',
            'jurusan' => 'Sistem Informasi',
            'email' => 'djamilda.amanda@example.com'
        ];

        return view('profil', compact('data'));
    }
}
