<?php namespace App\Controllers;
	use CodeIgniter\Controller;
	use App\Models\Menu_model;
	$uri = new \CodeIgniter\HTTP\URI();
	
class Sistem extends Controller
{
	public function index()
	{
		$model = new Menu_model();
		$data['menu'] = $model->getMenuTipe();
		$temp['title'] = 'Pengaturan Sistem';
		$temp['t_header'] = 'Pengaturan Sistem';
		$temp['desc'] = 'Description';
		$temp['bred'] = '</i> Setting</a></li><li>Pengaturan Sistem</li><li class="active">Here</li>';
		$temp['contents'] = view('sistem/sistem_view',$data);
		return view('template_view',$temp);
	}
	
}
