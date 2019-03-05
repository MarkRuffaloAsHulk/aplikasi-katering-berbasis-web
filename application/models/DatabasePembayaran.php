<?php

class DatabasePembayaran extends CI_Model {
	public function requestDataPembayaran($usr){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pembayaran P join pesanan N on P.Pesananid_pesanan = N.id_pesanan where P.Pelangganusername='$usr'");
		return $query->result();
	}
	public function requestDeskripsiPembayaran($usr,$id){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pembayaran where Pelangganusername='$usr' and id_pembayaran='$id'");
		return $query->result();
	}
	public function bayarTotalPesanan($address,$idbayar) {
		$this->load->database();
		$this->db->query("UPDATE pembayaran set bukti_bayar ='$address', status='Menunggu konfirmasi Admin' where id_pembayaran='$idbayar'");
		
	}
}


