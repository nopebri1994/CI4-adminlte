<?php namespace App\Models;
use CodeIgniter\Model;

class Menu_model extends Model
{
	protected $table = 'tbl_menu';
	protected $allowedFields =['id_men','tipe','parent','child','nama_menu','icon','link'];

	public function getMenuTipe($id = false)
	{
		if($id === false){
			$this->orderBy('tipe','ASC');
			return $this->findAll();
		}else{
			return $this->getWhere(['id_menu' => $id]);
		}
	}

	public function getMenu($id = false)
	{
		if($id === false){
			$this->orderBy('urutan','ASC');
			return $this->findAll();
		}else{
			return $this->getWhere(['id_menu' => $id]);
		}
	}
	public function saveMenu($data)
	{
		$query = $this->db->table($this->table)->insert($data);

		$session = \Config\Services::session();
		$session->setFlashdata('sukses',1);

		return $query;
	}
	public function updateMenu($data,$id)
	{
		$query = $this->db->table($this->table)->update($data,array('id_menu' => $id));

		$session = \Config\Services::session();
		$session->setFlashdata('sukses',2);

		return $query;
	}
	public function deleteMenu($id)
	{
		$query = $this->db->table($this->table)->delete(array('id_menu' => $id));

		$session = \Config\Services::session();
		$session->setFlashdata('sukses',3);

		return $query;
	}

	public function getParent()
	{
		$this->select('*');
		$this->where(['tipe' => '0']);
		$this->orderBy('urutan','ASC');
		$query = $this->get();
		return $query->getResultArray();
	}

	public function getChild($tipe,$parent)
	{
		$this->select('*');
		$this->where(['tipe' => $tipe,'parent' => $parent]);
		$this->orderBy('urutan','ASC');
		$query = $this->get();
		return $query->getResultArray();
	}
	public function getgrandChild($tipe,$parent,$grandchild)
	{
		$this->select('*');
		$this->where(['tipe' => $tipe,'parent' => $parent,'child' => $grandchild]);
		$this->orderBy('urutan','ASC');
		$query = $this->get();
		return $query->getResultArray();
	}
}