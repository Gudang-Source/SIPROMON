<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRMPSDKPlanAct extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "rmp_sdk_plan_act";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','ASC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}
	public function selectByActId($id){
		$this->db->select('rmp_sdk_plan_act.*');
		// $this->db->select('rmp_sdk_plan_act.*,rmp_sdk.akun,rmp_sdk.jenis');
		$this->db->from($this->tableName);
		// $this->db->join('rmp_sdk','rmp_sdk.id = rmp_sdk_plan_act.sdk_id');
		$this->db->where('act_id',$id);

		return $this->db->get();	
	}

	public function selectByActIdMonth($id,$month){
		$this->db->select('rmp_sdk_plan_act.*');
		// $this->db->select('rmp_sdk_plan_act.*,rmp_sdk.akun,rmp_sdk.jenis');
		$this->db->from($this->tableName);
		// $this->db->join('rmp_sdk','rmp_sdk.id = rmp_sdk_plan_act.sdk_id');
		$this->db->where('act_id ='.$id.' and month='.$month);

		return $this->db->get();	
	}
	public function getByMonthRMP($id,$month){
		$this->db->select('rmp_sdk_plan_act.*');
		// $this->db->select('rmp_sdk_plan_act.*,rmp_sdk.akun,rmp_sdk.jenis');
		$this->db->from($this->tableName);
		// $this->db->join('rmp_sdk','rmp_sdk.id = rmp_sdk_plan_act.sdk_id');
		$this->db->where('act_id ='.$id.' and month='.$month);

		return $this->db->get();
	}

	public function getByActTotal($id){
		$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya, SUM(rmp_sdk_plan_act.biayaP) as biayaP, SUM(rmp_sdk_plan_act.fisik) as fisik');
		$this->db->from($this->tableName);
		$this->db->where('act_id ='.$id);

		return $this->db->get();
	}

	// public function getSisaSDK($id_sdk,$month,$act_id){
	// 	$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya_act');
	// 	$this->db->from($this->tableName);
	// 	$this->db->where('sdk_id='.$id_sdk.' and month='.$month.' and act_id='.$act_id);
	// 	$temp = $this->db->get()->result_array();
	// 	if($temp[0]['biaya_act'] == null){
	// 		$biaya_now = 0;
	// 	}else{
	// 		$biaya_now = $temp[0]['biaya_act'];
	// 	}

	// 	$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya_act');
	// 	$this->db->from($this->tableName);
	// 	$this->db->where('sdk_id='.$id_sdk);
	// 	$temp = $this->db->get()->result_array();
	// 	if($temp[0]['biaya_act'] == null){
	// 		$biaya_act = 0;
	// 	}else{
	// 		$biaya_act = $temp[0]['biaya_act'];
	// 	}

	// 	$this->db->select('SUM(rmp_sdk_plan_stage.biaya) as biaya_stage');
	// 	$this->db->from('rmp_sdk_plan_stage');
	// 	$this->db->where('sdk_id='.$id_sdk);
	// 	$temp = $this->db->get()->result_array();
	// 	if($temp[0]['biaya_stage'] == null){
	// 		$biaya_stage = 0;
	// 	}else{
	// 		$biaya_stage = $temp[0]['biaya_stage'];
	// 	}

	// 	$this->db->select('rmp_sdk.biaya as total');
	// 	$this->db->from('rmp_sdk');
	// 	$this->db->where('id='.$id_sdk);
	// 	$temp = $this->db->get()->result_array();
		
	// 	$biaya['total'] = $temp[0]['total'];

	// 	$biaya['sisa'] = $biaya['total']-($biaya_act+$biaya_stage) + $biaya_now;
	// 	return $biaya;
	// }

	public function getSisaPagu($pagu,$month,$act_id,$id_kegiatan){
		$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya_act, SUM(rmp_sdk_plan_act.fisik) as fisik_act');
		$this->db->from($this->tableName);
		$this->db->where('month='.$month.' and act_id='.$act_id);
		$temp = $this->db->get()->result_array();
		if($temp[0]['biaya_act'] == null){
			$biaya_now = 0;
		}else{
			$biaya_now = $temp[0]['biaya_act'];
		}
		if($temp[0]['fisik_act'] == null){
			$fisik_now = 0;
		}else{
			$fisik_now = $temp[0]['fisik_act'];
		}

		$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya_act, SUM(rmp_sdk_plan_act.fisik) as fisik_act');
		$this->db->from($this->tableName);
		$this->db->where('id_kegiatan='.$id_kegiatan);
		$temp = $this->db->get()->result_array();
		if($temp[0]['biaya_act'] == null){
			$biaya_act = 0;
		}else{
			$biaya_act = $temp[0]['biaya_act'];
		}
		if($temp[0]['fisik_act'] == null){
			$fisik_act = 0;
		}else{
			$fisik_act = $temp[0]['fisik_act'];
		}

		$this->db->select('SUM(rmp_sdk_plan_stage.biaya) as biaya_stage, SUM(rmp_sdk_plan_stage.fisik) as fisik_stage');
		$this->db->from('rmp_sdk_plan_stage');
		$this->db->where('id_kegiatan='.$id_kegiatan);
		$temp = $this->db->get()->result_array();
		if($temp[0]['biaya_stage'] == null){
			$biaya_stage = 0;
		}else{
			$biaya_stage = $temp[0]['biaya_stage'];
		}
		if($temp[0]['fisik_stage'] == null){
			$fisik_stage = 0;
		}else{
			$fisik_stage = $temp[0]['fisik_stage'];
		}
		
		$biaya['total'] = $pagu;

		$biaya['sisa'] = ($biaya['total']-($biaya_act+$biaya_stage)) + $biaya_now;
		$biaya['fisik'] = (100-($fisik_act+$fisik_stage)) + $fisik_now;
		return $biaya;
	}

	public function getTotalByIdAct($act_id){
		$this->db->select('SUM(rmp_sdk_plan_act.biaya) as biaya_act');
		$this->db->from($this->tableName);
		$this->db->where('act_id ='.$act_id);
		$temp = $this->db->get()->result_array();
		
		if($temp[0]['biaya_act'] == null){
			return 0;
		}else{
			return $temp[0]['biaya_act'];
		}

	}

	// public function getActPlanByAMS($act_id,$month,$sdk_id){
	// 	$this->db->select('*');
	// 	$this->db->from($this->tableName);
	// 	$this->db->where('act_id ='.$act_id.' and month='.$month.' and sdk_id='.$sdk_id);
	// 	return $this->db->get();
	// }
	public function getActPlanByAMK($act_id,$month,$id_kegiatan){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('act_id ='.$act_id.' and month='.$month.' and id_kegiatan='.$id_kegiatan);
		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}
}
