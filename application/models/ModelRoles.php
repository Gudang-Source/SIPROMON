<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRoles extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "roles";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','ASC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function selectAllJoinEmployee($from=0,$offset=0){
		$this->db->select('roles.*,employee.name');
		$this->db->from($this->tableName);
		$this->db->order_by('id','ASC');
		$this->db->limit($from,$offset);
		$this->db->join('employee','employee.id = roles.employee_id');

		return $this->db->get();
	}	

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}
	public function selectByEmployeeId($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
	$this->db->where('employee_id',$id);

		return $this->db->get();
	}	

	public function insert($data){
		$this->db->insert($this->tableName,$data);
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
