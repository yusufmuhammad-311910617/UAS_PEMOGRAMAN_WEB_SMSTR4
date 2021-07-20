<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AntrianModel extends Model
{
    protected $table = "antrian";
 
    public function getAntrian($id = false)
    {
        if($id === false){
            $request = \Config\Services::request();
            $loktt = $request->uri->getSegment(3);
            return $this->table('antrian')
                        ->where('antrian_pelayanan_id', $loktt)
                        ->selectMax('antrian_id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('antrian_pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
     public function getAntrianstatus($id = false)
    {
        if($id === false){
            return $this->table('antrian')
                        ->where('antrian_status', 'berlansung')
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_status', 'berlansung')
                        ->where('antrian_pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

      public function getAntrianno($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('antrian_pelayanan_id', $id)
                        ->where('antrian_status', 'berlansung')
                        ->selectMin('antrian_id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('antrian_pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 



    public function getAntrianlast($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('antrian_status', 'berlansung')
                        ->selectMax('antrian_id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('antrian_pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_antrian($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_antrian($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['antrian_id' => $id]);
    } 

   public function delete_antrian($id)
    {
    return $this->db->table($this->table)->delete(['antrian_id' => $id]);
    } 

    public function update_antrian_data($data, $id)
    {
        $request = \Config\Services::request();
        $rr = $request->uri->getSegment(3);
   $this->db->table($this->table)->update($data, ['antrian_id' => $id]);
   return $this->db->query("UPDATE antrian SET antrian_status = 'berlansung' WHERE antrian_id = ( SELECT MIN(antrian_id) AS min FROM antrian WHERE antrian_pelayanan_id = (select antrian_pelayanan_id from antrian where antrian_id = '" .$id." ') and antrian_status = 'mengantri'   )");
    } 
}