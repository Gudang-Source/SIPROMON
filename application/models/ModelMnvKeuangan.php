<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMnvKeuangan extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "mnv_keuangan";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id_mnv_keuangan','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_mnv_keuangan',$id);
		
		return $this->db->get();
	}

	public function selectByRmpSdkWeeks($month, $id_rmp_sdk){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('rmp_sdk','rmp_sdk.id = mnv_keuangan.id_rmp_sdk');
		$this->db->where('id_rmp_sdk ='.$id_rmp_sdk.' AND month = '.$month);
		
		return $this->db->get();
	}

	public function cekByWeeksRMP($rmp_sdk,$month){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_rmp_sdk = '.$rmp_sdk.' AND month = '.$month);
		
		return $this->db->get()->num_rows();
	}

	public function getByMonthRMP($id_kegiatan,$month){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id_kegiatan = '.$id_kegiatan.' AND month = '.$month);
		
		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function updateBulanan($dataMentah){
		$data = array();
		$total = 0;
		foreach ($dataMentah as $key => $value) {
			$total += $value;
			$temp = array(
				'jml_uang' => $value, 
				'id_mnv_keuangan' => $key, 
				);
			array_push($data,$temp);
		}

		$this->db->update_batch($this->tableName, $data, 'id_mnv_keuangan');
		return $total;
		// return $data;
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id_mnv_keuangan',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('id_mnv_keuangan',$id);
		$this->db->delete($this->tableName);
	}
}
