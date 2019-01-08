<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMPAnalisis extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp_analisis";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('anal_id','ASC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('anal_id',$id);

		return $this->db->get();
	}
	public function selectByIdRMP($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('rmp_id',$id);
		// $this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.anal_id');

		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('anal_id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('anal_id',$id);
		$this->db->delete($this->tableName);
	}
}
