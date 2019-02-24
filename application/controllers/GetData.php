<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetData extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ModelGetData');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index(){
		echo "lalalalala :v";
	}

	public function emon_data(){
		$url = 'http://emonitoring.pu.go.id/pusair/';
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$hour = date("H");
		
		$sidakep = $url."data_".$year.$month.$day;
		
		if($hour < 8 || $hour >= 16){
			$sidakep.="16.csv";
		}else if($hour < 12){
			$sidakep.="08.csv";
		}else{
			$sidakep.="12.csv";
		}
		// sinyal untuk insert
		$stat_emon_data = 0;

		$table = $this->ModelGetData->check_table_data($year);
		// print_r($table);
		if(!empty($table)){
			//neet to reset auto increment, but not now :3
			$row_deleted = $this->ModelGetData->delete_emon_data($year);
			$stat_emon_data = 1;
		}else{
			if($this->ModelGetData->create_table_data($year)){
				$stat_emon_data = 1;
			}else{
				$stat_emon_data = 0;
				echo "Cant Create Table Data Emon!";
			}
		}

		// tidak menggunakan insert batch karena takut data melebihi query time atau memori size
		if($stat_emon_data == 1){
			// Read and inserting data
			$csvData = file_get_contents($sidakep);

			$rangekeg = count($csvData);
			
			$lines = explode("\n", $csvData);
			$array = [];
			$header = null;
			$separator = ';';
			foreach ($lines as $line) {
				if ($header === null) {
					$header = str_getcsv($line,$separator);
					unset($header[2]);
					unset($header[3]);
					unset($header[12]);
					unset($header[13]);
					for ($i=16; $i < 40; $i++) { 
						unset($header[$i]);
					}
					$i=0;
					continue;
				}
				// echo "<pre>";
				// print_r($header);
				// echo "</pre>";
				// exit();
				$data = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				if($data['kdsatker'] != ''){
					$last_id = $this->ModelGetData->insert_emon_data($year,$data);
					$i++;
				}else{
					echo "tidak ada kode satker\n";
				}
				// $array[] = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				// echo "<pre>";
				// print_r($array);
				// echo "</pre>";
				// exit();
				// print_r(array_intersect_key($header, str_getcsv($line,$separator)));
			}

			echo "Success Insert ".$i." Data with last id = ".$last_id;
		}
	}

	public function emon_rencanafis(){
		$url = 'http://emonitoring.pu.go.id/pusair/rencanafis/';
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$hour = date("H");
		
		$sidakep = $url."rencanafis_".$year.$month.$day;
		
		if($hour < 8 || $hour >= 16){
			$sidakep.="16.csv";
		}else if($hour < 12){
			$sidakep.="08.csv";
		}else{
			$sidakep.="12.csv";
		}
		// sinyal untuk insert
		$stat_emon_rencanafis = 0;

		$table = $this->ModelGetData->check_table_rencanafis($year);
		// print_r($table);
		if(!empty($table)){
			//neet to reset auto increment, but not now :3
			$row_deleted = $this->ModelGetData->delete_emon_rencanafis($year);
			$stat_emon_rencanafis = 1;
		}else{
			if($this->ModelGetData->create_table_rencanafis($year)){
				$stat_emon_rencanafis = 1;
			}else{
				$stat_emon_rencanafis = 0;
				echo "Cant Create Table Data Emon!";
			}
		}

		// tidak menggunakan insert batch karena takut data melebihi query time atau memori size
		if($stat_emon_rencanafis == 1){
			// Read and inserting data
			$csvData = file_get_contents($sidakep);

			$rangekeg = count($csvData);
			
			$lines = explode("\n", $csvData);
			$array = [];
			$header = null;
			$separator = ';';
			foreach ($lines as $line) {
				if ($header === null) {
					$header = str_getcsv($line,$separator);
					$i=0;
					continue;
				}
				// echo "<pre>";
				// print_r($header);
				// echo "</pre>";
				// exit();
				$data = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				if($data['kdsatker'] != ''){
					$last_id = $this->ModelGetData->insert_emon_rencanafis($year,$data);
					$i++;
				}else{
					echo "tidak ada kode satker\n";
				}
				// $array[] = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				// echo "<pre>";
				// print_r($array);
				// echo "</pre>";
				// exit();
				// print_r(array_intersect_key($header, str_getcsv($line,$separator)));
			}

			echo "Success Insert ".$i." Data with last id = ".$last_id;
		}
	}

	public function emon_rencanakeu(){
		$url = 'http://emonitoring.pu.go.id/pusair/rencanakeu/';
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$hour = date("H");
		
		$sidakep = $url."rencanakeu_".$year.$month.$day;
		
		if($hour < 8 || $hour >= 16){
			$sidakep.="16.csv";
		}else if($hour < 12){
			$sidakep.="08.csv";
		}else{
			$sidakep.="12.csv";
		}
		// sinyal untuk insert
		$stat_emon_rencanakeu = 0;

		$table = $this->ModelGetData->check_table_rencanakeu($year);
		// print_r($table);
		if(!empty($table)){
			//neet to reset auto increment, but not now :3
			$row_deleted = $this->ModelGetData->delete_emon_rencanakeu($year);
			$stat_emon_rencanakeu = 1;
		}else{
			if($this->ModelGetData->create_table_rencanakeu($year)){
				$stat_emon_rencanakeu = 1;
			}else{
				$stat_emon_rencanakeu = 0;
				echo "Cant Create Table Data Emon!";
			}
		}

		// tidak menggunakan insert batch karena takut data melebihi query time atau memori size
		if($stat_emon_rencanakeu == 1){
			// Read and inserting data
			$csvData = file_get_contents($sidakep);

			$rangekeg = count($csvData);
			
			$lines = explode("\n", $csvData);
			$array = [];
			$header = null;
			$separator = ';';
			foreach ($lines as $line) {
				if ($header === null) {
					$header = str_getcsv($line,$separator);
					$i=0;
					continue;
				}
				// echo "<pre>";
				// print_r($header);
				// echo "</pre>";
				// exit();
				$data = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				if($data['kdsatker'] != ''){
					$last_id = $this->ModelGetData->insert_emon_rencanakeu($year,$data);
					$i++;
				}else{
					echo "tidak ada kode satker\n";
				}
				// $array[] = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				// echo "<pre>";
				// print_r($array);
				// echo "</pre>";
				// exit();
				// print_r(array_intersect_key($header, str_getcsv($line,$separator)));
			}

			echo "Success Insert ".$i." Data with last id = ".$last_id;
		}
	}

	public function emon_akun(){
		$url = 'http://emonitoring.pu.go.id/pusair_akun/';
		$year = date("Y");
		$month = date("m");
		$day = date("d");
		$hour = date("H");
		
		$sidakep = $url."data_akun_".$year.$month.$day;
		
		if($hour < 8 || $hour >= 16){
			$sidakep.="16.csv";
		}else if($hour < 12){
			$sidakep.="08.csv";
		}else{
			$sidakep.="12.csv";
		}
		// sinyal untuk insert
		$stat_emon_akun = 0;

		$table = $this->ModelGetData->check_table_akun($year);
		// print_r($table);
		if(!empty($table)){
			//neet to reset auto increment, but not now :3
			$row_deleted = $this->ModelGetData->delete_emon_akun($year);
			$stat_emon_akun = 1;
		}else{
			if($this->ModelGetData->create_table_akun($year)){
				$stat_emon_akun = 1;
			}else{
				$stat_emon_akun = 0;
				echo "Cant Create Table Data Emon!";
			}
		}

		// tidak menggunakan insert batch karena takut data melebihi query time atau memori size
		if($stat_emon_akun == 1){
			// Read and inserting data
			$csvData = file_get_contents($sidakep);

			$rangekeg = count($csvData);
			
			$lines = explode("\n", $csvData);
			$array = [];
			$header = null;
			$separator = ';';
			foreach ($lines as $line) {
				if ($header === null) {
					$header = str_getcsv($line,$separator);
					$i=0;
					continue;
				}
				// echo "<pre>";
				// print_r($header);
				// echo "</pre>";
				// exit();
				$data = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				if($data['kdsatker'] != ''){
					// if($i > 621){
					$last_id = $this->ModelGetData->insert_emon_akun($year,$data);
					// }
					$i++;
				}else{
					echo "tidak ada kode satker\n";
				}
				// $array[] = array_combine(array_intersect_key($header, str_getcsv($line,$separator)), array_intersect_key(str_getcsv($line,$separator),$header));

				// echo "<pre>";
				// print_r($array);
				// echo "</pre>";
				// exit();
				// print_r(array_intersect_key($header, str_getcsv($line,$separator)));
			}

			echo "Success Insert ".$i." Data with last id = ".$last_id;
		}
	}
}
