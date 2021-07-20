<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AntrianModel;
 
class Antrianno extends Controller
{
 
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->antrian
        $this->antrian = new AntrianModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
 
    public function index()
    {
         $data['antrian4'] = $this->antrian->getAntrianno(4);
         $data['antrian5'] = $this->antrian->getAntrianno(5);
         $data['antrian6'] = $this->antrian->getAntrianno(6);
         $data['antrian7'] = $this->antrian->getAntrianno(7);
         $data['antrianlast'] = $this->antrian->getAntrianlast(7);
        echo view('antrianno/index', $data);
    } 
   	

	public function edite()
    {
  		 $data['antrian4'] = $this->antrian->getAntrianno(4);
         $data['antrian5'] = $this->antrian->getAntrianno(5);
         $data['antrian6'] = $this->antrian->getAntrianno(6);
         $data['antrian7'] = $this->antrian->getAntrianno(1);
        echo view('antrian/edit2', $data);
		
	}

    public function cek()
    {
         $data['antrianlast'] = $this->antrian->getAntrianlast(7);
        echo view('antrian/cek', $data);
        
    }
    


    


}