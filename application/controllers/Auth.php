<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->view('login');
	}
	public function es3(){
		$this->load->view('logines3');
	}
	public function ka(){
		$this->load->view('loginka');
	}		
	public function evaluator(){
		$this->load->view('logineva');
	}		
	public function login(){
		$post = $this->input->post();

		$data = $this->ModelUser->check($post['username'],md5($post['password']))->row_array();
		if(isset($data)){
			if($data['username'] == "admin" || $data['username'] == "suadmin"){
				/**
				 * Ketua Tim
				 */
				/*User Session Data*/
				$userdata = array(
					'id' => $data['id'],
					'username'  => $data['username'],
					'fullname'  => $data['fullname'],
					'roles'  => $data['roles'],
					'log'  => $data['last_login'],
					'logged_in' => TRUE
				);
				$this->session->set_userdata($userdata);
				redirect('Admin/beranda');			
			}else{
				/**
				 * Ketua Tim
				 */
				/*User Session Data*/
				$userdata = array(
					'id' => $data['id'],
					'username'  => $data['username'],
					'fullname'  => $data['fullname'],
					'roles'  => $data['roles'],
					'log'  => $data['last_login'],
					'logged_in' => TRUE
				);
				$this->session->set_userdata($userdata);
				redirect('Home/beranda');			
			}

		}else{
			$this->session->set_flashdata('msg', 'wrong');
			redirect('Auth');
		}
	}
	public function logines3(){
		$post = $this->input->post();
		$data = $this->ModelEmployee->check($post['username'],md5($post['password']))->row_array();
		if(isset($data)){
			/**
			 * Eselon 3 Login
			 */
			/*User Session Data*/
			$userdata = array(
				'id' => $data['id'],
				'nip' => $data['nip'],
				'username'  => $data['username'],
				'fullname'  => $data['name'],
				'position'  => $data['position'],
				'log'  => $data['last_login'],
				'satker_id'  => $data['satker_id'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('Eselon/berandaes3');			
		}else{
			$this->session->set_flashdata('msg', 'wrong');
			redirect('Auth/es3');
		}
	}
	public function loginevaluator(){
		$post = $this->input->post();
		$data = $this->ModelRMPEvaluator->check($post['username'],md5($post['password']))->row_array();
		if(isset($data)){
			/**
			 * Evaluator Login
			 */
			/*User Session Data*/
			// print_r($data);
			$userdata = array(
				'id' => $data['id'],
				// 'nip' => $data['nip'],
				'fullname'  => $data['name'],
				'username'  => $data['username'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('Review');			
		}else{
			$this->session->set_flashdata('msg', 'wrong');
			redirect('Auth/evaluator');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
	public function register(){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$post['password'] = md5($post['password']);
			$post['roles'] = "Ketua";
			// $this->input->post('roles') = "Ketua";
			$iid = $this->ModelUser->insert($post);

			$data = $this->ModelUser->selectById($iid)->row_array();
			// var_dump($data);

			/*User Session Data*/
			$userdata = array(
				'id' => $data['id'],
				'username'  => $data['username'],
				'fullname'  => $data['fullname'],
				'roles'  => $data['roles'],
				'log'  => $data['last_login'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			// var_dump($data);
			redirect('Home/profilku');			
		}else{
			$this->load->view('register');
		}
	}
}
