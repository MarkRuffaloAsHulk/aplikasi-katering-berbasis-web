<?php

class ControllerUser extends CI_Controller {
	
	function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
		$this->load->driver('session');
	}
	public function saveDaftar() {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->helper('url');
		$this->load->model('DatabasePelanggan');
		$this->DatabasePelanggan->saveDataDaftar($nama,$email,$alamat,$username,$password);
		$this->session->set_userdata('nama',$nama);
		$this->session->set_userdata('email',$email);
		$this->session->set_userdata('alamat',$alamat);
		$this->session->set_userdata('username',$username);
		
		redirect('ControllerUser/requestMenu', 'refresh');
	}
	public function kirimEmailPassword() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->load->helper('url');
		$this->load->model('DatabasePelanggan');
		$posts = $this->DatabasePelanggan->cekEmailPassword($username,$password);
		$data['posts'] = $posts;
		foreach ($posts as $post){
			$this->session->set_userdata('nama',$post->nama);
			$this->session->set_userdata('email',$post->email);
			$this->session->set_userdata('alamat',$post->alamat);
		}
		$this->session->set_userdata('username',$username);
		redirect('ControllerUser/requestMenu', 'refresh');
    }
	public function requestMenu() {
		$this->load->model('DatabaseKatering');
		$posts = $this->DatabaseKatering->requestMenu();
		$data['posts'] = $posts;
		if($this->session->has_userdata('username')==false){
			$this->load->view('home', $data);
		}
		else if ($this->session->has_userdata('username')==true){
			$this->session->unset_userdata('paket');
			$this->load->view('home1', $data);
		}
		
    }
	public function lihatDeskripsi($pkt) {
		$this->load->model('DatabaseKatering');
		$posts = $this->DatabaseKatering->lihatDeskripsi($pkt);
		$data['posts'] = $posts;
		if($this->session->has_userdata('username')==false){
			$this->load->view('Menu', $data);
		}
		else if ($this->session->has_userdata('username')==true){
			$this->session->set_userdata('paket',$pkt);
			$this->load->view('Menu1', $data);
		}
    
	}
	public function keluarAkun() {
		$this->session->sess_destroy();
		redirect('ControllerUser/requestMenu','refresh');
	}
	
  public function masuk() {
	$this->load->view('masuk');
    
  }
  public function masukfail1() {
	$this->load->view('masukfail1');
    
  }
  public function masukfail2() {
	$this->load->view('masukfail2');
    
  }
  public function daftar() {
	$this->load->view('daftar');
    
  }
  public function daftarfail() {
	$this->load->view('daftarfail');
    
  }
  
}
