<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMPRoles extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp_roles";
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
		$this->db->select('rmp_roles.*');
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
	public function preRoles($satker,$tahun,$rmp_id){
		$roles = array(
			array('jabatan'=>'Penanggung Jawab','tugas'=>'Mengendalikan pelaksanaan kegiatan sesuai  Penetapan Kinerja (PK) dan RKA-K/L dan DIPA Satuan Kerja $satker. Tahun Anggaran $tahun','tanggungjawab'=>'Bertanggungjawab kepada Kepala Puslitbang Sumber Daya Air terhadap tecapainya output kegiatan sesuai PK.','wewenang'=>'Mengusulkan personil pelaksana kegiatan dan menetapkan arah kebijakan pelaksanaan dan penggunaan anggaran kegiatan.', 'rmp_id'=>$rmp_id),
			array('jabatan'=>'Koordinator ','tugas'=>'Membantu Penanggung Jawab mengkoordinasikan dan mengevaluasi kegiatan.', 'tanggungjawab'=>'Bertanggungjawab kepada Penanggung Jawab terhadap kelancaran kegiatan.','wewenang'=>'Melakukan supervisi teknis dan administrasi pelaksanaan serta penggunaan anggaran kegiatan.', 'rmp_id'=>$rmp_id),
			array('jabatan'=>'Ketua Tim Kegiatan ','tugas'=>'Merancang, memimpin dan memantau serta melaporkan pelaksanaan kegiatan','tanggungjawab'=>'Bertanggung jawab kepada Penanggung jawab melalui koordinator atas pelaksanaan kegiatan.','wewenang'=>'Mengusulkan dan menggunakan sumber daya dalam pelaksanaan kegiatan.', 'rmp_id'=>$rmp_id)

		);	
		foreach($roles as $role){
			$this->insert($role);
		}
	}
}
