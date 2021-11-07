<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{

	protected $table                = 'posts';
	protected $primaryKey           = 'post_id';
	protected $allowedFields        = ['judul','deskripsi', 'gambar', 'author', 'kategori','slug','created_at','updated_at'];
	protected $useTimestamps        = true;

	public function getPost($slug=false){
		
		if ($slug == false){
			return $this->findAll();
		}

		return $this->where(['slug'=> $slug]) -> first();
		
	}
	// function ambildata($id){
	// 	return $this->db->table('posts')->getWhere(['post_id' => $id]);
	// }

	// public function edit($id){
    //     return $this->db->table('posts')->getWhere(['post_id' => $id]);
    // }

    // public function update_data($id , $data){
	// 	return $this->db->table('posts')->update($data, ['post_id' => $id]);
    // }


	
}
