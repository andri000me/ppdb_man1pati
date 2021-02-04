<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form Pendaftaran</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ppdb MAN 1 PATI" name="keywords">
	<meta content="Pendaftaran Peserta Didik Baru 2019-2020 MAN 1 PATI" name="description">
	<link href="<?php echo base_url(); ?>assets/img/logo1.png" rel="icon">
	<link href="<?php echo base_url(); ?>assets/img/logo1.png" rel="icon">
	<link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- Libraries CSS Files -->
	<link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/dist/sweetalert.css" rel="stylesheet">
</head>

<body class="bg-success">
	<div class="jdl">
		<h1>FORM PENDAFTARAN PESERTA DIDIK BARU KELAS unggulan<br> MAN 2 PATI <br>TAHUN AJARAN 2021/2022</h1>
	</div>
	<!--  -->
	<?php
	if ($this->session->flashdata('flash')) {
	?>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data</strong><?= $this->session->flashdata('flash'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

	<?php
	}
	?>
	<!--  -->
	<div class="container">
		<div class="kotak">
			<form action="" method="post" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<table style="width: 100%;">
							<?php
							// $hr="PENDF";
							// $no=0001;
							// $no_id = $kode - 1;
							// $why = $hr.$no++;
							?>
							<tr>
								<td><label>ID Pendaftaran *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="id_pendaftaran" id="id_pendaftaran" value="<?= $kode; ?>" readonly class="form-control"></td>
							</tr>

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
									<select class="custom-select" name="jenis_kelamin" id="validationCustom04" required>
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
								<td><label>No Hp * <SMAll> (No WA) </SMAll></label></td>
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
						</table>
					</div>
					<div class="col-md-6">
						<table style="width: 100%;">
							<tr>
								<td><label>Email *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="email" id="email" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Asal SMP/MTs *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="asal_smp" id="asal_smp" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Alamat *</label></td>
							</tr>
							<tr>
								<td><textarea class="form-control" name="alamat" id="alamat"></textarea></td>
							</tr>
							<tr>
								<th><label for="validationCustom04">Jurusan *</label></th>
							</tr>
							<tr>
								<td>
									<select class="custom-select jurusan" name="jurusan" id="validationCustom04" required>
										<option selected disabled value="">---Pilih Jurusan---</option>
										<option name="ipa" id="ipa" value="ipa"> IPA </option>
										<option name="ips" id="ips" value="ips"> IPS </option>
									</select>

								</td>
							</tr>
							<tr>
								<th><label style="margin-top: 10px;">Upload KK *<SMAll>(format file .PDF,.JPG,.PNG) max size 5MB </SMAll></label></th>
							</tr>
							<tr>
								<td>
									<input type="file" class="btn btn-success col-md-12" name="file_upload_kk" id="file_upload_kk">
								</td>
							</tr>
							<tr>
								<th><label style="margin-top: 10px;">Upload Akte Kelahiran * <SMAll>(format file .PDF,.JPG,.PNG) max size 5MB </SMAll></label></th>
							</tr>
							<tr>
								<td>
									<input type="file" class="btn btn-success col-md-12" name="file_upload_ak" id="file_upload_ak">
								</td>
							</tr>
							<tr>
								<th><label style="margin-top: 10px;">Upload Foto 3x4 * <SMAll>(format file .PDF,.JPG,.PNG) max size 5MB </SMAll></label></th>
							</tr>
							<tr>
								<td>
									<input type="file" class="btn btn-success col-md-12" name="file_upload_foto" id="file_upload_foto">
								</td>
							</tr>
							<tr>
								<th><label style="margin-top: 10px;">Upload Raport * <SMAll>(format file .PDF,.JPG,.PNG) max size 5MB </SMAll></label></th>
							</tr>
							<tr>
								<td>
									<input type="file" class="btn btn-success col-md-12" name="file_upload" id="file_upload">
								</td>
							</tr>


						</table>
					</div>

					<div class="col-md-12 table-responsive">
						<div id="daftarNilai" class="daftarNilai">

						</div>
						<p id="note" style="color:red"></p>
						<p>*NP : Nilai hanya bisa di input 80 keatas*</p>

						<!-- <input type="submit" class="btn btn-success float-right" name="simpan" value="Simpan"  > -->
						<button type="submit" class="btn btn-success float-right" name="simpan" value="Simpan" onclick="open_kartu()">Daftar</button>

						</td>
						<a href="<?= site_url(); ?>" class="btn btn-primary float-right" style="margin-right: 1%;">Kembali</a>

					</div>


				</div>

				<?= form_close(); ?>
				<!-- </form> -->

			</form>
		</div>
	</div>
	<footer id="footer">


		<div class="container">

			<div class="copyright">

				<div style="margin-top: 50px; margin-left:40%;">
					&copy; Copyright <strong></strong><a href="https://github.com/HR77scu" target="_blank">A </a>| <a href="https://github.com/roufq" target="_blank">A</a> | <a href="https://creativedev.id" target="_blank">creative</a>
				</div>
			</div>
		</div>
	</footer>
</body>
<!-- <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/sweetalert-dev.js"></script>
<script>
	$('.jurusan').on('change', function() {
		var valueNilai = $(this).val();
		if (valueNilai == 'ips') {
			$('#daftarNilai').html('<table class="table table-bordered" style="margin-top: 20px;"><thead>	<tr>	<th scope="col"><input type="textbox" value="NIlai" style="border: #fff;" ></th>	<th scope="col">Semester 3</th>	<th scope="col">Semester 4</th>	<th scope="col">Semester 5</th>	</tr></thead><tbody>	<tr>	<th scope="row">B.inggris</th>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl1" style="border: #fff;"></td>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl1" style="border: #fff;"></td>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl1" style="border: #fff;"></td>	</tr>	<tr>	<th scope="row">Matematika</th>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl2" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl2" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl2" style="border: #fff;"></td>	</tr>	<tr>	<th scope="row">IPS</th>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl4" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl4" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl4" style="border: #fff;"></td>	</tr></tbody>				</table>');
		} else if (valueNilai == 'ipa') {
			$('#daftarNilai').html('<table class="table table-bordered" style="margin-top: 20px;"><thead>	<tr>	<th scope="col"><input type="textbox" value="NIlai" style="border: #fff;" ></th>	<th scope="col">Semester 3</th>	<th scope="col">Semester 4</th>	<th scope="col">Semester 5</th>	</tr></thead><tbody>	<tr>	<th scope="row">B.inggris</th>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl1" style="border: #fff;"></td>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl1" style="border: #fff;"></td>	<td><input type="textbox" class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl1" style="border: #fff;"></td>	</tr>	<tr>	<th scope="row">Matematika</th>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl2" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl2" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl2" style="border: #fff;"></td>	</tr>	<tr>	<th scope="row">IPA</th>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem3_nl3" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem4_nl3" style="border: #fff;"></td>	<td><input type="textbox"  class="nilaisemester" placeholder="Masukkan Nilai Anda" name="sem5_nl3" style="border: #fff;"></td>	</tr>	</tbody>				</table>');
		} else {
			alert('Jurusan Tidak Terdaftar');
		}
	});
	$('.daftarNilai').on('keyup', '.table .nilaisemester', function() {
		var value = $(this).val();
		if (value < 80) {
			$('#note').text('Nilai Anda Tidak Sesuai Dengan Katentuan');
		} else {
			$('#note').hide();
		}
		// alert('a');
	});
</script>

<!-- get data -->
<script>
	function open_kartu() {
		var id = $('#id_pendaftaran').val();
		// var id = document.getElementById("id_pendaftaran");
		window.open('<?= base_url('Mastercontrol/cetak_kartu/'); ?>' + id);
		// buka_struk();x
		// window.open(''+id1);



	}

	// 'id_pendaftaran' => $id_pendaftaran,
	// 				'nm_lengkap' => $nm_lengkap,
	// 				'tmp_lahir' => $tmp_lahir,
	// 				'tgl_lahir' => $tgl_lahir,
	// 				'jns_kelamin' => $jns_kelamin,
	// 				'agm' => $agm,
	// 				'no_hp' => $no_hp,
	// 				'nm_ortu' => $nm_ortu,
	// 				'no_hp_ortu' => $no_hp_ortu,
	// 				'asl_sekolah' => $asl_sekolah,
	// 				'email' => $email,
	// 				'almt' => $almt,

	// }
</script>
<!-- ./get data -->


</html>
<style type="text/css">
	body {
		background-color: #337ab7;
		font-family: segoe ui;
	}

	.jdl h1 {
		padding: 20px;
		text-align: center;
		color: #fff;
		font-size: 25px;
		font-weight: normal;

	}

	.kotak {
		height: auto;
		background-color: #fff;
		padding: 20px;
	}

	.kotak label {
		font-weight: bold;
		font-family: arial;
		color: #333;
	}
</style>