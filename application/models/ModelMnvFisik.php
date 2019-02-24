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
	public function getDetail($id_refer,$month, $type){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND month = '.$month.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}
	public function cekByWeeksRMP($id_refer,$month, $type){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND month = '.$month.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}
	public function getByWeeksRMP($id_refer,$month, $type){
		$this->db->select('fisik_real, tingkat_kendala');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND month = '.$month.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}

	public function getByMonthRMP($id_refer,$month, $type){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND month = '.$month.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}

	public function getbyReferTotal($id_refer,$type){
		$this->db->select('SUM(biaya) as biaya, SUM(biayaP) as biayaP, SUM(fisik_real) as fisik');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}

	public function getByWeeksRMPKumulatif($id_kegiatan,$month){
		$this->db->select('SUM(fisik_real) as fisik_real');
		$this->db->from($this->tableName);
		$this->db->where('id_kegiatan = '.$id_kegiatan.' AND month = '.$month);
		
		return $this->db->get();
	}
	public function jmlFisikByActRMP($id_kegiatan,$id_refer, $type, $month){
		$this->db->select('SUM(fisik_real) as persen_total');
		$this->db->from($this->tableName);
		$this->db->where('id_kegiatan ='.$id_kegiatan.' AND id_refer='.$id_refer.' AND type="'.$type.'" AND month < '.$month);
		
		return $this->db->get()->result_array();
	}

	public function getFisikBefore($id_refer,$month, $type){
		$this->db->select('SUM(fisik_real) as fisik_real');
		$this->db->from($this->tableName);
		$this->db->where('id_refer = '.$id_refer.' AND month < '.$month.' AND type = "'.$type.'"');
		
		return $this->db->get();
	}

	public function getFisikEmon($kdsatker='', $kdpaket ='', $tahun = ''){
		$this->db->select('*');
		$this->db->from('emon_rencanafis_'.$tahun);
		$this->db->where('kdsatker = '.$kdsatker.' AND kdpaket = '.$kdpaket);
		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
		return $this->db->insert_id();
	}
	
	public function updateByWeeksIdRMP($month,$id_kegiatan,$data){
		$this->db->set($data);
		$this->db->where('month = '.$month.' AND id_kegiatan = '.$id_kegiatan);
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