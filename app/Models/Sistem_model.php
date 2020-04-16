<?php namespace App\Models;
use CodeIgniter\Model;

class Sistem_model extends Model
{
	protected $table = 'tbl_setting';

	public function getSistem($id = false)
	{
		if($id === false){
			return $this->findAll();
		}else{
			return $this->getWhere(['id_setting' => $id]);
		}
	}

    public function getSistemone($id)
	{	
            $this->select('*');
            $this->getWhere(['id_setting' => $id]);
            $query = $this->get();
            return $query->getRow();
    }
    
	public function saveSetting($data)
	{
		$query = $this->db->table($this->table)->insert($data);

		$session = \Config\Services::session();
		$session->setFlashdata('sukses',1);
		return $query;
	}
    public function updateSetting($data)
	{
		$query = $this->db->table($this->table)->update($data,array('id_setting' => 1));

		$session = \Config\Services::session();
        $session->setFlashdata('sukses',2);
        
		return $query;
	}
}