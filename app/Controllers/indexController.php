<?php namespace App\Controllers;

class indexController extends BaseController
{
	public function index()
	{
		
	

		return view('index');
		//echo "<h1>Esta en el area de contacto</h1>";
	}


    public function actores() {
		return view('actores');
	}
	public function dorama() {
		return view('dorama');
	}
	public function ost() {
		return view('ost');
	}
	public function pelis() {
		return view('pelis');
	}



	


	
	//--------------------------------------------------------------------

}
