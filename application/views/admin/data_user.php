<?php $this->load->view("template/header") ?>
<div class="container">
  <div class="col-lg-12 mt-3">
    <div class="card border-primary mb-3">
      <div class="card-header bg-primary text-white text-uppercase font-weight-bold">
        <i class="fas fa-user"></i> Data User
        <!-- Tombol + tambah user -->
        <button id="tambah_user" class="btn btn-success float-right" data-toggle="modal" data-target="#modal">
          <i class="fas fa-user-plus"></i>
        </button>
      </div>

      <!-- Load Tabel -->
      <div class="card-body text-dark" id="view">
        <?php $this->load->view("admin/tabel_user", $this->data) ?>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <form method="post" id="form1">
                  <!-- nama user -->
                  <div class="form-group nama">
                    <div class="input-group mb-1" id="nama">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-address-book"></i>
                        </span>
                      </div>
                      <input type="text" id="namaInput" name="namauser" class="form-control" placeholder="nama lengkap">
                    </div>
                    <div id="namauserError"></div>
                    <div id="namauserErrorServer"></div>
                  </div>

                  <!-- username -->
                  <div class="form-group username">
                    <div class="input-group mb-1" id="username">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input type="text" id="usernameInput" name="username" class="form-control" placeholder="username">
                    </div>
                    <div id="usernameError"></div>
                    <div id="usernameErrorServer"></div>
                  </div>

                  <!-- password -->
                  <div class="form-group">
                    <div class="input-group mb-1" id="password">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="password" id="passwordInput">
                      <div class="input-group-append" id="viewPass">
                        <span class="input-group-text" id="view">
                          <i class="fas fa-eye-slash"></i>
                        </span>
                      </div>
                    </div>
                    <div id="passwordError"></div>
                    <div id="passwordErrorServer"></div>
                  </div>

                  <!-- hak akses -->
                  <div class="form-group hakakses">
                    <div class="input-group mb-1" id="hakakses">
                      <select name="hak_akses" id="hakaksesinput" class="form-control">
                        <option value="">-- Hak Akses --</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                      </select>
                    </div>
                    <div id="hakaksesError"></div>
                    <div id="hakaksesErrorServer"></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <!-- Loading Simpan -->
              <div id="loading-simpan">
                <img src="<?php echo base_url() ?>assets/loading.gif">
                <strong>Proses Simpan Data.....</strong>
              </div>
              <!-- Ubah -->
              <div id="loading-ubah">
                <img src="<?php echo base_url() ?>assets/loading.gif">
                <strong>Proses Ubah Data.....</strong>
              </div>
              <!-- Ubah Password -->
              <div id="loading-ubahpass">
                <img src="<?php echo base_url() ?>assets/loading.gif">
                <strong>Proses Ubah Data Password.....</strong>
              </div>
              <!-- Tombol simpan data -->
              <button type="button" class="btn btn-success" id="simpan">Simpan</button>
              <!-- Tombol Ubah data -->
              <button type="button" class="btn btn-primary" id="ubah">Ubah</button>
              <!-- Tombol ubah password -->
              <button type="button" class="btn btn-dark" id="ubahPassword">Ubah Password</button>
              <!-- Tombol tutup -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="tutup">Tutup</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal ubah password -->
      <div class="modal fade" id="ubahpassword" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <form method="post" id="form">
                  username
                  <div class="form-group username">
                    <div class="input-group mb-1" id="username">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                        </span>
                      </div>
                      <input type="text" id="usernameInputUbah" name="username" class="form-control" placeholder="username">
                    </div>
                    <div id="usernameError"></div>
                  </div>

                  <!-- password -->
                  <div class="form-group">
                    <div class="input-group mb-1" id="password">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="password" id="passwordInputUbah">
                      <div class="input-group-append" id="viewPass">
                        <span class="input-group-text" id="view">
                          <i class="fas fa-eye-slash"></i>
                        </span>
                      </div>
                    </div>
                    <div id="passwordError"></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <!-- Ubah Password -->
              <div id="loading-ubahpass">
                <img src="<?php echo base_url() ?>assets/loading.gif">
                <strong>Proses Ubah Data Password.....</strong>
              </div>


              <!-- Tombol ubah password -->
              <button type="button" class="btn btn-dark" id="ubahPassword">Ubah Password</button>
              <!-- Tombol tutup -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="tutup">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("template/footer") ?>