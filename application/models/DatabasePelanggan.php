<?php


class DatabasePelanggan extends CI_Model {
	function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
		$this->load->driver('session');
	}
	
	public function saveDataDaftar($nama,$email,$alamat,$username,$password){
		$pass = md5($password);
		$this->load->database();
		$cek = $this->db->query("INSERT INTO pelanggan VALUES ('$username', '$pass','$nama', '$email','$alamat')");
		if($cek==false){
			redirect('ControllerUser/daftarfail', 'refresh');
		}
		
	}
	
	public function cekEmailPassword($username,$password){
		$pass = md5($password);
		$cek = false;
		if($username=="admin1"){
			$this->load->database();
			$cek = $this->db->query("SELECT * FROM admin where username='$username'");
		}
		else{
			$this->load->database();
			$cek = $this->db->query("SELECT * FROM pelanggan where username='$username'");
		}
		
		$ohm = "";
		foreach ($cek->result() as $row)
		{
			$ohm = $row->password;
		}
		
		if($ohm==""){
			redirect('ControllerUser/masukfail1', 'refresh');
		}
		else if($ohm!=$pass){
			redirect('ControllerUser/masukfail2', 'refresh');
		}
		else if($username=="admin1"){
			$this->session->set_userdata('adminuser',$username);
			redirect('ControllerAdmin/requestPesanan', 'refresh');
		}
		else{
			return $cek->result();
		}
	}
	
	public function requestDataAkun($usr) {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM pelanggan where username='$usr'");
		return $query->result();
	}
	public function deleteAkun($usr) {
		$this->load->database();
		$st1 = $this->db->query("delete from ulasan where Pelangganusername = '$usr'");
		$st2 = $this->db->query("delete from pembayaran where Pelangganusername = '$usr'");
		$st3 = $this->db->query("delete from pesanan where Pelangganusername = '$usr'");
		$st4 = $this->db->query("delete from pelanggan where username = '$usr'");
	}
	
	public function ubahAlamat($alamat,$usr){
		$this->load->database();
		$ula = $this->db->query("UPDATE pelanggan SET alamat='$alamat' where username='$usr'");
		$this->session->set_userdata('alamat',$alamat);
	}


}


