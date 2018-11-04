<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMP extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp";
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
	public function selectByIdKegiatan($id){
		$this->db->select('rmp.*,kegiatan.judul,kegiatan.jenis,kegiatan.tahun_anggaran,kegiatan.pagu,kegiatan.rmp_stats,kegiatan.volume,kegiatan.unitof,kegiatan.rabtitle,kegiatan.output,kegiatan.att4,kegiatan.att5');
		$this->db->from($this->tableName);
		$this->db->where('kegiatan_id',$id);
		$this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');

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
