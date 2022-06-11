<!-- Horizontal Form -->
<div class="card card-info">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card-header">
        <h3 class="card-title">Ubah Data Jurusan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php if (validation_errors()) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">NISN tidak boleh Kosong</div>');
        redirect('pendaftar/ubah/' . $pendaftar['id']);
    } ?>

    <?php foreach ($jurusan as $j) { ?>
        <form action="<?= base_url('jurusan/ubahJurusan'); ?>" method="post" class="form-horizontal p-5">
            <input type="hidden" name="id" id="id" value="<?php echo $j['id']; ?>">

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control" id="jurusan" name="jurusan" placeholder="Masukkan Nama Jurusan" value="<?= $j['jurusan']; ?>">
                </div>
                <?= form_error('jurusan', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Jumlah Kuota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-user" id="kuota" name="kuota" placeholder="Masukkan Jumlah Kuota" value="<?= $j['kuota']; ?>">
                </div>
                <?= form_error('kuota', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
        </form>
    <?php } ?>
</div>
<!-- /.card -->