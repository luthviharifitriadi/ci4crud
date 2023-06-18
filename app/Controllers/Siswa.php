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
        $this->validasi();
    }

    //tidak bisa diakses langsung oleh browser
    protected function  validasi()
    {
        echo "saya adalah fungsi protected untuk validasi";
    }
}
