<?php
	class Model_mastercontrol extends CI_Model{
		function __construct(){
			parent:: __construct();
		}
		function siswa(){
		 	return $this->db->get('siswa');
		}
		function qw($cel,$table,$prop){
			return $this->db->query("SELECT $cel FROM $table $prop");
		}
		function simpan_siswa($table,$value){
			return $this->db->insert($table,$value);
		}
		function simpan_pdf($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_siswa($table,$where,$value){
			$this->db->where('no_seleksi',$where);
			return $this->db->update($table,$value);
		}
		function simpan_isi($table,$value){
			return $this->db->insert($table,$value);
		}
		function simpan_ws($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_isi($table,$where,$value){
			$this->db->where('id_isi',$where);
			return $this->db->update($table,$value);
		}function edit_seragam($table,$where,$value){
			$this->db->where('id_seragam',$where);
			return $this->db->update($table,$value);
		}
		function hapus_siswa($table,$where){
			$this->db->where('no_seleksi',$where);
			return $this->db->delete($table);
		}
		function hapus_isi($table,$where){
			$this->db->where('id_isi',$where);
			return $this->db->delete($table);
		}
		function hapus_sgm($table,$where){
			$this->db->where('id_seragam',$where);
			return $this->db->delete($table);
		}
	}
?>