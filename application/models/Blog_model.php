<?php

class Blog_model extends CI_Model {

  public function get_posts() {
    $this->load->database();

    $query = $this->db->query('SELECT * FROM test');
    
    return $query->result();
  }
  public function insert_post($judul, $konten) {
    $this->load->database();
    $this->db->query("INSERT INTO test (a, b,c,d) VALUES ('$judul', '$konten','$judul', '$konten')");
  }
  public function delete_post($a) {
    $this->load->database();
    $this->db->query("DELETE FROM test WHERE a = '$a'");
  }


}


