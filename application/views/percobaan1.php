<!DOCTYPE html>
<html>

<head>
  <!-- Metas -->
  <meta charset="utf-8">
  <title>Foxeresto - Restaurant Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css -->
</head>

<body class="bg-primary" onload="window.print()">

  <div class="container" style="width:100%; margin-top:10%;">
    <div class="row card">
      <nav class="navbar navbar-width bg-whit">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
          <p style="margin-left:30%; margin-top:-5%;">KARTU PENDAFTARAN PESERTA DIDIK BARU KELAS </p> <br>
          <img src="<?php echo base_url(); ?>assets/img/logo1.png" style="margin-left:10%; margin-top:-30%;">
          <p style="margin-top:-2%; margin-left:33%;">UNGGULAN MAN 2 PATI TAHUN 2021/2022</p> <br>

        </div>
      </nav>
      <hr>
      <div class="card-group">
        <div class="row">
          <div class="col-md-6">
            <p class="col">ID Pendaftaran &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <small class="text-muted"> : <?= $isi['id_pendaftaran'] ?> </p>
            <p class="col" style="margin-top:-1%;">Nama Lengkap &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= $isi['nm_lengkap'] ?></small></p>
            <img src="<?= base_url(); ?>/upload/rapot/<?= $isi['nm_file_foto'] ?>" style="width:10%; margin-left:70%; margin-top:-80%;">
            <p class="col" style="margin-top:-2%;">Jenis Kelamin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= $isi['jns_kelamin'] ?> </small></p>
            <p class="col" style="margin-top:1%;"><small class="text-muted">Tanggal Lahir &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= $isi['tgl_lahir'] ?> </small></p>
            <p class="col" style="margin-top:1%;">Tanggal Pendaftaran &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= date('d-m-y') ?> </small></p>
            <p class="col" style="margin-top:1%;">Tanggal seleksi/test &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <small class="text-muted"> : 1 maret 2021</small></p>
            <p class="col" style="margin-top:1%;"> Tempat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <small class="text-muted"> : MAN 2 Pati</small></p>

          </div>
          <div class="col-md-6">
          </div>
          <div class="col-md-12">
            <p> <small class="text-muted" style="margin-left:20%;">Selamat anda telah mendaftar sebagai calon peserta didik MAN2 pati jalur kelas unggulan tahun pelajaran 2021/2022.</small></p>
          </div>
          <div class="col-md-12">
            <p> <small class="text-muted" style="margin-left:23%;">NB. Untuk info lebih lanjut bisa hubungi Pak Sunaryo : 081325651645 atau Bu Rizka : 0813867129696</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>