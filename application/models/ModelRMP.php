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
	public function selectByEvaluatorId($id){
		$this->db->select('rmp.id as rmpId, kegiatan.*,user.fullname as konseptor,satker.name as satuankerja');
		$this->db->from($this->tableName);
		$this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
		$this->db->where('evaluatorId',$id);

		return $this->db->get();
	}	
	public function selectByIdKegiatan($id){
		$this->db->select('rmp.*,kegiatan.judul,kegiatan.jenis,kegiatan.tahun_anggaran,kegiatan.pagu,kegiatan.rmp_stats,kegiatan.volume,kegiatan.unitof,kegiatan.rabtitle,kegiatan.output, kegiatan.dipa, kegiatan.dipa_date,satker.name as satuankerja, employee.name as pemeriksa,satker.name as satuankerja,user.fullname as konseptor, kegiatan.besaran, kegiatan.nodokumen, kegiatan.ringkasan,kegiatan.rabdocument, kegiatan.kdsatker, kegiatan.kdpaket');
		$this->db->from($this->tableName);
		$this->db->where('kegiatan_id',$id);
		$this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
		$this->db->join('roles','roles.id = satker.roles_id');
		$this->db->join('employee','employee.id = roles.employee_id');		
		return $this->db->get();
	}
	public function selectFullById($id){
		$this->db->select('rmp.*,kegiatan.judul,kegiatan.jenis,kegiatan.tahun_anggaran,kegiatan.pagu,kegiatan.rmp_stats,kegiatan.volume,kegiatan.unitof,kegiatan.rabtitle,kegiatan.output,kegiatan.att4,kegiatan.att5, kegiatan.dipa, kegiatan.dipa_date,satker.name as satuankerja');
		$this->db->from($this->tableName);
		$this->db->where('rmp.id',$id);
		$this->db->join('kegiatan','rmp.kegiatan_id = kegiatan.id');
		$this->db->join('user','user.id = kegiatan.user_id');
		$this->db->join('satker','satker.id = user.satker_id');
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
