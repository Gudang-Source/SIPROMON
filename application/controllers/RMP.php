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
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/tiga/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
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
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/empat/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/empat',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function lima($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);

			//Upload file struktur
			$config['upload_path']		= './assets/uploads/strukturorg';
			$config['allowed_types']	= 'jpg|png|gif';
			$config['max_size']			= 0;				
			date_default_timezone_set("Asia/Bangkok");
			$config['file_name']		= "Strukturorg_".time();
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('strukturorg')){
				/*Jika Gagal Upload*/
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else{
				$post['strukturorg'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/lima/'.$id);
			}			
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/lima',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}	
	public function enam($id = NULL){
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
		$this->data['all'] = $this->ModelRMPRoles->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/enam',$this->data);
		$this->load->view('templates/footer',$this->foot);
	}
	public function addRole($idk){
		$post = $this->input->post();
		$this->ModelRMPRoles->insert($post);
		redirect('RMP/enam/'.$idk);
	}
	public function deleteRole($deleted,$idk){
		$this->ModelRMPRoles->delete($deleted);
		redirect('RMP/enam/'.$idk);
	}
	public function tujuh($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/tujuh/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->data['allsdm'] = $this->ModelRMPSDM->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['allsdk'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
			$pagu = 0;
			foreach($this->data['allsdk'] as $money){
				$pagu+=(int) $money['biaya'];
			}
			$this->data['satker'] = $this->ModelUser->selectById2($this->session->userdata('id'))->row_array();
			// var_dump($this->session->all_userdata());
			// var_dump($this->data['satker']);
			$this->ModelKegiatan->update($id,['pagu'=>$pagu]);
			$this->data['pagu'] = $pagu;
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/tujuh',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function addSDM($idk){
		$post = $this->input->post();
		$this->ModelRMPSDM->insert($post);
		redirect('RMP/tujuh/'.$idk);
	}
	public function deleteSDM($deleted,$idk){
		$this->ModelRMPSDM->delete($deleted);
		redirect('RMP/tujuh/'.$idk);
	}	
	public function addSDK($idk){
		$post = $this->input->post();
		$this->ModelRMPSDK->insert($post);
		redirect('RMP/tujuh/'.$idk.'/sdk');
	}
	public function deleteSDK($deleted,$idk){
		$this->ModelRMPSDK->delete($deleted);
		redirect('RMP/tujuh/'.$idk.'/sdk');
	}
	public function addAct($idk){
		$post = $this->input->post();
		$this->ModelRMPAct->insert($post);
		redirect('RMP/delapan/'.$idk);
	}
	public function deleteAct($deleted,$idk){
		$this->ModelRMPAct->delete($deleted);
		redirect('RMP/delapan/'.$idk);
	}			
	public function delapan($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);

			//Upload file struktur
			$config['upload_path']		= './assets/uploads/baganalir';
			$config['allowed_types']	= 'jpg|png|gif';
			$config['max_size']			= 0;				
			date_default_timezone_set("Asia/Bangkok");
			$config['file_name']		= "baganalir_".time();
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('baganalir')){
				/*Jika Gagal Upload*/
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else{
				$post['baganalir'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelRMP->update($idr,$post);
				redirect('RMP/delapan/'.$id);
			}			
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
			$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();

			// var_dump($this->data['row']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/delapan',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}
	}
	public function addStages($idk){
		$post = $this->input->post();
		$this->ModelRMPStages->insert($post);
		redirect('RMP/delapan/'.$idk);
	}
	public function deleteStages($deleted,$idk){
		$this->ModelRMPStages->delete($deleted);
		redirect('RMP/delapan/'.$idk);
	}
	public function sembilan($id = NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/sembilan/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/sembilan',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}		
	}
	public function tigabelas($id= NULL){
		if($this->input->post() != NULL){
			$post = $this->input->post();
			$idr = $post['id'];
			unset($post['id']);
			$this->ModelRMP->update($idr,$post);
			redirect('RMP/sembilan/'.$id);
		}else{
			$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
			$this->data['documents'] = $this->ModelRMPDocument->selectByIdRMP($this->data['row']['id'])->result_array();
			// var_dump($this->data['documents']);
			$this->load->view('templates/header',$this->head);
			$this->load->view('templates/sidebar',$this->side);
			$this->load->view('rmp/tigabelas',$this->data);
			$this->load->view('templates/footer',$this->foot);
		}		
	}
	public function addDocument($idk){
		$post = $this->input->post();
		$this->ModelRMPDocument->insert($post);
		redirect('RMP/tigabelas/'.$idk);
	}
	public function deleteDocument($deleted,$idk){
		$this->ModelRMPDocument->delete($deleted);
		redirect('RMP/tigabelas/'.$idk);
	}		
	public function empatbelas($id= NULL){
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($id)->row_array();
		$this->data['records'] = $this->ModelRMPRec->selectByIdRMP($this->data['row']['id'])->result_array();
		// var_dump($this->data['documents']);
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/empatbelas',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}
	public function addRecord($idk){
		$temppost = $this->input->post();
		var_dump($temppost);
		$post['record_name'] = $temppost['record_name'];
		$post['location'] = "Lemari No ".$temppost['lemari']."<br/>".$temppost['pj'];
		$post['period']	= "Aktif : ".$temppost['aktif']." Tahun<br/>Inaktif : ".$temppost['inaktif']." Tahun";
		$post['rmp_id'] = $temppost['rmp_id'];	
		$this->ModelRMPRec->insert($post);
		redirect('RMP/empatbelas/'.$idk);
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
		$this->data['kapus'] = $this->ModelEmployee->selectById(1)->row_array(); 
		$this->data['satker'] = $this->ModelSatker->selectByIdUser($this->session->userdata('id'))->row_array();
		$this->data['row'] = $this->ModelRMP->selectByIdKegiatan($idk)->row_array();
		$this->data['row2'] = $this->ModelKegiatan->selectAllKegiatanById($idk)->row_array();
		$this->data['allAct'] = $this->ModelRMPAct->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['allActExe'] = $this->ModelRMPActExe->selectAll()->result_array();
		$this->data['row']['sisa'] = $this->data['row']['pagu'];
		$this->data['allStages'] = $this->ModelRMPStages->selectAll()->result_array();		
		$this->data['allStageExe'] = $this->ModelRMPStagesExe->selectAll()->result_array();
		/*Counting Sisa Pagu*/
		foreach($this->data['allAct'] as $r){
			$this->data['row']['sisa'] -= $r['anggaran'];
		}
		foreach($this->data['allStages'] as $r){
			$this->data['row']['sisa'] -= $r['anggaran'];
		}
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
		$this->data['moneys'] = $this->ModelRMPSDK->selectByIdRMP($this->data['row']['id'])->result_array();
		$this->data['sdktitles'] = $this->ModelRMPSDKTitle->selectAll()->result_array();
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran2',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}
	public function addDetailAct($idk){
		$post = $this->input->post();

		if(!empty($post['hasil'])) $upd['hasil'] = $post['hasil'];
		if(!empty($post['sarpras'])) $upd['sarpras'] = $post['sarpras'];
		if(!empty($post['anggaran'])) $upd['anggaran'] = $post['anggaran'];
		if(!empty($post['pj'])) $upd['pj'] = $post['pj'];
		if(!empty($post['start'])){
			$upd['waktu'] = strval((4*($post['start'][0]-1))+$post['start'][1]);
			$upd['waktu'] .= "-";
			$upd['waktu'] .= strval((4*($post['end'][0]-1))+$post['end'][1]);
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
		if(!empty($post['hasil'])) $upd['hasil'] = $post['hasil'];
		if(!empty($post['sarpras'])) $upd['sarpras'] = $post['sarpras'];
		if(!empty($post['anggaran'])) $upd['anggaran'] = $post['anggaran'];
		if(!empty($post['pj'])) $upd['pj'] = $post['pj'];
		if(!empty($post['start'])){
			$upd['waktu'] = strval((4*($post['start'][0]-1))+$post['start'][1]);
			$upd['waktu'] .= "-";
			$upd['waktu'] .= strval((4*($post['end'][0]-1))+$post['end'][1]);
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
		$this->load->view('templates/header',$this->head);
		$this->load->view('templates/sidebar',$this->side);
		$this->load->view('rmp/lampiran3',$this->data);
		$this->load->view('templates/footer',$this->foot);		
	}

	public function addBobotAct($idk){
		$post = $this->input->post();
		$this->ModelRMPSDKPlanAct->insert($post);
		// var_dump($post);
		redirect('RMP/att3/'.$idk);
	}

	public function addBobotStage($idk){
		$post = $this->input->post();
		$this->ModelRMPSDKPlanAct->insert($post);

		// var_dump($post);
		redirect('RMP/att3/'.$idk);
	}	
	public function getSDKAct($id){
		$x = $this->ModelRMPSDKPlanAct->selectByActId($id)->result_array();
		echo json_encode($x);
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
