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
	public function login(){
		$post = $this->input->post();
		// $pejabat = $this->ModelEmployee->check($post['username'],md5($post['password']))->row_array();
		// if(isset($pejabat)){
		// 	/**
		// 	 * Pejabat
		// 	 */
		// 	/*Employee Session Data*/
		// 	$userdata = array(
		// 		'id' => $pejabat['id'],
		// 		'nip' => $pejabat['nip'],
		// 		'username'  => $pejabat['username'],
		// 		'fullname'  => $pejabat['name'],
		// 		'position'  => $pejabat['position'],
		// 		'logged_in' => TRUE
		// 	);
		// 	$this->session->set_userdata($userdata);
		// 	redirect('Home/berandaka');			
		// }

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
	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth');
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
