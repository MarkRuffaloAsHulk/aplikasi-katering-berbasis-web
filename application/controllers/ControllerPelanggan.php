<?php

class ControllerPelanggan extends CI_Controller {
	
	function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
		$this->load->driver('session');
	}
	public function simpanPesanan() {
		$jumlah = $this->input->post('jumlah');
		$tgl = $this->input->post('tgl');
		$bln = $this->input->post('bln');
		$thn = $this->input->post('thn');
		$mulai = $this->input->post('mulai');
		$alamat = $this->input->post('alamat');
		
		$idp = rand(10000, 99999);
		$id_pesanan = (string)$idp;
		$idp2 = rand(10000, 99999);
		$id_pembayaran = (string)$idp2;
		$idp3 = rand(10000, 99999);
		$id_ulasan = (string)$idp3;
		
		
		$total = $this->session->userdata('total');
		$this->session->unset_userdata('total');
		$username = $this->session->userdata('username');
		$paket= $this->session->userdata('paket');

		$this->load->helper('url');
		$this->load->model('DatabasePesanan');
		$this->DatabasePesanan->simpanPesanan($id_ulasan,$id_pembayaran,$total,$id_pesanan,$username,$paket,$jumlah,$tgl,$bln,$thn,$mulai,$alamat);
		redirect('ControllerPelanggan/success', 'refresh');
	}
	
	public function requestDataPelanggan() {
		$this->session->unset_userdata('idpesan');
		
		$usr = $this->session->userdata('username');
		$this->load->model('DatabasePesanan');
		$posts = $this->DatabasePesanan->requestDataPelanggan($usr);
		$data['posts'] = $posts;
		$this->load->view('pesanansaya', $data);
	}
	public function requestDataAkun() {
		$usr = $this->session->userdata('username');
		$this->load->model('DatabasePelanggan');
		$posts = $this->DatabasePelanggan->requestDataAkun($usr);
		$data['posts'] = $posts;
		$this->load->view('akun', $data);
	}
	
	public function requestDeskripsi() {
		$usr = $this->session->userdata('username');
		$id = $this->input->post('id');
		$this->load->model('DatabasePesanan');
		$posts = $this->DatabasePesanan->requestDeskripsi($usr,$id);
		
		$this->session->set_userdata('idpesan',$id);
		
		$data['posts'] = $posts;
		$this->load->view('pesanansaya2', $data);
	}
	public function simpanUlasan() {
		$ulasan = $this->input->post('ulasan');
		$idulasan = $this->session->userdata('idpesan');
		
		$this->load->helper('url');
		$this->load->model('DatabaseUlasan');
		$this->DatabaseUlasan->simpanUlasan($ulasan,$idulasan);
		
		redirect('ControllerPelanggan/successulasan', 'refresh');
		
	}
	
	public function ubahAlamat() {
		$alamat = $this->input->post('alamat');
		$usr = $this->session->userdata('username');
		
		$this->load->helper('url');
		$this->load->model('DatabasePelanggan');
		$this->DatabasePelanggan->ubahAlamat($alamat,$usr);
		
		redirect('ControllerPelanggan/successalamat', 'refresh');
		
	}
	
	public function deletePesanan() {
		$idpesanan = $this->session->userdata('idpesan');
		
		$this->load->helper('url');
		$this->load->model('DatabasePesanan');
		$this->DatabasePesanan->deletePesanan($idpesanan);
		
		redirect('ControllerPelanggan/successhapus', 'refresh');
	}
	public function deleteAkun() {
		$usr = $this->session->userdata('username');
		$this->load->helper('url');
		$this->load->model('DatabasePelanggan');
		$this->DatabasePelanggan->deleteAkun($usr);
		
		$this->session->sess_destroy();
		redirect('ControllerUser/requestMenu', 'refresh');
	}
	
	public function requestDataPembayaran() {
		$this->session->unset_userdata('idbayar');
		$this->session->unset_userdata('add'); 
		
		$usr = $this->session->userdata('username');
		$this->load->model('DatabasePembayaran');
		$posts = $this->DatabasePembayaran->requestDataPembayaran($usr);
		$data['posts'] = $posts;
		$this->load->view('pembayaran', $data);
	}
	public function requestDeskripsiPembayaran() {
		$usr = $this->session->userdata('username');
		$id = $this->input->post('id');
		$this->load->model('DatabasePembayaran');
		$posts = $this->DatabasePembayaran->requestDeskripsiPembayaran($usr,$id);
		
		$this->session->set_userdata('idbayar',$id);
		
		$data['posts'] = $posts;
		
		foreach ($posts as $post){ 
			$this->session->set_userdata('add',$post->bukti_bayar); 
		}
		
		$this->load->view('pembayaran2', $data);
	}
	
	public function bayarTotalPesanan() {
		$idbayar = $this->session->userdata('idbayar');
		$address = "";
		
		if(isset($_FILES['fileToUpload'])){
		  $file = $_FILES['fileToUpload']['name'];
		  $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
		  $file_name = "$idbayar"."."."$imageFileType";
		  $file_size =$_FILES['fileToUpload']['size'];
		  $file_tmp =$_FILES['fileToUpload']['tmp_name'];
		  $file_type=$_FILES['fileToUpload']['type'];
		  
		  		  
		  move_uploaded_file($file_tmp,"././pics/bayar/".$file_name);
		  $address = $file_name;
	    }
				
		$this->load->helper('url');
		$this->load->model('DatabasePembayaran');
		$this->DatabasePembayaran->bayarTotalPesanan($address,$idbayar);
		
		redirect('ControllerPelanggan/bayarsuccess', 'refresh');
	}
		
	public function success() {
		$this->load->view('Menu1success');
	}
	public function bayarsuccess() {
		$this->load->view('bayarsuccess');
	}
	public function successulasan() {
		$this->load->view('ulasansuccess');
	}
	public function successalamat() {
		$this->load->view('alamatsuccess');
	}
	public function successhapus() {
		$this->load->view('hapussuccess');
	}
	public function failed() {
		$this->load->view('Menu1failed');
	}
	
	
	
	
	


}
