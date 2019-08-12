<?php $this->load->view("template/header") ?>
<div class="container">
<div class="card border-primary mb-3 mt-3">
  <div class="card-header text-uppercase text-white bg-primary font-weight-bold"><i class="fas fa-users"></i> Data Referral</div>
  <div class="card-body">
    <table class="table table-bordered table-hover table-sm" id="tabel">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">No HP</th>
          <th class="text-center">Email</th>
          <th class="text-center">User Referral</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0; foreach($referral as $data) { $no++;?>
          <tr>
            <td class="text-center"><?php echo $no ?></td>
            <td><?php echo $data->nama_user ?></td>
            <td><?php echo $data->no_hp ?></td>
            <td><?php echo $data->email ?></td>
            <td><?php echo $data->user ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<?php $this->load->view("template/footer") ?>
