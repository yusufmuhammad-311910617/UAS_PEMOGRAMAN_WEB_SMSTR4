<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PelayananModel extends Model
{
    protected $table = "pelayanan";
 
    public function getPelayanan($id = false)
    {
        if($id === false){
            return $this->table('pelayanan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('pelayanan')
                        ->where('pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_pelayanan($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_pelayanan($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['pelayanan_id' => $id]);
    } 

   public function delete_pelayanan($id)
    {
    return $this->db->table($this->table)->delete(['pelayanan_id' => $id]);
    } 
}