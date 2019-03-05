<?php

class ControllerAdmin extends CI_Controller {
	
	function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
		$this->load->driver('session');
	}
		
	public function requestPesanan() {
		
		$this->load->model('DatabasePesanan');
		$posts = $this->DatabasePesanan->requestPesanan();
		$data['posts'] = $posts;
		$this->load->view('homeadmin', $data);
	}
	public function requestPesananPelanggan() {
		$this->session->unset_userdata('idpesan');
		
		$this->load->model('DatabasePesanan');
		$posts = $this->DatabasePesanan->requestPesananPelanggan();
		$data['posts'] = $posts;
		$this->load->view('homeadmin2', $data);
    }
	public function requestDescPesananPelanggan() {
		$id = $this->input->post('id');
		$this->load->model('DatabasePesanan');
		$posts = $this->DatabasePesanan->requestDescPesananPelanggan($id);
		
		$this->session->set_userdata('idpesan',$id);
		
		$data['posts'] = $posts;
		$this->load->view('homeadmin2_2', $data);
    }
	public function konfirmasiPesanan() {
		$id=$this->session->userdata('idpesan');
		
		$this->load->helper('url');
		$this->load->model('DatabasePesanan');
		$this->DatabasePesanan->konfirmasiPesanan($id);
				
		redirect('ControllerAdmin/requestPesananPelanggan', 'refresh');
    }
	public function showPaketMenu() {
		$this->session->unset_userdata('admpak');
		
		$this->load->model('DatabaseKatering');
		$posts = $this->DatabaseKatering->showPaketMenu();
		$data['posts'] = $posts;
		$this->load->view('homeadmin3', $data);
    }
	public function showPaket($pkt) {
		$this->load->model('DatabaseKatering');
		$posts = $this->DatabaseKatering->showPaket($pkt);
		$data['posts'] = $posts;
		
		$this->session->set_userdata('admpak',$pkt);
		
		$this->load->view('homeadmin3_2', $data);
    }
	public function saveUpdateMenu() {
		$pokok = $this->input->post('pokok');
		$daging = $this->input->post('daging');
		$sayur = $this->input->post('sayur');
		$tambahan = $this->input->post('tambahan');

		$paket = $this->session->userdata('admpak');
		
		$this->load->helper('url');
		$this->load->model('DatabaseKatering');
		$this->DatabaseKatering->saveUpdateMenu($paket,$pokok,$daging,$sayur,$tambahan);
				
		redirect('ControllerAdmin/showPaketMenu', 'refresh');
    }
	


}
