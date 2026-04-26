<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = [
            'alamat' => 'Jl. Merdeka No. 10, Pontianak',
            'telepon' => '0812-3456-7890',
            'email' => 'kontak@example.com'
        ];

        return view('kontak', compact('kontak'));
    }

    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'pesan' => 'required|string|max:500',
        ]);

        // Simulasi simpan pesan (nanti bisa ke database)
        // Untuk sekarang cukup kirim notifikasi sukses
        return back()->with('success', "Pesan dari {$request->nama} berhasil dikirim!");
    }
}
