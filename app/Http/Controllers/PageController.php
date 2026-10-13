<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about', [
            'judul' => 'Tentang Kami',
            'deskripsi' => 'Website ini dibuat menggunakan framework Laravel.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'email' => 'admin@example.com',
            'telepon' => '081234567890'
        ]);
    }

    public function hello($nama)
    {
        return view('hello', compact('nama'));
    }
}
