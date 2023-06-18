<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        return view('siswa');
    }

    //bisa diakses oleh browser
    function siswa_detail($kelas, $idsiswa)
    {
        echo "<h1>Saya fungsi siswa detail kelas $kelas id $idsiswa</h1>";
    }
}
