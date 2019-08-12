<?php
class User extends CI_Controller {
  public function __construct() {
    parent::__construct();

    //load model user
    $this->load->model("User_model");
  }

  public function index() {
    $this->data["title"] = "Dashboard User";

    $this->load->view("user/index",$this->data);
  }

  public function tambahData() {
    $this->form_validation->set_rules("nama","nama","required");
    $this->form_validation->set_rules("nohp","no handphone","required|numeric");
    $this->form_validation->set_rules("email","email","required|valid_email");

    $this->form_validation->set_message("required","{field} wajib di isi server");
    $this->form_validation->set_message("numeric","{field} hanya di isi angka server");
    $this->form_validation->set_message("valid_email","format {field} salah");

    if($this->form_validation->run() === true) {
      $nama  = htmlentities(strip_tags(trim($_POST["nama"])));
      $nohp  = htmlentities(strip_tags(trim($_POST["nohp"])));
      $email = htmlentities(strip_tags(trim($_POST["email"])));

      $data = array (
        "nama_user" => $nama,
        "no_hp"     => $nohp,
        "email"     => $email,
        "user"      => $this->session->userdata("nama")
      );

      $this->User_model->insertData($data);

      $status = array (
        "status" => "berhasil",
        "pesan"  => "Data berhasil ditambahkan"
      );
    }else {
      $nama_error = strip_tags(form_error("nama"));
      $nohp_error = strip_tags(form_error("nohp"));
      $email_error = strip_tags(form_error("email"));
      $status = array (
        "status" => "gagal",
        "nama"   => $nama_error,
        "nohp"   => $nohp_error,
        "email"  => $email_error
      );
    }
    echo json_encode($status,JSON_PRETTY_PRINT);
  }
}
 ?>
