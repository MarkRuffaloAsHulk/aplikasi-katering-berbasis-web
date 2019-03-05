<?php

class DatabasePesanan extends CI_Model {
	public function simpanPesanan($id_ulasan,$id_pembayaran,$total,$id_pesanan,$username,$paket,$jumlah,$tgl,$bln,$thn,$mulai,$alamat) {
		$this->load->database();
		$cek = false;
		if($tgl==''||$bln==''||$thn==''){
		    $cek=false;
		}
		else{
		    $cek = $this->db->query("INSERT INTO pesanan VALUES ('$id_pesanan','$jumlah','$thn-$bln-$tgl','$mulai','$alamat','$username','admin1','$paket')");
		}
		
		if($cek==false){
			redirect('ControllerPelanggan/failed', 'refresh');
		}
		else {
			$t = $total*$jumlah;
			$bay = $this->db->query("INSERT INTO pembayaran VALUES ('$id_pembayaran','default.jpg','$t','Menunggu Pembayaran','$id_pesanan','$username')");
			if($bay==false){
				redirect('ControllerPelanggan/failed', 'refresh');
			}
			else{
				$ula = $this->db->query("INSERT INTO ulasan VALUES ('$id_ulasan','*belum ada*','$id_pesanan','$username')");
				if($ula==false){
					redirect('ControllerPelanggan/failed', 'refresh');
				}
			}
			
		}
		
	}
	public function requestDataPelanggan($usr) {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pesanan P join pembayaran E on P.id_pesanan = E.Pesananid_pesanan where P.Pelangganusername='$usr'");
		return $query->result();
	}
	public function requestDeskripsi($usr,$id) {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pesanan P join pembayaran E on P.id_pesanan = E.Pesananid_pesanan join paket T on P.Paketpaket=T.paket join katering G on T.Kateringid_makanan=G.id_makanan join ulasan U on P.id_pesanan=U.Pesananid_pesanan where P.Pelangganusername='$usr' and P.id_pesanan='$id'");
		return $query->result();
	}
	public function deletePesanan($idpesanan) {
		$this->load->database();
		$st1 = $this->db->query("delete from ulasan where Pesananid_pesanan = '$idpesanan'");
		$st2 = $this->db->query("delete from pembayaran where Pesananid_pesanan = '$idpesanan'");
		$st3 = $this->db->query("delete from pesanan where id_pesanan = '$idpesanan'");
	}
	public function requestPesanan() {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pesanan P join pembayaran E on P.id_pesanan = E.Pesananid_pesanan order by tanggal asc");
		return $query->result();
	}
	public function requestPesananPelanggan() {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pembayaran order by status asc");
		return $query->result();
	}
	public function requestDescPesananPelanggan($id) {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pesanan P join pembayaran E on P.id_pesanan = E.Pesananid_pesanan join paket T on P.Paketpaket=T.paket join katering G on T.Kateringid_makanan=G.id_makanan join ulasan U on P.id_pesanan=U.Pesananid_pesanan where P.id_pesanan='$id'");
		return $query->result();
	}
	
	public function konfirmasiPesanan($id) {
		$this->load->database();
		$this->db->query("update pembayaran set status='SUDAH DIKONFIRMASI' where Pesananid_pesanan = '$id'");
	}
	
	public function lihatDeskripsi($pkt) {
		$this->load->database();
		$query = $this->db->query("SELECT P.paket, K.nama, K.harga FROM paket P join katering K on P.Kateringid_makanan = K.id_makanan where paket='$pkt'");
		return $query->result();
	}

	
	
	



}


