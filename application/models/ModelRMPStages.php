<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMPStages extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp_stages";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','ASC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}
	public function selectByIdAct($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('act_id',$id);
		// $this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');

		return $this->db->get();
	}

	public function selectByRMP($id_rmp){
		$this->db->select('rmp_stages.*');
		$this->db->from($this->tableName);
		$this->db->join('rmp_activity','rmp_activity.id = rmp_stages.act_id');
		$this->db->where('rmp_activity.rmp_id',$id_rmp);
		// $this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');

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
