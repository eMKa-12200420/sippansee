<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pendaftar/tambah'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>Pilihan Jurusan</th>
                    <th>Nilai UN</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 1;
                foreach ($pendaftar as $p) { ?>

                    <tr class="text-center">
                        <td><?= $a++; ?></td>
                        <td><?= $p['nisn']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['jurusan']; ?></td>
                        <td><?= $p['nilai_un']; ?></td>
                        <td><?= $p['nim']; ?></td>
                        <td>
                            <a href="<?= base_url('pendaftar/ubah/') . $p['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('pendaftar/hapus/') . $p['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $p['nama']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->