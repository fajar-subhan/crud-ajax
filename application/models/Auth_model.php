<?php
class Auth_model extends CI_Model {
  var $tabel_user = "user";

  //tampilkan data tabel user berdasarkan username
  public function get_user($username) {
    $this->db->where("username",$username);
    return $this->db->get($this->tabel_user);
  }

}
 ?>
