<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Form Pendaftaran</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ppdb MAN 1 PATI" name="keywords">
    <meta content="Pendaftaran Peserta Didik Baru 2019-2020 MAN 1 PATI" name="description">
	<link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  	<link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/dist/sweetalert.css" rel="stylesheet">
</head>
<body class="bg-success">
	<div class="jdl">
		<h1>FORM PENDAFTARAN PESERTA DIDIK BARU <br> MAN 2 PATI</h1>
	</div>
	<div class="container">
		<div class="kotak">
			<div class="row">
			<div class="col-md-6">
				<table style="width: 100%;">
					<tr>
						<td><label>Nama Lengkap *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Tempat Lahir *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Tanggal Lahir *</label></td>
					</tr>
					<tr>
						<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Jenis Kelamin *</label></td>
					</tr>
					<tr>
						<td>
							<select class="custom-select" id="validationCustom04" required>
								<option selected disabled value="">---Jenis Kelamin---</option>
								<option name="jk" value="L" id="jk"> Laki-Laki </option>
								<option name="jk" value="P" id="jk"> Perempuan </option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Agama *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="agama" id="agama" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Alamat *</label></td>
					</tr>
					<tr>
						<td><textarea class="form-control" name="alamat" id="alamat"></textarea></td>
					</tr>
					
					
				</table>
			</div>
			<div class="col-md-6">
				<table style="width: 100%;">
					<tr>
						<td><label>No Hp *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="no_hp" id="no_hp" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Nama Orang Tua/Wali *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="nama_ortu" id="nama_ortu" class="form-control"></td>
					</tr>
					<tr>
						<td><label>No Hp Ortu *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="no_hportu" id="no_hportu" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Asal SMP/MTs *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="asal_smp" id="asal_smp" class="form-control"></td>
					</tr>
					<tr>
					<th><label  style="margin-top: 10px;">Input Paport</label></th>
					</tr>
					<tr>
						<td>
							<input type="file" class="btn btn-success col-md-12" name="">
						</td>
					</tr>
					<tr>
						<th><label for="validationCustom04">Jurusan</label></th>
					</tr>
					<tr>
					<td>
						<select class="custom-select" id="validationCustom04" required>
							<option selected disabled value="">---Pilih Jurusan---</option>
							<option name="ipa" id="ipa"> IPA </option>
							<option name="ips" id="ips"> IPS </option>
						</select>

					</td>
					</tr>
					</table>
			</div>
			<form action="" class="col-md-12 table-responsive">
				<table class="table table-bordered" style="margin-top: 20px;">
					<thead>
						<tr>
						<th scope="col"><input type="textbox" value="NIlai" style="border: #fff;" ></th>
						<th scope="col">Smester 3</th>
						<th scope="col">Smester 4</th>
						<th scope="col">Smester 5</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<th scope="row">B.inggris</th>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						</tr>
						<tr>
						<th scope="row">Matematika</th>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						</tr>
						<tr>
						<th scope="row">IPA</th>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						</tr>
						<tr>
						<th scope="row">IPS</th>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						<td><input type="textbox" placeholder="Masukkan Nilai Anda" style="border: #fff;"></td>
						</tr>
					</tbody>
				</table>
				<input type="button" class="btn btn-success float-right" name="simpan" value="Simpan" onclick="valid()"></td>
			</form>
		</div>

		</div>
	</div>
</body>
 <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/sweetalert-dev.js"></script>
<script type="text/javascript">
    function pnd(){
        document.location='../Mastercontrol';
    }
	function simpan_pdf(){
	 $.ajax({
  	 	url:"<?php echo site_url('Mastercontrol/simpan_pdf');?>",
  	 	type:"POST",
  	 	data:{
  	 		nama_lengkap:$("#nama_lengkap").val(),
  	 		tempat_lahir:$("#tempat_lahir").val(),
  	 		tanggal_lahir:$("#tanggal_lahir").val(),
  	 		jk:$(".jk:checked").val(),
  	 		agama:$("#agama").val(),
  	 		alamat:$("#alamat").val(),
  	 		no_hp:$("#no_hp").val(),
  	 		nama_ortu:$("#nama_ortu").val(),
  	 		no_hportu:$("#no_hportu").val(),
  	 		asal_smp:$("#asal_smp").val()
  	 	},
  	 	success:function(hasil){
  	 		if(hasil=="Berhasil"){
  	 			swal({
                  type: 'success',
                  title: 'Pendaftaran',
                  text: 'Anda Sudah Berhasil Mendafatar, langkah selanjutnya silahkan untuk mengumpulkan berkas persyaratan yang telah ditentukan'
                  
                })
                setTimeout(pnd, 5000);
  	 		}else{
  	 			swal({
                  type: 'error',
                  title: 'Pendaftaran',
                  text: 'Gagal'
                })
                window.reload();
  	 		}
  	 		
  	 	}
  	  });
	}
		function valid(){
		nama_lengkap=$("#nama_lengkap").val();
  	 	tempat_lahir=$("#tempat_lahir").val();
  	 	tanggal_lahir=$("#tanggal_lahir").val();
  	 	jk=$(".jk:checked").val();
  	 	agama=$("#agama").val();
  	 	alamat=$("#alamat").val();
  	 	no_hp=$("#no_hp").val();
  	 	nama_ortu=$("#nama_ortu").val();
  	 	no_hportu=$("#no_hportu").val();
  	 	asal_smp=$("#asal_smp").val();
  	 	if(nama_lengkap == '' || tempat_lahir == '' || tanggal_lahir == '' || jk == '' || agama == '' || alamat == '' || no_hp == '' || nama_ortu == '' || no_hportu == '' || asal_smp == ''){
			swal({
                  type: 'error',
                  title: 'Pendaftaran',
                  text: 'Anda harus mengisi data dengan lengkap !'
            })
		}else{
			simpan_pdf();
		}
	}
</script>
</html>	
<style type="text/css">
	body{
		background-color: #337ab7;
		font-family: segoe ui;
	}
	.jdl h1{
		padding: 20px;
		text-align: center;
		color: #fff;
		font-size: 25px;
		font-weight: normal;

	}
	.kotak{
		height: auto;
		background-color: #fff;
		padding: 20px;
	}

	.kotak label{
		font-weight: bold;
		font-family: arial;
		color: #333;
	}
</style>