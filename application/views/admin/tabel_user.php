  <table class="table table-bordered table-hover table-sm" id="tabel">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Username</th>
        <th class="text-center">Hak Akses</th>
        <th class="text-center"><i class="fas fa-cogs"></i></th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0; foreach($data_user as $data) { $no++;?>
        <tr>
          <td class="text-center table-sm"><?php echo $no ?></td>
          <td><?php echo $data->user_nama ?></td>
          <td><?php echo $data->username ?></td>
          <td class="text-center"><?php echo $data->user_hak_akses ?></td>
          <td class="text-center">
            <!-- Edit Data -->
            <button data-id="<?php echo $data->user_id ?>"  data-toggle="modal" data-target="#modal" class="btn btn-primary btn-sm" id="ubahData" title="Ubah Data">
              <i class="fas fa-user-edit"></i>
            </button>
            <!-- Ubah Password -->
            <button data-id="<?php echo $data->user_id ?>"  data-toggle="modal" data-target="#ubahpassword" class="btn btn-dark btn-sm" id="ubahPass" title="Ubah Password">
              <i class="fas fa-unlock-alt"></i>
            </button>
            <!-- Hapus data -->
            <button data-id="<?php echo $data->user_id ?>"  data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-sm"  id="hapusData" title="Hapus Data">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>

          <input type="hidden" class="namauser-value" value="<?php echo $data->user_nama ?>">
          <input type="hidden" class="username-value" value="<?php echo $data->username ?>">
          <input type="hidden" class="hakakses-value" value="<?php echo $data->user_hak_akses ?>">
        </tr>

      <?php } ?>
    </tbody>
  </table>
