<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Kedatangan <a class="btn btn-primary" href="<?= base_url() . 'admin/C_kapal/tambah'; ?>">
<i class="fas fa-user-plus"></i></a></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kapal</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Kapal</th>
            <th>Nahkoda</th>
            <th>Asal kapal</th>
            <th>Tanggal Kedatangan</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($kapal as $tb ) { ?>
          <tr>
            <td><?=$tb->nama_kapal?></td>
            <td><?=$tb->nahkoda?></td>
            <td><?=$tb->asal_kapal?></td>
            <?php date_default_timezone_set('Asia/Jakarta');?>
            <td><?= $tb->tanggal_kedatangan?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_kapal/edit/'. $tb->id_kapal); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_kapal/hapus/'. $tb->id_kapal); ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->