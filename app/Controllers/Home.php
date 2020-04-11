<?php namespace App\Controllers;
	  use CodeIgniter\Controller;
	  use App\Models\Menu_model;

class Home extends Controller 
{
	public function index()
	{
		$model = new Menu_model();
		$temp['title']="Master CMS";
		$temp['t_header'] = 'Dashboard';
		$temp['desc'] = 'Description';
		$temp['menu'] = $model->getMenu();
		$temp['bred'] = '</i> Home</a></li><li class="active">Here</li>';
		$temp['contents']= view('home_view');
		return view('template_view',$temp);
	}

	//--------------------------------------------------------------------

}
