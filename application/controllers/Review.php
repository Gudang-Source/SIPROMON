<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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
		$this->data['kegiatans'] = $this->ModelRMP->selectByEvaluatorId($this->session->userdata('id'))->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebareva',$this->side);
		$this->load->view('review/berandaeva',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}	

	public function form($id){
		$this->data['row'] = $this->ModelRMP->selectFullById($id)->row_array();
		$this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];
		// print_r($this->data['row']);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebareva',$this->side);
		$this->load->view('review/form',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}	
	public function addReviewDetail($rmpId){
		$post = $this->input->post();
		if($post['id'] == ""){
			unset($post['id']);
		}
		$post['rmpId'] = $rmpId;
		var_dump($post);
		$this->ModelRevisiDetail->insert($post);
		redirect('Review/form/'.$rmpId);
	}

}
