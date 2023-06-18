<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Halaman extends BaseController
{
    public function index()
    {
        $data['title'] = "Tetap Waspada";
        $data['judul_halaman'] = "Tetap Waspada Corona Masih ada";
        $data['isi_halaman']    = "Semoga Sehat selalu, Patuhi 5M";
        $data['gerakan5m'] = ['Memakai Masker', 'Mencuci tangan', 'Menjaga Jarak', 'Menjauhi Kerumunan', 'Membatasi Mobilitas'];

        #echo view("header", $data);
        echo view('konten/halaman', $data);
        #echo view('footer');
    }
}
