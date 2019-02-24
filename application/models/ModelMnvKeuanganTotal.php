<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMnvKeuanganTotal extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "mnv_keuangan_total";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id_mnv_k_t','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_mnv_k_t',$id);
		
		return $this->db->get();
	}

	public function jmlTotalByIdRMP($id_rmp,$minggu){
		$this->db->select('SUM(jml) as jml_kumulatif');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp ='.$id_rmp.' AND minggu <'.$minggu);
		
		return $this->db->get()->result_array();
	}

	public function cekByWeeksRMP($rmp_sdk,$minggu){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp = '.$rmp_sdk.' AND minggu = '.$minggu);
		
		return $this->db->get()->num_rows();
	}

	public function getByWeeksRMP($rmp_sdk,$minggu){
		$this->db->select('jml, jml_kumulatif, persentase_kumulatif');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp = '.$rmp_sdk.' AND minggu = '.$minggu);
		
		return $this->db->get();
	}

	public function getPaguEmon($kdsatker='', $kdpaket ='', $tahun = ''){
		$this->db->select('pagu');
		$this->db->from('emon_data_'.$tahun);
		$this->db->where('kdsatker = '.$kdsatker.' AND kdpaket = '.$kdpaket);
		return $this->db->get();
	}

	public function getAkunEmon($kdsatker='', $kdpaket ='', $tahun = ''){
		$this->db->select('*');
		$this->db->from('emon_akun_'.$tahun);
		$this->db->where('kdsatker = '.$kdsatker.' AND kdpaket = '.$kdpaket);
		return $this->db->get();
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
		$this->db->where('id_mnv_k_t',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('id_mnv_k_t',$id);
		$this->db->delete($this->tableName);
	}
}
