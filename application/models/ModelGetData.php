<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelGetData extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function check_table_data($year = ''){
		$query = $this->db->query("
			SELECT * 
			FROM information_schema.tables
			WHERE table_schema = '".$this->db->database."' 
			    AND table_name = 'emon_data_".$year."'
			LIMIT 1;
			");
		return $query->result();
	}

	public function create_table_data($year = ''){
		return $this->db->query("
			CREATE TABLE emon_data_".$year." (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			kdsatker VARCHAR(20) NOT NULL,
			nmsatker VARCHAR(100) NOT NULL,
			kdgiat VARCHAR(15) NOT NULL,
			nmgiat VARCHAR(100) NOT NULL,
			kdoutput VARCHAR(10) NOT NULL,
			nmoutput VARCHAR(100) NOT NULL,
			kode_rkakl VARCHAR(100) NOT NULL,
			kdpaket VARCHAR(5) NOT NULL,
			nmpaket VARCHAR(100) NOT NULL,
			target VARCHAR(100) NOT NULL,
			pagu DOUBLE NOT NULL,
			realisasi DOUBLE NOT NULL,
			progreskeu DOUBLE NOT NULL,
			progresfis DOUBLE NOT NULL,
			tglkirim VARCHAR(25)
			)
			");
	}

	public function insert_emon_data($year,$data){
		$this->db->insert('emon_data_'.$year,$data);
		return $this->db->insert_id();
	}

	public function insert_batch_emon_data($year, $data){
		$this->db->insert_batch('emon_data_'.$year,$data);

		return $this->db->affected_rows();
	}

	public function delete_emon_data($year){
		$this->db->query("
			DELETE from emon_data_".$year."
			");
		return $this->db->affected_rows();
	}

	// Emon Rencana Fisik
	public function check_table_rencanafis($year = ''){
		$query = $this->db->query("
			SELECT * 
			FROM information_schema.tables
			WHERE table_schema = '".$this->db->database."' 
			    AND table_name = 'emon_rencanafis_".$year."'
			LIMIT 1;
			");
		return $query->result();
	}

	public function create_table_rencanafis($year = ''){
		return $this->db->query("
			CREATE TABLE emon_rencanafis_".$year." (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			kdsatker VARCHAR(20) NOT NULL,
			kdpaket VARCHAR(5) NOT NULL,
			b1 DOUBLE NOT NULL,
			b2 DOUBLE NOT NULL,
			b3 DOUBLE NOT NULL,
			b4 DOUBLE NOT NULL,
			b5 DOUBLE NOT NULL,
			b6 DOUBLE NOT NULL,
			b7 DOUBLE NOT NULL,
			b8 DOUBLE NOT NULL,
			b9 DOUBLE NOT NULL,
			b10 DOUBLE NOT NULL,
			b11 DOUBLE NOT NULL,
			b12 DOUBLE
			)
			");
	}

	public function insert_emon_rencanafis($year,$data){
		$this->db->insert('emon_rencanafis_'.$year,$data);
		return $this->db->insert_id();
	}

	public function insert_batch_emon_rencanafis($year, $data){
		$this->db->insert_batch('emon_rencanafis_'.$year,$data);

		return $this->db->affected_rows();
	}

	public function delete_emon_rencanafis($year){
		$this->db->query("
			DELETE from emon_rencanafis_".$year."
			");
		return $this->db->affected_rows();
	}

	// Emon Rencana Keuangan
	public function check_table_rencanakeu($year = ''){
		$query = $this->db->query("
			SELECT * 
			FROM information_schema.tables
			WHERE table_schema = '".$this->db->database."' 
			    AND table_name = 'emon_rencanakeu_".$year."'
			LIMIT 1;
			");
		return $query->result();
	}

	public function create_table_rencanakeu($year = ''){
		return $this->db->query("
			CREATE TABLE emon_rencanakeu_".$year." (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			kdsatker VARCHAR(20) NOT NULL,
			kdpaket VARCHAR(5) NOT NULL,
			b1 DOUBLE NOT NULL,
			b2 DOUBLE NOT NULL,
			b3 DOUBLE NOT NULL,
			b4 DOUBLE NOT NULL,
			b5 DOUBLE NOT NULL,
			b6 DOUBLE NOT NULL,
			b7 DOUBLE NOT NULL,
			b8 DOUBLE NOT NULL,
			b9 DOUBLE NOT NULL,
			b10 DOUBLE NOT NULL,
			b11 DOUBLE NOT NULL,
			b12 DOUBLE
			)
			");
	}

	public function insert_emon_rencanakeu($year,$data){
		$this->db->insert('emon_rencanakeu_'.$year,$data);
		return $this->db->insert_id();
	}

	public function insert_batch_emon_rencanakeu($year, $data){
		$this->db->insert_batch('emon_rencanakeu_'.$year,$data);

		return $this->db->affected_rows();
	}

	public function delete_emon_rencanakeu($year){
		$this->db->query("
			DELETE from emon_rencanakeu_".$year."
			");
		return $this->db->affected_rows();
	}

	// Emon Akun
	public function check_table_akun($year = ''){
		$query = $this->db->query("
			SELECT * 
			FROM information_schema.tables
			WHERE table_schema = '".$this->db->database."' 
			    AND table_name = 'emon_akun_".$year."'
			LIMIT 1;
			");
		return $query->result();
	}

	public function create_table_akun($year = ''){
		return $this->db->query("
			CREATE TABLE emon_akun_".$year." (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			kdsatker VARCHAR(20) NOT NULL,
			kdpaket VARCHAR(5) NOT NULL,
			nmpaket VARCHAR(100) NOT NULL,
			kdmak VARCHAR(20) NOT NULL,
			nmmak VARCHAR(100) NOT NULL,
			pagu DOUBLE NOT NULL,
			realisasi DOUBLE NOT NULL
			)
			");
	}

	public function insert_emon_akun($year,$data){
		$this->db->insert('emon_akun_'.$year,$data);
		return $this->db->insert_id();
	}

	public function insert_batch_emon_akun($year, $data){
		$this->db->insert_batch('emon_akun_'.$year,$data);

		return $this->db->affected_rows();
	}

	public function delete_emon_akun($year){
		$this->db->query("
			DELETE from emon_akun_".$year."
			");
		return $this->db->affected_rows();
	}
}
