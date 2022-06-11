<!-- Horizontal Form -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Form Pendaftaran</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('pendaftar/simpan') ?>" method="post" class="form-horizontal p-5">
        <h3 class="mb-4">Data Siswa</h3>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
                <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN">
            </div>
            <?= form_error('nisn', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
            </div>
            <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <select class="form-select form-select-sm" name="jurusan" aria-label=".form-select-sm example">
                    <option value="">-Pilih Jurusan-</option>
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
                <input type="text" name="nilai_un" class="form-control" id="nilai_un">
            </div>
            <?= form_error('nilai_un', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="nim" class="form-control" id="nim">
            </div>
            <?= form_error('nim', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Batal</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->