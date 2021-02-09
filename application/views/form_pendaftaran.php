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
		<h1>FORM PENDAFTARAN PESERTA DIDIK BARU KELAS UNGGULAN<br> MAN 2 PATI <br>TAHUN AJARAN 2021/2022</h1>
	</div>
	<!--  -->
	<?php
	if ($this->session->flashdata('flash')) {
	?>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data</strong><?= $this->session->flashdata('flash'); ?>, Terimakasih telah mendaftar MAN2 Pati. Silahkan <a href="https://chat.whatsapp.com/JH03B22VLMVGQffp4Puekt">join WA group JOIN</a>
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
							<!-- <tr>
								<td><label>ID Pendaftaran *</label></td>
							</tr> -->
							<tr>
								<td><input type="hidden" name="id_pendaftaran" id="id_pendaftaran" value="<?= $kode . '-' . date('His') ?>" readonly class="form-control"></td>
							</tr>

							<tr>
								<td><label>Nama Lengkap *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>Tempat Lahir *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>Tanggal Lahir *</label></td>
							</tr>
							<tr>
								<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="09/09/1009"></td>
							</tr>
							<tr>
								<td><label>Jenis Kelamin *</label></td>
							</tr>
							<tr>
								<td>
									<select class="custom-select" name="jenis_kelamin" id="validationCustom04" required>
										<option selected disabled value="">---Jenis Kelamin---</option>
										<option name="jk" selected="" value="L" id="jk"> Laki-Laki </option>
										<option name="jk" value="P" id="jk"> Perempuan </option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Agama *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="agama" id="agama" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>No Hp * <SMAll> (No WA) </SMAll></label></td>
							</tr>
							<tr>
								<td><input type="text" name="no_hp" id="no_hp" class="form-control" value="089506373551"></td>
							</tr>

							<tr>
								<td><label>Nama Orang Tua/Wali *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="nama_ortu" id="nama_ortu" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>No Hp Ortu *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="no_hportu" id="no_hportu" class="form-control" value="1223"></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table style="width: 100%;">
							<tr>
								<td><label>Email *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="email" id="email" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>Asal SMP/MTs *</label></td>
							</tr>
							<tr>
								<td><input type="text" name="asal_smp" id="asal_smp" class="form-control" value="mbuh"></td>
							</tr>
							<tr>
								<td><label>Alamat *</label></td>
							</tr>
							<tr>
								<td><textarea class="form-control" name="alamat" id="alamat">mboh</textarea></td>
							</tr>
							<tr>
								<th><label for="validationCustom04">Jurusan *</label></th>
							</tr>
							<tr>
								<td>
									<select class="custom-select jurusan" name="jurusan" id="validationCustom04" required>
										<option selected disabled value="">---Pilih Jurusan---</option>
										<option name="ips" selected="" id="ips" value="ips"> IPS </option>
										<option name="ipa" id="ipa" value="ipa"> IPA </option>
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
								<th><label style="margin-top: 10px;">Upload Raport * <SMAll>(format file .PDF) max size 5MB </SMAll></label></th>
							</tr>
							<tr>
								<td>
									<input type="file" class="btn btn-success col-md-12" name="file_upload" id="file_upload" accept=".pdf">
								</td>
							</tr>


						</table>
					</div>

					<div class="col-md-12 table-responsive">
						

						<div id="daftarNilai" class="daftarNilai">

						</div>
						<p id="note" style="color:red"></p>
						<p id="noteSuccess" style="color:red"></p>
						<p id="noteDanger" style="color:red"></p>
						<!-- <p id="note4" style="color:red"></p>
						<p id="note5" style="color:red"></p>
						<p id="note6" style="color:red"></p>
						<p id="note7" style="color:red"></p>
						<p id="note8" style="color:red"></p>
						<p id="note9" style="color:red"></p>
						<p id="note10" style="color:red"></p>
						<p id="note11" style="color:red"></p>
						<p id="note12" style="color:red"></p> -->

						<p>*NP : Nilai hanya bisa di input 80 keatas*</p>
						<p>*NP : Bila nilai anda dibawah 80 maka anda tidak dapat mendaftar.*</p>

						<!-- <input type="submit" class="btn btn-success float-right" name="simpan" value="Simpan"  > -->
						<button  type="button" id="pre-daftar" class="btn btn-success float-right">Daftar</button>
						<button hidden="" id="daftar" type="submit" class="btn btn-success float-right" name="simpan" value="Simpan">Daftar</button>

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
<!-- <script src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/sweetalert-dev.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
	$('#pre-daftar').prop('disabled', true);
	$('#pre-daftar').on('click', function() {
		var phone = $('#no_hp').val();
		var nama = $('#nama_lengkap').val();
		var id_pendaftaran = $('#id_pendaftaran').val();

		var message = 'Hai ' + nama + ', Terimakasih telah mendaftar di PPDB MAN 2 PATI \n\nData anda akan segera di verifikasi oleh panitia, anda akan menerima notifikasi dari hasil verifikasi data yang anda input :)';
		swal.queue([{
			title: 'Konfirmasi',
			text: "Mohon Teliti data anda sebelum mengklik tombol 'Proses'",
			icon: 'warning',
			confirmButtonText: 'Proses',
			showLoaderOnConfirm: true,
			preConfirm: async function() {
				$('#swal2-title').text('Proccessing...');
				$('#swal2-content').text('Please wait, this progress will take a few minutes');

				await $.ajax({
					url: 'http://206.189.46.208/waapi/sendMessage?token=033hbkrxYgIZt6li8BtF2qQwlUXt6C9dyDEa8DJJRxrm0',
					type: 'POST',
					data: {
						type: 'chat',
						phone: phone,
						message: message
					},
					success: function(result) {

						$("#daftar").trigger("click");

					},
					error: function(error) {

						$("#daftar").trigger("click");

					}
				});
			}
		}]);
	});

	$('.jurusan').on('change', function() {
		var valueNilai = $(this).val();
		if (valueNilai == 'ips') {
			$('#daftarNilai').html('<table class="table table-bordered" style="margin-top: 20px;"><thead><tr><th scope="col"><input type="textbox" value="NIlai" style="border: #fff;" ></th><th scope="col">Semester 3</th><th scope="col">Semester 4</th><th scope="col">Semester 5</th><th scope="col">Rata - Rata</th></tr></thead><tbody><tr><th scope="row">B.inggris</th><td><input type="textbox" id="nilaiBing1" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem3_nl1" style="border: #fff;"></td><td><input type="textbox" id="nilaiBing2" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem4_nl1" style="border: #fff;"></td><td><input type="textbox" id="nilaiBing3" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem5_nl1" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled id="rata_bing1" class="rata_bing1" placeholder="Nilai Rata Rata" name="rata_bing1" style="border: #fff;"></td></tr><tr><th scope="row">Matematika</th><td><input type="textbox" id="nilaiMat1" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem3_nl2" style="border: #fff;"></td><td><input type="textbox" id="nilaiMat2" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem4_nl2" style="border: #fff;"></td><td><input type="textbox" id="nilaiMat3" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem5_nl2" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled="" id="rata_mat1" class="rata_mat1" placeholder="Nilai Rata Rata" name="rata_mat1" style="border: #fff;"></td></tr><tr><th scope="row">IPS</th><td><input type="textbox" id="nilaiIps1" placeholder="Masukkan Nilai Anda" onkeyup="ips()" name="sem3_nl4" style="border: #fff;"></td><td><input type="textbox" id="nilaiIps2" placeholder="Masukkan Nilai Anda" onkeyup="ips()" name="sem4_nl4" style="border: #fff;"></td><td><input type="textbox" id="nilaiIps3" placeholder="Masukkan Nilai Anda" onkeyup="ips()" name="sem5_nl4" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled="" id="rata_ips1" class="rata_ips1" placeholder="Nilai Rata Rata" name="rata_ips1" style="border: #fff;"></td></tr></tbody><tfoot><tr id="table-footer"><td><button type="button" id="checkRata" onclick="checkrata()" class="btn btn-success"> Check rata rata</button></td><td colspan="5" id="textRataRata"></td><input type="text" hidden="" id="totalRataRata" name="totalRataRata"><input type="textbox" hidden="" id="rata_bing" class="rata_bing" placeholder="Nilai Rata Rata" name="rata_bing" style="border: #fff;"><input type="textbox" hidden="" id="rata_mat" class="rata_mat" placeholder="Nilai Rata Rata" name="rata_mat" style="border: #fff;"><input type="textbox" hidden="" id="rata_ips" class="rata_ips" placeholder="Nilai Rata Rata" name="rata_ips" style="border: #fff;"><input type="textbox" hidden="" id="rata_ipa" class="rata_ipa" placeholder="Nilai Rata Rata" name="rata_ipa" style="border: #fff;"></tr></tfoot></table>');
		} else if (valueNilai == 'ipa') {
			$('#daftarNilai').html('<table class="table table-bordered" style="margin-top: 20px;"><thead><tr><th scope="col"><input type="textbox" value="NIlai" style="border: #fff;" ></th><th scope="col">Semester 3</th><th scope="col">Semester 4</th><th scope="col">Semester 5</th><th scope="col">Rata - Rata</th></tr></thead><tbody><tr><th scope="row">B.inggris</th><td><input type="textbox" id="nilaiBing1" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem3_nl1" style="border: #fff;"></td><td><input type="textbox" id="nilaiBing2" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem4_nl1" style="border: #fff;"></td><td><input type="textbox" id="nilaiBing3" placeholder="Masukkan Nilai Anda" onkeyup="bing()" name="sem5_nl1" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled id="rata_bing1" class="rata_bing1" placeholder="Nilai Rata Rata" name="rata_bing1" style="border: #fff;"></td></tr><tr><th scope="row">Matematika</th><td><input type="textbox" id="nilaiMat1" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem3_nl2" style="border: #fff;"></td><td><input type="textbox" id="nilaiMat2" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem4_nl2" style="border: #fff;"></td><td><input type="textbox" id="nilaiMat3" placeholder="Masukkan Nilai Anda" onkeyup="mat()" name="sem5_nl2" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled="" id="rata_mat1" class="rata_mat1" placeholder="Nilai Rata Rata" name="rata_mat1" style="border: #fff;"></td></tr><tr><th scope="row">IPA</th><td><input type="textbox" id="nilaiIpa1" placeholder="Masukkan Nilai Anda" onkeyup="ipa()" name="sem3_nl3" style="border: #fff;"></td><td><input type="textbox" id="nilaiIpa2" placeholder="Masukkan Nilai Anda" onkeyup="ipa()" name="sem4_nl3" style="border: #fff;"></td><td><input type="textbox" id="nilaiIpa3" placeholder="Masukkan Nilai Anda" onkeyup="ipa()" name="sem5_nl3" style="border: #fff;"></td><td style="background-color: #E3E3E3"><input type="textbox" disabled="" id="rata_ipa1" class="rata_ipa1" placeholder="Nilai Rata Rata" name="rata_ipa1" style="border: #fff;"></td></tr></tbody><tfoot><tr id="table-footer"><td><button type="button" id="checkRata" onclick="checkrata()" class="btn btn-success"> Check rata rata</button></td><td colspan="5" id="textRataRata"></td><td colspan="5" id="textRataRata"></td><input type="text" hidden="" id="totalRataRata" name="totalRataRata"><input type="textbox" hidden="" id="rata_bing" class="rata_bing" placeholder="Nilai Rata Rata" name="rata_bing" style="border: #fff;"><input type="textbox" hidden="" id="rata_mat" class="rata_mat" placeholder="Nilai Rata Rata" name="rata_mat" style="border: #fff;"><input type="textbox" hidden="" id="rata_ips" class="rata_ips" placeholder="Nilai Rata Rata" name="rata_ips" style="border: #fff;"><input type="textbox" hidden="" id="rata_ipa" class="rata_ipa" placeholder="Nilai Rata Rata" name="rata_ipa" style="border: #fff;"></tr></tfoot></table>');
		} else {
			alert('Jurusan Tidak Terdaftar');
		}
	});

	$('#table-footer').hide();
	function checkrata(){
		var jurusan 	= 	$('.jurusan').val();
		var rataBing1 	= 	$('#rata_bing1').val();
		var rataMat1 	= 	$('#rata_mat1').val();
		var rataIps1 	= 	$('#rata_ips1').val();
		var rataIpa1 	= 	$('#rata_ipa1').val();

		if (jurusan == 'ips') {
			var totalRata = parseInt(rataBing1) + parseInt(rataMat1) + parseInt(rataIps1);
			var rataRata = totalRata / 3;
		}else {
			var totalRata = parseInt(rataBing1) + parseInt(rataMat1) + parseInt(rataIpa1);
			var rataRata = totalRata / 3;
		}

		if (isNaN(rataRata)) {
			Swal.fire({
				icon: 'info',
				title: 'Oops...',
				text: 'Periksa data nilai anda lagi',
			})
			var rataRata = '[Silahkan Coba Lagi]';
			// var rataRata = '[Gagal Menghitung] - Silahkan periksa nilai anda lagi';
		}

		if (rataRata > 80 && rataRata < 100) {
			$('#note').hide();
			var table_footer = {"background-color": "#5cb85c"}
			$('#pre-daftar').prop('disabled', false);
		}else if(rataRata < 80) {
			Swal.fire({
				icon: 'info',
				title: 'Waah...',
				text: 'Maaf banget ya, sistem mendeteksi kalau total nilai rata rata kamu masih di bawah 80',
				footer: '<a href="https://api.whatsapp.com/send/?phone=62895614720008&text&app_absent=0">Mau Chat Dengan Kami?</a>'
			})
			$('#note').show();
			$('#note').text('Rata Rata Anda Tidak Memenuhi Syarat');
			var table_footer = {"background-color": "#d9534f"};
			$('#pre-daftar').prop('disabled', true);
		}else {
			var table_footer = {"background-color": "#f0ad4e"};
			$('#pre-daftar').prop('disabled', true);
		}	

		$('#table-footer').show();
		$('#table-footer').css(table_footer);
		$('#textRataRata').text('Total Rata Rata Anda '+rataRata);
		$('#totalRataRata').val(rataRata);
	}

	function totalRataRata() {
		var jurusan 	= 	$('.jurusan').val();
		var rataBing1 	= 	$('#rata_bing1').val();
		var rataMat1 	= 	$('#rata_mat1').val();
		var rataIps1 	= 	$('#rata_ips1').val();
		var rataIpa1 	= 	$('#rata_ipa1').val();

		// alert(parseInt(rataBing1));
		// 	var totalRata = parseInt(rataBing1) + parseInt(rataMat1);
		// 	var totalRataRata = parseInt(totalRata) / parseInt(2);

		// 	alert(rataBing1);
		// if(rataBing1 != '' && rataMat1 != ''){
		// }
		// // confirm(totalRata);

		// if (totalRataRata > 80 && totalRataRata < 100) {
		// 	('#note').hide();
		// 	var table_footer = {"background-color": "#5cb85c"}

		// }else if(totalRataRata < 80) {
		// 	$('#note').show();
		// 	$('#note').text('Rata Rata Anda Tidak Memenuhi Syarat');
		// 	var table_footer = {"background-color": "#d9534f"}
		// }else {
		// 	var table_footer = {"background-color": "#f0ad4e"}
		// }

		// if (jurusan == 'ips') {

		// 	if (rataBing1 != '' && rataMat1 != '' && rataIps1 != '') {
		// 		$('#table-footer').show();
		// 		$('#table-footer').css(table_footer);
		// 		$('#textRataRata').text('Total Rata Rata Anda '+totalRataRata);
		// 		$('#totalRataRata').val(totalRataRata);
		// 	}
		// }else if(jurusan == 'ipa') {
		// 	if (rataBing1 != '' && rataMat1 != '' && rataIpa1 != '') {
		// 		$('#table-footer').show();
		// 		$('#table-footer').css(table_footer);
		// 		$('#textRataRata').text('Total Rata Rata Anda '+totalRataRata);
		// 		$('#totalRataRata').val(totalRataRata);
		// 	}
		// }else{
		// 	alert('Check form jurusan anda');
		// }

	}

	function bing() {
		var nilaiBing1 = $('#nilaiBing1').val();
		var nilaiBing2 = $('#nilaiBing2').val();
		var nilaiBing3 = $('#nilaiBing3').val();

		var totalNilai = parseInt(nilaiBing1) + parseInt(nilaiBing2) + parseInt(nilaiBing3);
		var rataRata = parseInt(totalNilai) / 3;
		if (nilaiBing3 != '') {
			$('#rata_bing').val(rataRata);
			$('#rata_bing1').val(rataRata);
		}

		// totalRataRata();
		
	}
	function mat() {
		var nilaiMat1 = $('#nilaiMat1').val();
		var nilaiMat2 = $('#nilaiMat2').val();
		var nilaiMat3 = $('#nilaiMat3').val();

		var totalNilai = parseInt(nilaiMat1) + parseInt(nilaiMat2) + parseInt(nilaiMat3);
		var rataRata = parseInt(totalNilai) / 3;
		if (nilaiMat3 != '') {
			$('#rata_mat').val(rataRata);
			$('#rata_mat1').val(rataRata);
		}
		// totalRataRata();
	}
	function ips() {
		var nilaiIps1 = $('#nilaiIps1').val();
		var nilaiIps2 = $('#nilaiIps2').val();
		var nilaiIps3 = $('#nilaiIps3').val();

		var totalNilai = parseInt(nilaiIps1) + parseInt(nilaiIps2) + parseInt(nilaiIps3);
		var rataRata = parseInt(totalNilai) / 3;
		if (nilaiIps3 != '') {
			$('#rata_ips').val(rataRata);
			$('#rata_ips1').val(rataRata);
		}
		// totalRataRata();
	}
	function ipa() {
		var nilaiIpa1 = $('#nilaiIpa1').val();
		var nilaiIpa2 = $('#nilaiIpa2').val();
		var nilaiIpa3 = $('#nilaiIpa3').val();

		var totalNilai = parseInt(nilaiIpa1) + parseInt(nilaiIpa2) + parseInt(nilaiIpa3);
		var rataRata = parseInt(totalNilai) / 3;
		if (nilaiIpa3 != '') {
			$('#rata_ipa').val(rataRata);
			$('#rata_ipa1').val(rataRata);
		}
		// totalRataRata();
	}

	// function checkNilai() {
	// 	var nilaisemester = $('.daftarNilai .table .nilaisemester').val();
	// 	var nilaisemester2 = $('.daftarNilai .table .nilaisemester2').val();
	// 	var nilaisemester3 = $('.daftarNilai .table .nilaisemester3').val();
	// 	var nilaisemester4 = $('.daftarNilai .table .nilaisemester4').val();
	// 	var nilaisemester5 = $('.daftarNilai .table .nilaisemester5').val();
	// 	var nilaisemester6 = $('.daftarNilai .table .nilaisemester6').val();
	// 	var nilaisemester7 = $('.daftarNilai .table .nilaisemester7').val();
	// 	var nilaisemester8 = $('.daftarNilai .table .nilaisemester8').val();
	// 	var nilaisemester9 = $('.daftarNilai .table .nilaisemester9').val();
	// 	var nilaisemester10 = $('.daftarNilai .table .nilaisemester10').val();
	// 	var nilaisemester11 = $('.daftarNilai .table .nilaisemester11').val();
	// 	var nilaisemester12 = $('.daftarNilai .table .nilaisemester12').val();

	// 	if(nilaisemester < 80){
	// 		// $('#note').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 3');
	// 		$('#pre-daftar').hide();
	// 	}else if(nilaisemester2 < 80) {
	// 		if (nilaisemester2 != '') {
	// 			// $('#note2').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 4');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester3 < 80) {
	// 		if (nilaisemester3 != '') {
	// 			// $('#note3').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 5');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester4 < 80) {
	// 		if (nilaisemester4 != '') {
	// 			// $('#note4').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 3');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester5 < 80) {
	// 		if (nilaisemester5 != '') {
	// 			// $('#note5').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 4');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester6 < 80) {
	// 		if (nilaisemester6 != '') {
	// 			// $('#note6').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 5');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester7 < 80) {
	// 		if (nilaisemester7 != '') {
	// 			// $('#note7').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 3');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester8 < 80) {
	// 		if (nilaisemester8 != '') {
	// 			// $('#note8').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 4');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester9 < 80) {
	// 		if (nilaisemester9 != '') {
	// 			// $('#note9').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 5');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester10 < 80) {
	// 		if (nilaisemester10 != '') {
	// 			// $('#note10').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 3');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester11 < 80) {
	// 		if (nilaisemester11 != '') {
	// 			// $('#note11').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 4');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else if(nilaisemester12 < 80) {
	// 		if (nilaisemester12 != '') {
	// 			// $('#note12').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 5');
	// 			$('#pre-daftar').hide();
	// 		}
	// 	}else{
			

	// 		$('#pre-daftar').show();
	// 	}
	// }
	// $('.daftarNilai').on('keyup', '.table .nilaisemester', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note').show();
	// 		$('#note').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester2', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note2').show();
	// 		$('#note2').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note2').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester3', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note3').show();
	// 		$('#note3').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note3').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester4', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note4').show();
	// 		$('#note4').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note4').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester5', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note5').show();
	// 		$('#note5').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note5').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester6', function() {
	// 	var value = $(this).val();
	// 	if (value < 0) {
	// 		$('#note6').show();
	// 		$('#note6').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note6').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester7', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note7').show();
	// 		$('#note7').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note7').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester8', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note8').show();
	// 		$('#note8').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note8').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester9', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note9').show();
	// 		$('#note9').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note9').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester10', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note10').show();
	// 		$('#note10').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note10').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester11', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note11').show();
	// 		$('#note11').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note11').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester12', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note12').show();
	// 		$('#note12').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note12').hide();
	// 		$("#pre-daftar").show();
	// 	}

	// }

	// console.log(nilaisemester);
	// $('.daftarNilai').on('keyup', '.table .nilaisemester', function() {
	// 	// var nilaisemester2 = $('.daftarNilai .table .nilaisemester2');
	// 	// alert(nilaisemester2);
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note').show();
	// 		$('#note').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester2', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note2').show();
	// 		$('#note2').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note2').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester3', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note3').show();
	// 		$('#note3').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel B.inggris Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note3').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester4', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note4').show();
	// 		$('#note4').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note4').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester5', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note5').show();
	// 		$('#note5').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note5').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester6', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note6').show();
	// 		$('#note6').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel Matemastika Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note6').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester7', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note7').show();
	// 		$('#note7').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note7').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester8', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note8').show();
	// 		$('#note8').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note8').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester9', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note9').show();
	// 		$('#note9').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPA Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note9').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester10', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note10').show();
	// 		$('#note10').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 3');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note10').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester11', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note11').show();
	// 		$('#note11').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 4');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note11').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
	// $('.daftarNilai').on('keyup', '.table .nilaisemester12', function() {
	// 	var value = $(this).val();
	// 	if (value < 80) {
	// 		$('#note12').show();
	// 		$('#note12').text('Nilai Anda Tidak Sesuai Dengan Katentuan di mapel IPS Semester 5');
	// 		$("#pre-daftar").hide();
	// 	} else {
	// 		$('#note12').hide();
	// 		$("#pre-daftar").show();
	// 	}
	// 	// alert('a');
	// });
</script>

<!-- get data -->
<script>
	function open_kartu() {
		var id = $('#id_pendaftaran').val();
		// var id = document.getElementById("id_pendaftaran");
		window.open('<?= base_url('Mastercontrol/fpd/'); ?>');
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