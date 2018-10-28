<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKegiatan extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "kegiatan";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);
		
		return $this->db->get();
	}

	public function selectByUserId($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('user_id',$id);

		return $this->db->get();
	}	
	public function selectAllKegiatan(){
		$this->db->select('kegiatan.*,user.fullname as konseptor,employee.name as pemeriksa,satker.name as satuankerja');
		$this->db->from($this->tableName);
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
		$this->db->join('roles','roles.id = satker.roles_id');
		$this->db->join('employee','employee.id = roles.employee_id');

		return $this->db->get();
	}			
	public function selectAllKegiatanById($id){
		$this->db->select('kegiatan.*,user.fullname as konseptor,employee.name as pemeriksa,satker.name as satuankerja');
		$this->db->from($this->tableName);
		$this->db->where('kegiatan.id',$id);
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
		$this->db->join('roles','roles.id = satker.roles_id');
		$this->db->join('employee','employee.id = roles.employee_id');

		return $this->db->get();
	}			
	public function selectAllKegiatanByUserId($id){
		$this->db->select('kegiatan.*,user.fullname as konseptor,employee.name as pemeriksa');
		$this->db->from($this->tableName);
		$this->db->where('user_id',$id);
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
		$this->db->join('roles','roles.id = satker.roles_id');
		$this->db->join('employee','employee.id = roles.employee_id');

		return $this->db->get();
	}

	public function selectPaguById($id){
		$this->db->select('pagu');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);
		
		return $this->db->get()->result_array();
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
