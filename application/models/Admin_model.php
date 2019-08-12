<?php
class Admin_model extends CI_Model {
  var $tabel_user = "user";
  var $tabel_referral = "referral";
  //DATA USER
  //tampilkan seluruh tabel data user
  public function get_all_user() {
    $this->db->order_by("user_id","desc");
    return $this->db->get($this->tabel_user)->result();
  }

  //tambah data user
  public function insertData($data) {
    $this->db->insert($this->tabel_user,$data);
  }

  //ubah data user
  public function ubah($id,$data) {
    $this->db->where("user_id",$id);
    if($this->db->update($this->tabel_user,$data)){
      return true;
    }else {
      return false;
    }
  }

  //ubah password user
  public function ubahPassword($id,$data) {
    $this->db->where("user_id",$id);
    if($this->db->update($this->tabel_user,$data)) {
      return true;
    }
    else {
      return false;
    }
  }

  //hapus data
  public function hapusDataUser($id) {
    $this->db->where("user_id",$id);
    if($this->db->delete($this->tabel_user)) {
      return true;
    }
    else {
      return false;
    }
  }

  public function get_total_user() {
    return $this->db->get($this->tabel_user);
  }

  //END DATA USER

}
 ?>
