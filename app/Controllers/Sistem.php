<?php namespace App\Controllers;
	use CodeIgniter\Controller;
	use App\Models\Menu_model;
	use App\Models\Sistem_model;
	$uri = new \CodeIgniter\HTTP\URI();
	
class Sistem extends Controller
{
	public function index()
	{
		$model				= new Menu_model();
		$model_setting 		= new Sistem_model();
		$data['menu'] 		= $model->getMenuTipe();
		$data['setting'] 	= $model_setting->getSistemone(1);
		$temp['title'] 		= 'Pengaturan Sistem';
		$temp['t_header'] 	= 'Pengaturan Sistem';
		$temp['desc'] 		= 'Description';
		$temp['bred'] 		= '</i> Setting</a></li><li>Pengaturan Sistem</li><li class="active">Here</li>';
		$temp['contents'] 	= view('sistem/sistem_view',$data);
		return view('template_view',$temp);
	}
	public function save()
	{
		$model = new Sistem_model();
		$data=array(
			'id_setting'	 	 => 1,
			'nama_pengguna'		 => $this->request->getPost('nama_pengguna'),
			'description'		 => $this->request->getPost('deskripsi'),
			'nama_program'		 => $this->request->getPost('nama_program'),
			'singkatan_program'	 => $this->request->getPost('singkatan'),
			'no_telp'			 => $this->request->getPost('no_telepon'),
		);
		$model->saveSetting($data);
		return redirect()->to('/Sistem');
	}
	public function update()
	{
		$model = new Sistem_model();
		$data=array(
			'id_setting'	 	 => 1,
			'nama_pengguna'		 => $this->request->getPost('nama_pengguna'),
			'description'		 => $this->request->getPost('deskripsi'),
			'nama_program'		 => $this->request->getPost('nama_program'),
			'singkatan_program'	 => $this->request->getPost('singkatan'),
			'no_telp'			 => $this->request->getPost('no_telepon'),
		);
		$model->updateSetting($data);
		return redirect()->to('/Sistem');
	}
}
