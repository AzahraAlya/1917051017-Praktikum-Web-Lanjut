<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminPostsController extends BaseController
{
	public function index()
	{
		$PostModel = model("PostModel");
		$data =[
			'posts' => $PostModel->findAll()
		];
		return view('posts/index',$data);
	}
	public function create()
	{
		session();
		$data =[
			'validation' => \Config\Services::validation(),
		];
		return view('posts/create', $data);
	}
	public function store()
	{
		$request = \Config\Services::request();
		$valid = $this->validate([
			"judul" =>[
				"label" => "judul",
				"rules" => "required",
				"errors" =>[
					"required" => "{field} Harus Diisi!"
				]
				],
			"slug" =>[
				"label" => "Slug",
				"rules" => "required|is_unique[posts.slug]",
				"errors" =>[
				"required" => "{field} Harus Diisi!",
				"is_unique" => "{field} Sudah ada!",
				]
			],
			"kategori" =>[
				"label" => "Kategori",
				"rules" => "required",
				"errors" =>[
					"required" => "{field} Harus Diisi!"
				]
			],
			"author" =>[
				"label" => "Author",
				"rules" => "required",
				"errors" =>[
					"required" => "{field} Harus Diisi!"
				]
			],
			"deskripsi" =>[
				"label" => "Deskripsi",
				"rules" => "required",
				"errors" =>[
					"required" => "{field} Harus Diisi!"
				]
			],

		]);

		if($valid){

			$data =[
				'judul' => $request->getVar('judul'),
				'slug' => $request->getVar('slug'),
				'kategori' => $request->getVar('kategori'),
				'author' => $request->getVar('author'),
				'deskripsi' => $request->getVar('deskripsi'),
			];

			$PostModel = model("PostModel");
			$PostModel->insert($data);
			return redirect()->to(base_url('admin/posts'));
		}else{
			return redirect()->to(base_url('admin/posts/create'))->withInput()->with('validation',$this->validator);
		}
	}

	public function delete($post_id){
		$PostModel = model("PostModel");
		$PostModel->delete($post_id);
		// session()->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to(base_url('admin/posts'));
	}

	public function edit($slug){
		$PostModel = model("PostModel");
	
		$data =[
			// 'posts' => $PostModel->findAll(),
			'title' => 'Form Update', 
			'validation' => \Config\Services::validation(),
			'post' => $PostModel->getPost($slug)
			
		];
		
		return view('posts/edit', $data); 
	}

	public function update($post_id){

		$PostModel = model("PostModel");		
		$request = \Config\Services::request();

		// $slug = url_title($request->getVar('judul'), '-', true);
			$PostModel->save([
			'post_id' => $post_id,
			'judul' => $request->getVar('judul'),
			'slug' => $request->getVar('slug'),
			// 'slug' => $slug,
			'kategori' => $request->getVar('kategori'),
			'author' => $request->getVar('author'),
			'deskripsi' => $request->getVar('deskripsi'),
		]);

		return redirect()->to(base_url('admin/posts'));
		
		
	

		
		
	}
}