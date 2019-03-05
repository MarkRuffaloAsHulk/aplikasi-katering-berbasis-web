<?php

class DatabaseUlasan extends CI_Model {
	public function simpanUlasan($ulasan,$idulasan){
		$this->load->database();
		$ula = $this->db->query("UPDATE ulasan SET ulasan='$ulasan' where Pesananid_pesanan='$idulasan'");
		
	}
	
}


