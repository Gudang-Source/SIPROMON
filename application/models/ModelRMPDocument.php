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
			array('document_name'=>'Manual Sistem Manajemen Puslitbang SDA','document_num'=>'DSM/PUSAIR/MM/01','rmp_id'=>$rmp_id),
			array('document_name'=>'Pengendalian Dokumen Sistem Manajemen Mutu','document_num'=>'DSM/PUSAIR/PR/01','rmp_id'=>$rmp_id),
			array('document_name'=>'Pengendalian Rekaman','document_num'=>'DSM/PUSAIR/PR/02','rmp_id'=>$rmp_id),
			array('document_name'=>'Audit Mutu Internal','document_num'=>'DSM/PUSAIR/PR/03','rmp_id'=>$rmp_id),
			array('document_name'=>'Pengendalian Hasil Pekerjaan yang Tidak Sesuai (HPTS)','document_num'=>'DSM/PUSAIR/PR/04','rmp_id'=>$rmp_id),
			array('document_name'=>'Tindakan Korektif dan Tindakan Pencegahan','document_num'=>'DSM/PUSAIR/PR/05','rmp_id'=>$rmp_id),
			array('document_name'=>'Pengelolaan Kegiatan Penelitian ','document_num'=>'DSM/PUSAIR/PP/04','rmp_id'=>$rmp_id)
		);
		foreach($documents as $document){
			$this->insert($document);
		}
	}
}
