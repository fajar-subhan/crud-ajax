<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome/css/solid.min.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    body {
      background-color: #d2d6de;
    }

    .error {
      background-color: rgb(255, 33, 33);
      color: white;
      border-radius: 5px;
      padding: 5px;
      font-size: 16px;
      font-weight: 800;
      font-family: Source Sans Pro;
    }

    .card-body {
      box-shadow: 3px 3px 10px rgba(116, 116, 116, 0.67),-3px -3px 10px rgba(116, 116, 116, 0.67);
    }

    .success {
      border-radius: 5px;
      border : 5px solid rgb(20, 255, 0);
    }

    body {
      font-family:Source Sans Pro;
    }
    </style>

    <title><?php echo $title ?></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 mt-4">
          <h2 class="text-center text-dark">Selamat Datang</h2>
          <hr class="mb-4">
          <div class="text-center mb-3">
          <img src="<?php echo base_url() ?>assets/login.png" width="170">
          </div>
          <div class="card bg-light mb-3">
            <div class="card-body">
              <form method="post" id="formLogin" action="<?php echo base_url() ?>auth/login_proses">
                <!-- Username -->
                <div class="form-group mt-3">
                  <div class="input-group input-group-sm mb-1" id="username">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control form-control-sm" placeholder="Username" id="usernameLogin" value="<?php echo get_cookie("username") ?>">
                  </div>
                  <?php echo form_error("username") ?>
                  <?php echo $this->session->userdata("usernameError") ?>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <div class="input-group input-group-sm mb-1" id="password">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" id="passwordLogin" value="<?php echo get_cookie("password") ?>">
                  </div>
                  <?php echo form_error("password") ?>
                  <?php echo $this->session->userdata("passwordError") ?>
                </div>

                <!-- Remember -->
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="remember" name="remember" id="remember">
                    <label class="form-check-label list-inline-item" for="remember">
                      <span>Remember me</span>
                    </label>
                  </div>
                </div>

                <!-- Tombol -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm btn-block rounded-pill">Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugin/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- External JS -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
  </body>
</html>
