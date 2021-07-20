<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AntrianModel;

class Antrian extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class ProductModel menggunakan $this->antrian
        $this->antrian = new AntrianModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

    public function index()
    {
        return view('antrian/index');
    }


    public function edite()
    {
        $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/edit2', $data);
    }



    public function cs()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke tablehttps://codeigniter.com/user_guide/database/index.html
        $data = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'mengantri',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '4',
            'antrian_loket_id' => '1'
        ];

        $dataaa = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'berlansung',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '4',
            'antrian_loket_id' => '1'
        ];
        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('4');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }




        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('antrian/antrian', $data);
        }
    }


    public function pg()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'mengantri',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '5',
            'antrian_loket_id' => '1'
        ];

        $dataaa = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'berlansung',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '5',
            'antrian_loket_id' => '1'
        ];


        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('5');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }


        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('antrian/antrian', $data);
        }
    }


    public function pb()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'mengantri',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '6',
            'antrian_loket_id' => '1'
        ];

        $dataaa = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'berlansung',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '6',
            'antrian_loket_id' => '1'
        ];



        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('6');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }

        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('antrian/antrian', $data);
        }
    }


    public function png()
    {
        // Mengambil value dari form dengan method POST

        $oke =  date('y-m-d H:i:s');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'mengantri',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '7',
            'antrian_loket_id' => '1'
        ];
        $dataaa = [
            'antrian_tanggal' =>  $oke,
            'antrian_status' => 'berlansung',
            'antrian_waktu_panggil' => null,
            'antrian_waktu_selesai' => null,
            'antrian_pelayanan_id' => '7',
            'antrian_loket_id' => '1'
        ];


        $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('7');
        if ($dataa['antrianstatus'] != null) {
            $simpan = $this->antrian->insert_antrian($data);
        } else {
            $simpan = $this->antrian->insert_antrian($dataaa);
        }


        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
            $data['antrian'] = $this->antrian->getAntrian();
            echo view('antrian/antrian', $data);
        }
    }
}
