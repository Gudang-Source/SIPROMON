<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function beranda(){
		$this->data['all'] = $this->ModelEmployee->selectAll()->result_array();
		$this->data['roles'] = $this->ModelRoles->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebaradmin',$this->side);
		$this->load->view('admin/main',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}

	/*Master Jabatan RMP*/
	public function position(){

		$this->data['all'] = $this->ModelRMPPosition->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebaradmin',$this->side);
		$this->load->view('admin/position/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}

	/*End of Jabatan RMP*/
	/*Struktur Organisasi*/
	/**
	 * Edit Struktur Organisasi Eselon 4 disetiap Balai.
	 */
	public function struktur(){
		$this->data['roles'] = $this->ModelRoles->selectAll()->result_array();
		$this->data['employees'] = $this->ModelEmployee->selectAll()->result_array();

		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebaradmin',$this->side);
		$this->load->view('admin/struktur/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function saveStruktur(){
		$post = $this->input->post();
		foreach($post as $key=>$upd){
			$this->ModelRoles->update((explode("_", $key)[1]),['employee_id'=> $upd]);
		}
		$this->session->set_flashdata('msg','ok');		
		redirect('Admin/struktur');
	}
	/*End of Struktur Organisasi*/

	/*Master Pejabat*/
	public function pejabat(){

		$this->data['all'] = $this->ModelEmployee->selectAll()->result_array();
		$this->data['roles'] = $this->ModelRoles->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebaradmin',$this->side);
		$this->load->view('admin/pejabat/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}

	public function delPejabat($id){
		$this->ModelEmployee->delete($id);
		$this->session->set_flashdata('del','ok');
		redirect('Admin/pejabat');
	}
	public function addPejabat(){
		$post = $this->input->post();
		$post['password'] = md5($post['password']);
		$id = $post['roles_id'];
		unset($post['roles_id']);
		$employee_id = $this->ModelEmployee->insert($post);
		$this->ModelRoles->update($id,['employee_id' => $employee_id]);
		redirect('Admin/pejabat');
	}
	public function formPejabat($id=NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$id = $post['id'];
			unset($post['id']);

			$this->session->set_flashdata('edit','ok');
			$this->ModelEmployee->update($id,$post);
			redirect('Admin/pejabat');
		}
		$this->data['row'] = $this->ModelEmployee->selectById($id)->row_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('pejabat/form',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	/*End of Master Pejabat*/

	/*Master Ketua TIM*/
	public function ketua(){

		$this->data['all'] = $this->ModelUser->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebaradmin',$this->side);
		$this->load->view('admin/user/view',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	/*End of Master Ketua Tim*/
}
