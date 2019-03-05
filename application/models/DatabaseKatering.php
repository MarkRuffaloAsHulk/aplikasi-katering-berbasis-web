<?php

class DatabaseKatering extends CI_Model {
	public function requestMenu() {
		$this->load->database();
		$query = $this->db->query("SELECT P.paket, K.nama, K.harga FROM paket P join katering K on P.Kateringid_makanan = K.id_makanan");
		return $query->result();
	}
	public function lihatDeskripsi($pkt) {
		$this->load->database();
		$query = $this->db->query("SELECT P.paket, K.nama, K.harga FROM paket P join katering K on P.Kateringid_makanan = K.id_makanan where paket='$pkt'");
		return $query->result();
	}
	public function showPaketMenu() {
		$this->load->database();
		$query = $this->db->query("SELECT P.paket, K.nama, K.harga FROM paket P join katering K on P.Kateringid_makanan = K.id_makanan");
		return $query->result();
	}
	public function showPaket($pkt) {
		$this->load->database();
		$query = $this->db->query("SELECT P.paket, K.nama, K.harga FROM paket P join katering K on P.Kateringid_makanan = K.id_makanan where paket='$pkt'");
		return $query->result();
	}
	public function saveUpdateMenu($paket,$pokok,$daging,$sayur,$tambahan) {
		$this->load->database();
		$cek = $this->db->query("delete from paket where paket='$paket'");
		if($cek==true){
			$this->db->query("INSERT INTO paket VALUES ('$paket','$pokok')");
			$this->db->query("INSERT INTO paket VALUES ('$paket','$daging')");
			$this->db->query("INSERT INTO paket VALUES ('$paket','$sayur')");
			$this->db->query("INSERT INTO paket VALUES ('$paket','$tambahan')");
		}
	}

	
	
	



}


