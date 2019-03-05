<?php

class Blog extends CI_Controller {

  public function index() {
    $this->load->model('Blog_model');

    $posts = $this->Blog_model->get_posts();
    $data['posts'] = $posts;

    $this->load->view('read', $data);
  }
  
  public function create() {
    $this->load->helper('url');
    $this->load->view('blog_create');
  }

  public function create_process() {
    $judul = $this->input->post('judul');
    $konten = $this->input->post('konten');

    $this->load->helper('url');
    $this->load->model('Blog_model');

    $this->Blog_model->insert_post($judul, $konten);
    redirect(base_url(), 'refresh');
  }
  
  public function delete($a) {
    $this->load->helper('url');
    $this->load->model('Blog_model');

    $this->Blog_model->delete_post($a);
	  
    redirect(base_url(), 'refresh');
  }


}
