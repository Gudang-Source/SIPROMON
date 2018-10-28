<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "user";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('user.*,satker.name as satker');
		$this->db->from($this->tableName);
		$this->db->join('satker','user.satker_id = satker.id');
		$this->db->order_by('id','DESC');

		return $this->db->get();
	}
	public function check($username,$password){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		return $this->db->get();
	}
	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		// $this->db->join('satker','user.satker_id = satker.id');
		$this->db->where('user.id',$id);

		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);

		return $this->db->insert_id();
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}
}
