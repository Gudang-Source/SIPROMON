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
			// $this->data['user'] = $this->ModelUser->selectById2($_SESSION['id'])->row_array();
		}else if($this->session->userdata('roles') == "Superadmin" || $this->session->userdata('roles') == "Admin" ){
			$this->data['all'] = $this->ModelKegiatan->selectAll()->result_array();
		}
			// print_r($this->data['user']);
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
		// $this->ModelRMPDocument->preDocument($rmp_iid);
		// $this->ModelRMPRoles->preRoles($dummy['satuankerja'],$dummy['tahun_anggaran'],$rmp_iid);

		redirect('Kegiatan');
	}
	public function show($id){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
		// pagu from API
		$this->data['row']['pagu'] = $this->ModelMnvKeuanganTotal->getPaguEmon($this->data['row']['kdsatker'],$this->data['row']['kdpaket'],$this->data['row']['tahun_anggaran'])->row_array()['pagu'];
		$pagu = $this->data['row']['pagu'];

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectByRMP($this->data['row']['id'])->result_array();			
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['idk'] = $id;	//add ahmad 
	
		$this->data['moneysMonthsKumulatif'] = array();
		$this->data['moneysMonthsKumulatifP'] = array();
		$this->data['fisikMonthsKumulatif'] = array();


		$this->data['moneysMonthsKumulatifPEmon'] = $this->ModelMnvKeuangan->getKeuEmon($this->data['row']['kdsatker'],$this->data['row']['kdpaket'],$this->data['row']['tahun_anggaran'])->row_array();
		$this->data['fisikMonthsKumulatifEmon'] = $this->ModelMnvFisik->getFisikEmon($this->data['row']['kdsatker'],$this->data['row']['kdpaket'],$this->data['row']['tahun_anggaran'])->row_array();
	
		$fisik_kumulatif = 0;
		$moneys_kumulatif = 0;
		$moneys_kumulatifP = 0;

		$this->data['moneysMonthsKumulatifR'] = array();
		$this->data['moneysMonthsKumulatifPR'] = array();
		$this->data['fisikMonthsKumulatifR'] = array();

		
		$fisik_kumulatifR = 0;
		$moneys_kumulatifR = 0;
		$moneys_kumulatifPR = 0;

		for ($i=0; $i < 12; $i++) {
			$this->data['moneysMonthsKumulatifPEmon']['b'.($i+1)] = ($this->data['moneysMonthsKumulatifPEmon']['b'.($i+1)]/$this->data['row']['pagu'])*100;
			$temp = $this->ModelMnvKeuangan->getByMonthRMP($id,($i+1));
			if($temp->num_rows() != 0){
				$temp = $temp->result_array();
				
				$moneys_kumulatif += $temp[0]['jml_uang'];
				$moneys_kumulatifP += ($temp[0]['jml_uang']/$this->data['row']['pagu'])*100;	
			}
			foreach($this->data['allAct'] as $act){
				$temp = $this->ModelRMPSDKPlanAct->getByMonthRMP($act['id'],($i+1)); //Model Edited
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
					foreach ($temp as $value) {
						
						$fisik_kumulatifR+= $value['fisik'];
						$moneys_kumulatifR+= $value['biaya'];
						$moneys_kumulatifPR+= $value['biayaP'];
					}
					
				}

				$temp = $this->ModelMnvFisik->getByMonthRMP($act['id'],($i+1),'act'); //Model Edited
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
					foreach ($temp as $value) {
						
						$fisik_kumulatif+= $value['fisik_real'];
					}
					
				}

			}
			foreach($this->data['allStages'] as $stage){

				$temp = $this->ModelRMPSDKPlanStage->getByMonthRMP($stage['id'],($i+1)); //Model Edited
				
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
					
					foreach ($temp as $value) {
						
						$fisik_kumulatifR+= $value['fisik'];
						$moneys_kumulatifR+= $value['biaya'];
						$moneys_kumulatifPR+= $value['biayaP'];
					}
				}
				$temp = $this->ModelMnvFisik->getByMonthRMP($stage['id'],($i+1),'stage'); //Model Edited
				
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
				
					foreach ($temp as $value) {
						
						$fisik_kumulatif+= $value['fisik_real'];
						// $moneys_kumulatif+= $value['biaya'];
						// $moneys_kumulatifP+= $value['biayaP'];
					}
				}
			}

			$this->data['moneysMonthsKumulatif'][$i] = $moneys_kumulatif;
			$this->data['fisikMonthsKumulatif'][$i] = $fisik_kumulatif;
			$this->data['moneysMonthsKumulatifP'][$i] = $moneys_kumulatifP;

			$this->data['moneysMonthsKumulatifR'][$i] = $moneys_kumulatifR;
			$this->data['fisikMonthsKumulatifR'][$i] = $fisik_kumulatifR;
			$this->data['moneysMonthsKumulatifPR'][$i] = $moneys_kumulatifPR;
		}
		

		$this->data['kapus'] = $this->ModelEmployee->selectById(1)->row_array(); 
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
		$this->data['row']['pagu']= $pagu;

		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('kegiatan/detail_old',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function delKegiatan($id){
		$this->ModelKegiatan->delete($id);
		redirect('Kegiatan');

	}
}
