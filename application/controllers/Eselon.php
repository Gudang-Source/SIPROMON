<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eselon extends CI_Controller {

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
		// $sess = $this->session->userdata();
		// if($sess['logged_in']){
		// 	$this->data['numkegiatan'] = $this->ModelKegiatan->selectById(1)->num_rows();
		// }else{
		// 	redirect('Auth/es3');
		// }
	}	

	public function berandaes3(){
		$this->data['kegiatans'] = $this->ModelKegiatan->selectAllBySatkerId($this->session->userdata('satker_id'))->result_array();
		$this->data['numkegiatan'] = count($this->data['kegiatans']);
		$this->data['totalpagu'] = 15250000000;
		// echo "<pre>";
		// print_r($this->data);
		// echo "<pre/>";
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebares3',$this->side);
		$this->load->view('berandaes3',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}	
	public function profilku(){
		if($this->input->post() != NULL){
			$update = $this->input->post();
			if($update['password'] != ''){
				$update['password'] = md5($update['password']);
			}else{
				unset($update['password']);
			}
			$this->ModelUser->update($this->session->userdata('id'),$update);
			$this->session->set_flashdata('msg','ok');
			$sessdata = $this->ModelUser->selectById($this->session->userdata('id'))->row_array();			
			/*User Session sessdata*/
			$usersessdata = array(
				'id' => $sessdata['id'],
				'username'  => $sessdata['username'],
				'fullname'  => $sessdata['fullname'],
				'roles'  => $sessdata['roles'],
				'log'  => $sessdata['last_login'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($usersessdata);

			redirect('Home/profilku');
		}
		$this->data['row'] = $this->ModelUser->selectById($this->session->userdata('id'))->row_array();
		$this->data['satkers'] = $this->ModelSatker->selectAll()->result_array();
		$this->data['roles'] = $this->ModelRoles->selectAllJoinEmployee(24,13)->result_array();
		$this->data['roles2'] = $this->ModelRoles->selectAllJoinEmployee(4,1)->result_array();

		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebares3',$this->side);
		$this->load->view('profilku',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}	
	public function statusRMP($kegiatan_id){
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($kegiatan_id)->row_array();
		$this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebares3');
		$this->load->view('rmp/status',$this->data);
		$this->load->view('templates/footer');
	}
	public function reviewRMP($kegiatan_id){
		
	}
}
