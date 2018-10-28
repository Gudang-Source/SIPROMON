<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends CI_Controller {

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

		$this->data['all'] = $this->ModelEmployee->selectAll()->result_array();
		$this->data['roles'] = $this->ModelRoles->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('pejabat/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}

	public function del($id){
		$this->ModelEmployee->delete($id);
		$this->session->set_flashdata('del','ok');
		redirect('Pejabat');
	}
	public function addPejabat(){
		$post = $this->input->post();
		$post['password'] = md5($post['password']);
		$id = $post['roles_id'];
		unset($post['roles_id']);
		$employee_id = $this->ModelEmployee->insert($post);
		$this->ModelRoles->update($id,['employee_id' => $employee_id]);
		redirect('Pejabat');
	}
	public function form($id=NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$id = $post['id'];
			unset($post['id']);

			$this->session->set_flashdata('edit','ok');
			$this->ModelEmployee->update($id,$post);
			redirect('Pejabat');
		}
		$this->data['row'] = $this->ModelEmployee->selectById($id)->row_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('pejabat/form',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
}
