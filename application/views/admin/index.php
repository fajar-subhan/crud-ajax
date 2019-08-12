<?php $this->load->view("template/header") ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 mt-3">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat Datang</strong>, anda telah login sebagai  <strong><?php echo strtoupper($this->session->userdata("hak_akses")) ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Jumlah Data User -->
    <div class="col-lg-4 offset-lg-2">
      <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header bg-primary text-white text-uppercase font-weight-bold text-center">Jumlah User</div>
        <div class="card-body text-dark">
          <h1 class="card-title display-3 text-center">
            <i class="fas fa-user"></i>
          </h1>
          <h1 class="card-text text-center">
            <?php echo $total_user->num_rows() ?>
          </h1>
        </div>
          <a class="card-footer text-center bg-primary text-white"  href="<?php echo base_url() ?>admin/data_user">
            <i class="fas fa-search"></i> Lihat Selengkapnya
          </a>
      </div>
    </div>
    <!-- Jumlah Data Referral -->
    <div class="col-lg-4">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-success text-white text-uppercase font-weight-bold text-center">Jumlah Data Referral</div>
        <div class="card-body text-dark">
          <h1 class="card-title display-3 text-center">
            <i class="fas fa-users"></i>
          </h1>
          <h1 class="card-text text-center">
            <?php echo $total_referral->num_rows() ?>
          </h1>
        </div>
          <a class="card-footer text-center bg-success text-white"  href="<?php echo base_url() ?>admin/data_referral">
            <i class="fas fa-search"></i> Lihat Selengkapnya
          </a>
      </div>
    </div>

  </div>
</div>
<?php $this->load->view("template/footer") ?>
