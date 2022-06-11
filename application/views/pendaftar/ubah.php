<!-- Horizontal Form -->
<div class="card card-info">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card-header">
        <h3 class="card-title">Ubah Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php if (validation_errors()) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">NISN tidak boleh Kosong</div>');
        redirect('pendaftar/ubah/' . $pendaftar['id']);
    } ?>
    <?php foreach ($pendaftar as $s) { ?>
        <form action="<?= base_url('pendaftar/ubah') ?>" method="post" class="form-horizontal p-5">
            <h3 class="mb-4">Data Siswa</h3>
            <input type="hidden" name="id" id="id" value="<?php echo $s['id']; ?>">

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN" value="<?= $s['nisn']; ?>">
                </div>
                <?= form_error('nisn', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" value="<?= $s['nama']; ?>">
                </div>
                <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="jurusan" aria-label=".form-select-sm example">
                        <option value="<?= $id; ?>" selected="selected"><?= $j; ?></option>
                        <?php
                        foreach ($jurusan as $j) { ?>
                            <option value="<?= $j['id']; ?>"><?= $j['jurusan']; ?></option>
                        <?php } ?>
                    </select>
                    <?= form_error('jurusan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nilai UN</label>
                <div class="col-sm-10">
                    <input type="text" name="nilai_un" class="form-control" id="nilai_un" value="<?= $s['nilai_un']; ?>">
                </div>
                <?= form_error('nilai_un', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="nim" value="<?= $s['nim']; ?>">
                </div>
                <?= form_error('nim', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
            </div>
            <!-- /.card-footer -->
        </form>
    <?php } ?>
</div>
<!-- /.card -->