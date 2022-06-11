<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#jurusanBaruModal"><i class="fas fa-file-alt"></i> Tambah Jurusan</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Jurusan</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 1;
                foreach ($jurusan as $j) { ?>

                    <tr class="text-center">
                        <td><?= $a++; ?></td>
                        <td><?= $j['jurusan']; ?></td>
                        <td><?= $j['kuota']; ?></td>
                        <td>
                            <a href="<?= base_url('jurusan/ubahjurusan/') . $j['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('jurusan/hapusjurusan/') . $j['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $j['jurusan']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- Modal Tambah jurusan baru-->
<div class="modal fade" id="jurusanBaruModal" tabindex="-1" role="dialog" aria-labelledby="jurusanBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jurusanBaruModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('jurusan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Nama Jurusan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kuota" id="kuota" placeholder="Masukkan Jumlah Kuota" class="form-control form-control-user">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Menu -->