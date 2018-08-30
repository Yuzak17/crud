<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Mymodel extends CI_Model{
	public function GetMahasiswa($table){
		$res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akanditampilkan
		return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi$res menjadi sebuah array

	}
	public function Insert($table,$data){
		$res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
		return $res; // Kode ini digunakan untuk mengembalikan hasil $res
	}
	public function Update($table, $where, $data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function Delete($table, $where){
		$res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
		return $res;

	}
}
?>
