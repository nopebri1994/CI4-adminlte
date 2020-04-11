<?php namespace App\Controllers;
	use CodeIgniter\Controller;
	use App\Models\Menu_model;
	$uri = new \CodeIgniter\HTTP\URI();
	

class Menu extends Controller
{
	public function index()
	{
		$model = new Menu_model();
		$data['menu'] = $model->getMenuTipe();
		$temp['title'] = 'Manajemen Menu';
		$temp['t_header'] = 'Manajemen Menu';
		$temp['desc'] = 'Description';
		$temp['bred'] = '</i> Setting</a></li><li> Manajemen Menu</li><li class="active">Here</li>';
		$temp['contents'] = view('menu/menu_view', $data);
		return view('template_view',$temp);
	}
	
	public function save()
	{
		$model = new Menu_model();
		$data = array(
			'nama_menu'  => $this->request->getPost('nama_menu'),
			'icon'		 => $this->request->getPost('icon'),
			'link'		 => $this->request->getPost('link'),
			'tipe'		 => $this->request->getPost('tipe'),
			'parent'	 => $this->request->getPost('parent'),
			'child'		 => $this->request->getPost('child'),
		);
		$model->saveMenu($data);
		return redirect()->to('/menu');
	}

	//get data 1 row 
	  public function edit($id)
    {
        $model = new Menu_model();
        $data['menu'] = $model->getMenu($id)->getRow();
		echo view('menu/edit_menu', $data);
		//$menu->nama_menu (view row) //
	}
	//end
 
    public function update()
    {
        $model = new Menu_model();
        $id = $this->request->getPost('id');
        $data = array(
			'nama_menu'  => $this->request->getPost('nama_menu'),
			'icon'		 => $this->request->getPost('icon'),
			'link'		 => $this->request->getPost('link'),
			'urutan'	 => $this->request->getPost('urutan'),
        );
        $model->updateMenu($data, $id);
        return redirect()->to('/menu');
    }
	public function hapus()
    {
		$id = $this->request->getPost('deletid');
        $model = new Menu_model();
        $model->deleteMenu($id);
        return redirect()->to('/menu');
	}
	 
	function getparent()
	{
		$model = new Menu_model();
        $data = $model->getParent();
		foreach($data as $d):
			echo "<option>";
			echo $d['nama_menu'];
			echo "</option>";
		endforeach;
	}
	function getchild()
	{
		$model = new Menu_model();
		$tipe='1';
		$parent = $this->request->getGet('parent');
		$data = $model->getChild($tipe,$parent);
		
		foreach($data as $d):
			echo "<option>";
			echo $d['nama_menu'];
			echo "</option>";
		endforeach;
	}
}
