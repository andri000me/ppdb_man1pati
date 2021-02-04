
<!DOCTYPE html>
<html>
<head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Foxeresto - Restaurant Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="<?= base_url();?>/assets/kartu_pdf/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="<?= base_url();?>/assets/kartu_pdf/dist/css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link rel="stylesheet" href="<?= base_url();?>/assets/kartu_pdf/dist/css/bootstrap-dropdownhover.min.css">
      <link href="<?= base_url();?>/assets/kartu_pdf/dist/css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="<?= base_url();?>/assets/kartu_pdf/dist/css/magnific-popup.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="<?= base_url();?>/assets/kartu_pdf/dist/css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="https://fonts.googleapis.com/css?family=Lustria" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	  <style>
	  
	  
	  
	  </style>
   </head>
<body class="bg-primary" onload="window.print()">
<!-- onload="window.print() -->
  <div class="container" style="width:50%; margin-top:10%;">
    <div class="row card">
        <nav class="navbar navbar-width bg-whit">
        <div class="col-md-3" style=" margin-top:-5%;">
            <img src="<?php echo base_url();?>assets/img/logo1.png" class="">
        </div>
        <div class="col-md-9">  
            <p class="text-sm text-left"style="margin-left:-5%; ">KARTU PENDAFTARAN PESERTA DIDIK BARU KELAS </p> <br>
            <p class="text-sm text-center" style="margin-top:-10%; margin-left:-30%;">UNGGULAN MAN 2 PATI TAHUN 2021/2022</p> <br>
        </div>
        </nav>
        <hr style="margin-top:-5%;">
      <div class="card-group">
        <div class="row">
          <div class="col-md-6">
              <p class="col">ID Pendaftaran &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <small class="text-muted"> : <?= $isi['id_pendaftaran'] ?> </small></p>
              <p class="col" style="margin-top:-5%;">Nama Lengkap &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= $isi['nm_lengkap'] ?></small></p>
              <p class="col" style="margin-top:-5%;">Jenis Kelamin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> : <?= $isi['jns_kelamin'] ?> </small></p>
              <p class="col" style="margin-top:-5%;">Tanggal Lahir  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<small class="text-muted"> :  <?= $isi['tgl_lahir'] ?> </small></p>
              <p class="col" style="margin-top:-5%;">Tanggal Pendaftaran &nbsp<small class="text-muted"> : <?= date('d-m-y') ?> </small></p>
              <p class="col" style="margin-top:-5%;">Tanggal seleksi/test &nbsp&nbsp <small class="text-muted"> : 1 maret 2021</small></p>
              <p class="col" style="margin-top:-5%;">Tempat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <small class="text-muted"> : MAN 2 Pati</small></p>

          </div>
          <div class="col-md-6">
            <img src="<?= base_url(); ?>/upload/rapot/<?= $isi['nm_file_foto'] ?>" style="width:30%; margin-left:40%;" >
          </div>
          <div class="col-md-12 pd-10">
             <p class="col"> <small class="text-muted">Selamat anda telah mendaftar sebagai calon peserta didik MAN2 pati jalur kelas unggulan tahun pelajaran 2021/2022.</small></p>
			 <p class="col text-muted" style="font-size: 13px;">NB. Untuk info lebih lanjut bisa hubungi Pak Sunarno : 081325651645 atau Bu Rizka : 0813867129696 </p>
          </div>

        </div> 
      </div>
    </div>
  </div>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/jquery-1.12.4.min.js" ></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/bootstrap.min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/bootstrap-dropdownhover.min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/jquery.flexslider-min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/smooth-scroll.js" ></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/jquery.magnific-popup.min.js" ></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/instafeed.min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/placeholders.min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/jarallax.min.js"></script>
      <script src="<?= base_url();?>/assets/kartu_pdf/js/script.js"></script>
</body>
</html>
