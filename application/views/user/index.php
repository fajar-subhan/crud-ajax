<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/brands.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/solid.min.css">

  <!-- Datatables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables/css/dataTables.bootstrap4.min.css">
  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <title><?php echo $title ?></title>
  <style>

  .error {
    background-color: rgb(255, 33, 33);
    color: white;
    border-radius: 5px;
    padding: 5px;
    font-weight: bold;
    font-family: Source Sans Pro;
  }

  .success {
    border-radius: 5px;
    border : 5px solid rgb(20, 255, 0);
  }

  body {
    font-family: Source Sans Pro;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url() ?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <li class="nav-item dropdown active" style="list-style:none;">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Hai, <?php echo $this->session->userdata("nama") ?>
        </a>
        <div class="dropdown-menu mt-2 text-center" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/keluaradmin">
            <button type="button" class="btn btn-danger" title="Logout">
              <i class="fas fa-sign-out-alt"></i>
            </button>
          </a>
        </div>
      </li>
    </div>
  </nav>

<div class="container">
  <div class="row" id="alert">
    <div class="col-lg-12 mt-3">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat Datang</strong>, anda telah login sebagai <strong><?php echo strtoupper($this->session->userdata("hak_akses")) ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  <!-- FORM -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card text-white bg-success mb-3">
        <div class="card-header text-uppercase font-weight-bold">Tambah Data User</div>
        <div class="card-body">
          <form id="form" method="post">
            <!-- Nama -->
            <div class="col-lg-4 offset-lg-4">
              <div class="form-group">
                <div class="input-group mb-1" id="nama">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-address-book"></i>
                    </span>
                  </div>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" id="namaInput">
                </div>
                <div id="namaError"></div>
                <div id="namaErrorServer"></div>
              </div>
            </div>

            <!--No hp -->
            <div class="col-lg-4 offset-lg-4">
              <div class="form-group">
                <div class="input-group mb-1" id="nohp">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-phone-alt"></i>
                    </span>
                  </div>
                  <input type="text" name="nohp" class="form-control" placeholder="Nomor Handphone" id="nohpInput">
                </div>
                <div id="noHpError"></div>
                <div id="noHpErrorServer"></div>
              </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 offset-lg-4">
              <div class="form-group">
                <div class="input-group mb-1" id="email">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                  <input type="text" name="email" class="form-control" placeholder="Email" id="emailInput">
                </div>
                <div id="emailError"></div>
                <div id="emailErrorServer"></div>
              </div>
            </div>

            <div class="col-lg-4 offset-lg-4">
              <!-- Loading Simpan -->
              <div id="loading-simpan">
                <img src="<?php echo base_url() ?>assets/loading.gif">
                <strong>Proses Simpan Data.....</strong>
              </div>
              <button type="button" id="tambah" class="btn btn-primary btn-lg btn-block">Tambah Data User</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- Jquery -->
<script src="<?php echo base_url() ?>assets/plugin/jquery-3.4.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- dataTables -->
<script src="<?php echo base_url() ?>assets/plugin/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables/js/dataTables.bootstrap4.min.js"></script>
<!-- SweetAlert JS -->
<script src="<?php echo base_url() ?>assets/plugin/sweetalert2.all.min.js"></script>
<!-- External JS -->
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>
