<div class="card">
    <div class="card-header">
        <a href="<?= base_url('admin/index'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama(s)</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan Yang dipilih</th>
                    <th>Nilai UN</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>12233421</td>
                    <td>Aldo</td>
                    <td>SMPN 2 Girimulyo</td>
                    <td>Akuntansi</td>
                    <td>67.5</td>
                    <td>25.8</td>
                    <td>
                        <button data-toggle="modal" data-target="#edit6" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="http://localhost/belajarcrud/mahasiswa/delete/6" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr class="text-center">
                    <td>2</td>
                    <td>52233421</td>
                    <td>zendi</td>
                    <td>SMPN 1 Girimulyo</td>
                    <td>Tata Niaga</td>
                    <td>57.5</td>
                    <td>26.8</td>
                    <td>
                        <button data-toggle="modal" data-target="#edit6" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="http://localhost/belajarcrud/mahasiswa/delete/6" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->