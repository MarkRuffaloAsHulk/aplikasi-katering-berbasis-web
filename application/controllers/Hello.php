<?php

class Hello extends CI_Controller {

  public function index() {
    $data['name'] = 'Freddy Mercury';
    $this->load->view('hello', $data);
	
  }
  public function greet($name) {
    $data['name'] = $name;
    $this->load->view('hello', $data);
  }

}
