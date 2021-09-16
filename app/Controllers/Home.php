<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function fungsiBaru($nama, $npm){
		echo"hello $nama";
		echo"<br> $npm";
	}


}
