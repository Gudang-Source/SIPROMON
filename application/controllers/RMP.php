<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RMP extends CI_Controller {
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
		$this->load->view('rmp/satu');
		$this->load->view('templates/footer');
	}
	public function status($id = NULL){
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
		$this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('rmp/status',$this->data);
		$this->load->view('templates/footer');
	}
	public function generalEdit($model, $id){
		$x = $this->$model->selectById($id)->row();
		print_r(json_encode($x));
	}
	public function updateStatus($id,$stats){
		$this->ModelKegiatan->update($id,['rmp_stats' => $stats]);
		redirect('RMP/Status/'.$id);
	}
	public function judul($id = NULL){
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
		$this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('rmp/judul',$this->data);
		$this->load->view('templates/footer');
	}
	public function rekap($id = NULL){
		$this->data['row'] = $this->ModelKegiatan->selectAllKegiatanById($id)->row_array();
		$this->data['row']['pengesah'] = $this->ModelEmployee->selectById(1)->row_array()['name'];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('rmp/rekap',$this->data);
		$this->load->view('templates/footer');
	}
	public function satu($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/satu/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/satu',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function dua($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/dua/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/dua',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function tiga($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);

			//Upload file bagan alir
			$config['upload_path']		= './assets/uploads/baganalir';
			$config['allowed_types']	= 'jpg|jpeg|png';
			$config['max_size']			= 0;				
			date_default_timezone_set("Asia/Bangkok");
			$config['file_name']		= "baganalir_".time();
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('baganalir')){
				/*Jika Gagal Upload*/
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/tiga/'.$id);
			} else{
				$post['baganalir'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/tiga/'.$id);
			}			
			
			// $this->ModelRMP->update($idr,$post);
			// redirect('RMP/tiga/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->data['swots'] = $this->ModelRMPSwot->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['anals'] = $this->ModelRMPAnalisis->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();
			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/tiga',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function empat($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			//Upload file struktur
			$config['upload_path']		= './assets/uploads/strukturorg';
			$config['allowed_types']	= 'jpg|jpeg|png';
			$config['max_size']			= 0;				
			date_default_timezone_set("Asia/Bangkok");
			$config['file_name']		= "strukturorg_".time();
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('strukturorg')){
				/*Jika Gagal Upload*/
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/empat/'.$id);
			} else{
				$post['strukturorg'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/empat/'.$id);
			}			
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->data['allsdm'] = $this->ModelRMPSDM->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['allsdk'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
			$pagu = 0;
			foreach($this->data['allsdk'] as $money){
				$pagu+=(int) $money['biaya'];
			}
			// var_dump($this->data['allsdm']);
			$this->data['positions'] = $this->ModelRMPPosition->selectAll()->result_array();
			$this->data['satker'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
			$this->ModelKegiatan->update($id,['pagu'=>$pagu]);
			$this->data['pagu'] = $pagu;
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/empat',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	// public function lima($id = NULL){
	// 	if($this->input->post() != NULL){
	// 		$post = $this->input->post();
	// 		$idr = $post['id'];
	// 		unset($post['id']);

	// 		//Upload file struktur
	// 		$config['upload_path']		= './assets/uploads/strukturorg';
	// 		$config['allowed_types']	= 'jpg|png|gif';
	// 		$config['max_size']			= 0;				
	// 		date_default_timezone_set("Asia/Bangkok");
	// 		$config['file_name']		= "Strukturorg_".time();
	// 		$this->load->library('upload', $config);
	// 		if(!$this->upload->do_upload('strukturorg')){
	// 			/*Jika Gagal Upload*/
	// 			$error = array('error' => $this->upload->display_errors());
	// 			var_dump($error);
	// 		} else{
	// 			$post['strukturorg'] = $config['file_name'].$this->upload->data('file_ext');
	// 			$this->ModelRMP->update($idr,$post);
	// 			redirect('RMP/lima/'.$id);
	// 		}			
	// 	}else{
	// 		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 		// var_dump($this->data['row']);
	// 		$this->load->view('templates/header',$this->head);
	// 		$this->load->view('templates/sidebar',$this->side);
	// 		$this->load->view('rmp/lima',$this->data);
	// 		$this->load->view('templates/footer',$this->foot);
	// 	}
	// }	
	// public function enam($id = NULL){
	// 	$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 	$this->data['all'] = $this->ModelRMPRoles->selectByIdRMP($this->data['row']['id'])->result_array();
	// 	$this->load->view('templates/header',$this->head);
	// 	$this->load->view('templates/sidebar',$this->side);
	// 	$this->load->view('rmp/enam',$this->data);
	// 	$this->load->view('templates/footer',$this->foot);
	// }
	public function addRole($idk){
		$post = $this->input->post();
		$this->ModelRMPRoles->insert($post);
		redirect('RMP/enam/'.$idk);
	}
	public function deleteRole($deleted,$idk){
		$this->ModelRMPRoles->delete($deleted);
		redirect('RMP/enam/'.$idk);
	}
	// public function tujuh($id = NULL){
	// 	if($this->input->post() != NULL){
	// 		$post = $this->input->post();
	// 		$idr = $post['id'];
	// 		unset($post['id']);
	// 		$this->ModelRMP->update($idr,$post);
	// 		redirect('RMP/tujuh/'.$id);
	// 	}else{
	// 		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 		$this->data['allsdm'] = $this->ModelRMPSDM->selectByIdRMP($this->data['row']['id'])->result_array();
	// 		$this->data['allsdk'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
	// 		$pagu = 0;
	// 		foreach($this->data['allsdk'] as $money){
	// 			$pagu+=(int) $money['biaya'];
	// 		}
	// 		$this->data['satker'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
	// 		// var_dump($this->session->all_userdata());
	// 		// var_dump($this->data['satker']);
	// 		$this->ModelKegiatan->update($id,['pagu'=>$pagu]);
	// 		$this->data['pagu'] = $pagu;
	// 		$this->load->view('templates/header',$this->head);
	// 		$this->load->view('templates/sidebar',$this->side);
	// 		$this->load->view('rmp/tujuh',$this->data);
	// 		$this->load->view('templates/footer',$this->foot);
	// 	}
	// }
	public function addSDM($idk){
		$post = $this->input->post();
		$this->ModelRMPSDM->insert($post);
		redirect('RMP/empat/'.$idk.'/sdm');
	}
	public function deleteSDM($deleted,$idk){
		$this->ModelRMPSDM->delete($deleted);
		redirect('RMP/empat/'.$idk.'/sdm');
	}	
	public function addSDK($idk){
		$post = $this->input->post();
		if($post['sdk_id'] != ""){
			$id = $post['sdk_id'];
			unset($post['sdk_id']);
			$this->ModelRMPSDK->update($id,$post);
		}else{
			unset($post['sdk_id']);
			$this->ModelRMPSDK->insert($post);
		}
		redirect('RMP/att1/'.$idk.'/sdk');
	}
	public function deleteSDK($deleted,$idk){
		$this->ModelRMPSDK->delete($deleted);
		redirect('RMP/att1/'.$idk.'/sdk');
	}
	public function fulfillSDK($idk){
		$this->ModelKegiatan->update($idk,$this->input->post());
		redirect('RMP/att1/'.$idk.'/sdk');
	}	
	public function addAct($idk){
		$post = $this->input->post();
		if($post['act_id'] != ""){
			$id = $post['act_id'];
			unset($post['act_id']);
			$this->ModelRMPAct->update($id,$post);
		}else{
			unset($post['act_id']);
			$this->ModelRMPAct->insert($post);
		}
		redirect('RMP/tiga/'.$idk.'/keg');
	}
	public function deleteAct($deleted,$idk){
		$this->ModelRMPAct->delete($deleted);
		redirect('RMP/tiga/'.$idk.'/keg');
	}			
	// public function delapan($id = NULL){
	// 	if($this->input->post() != NULL){
	// 		$post = $this->input->post();
	// 		$idr = $post['id'];
	// 		unset($post['id']);

	// 		//Upload file struktur
	// 		$config['upload_path']		= './assets/uploads/baganalir';
	// 		$config['allowed_types']	= 'jpg|png|gif';
	// 		$config['max_size']			= 0;				
	// 		date_default_timezone_set("Asia/Bangkok");
	// 		$config['file_name']		= "baganalir_".time();
	// 		$this->load->library('upload', $config);
	// 		if(!$this->upload->do_upload('baganalir')){
	// 			/*Jika Gagal Upload*/
	// 			$error = array('error' => $this->upload->display_errors());
	// 			var_dump($error);
	// 		} else{
	// 			$post['baganalir'] = $config['file_name'].$this->upload->data('file_ext');
	// 			$this->ModelRMP->update($idr,$post);
	// 			redirect('RMP/delapan/'.$id);
	// 		}			
	// 	}else{
	// 		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
	// 		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();

	// 		// var_dump($this->data['row']);
	// 		$this->load->view('templates/header',$this->head);
	// 		$this->load->view('templates/sidebar',$this->side);
	// 		$this->load->view('rmp/delapan',$this->data);
	// 		$this->load->view('templates/footer',$this->foot);
	// 	}
	// }
	public function addStages($idk){
		$post = $this->input->post();
		// var_dump($post);
		if($post['stages_id'] != ""){
			$id = $post['stages_id'];
			unset($post['stages_id']);
			$this->ModelRMPStages->update($id,$post);
		}else{
			unset($post['stages_id']);
			$this->ModelRMPStages->insert($post);
		}
		redirect('RMP/tiga/'.$idk.'/keg');
	}
	public function deleteStages($deleted,$idk){
		$this->ModelRMPStages->delete($deleted);
		redirect('RMP/tiga/'.$idk.'/keg');
	}
	// public function sembilan($id = NULL){
	// 	if($this->input->post() != NULL){
	// 		$post = $this->input->post();
	// 		$idr = $post['id'];
	// 		unset($post['id']);
	// 		$this->ModelRMP->update($idr,$post);
	// 		redirect('RMP/sembilan/'.$id);
	// 	}else{
	// 		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 		$this->load->view('templates/header',$this->head);
	// 		$this->load->view('templates/sidebar',$this->side);
	// 		$this->load->view('rmp/sembilan',$this->data);
	// 		$this->load->view('templates/footer',$this->foot);
	// 	}		
	// }
	// public function tigabelas($id= NULL){
	// 	if($this->input->post() != NULL){
	// 		$post = $this->input->post();
	// 		$idr = $post['id'];
	// 		unset($post['id']);
	// 		$this->ModelRMP->update($idr,$post);
	// 		redirect('RMP/sembilan/'.$id);
	// 	}else{
	// 		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
	// 		$this->data['documents'] = $this->ModelRMPDocument->selectByIdRMP($this->data['row']['id'])->result_array();
	// 		// var_dump($this->data['documents']);
	// 		$this->load->view('templates/header',$this->head);
	// 		$this->load->view('templates/sidebar',$this->side);
	// 		$this->load->view('rmp/tigabelas',$this->data);
	// 		$this->load->view('templates/footer',$this->foot);
	// 	}		
	// }
	public function addDocument($idk){
		$post = $this->input->post();
		if($post['document_id'] != ""){
			$id = $post['document_id'];
			unset($post['document_id']);
			$this->ModelRMPDocument->update($id,$post);
		}else{
			unset($post['document_id']);
			$this->ModelRMPDocument->insert($post);
		}
		redirect('RMP/tiga/'.$idk);
	}
	public function deleteDocument($deleted,$idk){
		$this->ModelRMPDocument->delete($deleted);
		redirect('RMP/tiga/'.$idk.'/doc');
	}		
	public function addSwot($idk){
		$post = $this->input->post();
		if($post['swot_id'] != ""){
			$id = $post['swot_id'];
			unset($post['swot_id']);
			$this->ModelRMPSwot->update($id,$post);
		}else{
			unset($post['swot_id']);
			$this->ModelRMPSwot->insert($post);
		}
		redirect('RMP/tiga/'.$idk.'/swot');
	}
	public function deleteSwot($deleted,$idk){
		$this->ModelRMPSwot->delete($deleted);
		redirect('RMP/tiga/'.$idk.'/peta');
	}			
	public function addAnalisis($idk){
		$post = $this->input->post();
		if($post['anal_id'] != ""){
			$id = $post['anal_id'];
			unset($post['anal_id']);
			$this->ModelRMPAnalisis->update($id,$post);
		}else{
			unset($post['anal_id']);
			$this->ModelRMPAnalisis->insert($post);
		}
		redirect('RMP/tiga/'.$idk.'/anal');
	}
	public function deleteAnalisis($deleted,$idk){
		$this->ModelRMPAnalisis->delete($deleted);
		redirect('RMP/tiga/'.$idk.'/peta');
	}				

	public function addRecord($idk){
		$temppost = $this->input->post();
		$post['record_name'] = $temppost['record_name'];
		$post['location'] = "Lemari No ".$temppost['lemari']."<br/>".$temppost['pj'];
		$post['period']	= "Aktif : ".$temppost['aktif']." Tahun<br/>Inaktif : ".$temppost['inaktif']." Tahun";
		$post['rmp_id'] = $temppost['rmp_id'];	
		if($temppost['record_id'] != ""){
			$id = $temppost['record_id'];
			// unset($temppost['document_id']);
			$this->ModelRMPRec->update($id,$post);
		}else{
			$this->ModelRMPRec->insert($post);
		}
		redirect('RMP/tiga/'.$idk.'/rec');
	}
	public function deleteRecord($deleted,$idk){
		$this->ModelRMPRec->delete($deleted);
		redirect('RMP/empatbelas/'.$idk);
	}			
	public function limabelas($id= NULL){
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
		$this->data['bibs'] = $this->ModelRMPBib->selectByIdRMP($this->data['row']['id'])->result_array();
		// var_dump($this->data['documents']);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/limabelas',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}
	public function addBib($idk){
		$post = $this->input->post();
		$this->ModelRMPBib->insert($post);
		redirect('RMP/limabelas/'.$idk);
	}
	public function deleteBib($deleted,$idk){
		$this->ModelRMPBib->delete($deleted);
		redirect('RMP/limabelas/'.$idk);
	}

	public function att1($idk){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
		// var_dump($this->data['row']);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran1',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}

	public function fulfillAtt1($idk){
		$this->ModelKegiatan->update($idk,$this->input->post());
		redirect('RMP/att1/'.$idk);
	}
	public function addSDKTitle($idk){
		$post = $this->input->post();
		$post['total'] = $post['jml'] * $post['satuan'];
		$this->ModelRMPSDKTitle->insert($post);
		redirect('RMP/att1/'.$idk);
	}
	public function deleteSDKTitle($id_sdk_title,$idk){
		$this->ModelRMPSDKTitle->delete($id_sdk_title);
		redirect('RMP/att1/'.$idk);
	} 
	public function att2($idk){
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['row2'] = $this->ModelKegiatan->selectAllKegiatanById($idk)->row_array();
		$this->data['kapus'] = $this->ModelEmployee->selectById(1)->row_array(); 

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allActExe'] = $this->ModelRMPActExe->selectAll()->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();		
		$this->data['allStageExe'] = $this->ModelRMPStagesExe->selectAll()->result_array();

		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran2',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}
	public function addDetailAct($idk){
		$post = $this->input->post();

		if(!empty($post['sarpras'])) $upd['sarpras'] = $post['sarpras'];
		if(!empty($post['hasil'])) $upd['hasil'] = $post['hasil'];
		if(!empty($post['metode'])) $upd['metode'] = $post['metode'];
		if(!empty($post['kriteria'])) $upd['kriteria'] = $post['kriteria'];
		if(!empty($post['pj'])) $upd['pj'] = $post['pj'];
		if(!empty($post['start'])){
			$upd['waktu'] = $post['start'];
			$upd['waktu'] .= "-";
			$upd['waktu'] .= $post['end'];
		}
		/*Delete ALl FIRST*/
		$inquiry = $this->ModelRMPActExe->selectByIdAct($post['activity_id'])->result_array();
		if($inquiry != NULL){
			foreach($inquiry as $inq){
				$this->ModelRMPActExe->delete($inq['id']);
			}
		}
		if(!empty($post['pelaksana'])){
			foreach($post['pelaksana'] as $pelaksana){
				$this->ModelRMPActExe->insert(['rmp_activity_id'=>$post['activity_id'],'name'=>$pelaksana]);
			}
		} 
		$this->ModelRMPAct->update($post['activity_id'],$upd);
		redirect('RMP/att2/'.$idk);
	}
	public function addDetailStage($idk){
		$post = $this->input->post();
		if(!empty($post['sarpras'])) $upd['sarpras'] = $post['sarpras'];
		if(!empty($post['hasil'])) $upd['hasil'] = $post['hasil'];
		if(!empty($post['metode'])) $upd['metode'] = $post['metode'];
		if(!empty($post['kriteria'])) $upd['kriteria'] = $post['kriteria'];
		if(!empty($post['pj'])) $upd['pj'] = $post['pj'];
		/*Delete ALl FIRST*/
		$inquiry = $this->ModelRMPStagesExe->selectByIdStages($post['stages_id'])->result_array();
		if($inquiry != NULL){
			foreach($inquiry as $inq){
				$this->ModelRMPStagesExe->delete($inq['id']);
			}
		}
		if(!empty($post['start'])){
			$upd['waktu'] = $post['start'];
			$upd['waktu'] .= "-";
			$upd['waktu'] .= $post['end'];
		}
		if(!empty($post['pelaksana'])){
			foreach($post['pelaksana'] as $pelaksana){
				$this->ModelRMPStagesExe->insert(['rmp_stages_id'=>$post['stages_id'],'name'=>$pelaksana]);
			}
		}
		$this->ModelRMPStages->update($post['stages_id'],$upd);
		redirect('RMP/att2/'.$idk);
	}	
	public function att3($idk){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['sisaFisik'] = 100;
		$this->data['sisa'] = $this->data['row']['pagu'];

		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allStages'] = $this->ModelRMPStages->selectByRMP($this->data['row']['id'])->result_array();			
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
		$this->data['sisaFisik'] -= $fisik_kumulatif;
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
		$temp = $this->ModelKegiatan->selectProgres($idk);

		if($temp[0]['t_keuangan'] != $this->data['moneysP'] || $temp[0]['t_fisik'] != $this->data['fisikP']){
			$data_temp = array(
				't_keuangan' => $this->data['moneysP'], 
				't_fisik' => $this->data['fisikP'], 
				);
			$this->ModelKegiatan->update($idk,$data_temp);
		}
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran3',$this->data);
		$this->load->view('templates/footerLamp3',$this->foot);		
	}


	public function addBobotAct($idk){
		$post = $this->input->post();

		$temp = $this->ModelRMPSDKPlanAct->getActPlanByAMK($post['act_id'],$post['month'],$post['id_kegiatan']); //edited model
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
		redirect('RMP/att3/'.$idk);
	}

	public function addBobotStage($idk){
		$post = $this->input->post();

		$temp = $this->ModelRMPSDKPlanStage->getStagePlanByAMK($post['stage_id'],$post['month'],$post['id_kegiatan']); //edited model
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
		redirect('RMP/att3/'.$idk);
	}

	public function getSisaPagu($pagu,$month,$act_id,$id_kegiatan){
		$x = $this->ModelRMPSDKPlanAct->getSisaPagu($pagu,$month,$act_id,$id_kegiatan); //edited model
		echo json_encode($x);
	}

	public function getSisaPaguStage($pagu,$month,$stage_id,$id_kegiatan){
		$x = $this->ModelRMPSDKPlanStage->getSisaPagu($pagu,$month,$stage_id,$id_kegiatan); //edited model
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

	public function att4($idk){
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();		
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran4',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}		

	public function uploadAtt($idk){
		$form = $this->input->post();
		$config2['upload_path']		= './assets/attachment/';
		$config2['allowed_types']	= 'pdf';
		$config2['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config2['file_name']		= "JadwalPersonil_".time();
		$this->load->library('upload', $config2);
		$stats4 = 0;
		$stats5 = 0;
		if(!$this->upload->do_upload("att4")){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else{
			$stats4 = 1;
		}
		$att4name = $this->upload->data('file_name');
		$config2['file_name']		= "JadwalSarpras	_".(time()+1);
		$this->upload->initialize($config2);
		if(!$this->upload->do_upload("att5")){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else{
			$stats5 = 1;
		}
		$att5name = $this->upload->data('file_name');
		$this->ModelKegiatan->update($idk,['att4'=>$att4name,'att5'=>$att5name]);
		redirect('RMP/att4/'.$idk);
	}
	public function att6($idk){
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran6',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}

	public function end($id){
		/**
		 * RMP Status 
		 * 0 = Susun RMP
		 * 1 = Finish RMP
		 * 2 = Diajukan
		 * 3 = Di Periksa
		 * 4 = Di Sahkan
		 */
		$this->ModelKegiatan->update($id,['rmp_stats'=>'1']);
		redirect('RMP/status/'.$id);
	}
}
