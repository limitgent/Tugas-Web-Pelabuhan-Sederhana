<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($kapal as $tb ) { ?>
                <form action="<?php echo base_url() . 'admin/C_kapal/update'; ?>" method="post">
                    
                    <div class="form-group">
                        <label for="nama_kapal"> Nama Kapal : </label>
                        <input type="hidden" class="form-control-user" id="id_kapal" name="id_kapal" value="<?php echo $tb->id_kapal ?>">
                        <input type="text" id="nama_kapal" name="nama_kapal" class="form-control form-control-user" placeholder="Masukkan Nama Kapal" title="Isikan Angka" value="<?php echo $tb->nama_kapal ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nahkoda"> Nahkoda : </label>
                        <input type="text" id="nahkoda" name="nahkoda" class="form-control form-control-user" placeholder="Masukkan Nama Nahkoda" title="Isikan Angka" value="<?php echo $tb->nahkoda ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="asal_kapal"> Asal Kapal : </label>
                        <textarea name="asal_kapal" class="form-control" id="asal_kapal" cols="30" rows="6" placeholder="Masukkan Alamat Kapal"    required><?php echo $tb->asal_kapal ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kedatangan"> Tanggal Kedatangan : </label>
                        <?php date_default_timezone_set('Asia/Jakarta');?>
                        <input type="date" class="form-control" name="tanggal_kedatangan" id="tanggal_kedatangan" value="<?php echo $tb->tanggal_kedatangan ?>">
                      
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Simpan</button>
                </form>
                <?php } ?>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>