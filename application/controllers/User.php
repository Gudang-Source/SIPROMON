<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$this->data['all'] = $this->ModelUser->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('user/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function beranda(){
		$this->data['numkegiatan'] = $this->ModelKegiatan->selectById(1)->num_rows();
		// var_dump($this->data);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('main',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function profile(){
		
	}
}
