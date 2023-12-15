<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Rian Kurniawan";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "3 Juli 2001";
        $data_array = array(
            "nama" => array(
                "Rian", "Ryan", "Rayen",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}