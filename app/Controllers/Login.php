<?php namespace App\Controllers;
	  use CodeIgniter\Controller;
	  
class Login extends Controller 
{
	public function index()
	{
		$temp['title']="Halaman Login";
		return view('template/template_login',$temp);
	}
	
}
