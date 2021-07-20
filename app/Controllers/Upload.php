<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelsUpload;

class Upload extends BaseController
{
    public function index()
    {
        helper('form');
        $model = new ModelsUpload();
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['gambar'] = $model->getGambar();
            echo view('upload/index.php', $data);
        }
    }
    public function proses()
    {
        $model = new ModelsUpload();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('upload');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
            $data = array(
                'judul'  => $this->request->getPost('judul'),
                'gambar' => $upload->getName()
            );
            $model->simpan_gambar($data);
            return redirect()->to('./upload')->with('berhasil', 'Data Berhasil di Simpan');
        }
    }
}
