<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPPANSE | <?= $judul ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/templates') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/templates') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/templates') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/templates') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#provinsi").change(function() {
                var url = "<?php echo site_url('wilayah/add_ajax_kab'); ?>/" + $(this).val();
                $('#kabupaten').load(url);
                return false;
            })

            $("#kabupaten").change(function() {
                var url = "<?php echo site_url('wilayah/add_ajax_kec'); ?>/" + $(this).val();
                $('#kecamatan').load(url);
                return false;
            })

            $("#kecamatan").change(function() {
                var url = "<?php echo site_url('wilayah/add_ajax_des'); ?>/" + $(this).val();
                $('#desa').load(url);
                return false;
            })
        });
    </script>
</head>

<body align="center">
    <div class="container">
        <center>
            <img class="mt-2" src="<?= base_url('ast/peta ri.png') ?>" width=30% alt="" srcset="">
        </center>
        <h1 class="text-center">Data Seluruh wilayah di Indonesia</h1>
        <hr>

        <div class="form-group row">
            <label for="inputProv" class="col-sm-2 col-form-label">Propinsi</label>
            <div class="col-sm-10">
                <select name="prov" class="form-control" id="provinsi">
                    <option>- Select Provinsi -</option>
                    <?php
                    foreach ($provinsi as $prov) {
                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="inputKab" class="col-sm-2 col-form-label">Kabupaten</label>
            <div class="col-sm-10">
                <select name="kab" class="form-control" id="kabupaten">
                    <option value=''>Select Kabupaten</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputKec" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <select name="kec" class="form-control" id="kecamatan">
                    <option>Select Kecamatan</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputDes" class="col-sm-2 col-form-label">Desa</label>
            <div class="col-sm-10">
                <select name="des" class="form-control" id="desa">
                    <option>Select Desa</option>
                </select>
            </div>
        </div>

        <hr>

        <footer class="text-center">2016 By
            <a href="http://www.kang-cahya.com" rel="dofollow">Cahya Dyazin</a> | Distributed by <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a>
        </footer>
    </div>
</body>

</html>