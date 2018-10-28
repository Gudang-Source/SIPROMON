<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	private $head;
	private $side;
	private $data;
	private $foot;
	public function __construct(){
		parent::__construct();
		$this->head = array();
		$this->side = array();
		$this->data = array();
		$this->foot = array();
	}

	public function index(){
		/*Static Pengesah Kepala Pusair : id = 1*/
		if($this->session->userdata('roles') == "Ketua"){
			$this->data['all'] = $this->ModelKegiatan->selectByUserId($this->session->userdata('id'))->result_array();
		}else if($this->session->userdata('roles') == "Superadmin" || $this->session->userdata('roles') == "Admin" ){
			$this->data['all'] = $this->ModelKegiatan->selectAll()->result_array();
		}
			// print_r($this->data['all']);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('kegiatan/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function create(){
		$post = $this->input->post();
		$iid = $this->ModelKegiatan->insert($post);
		$dummy = $this->ModelKegiatan->selectAllKegiatanById($iid)->row_array();		
		$rmp_iid = $this->ModelRMP->insert(['kegiatan_id' => $iid]);
		$this->ModelRMPDocument->preDocument($rmp_iid);
		$this->ModelRMPRoles->preRoles($dummy['satuankerja'],$dummy['tahun_anggaran'],$rmp_iid);

		redirect('Kegiatan');
	}
	public function show($id){
		$this->data['kapus'] = $this->ModelEmployee->selectById(1)->row_array(); 
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('kegiatan/detail_old',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
}
