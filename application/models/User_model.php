<?php
class User_model extends CI_Model {
  var $tabel_referral = "referral";

  //insert data
  public function insertData($data) {
    $this->db->insert($this->tabel_referral,$data);
  }

  //tampilkan seluruh data agar dapat dilihat admin
  public function get_all() {
    $this->db->order_by("referral_id","DESC");
    return $this->db->get($this->tabel_referral)->result();
  }

  public function total_data_referral() {
    return $this->db->get($this->tabel_referral);
  }
}
 ?>
