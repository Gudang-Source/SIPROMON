<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	private $head;
	private $side;
	private $data;
	private $foot;
	/**
	 */
	public function __construct(){
		parent::__construct();
		$this->head = array();
		$this->side = array();
		$this->data = array();
		$this->foot = array();
	}
	public function index(){
		$this->data['roles'] = $this->ModelRoles->selectAll()->result_array();
		$this->data['employees'] = $this->ModelEmployee->selectAll()->result_array();

		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('struktur/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function save(){
		$post = $this->input->post();
		foreach($post as $key=>$upd){
			$this->ModelRoles->update((explode("_", $key)[1]),['employee_id'=> $upd]);
		}
		$this->session->set_flashdata('msg','ok');		
		redirect('Struktur');
	}
	
}
