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

  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/favicon.ico">

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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url() ?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url() ?>"><i class="fas fa-home"></i> Home</a>
        </li>
        <!-- Data User -->
        <?php if($this->session->userdata("hak_akses") === "Admin") { ?>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-cog"></i> User
          </a>
          <div class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
            <a class="dropdown-item bg-primary text-white" href="<?php echo base_url() ?>admin/data_user"><i class="fas fa-user"></i>&nbsp;Data User</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item bg-success text-white" href="<?php echo base_url() ?>admin/data_referral"><i class="fas fa-users"></i>&nbsp;Data Referral</a>
          </div>
        </li>
      <?php } ?>
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
