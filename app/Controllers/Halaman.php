<?php

namespace App\Controllers;

use App\Models\ModelHalaman;
use App\Models\ModelKustom;
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

    public function halaman_update($id)
    {
        $halamanModel = new ModelHalaman();

         $rules = $this->validate([
            'halaman_judul' => 'required',
            'halaman_isi'   => 'required',
        ]);

        if($rules){
            $halamanModel->update($id,[
               
                "halaman_judul" => $this->request->getPost('halaman_judul'),
                "halaman_isi"   => $this->request->getPost('halaman_isi'), 
            ]);
            return redirect('halaman/read','refresh');
        }
        $data['title'] = "Menlakukan update data";
        $data['halaman_isi'] = $halamanModel->find($id);
        echo view('konten/halaman_update', $data);
    }

    public function delete($id){
        $halamanModel = new ModelHalaman();
        $halamanModel->delete($id);
        return redirect('halaman/read');
    }

    public function halaman_cek(){
        $halamankustom = new ModelKustom();
        $data = $halamankustom->getData();
        print_r($data);
    }


    public function halaman_form_validasi()
    {
        $data = [
            'error' => null
        ];
        if($this->request->getMethod() == 'post'){
            //var_dump($this->request->getVar());
            $nama = $this->request->getVar('nama');
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $konfirmasi_password = $this->request->getVar('konfirmasi_password');

            $validation = \Config\Services::validation();

            $aturan = [
                "nama"  => [
                    'label' => "Nama",
                    "rules" => "required|min_length[5]",
                    "errors" => [
                        'required' => "{field} harus diisikan",
                        'min_length' => "{field} harus berukuran setidaknya 5 karakter"
                    ],
                ],
                "email"  => [
                    'label' => "Email",
                    "rules" => "required|valid_email",
                    "errors" => [
                        'required' => "{field} harus diisikan",
                        'valid_email' => "Alamat Email Tidak Valid"
                    ],
                ],
                "password"  => [
                    'label' => "password",
                    "rules" => "required",
                    "errors" => [
                        'required' => "{field} harus diisikan",
                    ],
                ],
                "konfirmasi_password"  => [
                    'label' => "Konfirmasi password",
                    "rules" => "required|matches[password]",
                    "errors" => [
                        'required' => "{field} harus diisikan",
                        'matches'  => "konfirmasi Password tidak sesuai dengan password"
                    ],
                ],
            ];

            $validation->setRules($aturan);
            if($validation->withRequest($this->request)->run()){
                //true
                //echo "<h1>Tidak ada kendala</h1>";
                session()->setFlashdata('sukses', 'berhasil melakukan validasi data');
                return redirect()->back();
            }else{
                //false
                $error = $validation->getErrors();
                //$data['error'] = $error;
                session()->setFlashdata('error', $error);
                return redirect()->back()->withInput();
                
                //echo "<h1>Ada Kendala</h1>";
            }
        }
        echo view("konten/halaman_form_validasi", $data);
    }
}
