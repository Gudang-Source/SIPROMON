<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelMnvFisik extends CI_Model {
	private $tableName;
	public function __construct(){
		parent::__construct();
		$this->tableName = "mnv_fisik";
	}
	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id_mnv_fisik','DESC');
		$this->db->limit($from,$offset);
		return $this->db->get();
	}
	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_mnv_fisik',$id);
		
		return $this->db->get();
	}
	public function getDetail($id_refer,$minggu, $type){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND minggu = '.$minggu.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}
	public function cekByWeeksRMP($id_refer,$minggu, $type){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND minggu = '.$minggu.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}
	public function getByWeeksRMP($id_refer,$minggu, $type){
		$this->db->select('persentase_real, tingkat_kendala');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND minggu = '.$minggu.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}
	public function getByWeeksRMPKumulatif($id_rmp,$minggu){
		$this->db->select('SUM(persentase_real) as persentase_real');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp = '.$id_rmp.' AND minggu = '.$minggu);
		
		return $this->db->get();
	}
	public function jmlFisikByActRMP($id_rmp,$id_refer, $type, $minggu){
		$this->db->select('SUM(persentase_real) as persen_total');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp ='.$id_rmp.' AND id_refer='.$id_refer.' AND type="'.$type.'" AND minggu < '.$minggu);
		
		return $this->db->get()->result_array();
	}
	public function insert($data){
		$this->db->insert($this->tableName,$data);
		return $this->db->insert_id();
	}
	
	public function updateByWeeksIdRMP($minggu,$id_rmp,$data){
		$this->db->set($data);
		$this->db->where('minggu = '.$minggu.' AND id_rmp = '.$id_rmp);
		return $this->db->update($this->tableName);
	}
	
	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id_mnv_fisik',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('id_mnv_fisik',$id);
		$this->db->delete($this->tableName);
	}
}