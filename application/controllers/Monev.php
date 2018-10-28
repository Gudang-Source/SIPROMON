<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monev extends CI_Controller {
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
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Monev/grafik');
		$this->load->view('templates/footer');
	}
	
	public function grafik($id = NULL){
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Monev/grafik',$this->data);
		$this->load->view('templates/footer');
	}
	
	public function tabel($idk = NULL){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();		
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();		
		/*Counting Total Every Step*/
		$convert = array('A'=>0,'B'=>1,'C'=>2);
		for($i=0;$i<3;$i++){
			$this->data['total'][$i] = 0;
			foreach($this->data['allAct'] as $act){
				if($convert[$act['parent']] == $i){
					foreach($this->data['allStages'] as $stage){
						if($stage['act_id'] == $act['id']){
							$this->data['total'][$i] += $stage['anggaran'];
						}
					}
					if($act['anggaran'] != 0){
						$this->data['total'][$i] += $act['anggaran'];
					}
				}
			}
		}		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Monev/tabel',$this->data);
		$this->load->view('templates/footer');
	}

	public function tabel_progres($idk = NULL){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['id_kegiatan'] = $idk;
		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		// $this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();	

		$this->data['allStages'] = $this->ModelRMPStages->selectByRMP($this->data['row']['id'])->result_array();	
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();		
		$this->data['moneysWeeks'] = array();
		$this->data['actWeeks'] = array();
		$this->data['stageWeeks'] = array();
		
		for ($i=0; $i < 48; $i++) { 
			$temp = $this->ModelMnvKeuanganTotal->cekByWeeksRMP($this->data['row']['id'],($i+1));
			array_push($this->data['moneysWeeks'],$temp);
			foreach($this->data['allAct'] as $act){
				$this->data['actWeeks'][$act['id']][$i] = $this->ModelMnvFisik->cekByWeeksRMP($act['id'],($i+1),"act");
				// $temp = array(
				// 	array( $act['id'] => array(
				// 			$i => $this->ModelMnvFisik->cekByWeeksRMP($act['id'],($i+1),"act"),
				// 			) 
				// 		)
				// 	);
				// array_push($this->data['actWeeks'],$temp);
			}
			foreach($this->data['allStages'] as $stage){
				$this->data['stageWeeks'][$stage['id']][$i] = $this->ModelMnvFisik->cekByWeeksRMP($stage['id'],($i+1),"stage");
				// $temp = array(
				// 	array( $stage['id'] => array(
				// 			$i => $this->ModelMnvFisik->cekByWeeksRMP($stage['id'],($i+1),"act"),
				// 			) 
				// 		)
				// 	);
				// array_push($this->data['stageWeeks'],$temp);
			}
		}
		// echo "<pre>";
		// print_r($this->data['moneysWeeks']);
		// echo "</pre>";

		/*Counting Total Every Step*/
		$convert = array('A'=>0,'B'=>1,'C'=>2);
		for($i=0;$i<3;$i++){
			$this->data['total'][$i] = 0;
			foreach($this->data['allAct'] as $act){
				if($convert[$act['parent']] == $i){
					foreach($this->data['allStages'] as $stage){
						if($stage['act_id'] == $act['id']){
							$this->data['total'][$i] += $stage['anggaran'];
						}
					}
					if($act['anggaran'] != 0){
						$this->data['total'][$i] += $act['anggaran'];
					}
				}
			}
		}		
		// echo "<pre>";
		// print_r($this->data);
		// echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Monev/tabel_progres',$this->data);
		$this->load->view('templates/footer');
	}


	public function view_progres($idk = NULL){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['id_kegiatan'] = $idk;
		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		// $this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();	

		$this->data['allStages'] = $this->ModelRMPStages->selectByRMP($this->data['row']['id'])->result_array();	
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();		
		$this->data['moneysWeeks'] = array();
		$this->data['moneysWeeksKumulatif'] = array();
		$this->data['moneysWeeksKumulatifP'] = array();
		$this->data['actWeeks'] = array();
		$this->data['fisikWeeks'] = array();
		$this->data['fisikWeeksKumulatif'] = array();
		$this->data['stageWeeks'] = array();
		$fisik_kumulatif = 0;
		for ($i=0; $i < 48; $i++) {
			$temp2 = 0;
			$temp = $this->ModelMnvFisik->getByWeeksRMPKumulatif($this->data['row']['id'],($i+1));
			if($temp->num_rows() != 0){
				$temp = $temp->result_array()[0]['persentase_real'];
				if($temp != 0){

					$fisik_kumulatif += $temp;
					$temp2 = $fisik_kumulatif;
				}
			}else{
				$temp = 0;
			}
			array_push($this->data['fisikWeeks'],round($temp,2));
			array_push($this->data['fisikWeeksKumulatif'],round($temp2,2));
			
			$temp = $this->ModelMnvKeuanganTotal->getByWeeksRMP($this->data['row']['id'],($i+1));
			$temp2 = 0;
			$temp3 = 0;
			if($temp->num_rows() != 0){
				$temp = $temp->result_array();
				$temp2 = $temp[0]['jml_kumulatif'];
				$temp3 = $temp[0]['persentase_kumulatif'];
				$temp = $temp[0]['jml'];
			}else{
				$temp = 0;
			}

			array_push($this->data['moneysWeeks'],$temp);
			array_push($this->data['moneysWeeksKumulatif'],$temp2);
			array_push($this->data['moneysWeeksKumulatifP'],round($temp3,2));
			foreach($this->data['allAct'] as $act){
				$this->data['actWeeks'][$act['id']][$i] = $this->ModelMnvFisik->getByWeeksRMP($act['id'],($i+1),"act");

				if($this->data['actWeeks'][$act['id']][$i]->num_rows() != 0){
					$tempWeeks = array(
						'persentase' => $this->data['actWeeks'][$act['id']][$i]->result_array()[0]['persentase_real'],
						'tingkat_kendala' => $this->data['actWeeks'][$act['id']][$i]->result_array()[0]['tingkat_kendala'],
						);
					$this->data['actWeeks'][$act['id']][$i] = $tempWeeks;
					// $this->data['actWeeks'][$act['id']][$i] = $this->data['actWeeks'][$act['id']][$i]->result_array()[0]['tingkat_kendala'];
				}else{
					$this->data['actWeeks'][$act['id']][$i] = 0;
				}
			}
			foreach($this->data['allStages'] as $stage){
				$this->data['stageWeeks'][$stage['id']][$i] = $this->ModelMnvFisik->getByWeeksRMP($stage['id'],($i+1),"stage");
				
				if($this->data['stageWeeks'][$stage['id']][$i]->num_rows() != 0){
					$tempWeeks = array(
						'persentase' => $this->data['stageWeeks'][$stage['id']][$i]->result_array()[0]['persentase_real'],
						'tingkat_kendala' => $this->data['stageWeeks'][$stage['id']][$i]->result_array()[0]['tingkat_kendala'],
						);
					$this->data['stageWeeks'][$stage['id']][$i] = $tempWeeks;
					// $this->data['stageWeeks'][$stage['id']][$i]['tingkat_kendala'] = $this->data['stageWeeks'][$stage['id']][$i]->result_array()[0]['tingkat_kendala'];
				}else{
					$this->data['stageWeeks'][$stage['id']][$i] = 0;
				}
				// $temp = array(
				// 	array( $stage['id'] => array(
				// 			$i => $this->ModelMnvFisik->cekByWeeksRMP($stage['id'],($i+1),"act"),
				// 			) 
				// 		)
				// 	);
				// array_push($this->data['stageWeeks'],$temp);
			}
		}
		// echo "<pre>";
		// print_r($this->data['moneysWeeks']);
		// echo "</pre>";

		/*Counting Total Every Step*/
		$convert = array('A'=>0,'B'=>1,'C'=>2);
		for($i=0;$i<3;$i++){
			$this->data['total'][$i] = 0;
			foreach($this->data['allAct'] as $act){
				if($convert[$act['parent']] == $i){
					foreach($this->data['allStages'] as $stage){
						if($stage['act_id'] == $act['id']){
							$this->data['total'][$i] += $stage['anggaran'];
						}
					}
					if($act['anggaran'] != 0){
						$this->data['total'][$i] += $act['anggaran'];
					}
				}
			}
		}		
		// echo "<pre>";
		// print_r($this->data['moneysWeeks']);
		// echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Monev/tabel_progres_view',$this->data);
		$this->load->view('templates/footer');
	}

	public function submit_keuangan(){
		// print_r($_POST['jml']);

		if(isset($_POST['submit'])){
			$pagu = $this->ModelKegiatan->selectPaguById($_POST['id_kegiatan']);
			$jml = $this->ModelMnvKeuangan->insertMingguan($_POST['minggu'],$_POST['jml']);
			$jml_kumulatif = $this->ModelMnvKeuanganTotal->jmlTotalByIdRMP($_POST['id_rmp'], $_POST['minggu'])[0]['jml_kumulatif'] + $jml;
			$persentase = ($jml/$pagu[0]['pagu'])*100;
			

			$data = array(
				'minggu' => $_POST['minggu'], 
				'jml' => $jml, 
				'jml_kumulatif' => $jml_kumulatif, 
				'persentase' => $persentase, 
				'id_rmp' => $_POST['id_rmp'], 
				);
			// print_r($data);
			
			$kumulatif = $this->ModelMnvKeuanganTotal->insert($data);
			// print_r($pagu);
			$this->tabel_progres($_POST['id_kegiatan']);
		}else if(isset($_POST['update'])){
			
			$jml = $this->ModelMnvKeuangan->updateMingguan($_POST['jml']);
			$pagu = $this->ModelKegiatan->selectPaguById($_POST['id_kegiatan']);
			$jml_kumulatif = $this->ModelMnvKeuanganTotal->jmlTotalByIdRMP($_POST['id_rmp'], $_POST['minggu'])[0]['jml_kumulatif'] + $jml;
			$persentase = ($jml/$pagu[0]['pagu'])*100;
			

			$data = array(
				'jml' => $jml, 
				'jml_kumulatif' => $jml_kumulatif, 
				'persentase' => $persentase, 
				);
			
			$kumulatif = $this->ModelMnvKeuanganTotal->updateByWeeksIdRMP($_POST['minggu'],$_POST['id_rmp'],$data);
			$this->tabel_progres($_POST['id_kegiatan']);
		}else{
			redirect('Home');
		}
		
	}

	public function submit_fisik(){
		if(isset($_POST['submit'])){
			// echo '<pre>' . print_r($_POST, TRUE) . '</pre>';
			$persentase_kumulatif = $_POST['fisik_real']*$_POST['persentase']/100;
			$persentase_real = $persentase_kumulatif - round($this->ModelMnvFisik->jmlFisikByActRMP($_POST['id_rmp'],$_POST['id_refer'], $_POST['type'])[0]['persen_total'],2);
			$data = array(
				'minggu' => $_POST['minggu'],
				'persentase' => $_POST['persentase'],
				'persentase_real' => $persentase_real,
				'output' => $_POST['output'],
				'deskripsi' => $_POST['deskripsi'],
				'id_rmp' => $_POST['id_rmp'],
				'id_refer' => $_POST['id_refer'],
				'kendala' => $_POST['kendala'],
				'tingkat_kendala' => $_POST['tingkat_kendala'],
				'type' => $_POST['type'],
				);
			$id_new = $this->ModelMnvFisik->insert($data);
			$this->tabel_progres($_POST['id_kegiatan']);
			// echo '<pre>' . print_r($data) . '</pre>';
			// echo '<pre>' . $id_new. '</pre>';
		}else if(isset($_POST['update'])){
			$persentase_kumulatif = $_POST['fisik_realF']*$_POST['persentaseF']/100;
			$persentase_real = $persentase_kumulatif - round($this->ModelMnvFisik->jmlFisikByActRMP($_POST['id_rmp'],$_POST['id_referF'], $_POST['typeF'])[0]['persen_total'],2);
			$data = array(
				'persentase' => $_POST['persentaseF'],
				'persentase_real' => $persentase_real,
				'output' => $_POST['outputF'],
				'deskripsi' => $_POST['deskripsiF'],
				'kendala' => $_POST['kendala'],
				'tingkat_kendala' => $_POST['tingkat_kendala'],
				);
			// echo '<pre>' . print_r($data) . '</pre>';
			$result = $this->ModelMnvFisik->update($_POST['id_mnv_fisik'],$data);
			$this->tabel_progres($_POST['id_kegiatan']);
		}else{
			redirect('Home');
		}
	}

	public function getJmlRmpSdkWeeks($minggu, $id_rmp_sdk){
		$x = $this->ModelMnvKeuangan->selectByRmpSdkWeeks($minggu, $id_rmp_sdk)->result_array();
		echo json_encode($x);
	}

	public function getFisikDetail($id_refer,$minggu, $type){
		$x = $this->ModelMnvFisik->getDetail($id_refer,$minggu, $type)->result_array();
		echo json_encode($x);
	}
}
