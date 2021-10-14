<?php

namespace App\Controllers;

class AdminPostsController extends BaseController
{
	public function index(){
        return view('posts/index');
    }

    public function create()
	{
		return view("posts/create");
	}

}