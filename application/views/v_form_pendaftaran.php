<!-- Horizontal Form -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Form Pendaftaran</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('admin/tambah_aksi') ?>" method="post" class="form-horizontal p-5">
        <h3 class="mb-4">Data Siswa</h3>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
            <div class="col-sm-10">
                <select class="form-select form-select-sm" name="jenis_pendaftaran" aria-label=".form-select-sm example">
                    <option selected>Masukan Pilihan</option>
                    <option value="baru">Baru</option>
                    <option value="pindahan">Pindahan</option>
                    <option value="transfer">Transfer</option>
                </select>
                <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pilihan 1</label>
            <div class="col-sm-10">
                <select class="form-select form-select-sm" name="pilihan1" aria-label=".form-select-sm example">
                    <option selected>Masukan Pilihan 1</option>
                    <option value="akuntansi">Akuntansi</option>
                    <option value="tata_niaga">Tata Niaga</option>
                    <option value="teknik_kelistrikan">Teknik Kelistrikan</option>
                </select>
                <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pilihan 2</label>
            <div class="col-sm-10">
                <select class="form-select" name="pilihan2" aria-label="Default select example">
                    <option selected>Masukan Pilihan 2</option>
                    <option value="akuntansi">Akuntansi</option>
                    <option value="tata_niaga">Tata Niaga</option>
                    <option value="teknik_kelistrikan">Teknik Kelistrikan</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nomor Seri SKHUN</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_seri_skhun" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nomor Seri Ijazah</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_seri_ijazah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-10">
                <input type="text" name="asal_sekolah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
                <input type="text" name="nisn" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama_lengkap" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Panggilan</label>
            <div class="col-sm-10">
                <input type="text" name="nama_panggilan" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                <label><input class="ml-3" type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-2">
                <input type="date" name="tanggal_lahir" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Alamat Rumah</label>
            <div class="col-sm-10">
                <textarea name="alamat_rumah"></textarea>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
                <select name="prov" class="form-select form-select-lg" name="provinsi" aria-label=".form-select-lg example" id="provinsi">
                    <option>Pilih Provinsi</option>
                    <?php
                    foreach ($provinsi as $prov) {
                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                    }
                    ?>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>


        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Kabupaten</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="kabupaten" aria-label=".form-select-lg example" id="kabupaten">
                    <option value=''>Pilih Kabupaten</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="kecamatan" aria-label=".form-select-lg example" id="kecamatan">
                    <option value=''>Pilih Kecamatan</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Desa / Kelurahan</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="desa" aria-label=".form-select-lg example" id="desa">
                    <option value=''>Pilih Desa</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>


        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="agama" aria-label=".form-select-lg example">
                    <option selected>Pilih Agama</option>
                    <option value="islam">Islam</option>
                    <option value="katholik">Katholik</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Anak ke</label>
            <div class="col-sm-1">
                <input type="text" name="anak_ke" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Bahasa Sehari - Hari</label>
            <div class="col-sm-10">
                <input type="text" name="bahasa" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Berat Badan</label>
            <div class="col-sm-1">
                <input type="text" name="berat_badan" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tinggi Badan</label>
            <div class="col-sm-1">
                <input type="text" name="tinggi_badan" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Golongan Darah</label>
            <div class="col-sm-1">
                <input type="text" name="golongan_darah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nomor Telephone</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_telephone" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Hobi</label>
            <div class="col-sm-10">
                <input type="text" name="hobi" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tinggal Dengan</label>
            <div class="col-sm-10">
                <label><input type="radio" name="tinggal_dengan" value="orang tua" /> Orang Tua</label>
                <label><input class="ml-3" name="tinggal_dengan" type="radio" value="menumpang" /> Menumpang</label>
                <label><input class="ml-3" name="tinggal_dengan" type="radio" value="asrama" /> Asrama</label>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <!-- data orang tua/wali -->
        <h3 class="mt-5 mb-4">Data Orang tua / Wali</h3>
        <!-- data ayah -->
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Ayah</label>
            <div class="col-sm-10">
                <input type="text" name="nama_ayah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-2">
                <input type="date" name="tanggal_lahir_ayah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
            <div class="col-sm-10">
                <select class="form-select" name="pendidikan_ayah" aria-label="Default select example">
                    <option selected>Pilih Pendidikan</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma/smk_sederajat">SMA/SMK Sederajat</option>
                    <option value="diploma">Diploma</option>
                    <option value="sarjana">Sarjana</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <select class="form-select" name="pekerjaan_ayah" aria-label="Default select example">
                    <option selected>Pilih Pekerjaan</option>
                    <option value="swasta">Swasta</option>
                    <option value="pns">PNS</option>
                    <option value="wirausaha">Wirausaha</option>
                    <option value="petani">Petani</option>
                    <option value="nelayan">Nelayan</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="agama_ayah" aria-label=".form-select-lg example">
                    <option selected>Pilih Agama</option>
                    <option value="islam">Islam</option>
                    <option value="katholik">Katholik</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Alamat Rumah</label>
            <div class="col-sm-10">
                <textarea name="alamat_rumah_ayah"></textarea>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-5">
            <label for="" class="col-sm-2 col-form-label">Nomor Telephone</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_telephone_ayah" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <!-- Data Ibu -->
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Ibu</label>
            <div class="col-sm-10">
                <input type="text" name="nama_ibu" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-2">
                <input type="date" name="tanggal_lahir_ibu" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
            <div class="col-sm-10">
                <select class="form-select" name="pendidikan_ibu" aria-label="Default select example">
                    <option selected>Pilih Pendidikan</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma/smk_sederajat">SMA/SMK Sederajat</option>
                    <option value="diploma">Diploma</option>
                    <option value="sarjana">Sarjana</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <select class="form-select" name="pekerjaan_ibu" aria-label="Default select example">
                    <option selected>Pilih Pekerjaan</option>
                    <option value="swasta">Swasta</option>
                    <option value="pns">PNS</option>
                    <option value="wirausaha">Wirausaha</option>
                    <option value="petani">Petani</option>
                    <option value="nelayan">Nelayan</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="agama_ibu" aria-label=".form-select-lg example">
                    <option selected>Pilih Agama</option>
                    <option value="islam">Islam</option>
                    <option value="katholik">Katholik</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Alamat Rumah</label>
            <div class="col-sm-10">
                <textarea name="alamat_rumah_ibu"></textarea>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-5">
            <label for="" class="col-sm-2 col-form-label">Nomor Telephone</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_telephone_ibu" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>



        <!-- data wali -->
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama Wali</label>
            <div class="col-sm-10">
                <input type="text" name="nama_wali" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-2">
                <input type="date" name="tanggal_lahir_wali" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
            <div class="col-sm-10">
                <select class="form-select" name="pendidikan_wali" aria-label="Default select example">
                    <option selected>Pilih Pendidikan</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma/smk_sederajat">SMA/SMK Sederajat</option>
                    <option value="diploma">Diploma</option>
                    <option value="sarjana">Sarjana</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <select class="form-select" name="pekerjaan_wali" aria-label="Default select example">
                    <option selected>Pilih Pekerjaan</option>
                    <option value="swasta">Swasta</option>
                    <option value="pns">PNS</option>
                    <option value="wirausaha">Wirausaha</option>
                    <option value="petani">Petani</option>
                    <option value="nelayan">Nelayan</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg" name="agama_wali" aria-label=".form-select-lg example">
                    <option selected>Pilih Agama</option>
                    <option value="islam">Islam</option>
                    <option value="katholik">Katholik</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Alamat Rumah</label>
            <div class="col-sm-10">
                <textarea name="alamat_rumah_wali"></textarea>
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
                <input type="text" name="nomor_handphone_wali" class="form-control" id="">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <!-- file pendukung -->
        <h3 class="mt-5 mb-4">File Pendukung</h3>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Upload Ijazah</label>
            <div class="col-sm-10">
                <input type="file" name="upload_ijazah" class="form-control" id="inputGroupFile02">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Upload Photo</label>
            <div class="col-sm-10">
                <input type="file" name="upload_photo" class="form-control" id="inputGroupFile02">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Rata-Rata Nilai UN</label>
            <div class="col-sm-1">
                <input type="text" name="rata_rata_nilai_un" class="form-control" id="inputGroupFile02">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-1">
                <input type="text" name="nim" class="form-control" id="inputGroupFile02">
            </div>
            <?= form_error('jenis_pendaftaran', '<div class="text-small text-danger">', '</div>'); ?>
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