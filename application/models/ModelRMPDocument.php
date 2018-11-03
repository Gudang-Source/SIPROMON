<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMPDocument extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp_document";
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
	public function selectByIdRMP($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('rmp_id',$id);
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
	public function preDocument($rmp_id){
		$documents = array(
			array('document_name'=>'Manual Sistem Manajemen Terpadu (SIMPADU)','document_num'=>'MM/PUSAIR/01','rmp_id'=>$rmp_id),
			array('document_name'=>'Pengendalian Informasi Terdokumentasi','document_num'=>'PP/PUSAIR/01','rmp_id'=>$rmp_id),
			array('document_name'=>'Audit Internal','document_num'=>'PP/PUSAIR/02','rmp_id'=>$rmp_id),
			array('document_name'=>'Pelaporan Ketidaksesuaian dan Tindakan Perbaikan','document_num'=>'PP/PUSAIR/03','rmp_id'=>$rmp_id),
			array('document_name'=>'Pemantauan, Evaluasi, dan Pelaporan','document_num'=>'PP/PUSAIR/08','rmp_id'=>$rmp_id),
		);
		foreach($documents as $document){
			$this->insert($document);
		}
	}
}
