<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temporary extends CI_Controller {
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
		$this->load->view('templates/footer');
	}


	// ini RMP att3
	public function att3($idk){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['sisa'] = $this->data['row']['pagu'];

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();		
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
		$this->data['idk'] = $idk;	//add ahmad 
		$this->data['actTotal'] = array();
		$this->data['stageTotal'] = array();
		$this->data['moneysMonths'] = array();
		$this->data['moneysMonthsP'] = array();
		$this->data['moneysMonthsKumulatif'] = array();
		$this->data['moneysMonthsKumulatifP'] = array();
		$this->data['actMonths'] = array();
		$this->data['fisikMonths'] = array();
		$this->data['fisikMonthsKumulatif'] = array();
		$this->data['stageMonths'] = array();
		$this->data['moneysKumulatif'] = 0;
		$this->data['moneysP'] = 0;
		$this->data['fisikP'] = 0;
		$fisik_kumulatif = 0;
		$moneys_kumulatif = 0;
		$moneys_kumulatifP = 0;

		for ($i=0; $i < 12; $i++) {
			$this->data['fisikMonths'][$i] = 0;
			$this->data['moneysMonths'][$i] = 0;
			$this->data['moneysMonthsP'][$i] = 0;
			foreach($this->data['allAct'] as $act){
				$temp = $this->ModelRMPSDKPlanAct->getByMonthRMP($act['id'],($i+1)); //Model Edited
				if($temp->num_rows() == 0){
					$this->data['actMonths'][$act['id']][$i]['biaya'] = "x";
				}else{
					$temp = $temp->result_array();
					$this->data['actMonths'][$act['id']][$i]['biaya'] = 0;
					$this->data['actMonths'][$act['id']][$i]['fisik'] = 0;
					foreach ($temp as $value) {
						$this->data['actMonths'][$act['id']][$i]['biaya'] += $value['biaya'];
						$this->data['actMonths'][$act['id']][$i]['fisik'] += $value['fisik'];
						$this->data['moneysMonths'][$i] += $value['biaya'];
						$this->data['moneysMonthsP'][$i] += $value['biayaP'];
						$this->data['fisikMonths'][$i] += $value['fisik'];
						$fisik_kumulatif+= $value['fisik'];
						$moneys_kumulatif+= $value['biaya'];
						$moneys_kumulatifP+= $value['biayaP'];
					}
					
				}

			}
			foreach($this->data['allStages'] as $stage){
				$temp = $this->ModelRMPSDKPlanStage->getByMonthRMP($stage['id'],($i+1)); //Model Edited
				
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
					$this->data['stageMonths'][$stage['id']][$i]['biaya'] = 0;
					$this->data['stageMonths'][$stage['id']][$i]['fisik'] = 0;
					foreach ($temp as $value) {
						$this->data['stageMonths'][$stage['id']][$i]['biaya'] += $value['biaya'];
						$this->data['stageMonths'][$stage['id']][$i]['fisik'] += $value['fisik'];
						$this->data['moneysMonths'][$i] += $value['biaya'];
						$this->data['moneysMonthsP'][$i] += $value['biayaP'];
						$this->data['fisikMonths'][$i] += $value['fisik'];
						$fisik_kumulatif+= $value['fisik'];
						$moneys_kumulatif+= $value['biaya'];
						$moneys_kumulatifP+= $value['biayaP'];
					}
				}else{
					$this->data['stageMonths'][$stage['id']][$i]['biaya'] = "x";
				}
			}

			$this->data['moneysMonthsKumulatif'][$i] = $moneys_kumulatif;
			$this->data['fisikMonthsKumulatif'][$i] = $fisik_kumulatif;
			$this->data['moneysMonthsKumulatifP'][$i] = $moneys_kumulatifP;
		}
		$this->data['moneysP'] = $moneys_kumulatifP;
		$this->data['fisikP'] = $fisik_kumulatif;
		$this->data['moneysKumulatif'] = $moneys_kumulatif;
		$this->data['sisa'] -= $moneys_kumulatif;
		$convert = array('A'=>0,'B'=>1,'C'=>2);
		for($i=0;$i<3;$i++){
			$this->data['total'][$i] = 0;
			$this->data['totalP'][$i] = 0;
			$this->data['totalF'][$i] = 0;
			$kk=0;
			foreach($this->data['allAct'] as $act){
				
				if($convert[$act['parent']] == $i){
					$temp = $this->ModelRMPSDKPlanAct->getByActTotal($act['id']); //edited model
					if($temp->num_rows() != 0){
						$temp = $temp->result_array();
						$this->data['actTotal'][$act['id']]['biaya'] = $temp[0]['biaya'];
						$this->data['actTotal'][$act['id']]['biayaP'] = $temp[0]['biayaP'];
						$this->data['actTotal'][$act['id']]['fisik'] = $temp[0]['fisik'];
						$this->data['actTotal'][$act['id']]['hchild'] = 0;
						$this->data['total'][$i] += $temp[0]['biaya'];
						$this->data['totalP'][$i] += $temp[0]['biayaP'];
						$this->data['totalF'][$i] += $temp[0]['fisik'];
					}
					foreach($this->data['allStages'] as $stage){
						if($stage['act_id'] == $act['id']){
							$this->data['actTotal'][$act['id']]['hchild'] = 1;
							$temp = $this->ModelRMPSDKPlanStage->getByStageTotal($stage['id']); //edited model
							if($temp->num_rows() != 0){

								$temp = $temp->result_array();
								$this->data['actTotal'][$stage['act_id']]['biaya'] += $temp[0]['biaya'];
								$this->data['actTotal'][$stage['act_id']]['biayaP'] += $temp[0]['biayaP'];
								$this->data['actTotal'][$stage['act_id']]['fisik'] += $temp[0]['fisik'];
								$this->data['stageTotal'][$stage['id']]['biaya'] = $temp[0]['biaya'];
								$this->data['stageTotal'][$stage['id']]['biayaP'] = $temp[0]['biayaP'];
								$this->data['stageTotal'][$stage['id']]['fisik'] = $temp[0]['fisik'];
								$this->data['total'][$i] += $temp[0]['biaya'];
								$this->data['totalP'][$i] += $temp[0]['biayaP'];
								$this->data['totalF'][$i] += $temp[0]['fisik'];
							}
						}
					}
				}
				$kk++;
			}
		}		
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran3',$this->data);
		$this->load->view('templates/footerLamp3',$this->foot);		
	}

	public function addBobotAct($idk){
		$post = $this->input->post();

		$temp = $this->ModelRMPSDKPlanAct->getActPlanByAMS($post['act_id'],$post['month'],$post['sdk_id']); //edited model
		if($temp->num_rows() == 0){
			// echo $post['act_id'];
			$this->ModelRMPSDKPlanAct->insert($post);
			// var_dump($post);
		}else{
			$temp = $temp->result_array();
			// print_r($temp);
			$this->ModelRMPSDKPlanAct->update($temp[0]['id'],$post);

		}
		$biaya = $this->ModelRMPSDKPlanAct->getTotalByIdAct($post['act_id']);

		// echo $biaya;
		$data = array('anggaran' => $biaya, );
		$this->ModelRMPAct->update($post['act_id'],$data);
		redirect('Temporary/att3/'.$idk);
	}

	public function addBobotStage($idk){
		$post = $this->input->post();

		$temp = $this->ModelRMPSDKPlanStage->getStagePlanByAMS($post['stage_id'],$post['month'],$post['sdk_id']); //edited model
		if($temp->num_rows() == 0){
			// echo $post['act_id'];
			$this->ModelRMPSDKPlanStage->insert($post);
			// var_dump($post);
		}else{
			$temp = $temp->result_array();
			// print_r($temp);
			$this->ModelRMPSDKPlanStage->update($temp[0]['id'],$post);

		}
		$biaya = $this->ModelRMPSDKPlanStage->getTotalByIdStage($post['stage_id']);

		// echo $biaya;
		$data = array('anggaran' => $biaya, );
		$this->ModelRMPStages->update($post['stage_id'],$data);
		// var_dump($post);
		redirect('Temporary/att3/'.$idk);
	}

	public function getSDKsisa($id_sdk,$month,$act_id){
		$x = $this->ModelRMPSDKPlanAct->getSisaSDK($id_sdk,$month,$act_id); //edited model
		echo json_encode($x);
	}

	public function getSDKsisaStage($id_sdk,$month,$stage_id){
		$x = $this->ModelRMPSDKPlanStage->getSisaSDK($id_sdk,$month,$stage_id); //edited model
		echo json_encode($x);
	}

	public function getSDKAct($id,$month){
		$x = $this->ModelRMPSDKPlanAct->selectByActIdMonth($id,$month)->result_array();
		echo json_encode($x);
	}

	public function deleteActPlan($id,$act_id){
		$x = $this->ModelRMPSDKPlanAct->delete($id);
		$biaya = $this->ModelRMPSDKPlanAct->getTotalByIdAct($act_id);

		// echo $biaya;
		$data = array('anggaran' => $biaya, );
		$this->ModelRMPAct->update($act_id,$data);
		header("Location: " . $_SERVER["HTTP_REFERER"]);

	}

	public function getSDKStage($id,$month){
		$x = $this->ModelRMPSDKPlanStage->selectByStageIdMonth($id,$month)->result_array();
		echo json_encode($x);
	}

	public function deleteStagePlan($id,$stage_id){
		$x = $this->ModelRMPSDKPlanStage->delete($id);
		$biaya = $this->ModelRMPSDKPlanStage->getTotalByIdStage($stage_id);

		// echo $biaya;
		$data = array('anggaran' => $biaya, );
		$this->ModelRMPStages->update($stage_id,$data); //edited model
		header("Location: " . $_SERVER["HTTP_REFERER"]);

	}

	// ini Report PDF lampiran 3
	public function lampiran3($idk = NULL){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['sisa'] = $this->data['row']['pagu'];

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();		
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
		$this->data['idk'] = $idk;	//add ahmad 
		$this->data['actTotal'] = array();
		$this->data['stageTotal'] = array();
		$this->data['moneysMonths'] = array();
		$this->data['moneysMonthsP'] = array();
		$this->data['moneysMonthsKumulatif'] = array();
		$this->data['moneysMonthsKumulatifP'] = array();
		$this->data['actMonths'] = array();
		$this->data['fisikMonths'] = array();
		$this->data['fisikMonthsKumulatif'] = array();
		$this->data['stageMonths'] = array();
		$this->data['moneysKumulatif'] = 0;
		$this->data['moneysP'] = 0;
		$this->data['fisikP'] = 0;
		$fisik_kumulatif = 0;
		$moneys_kumulatif = 0;
		$moneys_kumulatifP = 0;

		for ($i=0; $i < 12; $i++) {
			$this->data['fisikMonths'][$i] = 0;
			$this->data['moneysMonths'][$i] = 0;
			$this->data['moneysMonthsP'][$i] = 0;
			foreach($this->data['allAct'] as $act){
				$temp = $this->ModelRMPSDKPlanAct->getByMonthRMP($act['id'],($i+1)); //Model Edited
				if($temp->num_rows() == 0){
					$this->data['actMonths'][$act['id']][$i]['biaya'] = "x";
				}else{
					$temp = $temp->result_array();
					$this->data['actMonths'][$act['id']][$i]['biaya'] = 0;
					$this->data['actMonths'][$act['id']][$i]['fisik'] = 0;
					foreach ($temp as $value) {
						$this->data['actMonths'][$act['id']][$i]['biaya'] += $value['biaya'];
						$this->data['actMonths'][$act['id']][$i]['fisik'] += $value['fisik'];
						$this->data['moneysMonths'][$i] += $value['biaya'];
						$this->data['moneysMonthsP'][$i] += $value['biayaP'];
						$this->data['fisikMonths'][$i] += $value['fisik'];
						$fisik_kumulatif+= $value['fisik'];
						$moneys_kumulatif+= $value['biaya'];
						$moneys_kumulatifP+= $value['biayaP'];
					}
					
				}

			}
			foreach($this->data['allStages'] as $stage){
				$temp = $this->ModelRMPSDKPlanStage->getByMonthRMP($stage['id'],($i+1)); //Model Edited
				
				if($temp->num_rows() != 0){
					$temp = $temp->result_array();
					$this->data['stageMonths'][$stage['id']][$i]['biaya'] = 0;
					$this->data['stageMonths'][$stage['id']][$i]['fisik'] = 0;
					foreach ($temp as $value) {
						$this->data['stageMonths'][$stage['id']][$i]['biaya'] += $value['biaya'];
						$this->data['stageMonths'][$stage['id']][$i]['fisik'] += $value['fisik'];
						$this->data['moneysMonths'][$i] += $value['biaya'];
						$this->data['moneysMonthsP'][$i] += $value['biayaP'];
						$this->data['fisikMonths'][$i] += $value['fisik'];
						$fisik_kumulatif+= $value['fisik'];
						$moneys_kumulatif+= $value['biaya'];
						$moneys_kumulatifP+= $value['biayaP'];
					}
				}else{
					$this->data['stageMonths'][$stage['id']][$i]['biaya'] = "x";
				}
			}

			$this->data['moneysMonthsKumulatif'][$i] = $moneys_kumulatif;
			$this->data['fisikMonthsKumulatif'][$i] = $fisik_kumulatif;
			$this->data['moneysMonthsKumulatifP'][$i] = $moneys_kumulatifP;
		}
		$this->data['moneysP'] = $moneys_kumulatifP;
		$this->data['fisikP'] = $fisik_kumulatif;
		$this->data['moneysKumulatif'] = $moneys_kumulatif;
		$this->data['sisa'] -= $moneys_kumulatif;
		$convert = array('A'=>0,'B'=>1,'C'=>2);
		for($i=0;$i<3;$i++){
			$this->data['total'][$i] = 0;
			$this->data['totalP'][$i] = 0;
			$this->data['totalF'][$i] = 0;
			$kk=0;
			foreach($this->data['allAct'] as $act){
				
				if($convert[$act['parent']] == $i){
					$temp = $this->ModelRMPSDKPlanAct->getByActTotal($act['id']); //edited model
					if($temp->num_rows() != 0){
						$temp = $temp->result_array();
						$this->data['actTotal'][$act['id']]['biaya'] = $temp[0]['biaya'];
						$this->data['actTotal'][$act['id']]['biayaP'] = $temp[0]['biayaP'];
						$this->data['actTotal'][$act['id']]['fisik'] = $temp[0]['fisik'];
						$this->data['actTotal'][$act['id']]['hchild'] = 0;
						$this->data['total'][$i] += $temp[0]['biaya'];
						$this->data['totalP'][$i] += $temp[0]['biayaP'];
						$this->data['totalF'][$i] += $temp[0]['fisik'];
					}
					foreach($this->data['allStages'] as $stage){
						if($stage['act_id'] == $act['id']){
							$this->data['actTotal'][$act['id']]['hchild'] = 1;
							$temp = $this->ModelRMPSDKPlanStage->getByStageTotal($stage['id']); //edited model
							if($temp->num_rows() != 0){

								$temp = $temp->result_array();
								$this->data['actTotal'][$stage['act_id']]['biaya'] += $temp[0]['biaya'];
								$this->data['actTotal'][$stage['act_id']]['biayaP'] += $temp[0]['biayaP'];
								$this->data['actTotal'][$stage['act_id']]['fisik'] += $temp[0]['fisik'];
								$this->data['stageTotal'][$stage['id']]['biaya'] = $temp[0]['biaya'];
								$this->data['stageTotal'][$stage['id']]['biayaP'] = $temp[0]['biayaP'];
								$this->data['stageTotal'][$stage['id']]['fisik'] = $temp[0]['fisik'];
								$this->data['total'][$i] += $temp[0]['biaya'];
								$this->data['totalP'][$i] += $temp[0]['biayaP'];
								$this->data['totalF'][$i] += $temp[0]['fisik'];
							}
						}
					}
				}
				$kk++;
			}
		}		
		// print_r($this->data['actMonths']);
		// $this->load->view('Report/lampiran3',$this->data);

		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L', 'default_font' => 'Calibri']);
	    $mpdf->SetTitle("Lampiran 3");
	    $mpdf->SetAuthor("Ahmad Zainal Abiddin");
	    $mpdf->SetDisplayMode('fullpage');// Isi
	    // $mpdf->AddPage('L','','','','',kiri,kanan,atas,bawah,?,?);
	    $mpdf->AddPage('L','','','','',10,15,10,10,5,5);
	    #$mpdf->WriteHTML($style);
	   	$mpdf->SetLineWidth(2);
	   	$mpdf->SetDrawColor(249, 0, 0);
	   	$xPastF = 185;
	   	$yPastF = 225;
	   	$xPastM = 185;
	   	$yPastM = 225;
	   	$yText = 225;
	   	$pText = 0;
		$mpdf->Circle($xPastF,$yPastF,1);
	   	$mpdf->Text(405,$yText,$pText);
	   	for ($i=0; $i < 12; $i++) {
	   		$x = $xPastM + 18;;
		   	$mpdf->SetDrawColor(0, 83, 249);
		   	// $mpdf->SetDrawColor(249, 0, 0);
   			$y = 225-($this->data['moneysMonthsKumulatifP'][$i]/100 * 175);
   			$mpdf->Line($xPastM, $yPastM, $x, $y);
   			$mpdf->Circle($x,$y,1);
   			$xPastM = $x;
   			$yPastM = $y;

   			$x = $xPastF + 18;;
		   	$mpdf->SetDrawColor(249, 0, 0);
   			$y = 225-($this->data['fisikMonthsKumulatif'][$i]/100 * 175);
   			$mpdf->Line($xPastF, $yPastF, $x, $y);
		   	// $mpdf->SetDrawColor(0, 83, 249);
   			$mpdf->Circle($x,$y,1);
   			$xPastF = $x;
   			$yPastF = $y;
   			if($i<10){
	   			$yText-=17.5;
	   			$pText+=10;
		   		$mpdf->Text(405,$yText,$pText);
   			}
	   	}
	   	// $mpdf->Line(50, 200, 100, 180);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(100, 180, 150, 30);
	   	// $mpdf->Line(255, 200, 400, 50);

	   	// 410 - 185 = 225 ~ 100
	   	// 225 - 50 = 175 ~ 100
	   	// 215/12 = 



	    $html = $this->load->view('Report/lampiran3',$this->data, true);
	    $mpdf->WriteHTML($html);

	    // $mpdf->AddPage('L','','','','',10,10,10,10,5,5);
	    // A3 ~ 420mm 370mm
	    $pdfFilePath = "Lampiran_3".$this->session->userdata('id')."_".$idk."_".$this->data['row']['id'].".pdf";
	    $mpdf->Output($pdfFilePath,"D");
		
	}


	public function getJmlRmpSdkMonths($minggu, $id_rmp_sdk){
		$x = $this->ModelMnvKeuangan->selectByRmpSdkMonths($minggu, $id_rmp_sdk)->result_array();
		echo json_encode($x);
	}

	public function getFisikDetail($id_refer,$minggu, $type){
		$x = $this->ModelMnvFisik->getDetail($id_refer,$minggu, $type)->result_array();
		echo json_encode($x);
	}

	public function getAPI(){
		$URL = 'http://emonitoring.pu.go.id/pusair_akun/'; //  Like "http:// ...."
		$FileToSave = '/api_file';     //  Like "/home/.." or "C:/..."
		$Content = file_get_contents($URL);
		echo $FileToSave;
		echo file_put_contents($FileToSave, $Content);
		// $data = fopen('/api_file/*', "r");
		// $rangekeg = count($data);
		// var_dump($data);
		// echo $rangekeg;
	}

	
}
