<?php

namespace App\Controllers;

use App\Models\ModelHalaman;
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

    //CRUD : Create, Read, Update, Delete
    public function create()
    {   
        $halamanModel = new ModelHalaman();
        $rules = $this->validate([
            'halaman_judul' => 'required',
            'halaman_isi'   => 'required',
        ]);

        if($rules){
            $halamanModel->insert([
                "halaman_judul" => $this->request->getPost('halaman_judul'),
                "halaman_isi"   => $this->request->getPost('halaman_isi'), 
            ]);
            redirect('halaman/create','refresh');
        }

        $data['title']  = "Memasukan data baru";
        echo view("konten/halaman_create", $data);
    }

    public function read()
    {
        $halamanModel = new ModelHalaman();

        $data['title'] = "Menampilkan Data Baru";
        $data['halaman_isi'] = $halamanModel->findAll();
        echo view('konten/halaman_read', $data);
        
    }
}
