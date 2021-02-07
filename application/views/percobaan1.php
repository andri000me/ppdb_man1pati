<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kartu</title>
	<style type="text/css">
		body{
			background-color: whitesmoke;
		}	
		.card{
			width: 60%;
			height: 400px;
			background-color: white;
			border: 1px solid black
		}

		.col-img{
			width: 20%;
			background-color: green;
			height: 100px
			/*padding: 10px; */
		}
		.icon-img{
			width: 100px;
			margin-left: 20%;
		}
		.col-header{
			background-color: green;
			height: 100px;
			width: 80%;
			/*margin-left: 15px;*/
		}
		.col-data{
			width: 50%;
			height: 150px;
			/*background-color: yellow;*/
		}
		.col-profil{
			width: 50%;
			height: 150px;
			/*margin-left: 10%;*/
			/*background-color: blue;*/
		}
		.view-data{
			font-size: 15px;
			/*margin-left: 100px;*/
		}
		.img-profil{
			width: 100px; 
			margin-left: 30%; 
			height: 150px;
		}
		.col-1{
			font-size: 13px;
			margin-left: 10px; 
			margin-top: 10px
		}
					.hr1{
				border: 1px solid black;
			}
			.hr2{
				border: 1px solid white
			}

		/*@media screen and (max-height: )*/

		@media only screen and (max-width: 780px)
		{
			.card{
				width: 100%;
				height: 400px;
				background-color: white;
			}
			.col-img{
				height: 60px;
				background-color: green;
				width: 20%;
			}
			.icon-img{
				width: 80%;
				margin-left: 10%;
				/*height: 50px;*/
			}
			.col-header{
				background-color: green;
				height: 60px;
				width: 80%
			}
			/*width: 80px; margin-left: 20%;*/
			h3{
				font-size: 60%;
			}
			p{
				font-size: 60%;
			}
			.col-data{
				width: 60%;
				height: 100px;
			}
			.col-profil{
				width: 40%;
				height: 100px;
			}
			.view-data{
				font-size: 10px;
			}
			.img-profil{
				width: 50px;
				margin-left: 30%; 
				height: 100px;
			}
			.col-1{
				font-size: 13px;
				margin-left: 10px; 
				margin-top: 10px
			}
			.hr1{
				border: 1px solid black;
			}
			.hr2{
				border: 1px solid white
			}

		}
	</style>
</head>
<body>
	<div class="card">
		<div class="row header">
			<div class="col-img" style="float: left;">
				<img src="https://ppdb.man2pati.sch.id/assets/img/logo1.png" class="icon-img">
			</div>
			<div class="col-header" style="float: left; ">
				<center>
					<h3>KARTU PENDAFTARAN PESERTA DIDIK BARU KELAS</h2>
					<p>UNGGULAN MAN 2 PATI TAHUN 2021/2022</p>
				</center>
			</div>

		</div>
		<hr class="hr1" >
		<div class="row">
			<div class="col-data" style="float: left;" >
				<div class="view-data" style="margin-left: 10px;">
				<table>
					<tr>
						<td>ID Pendaftaran</td>
						<td>:</td>
						<td><?= $isi['id_pendaftaran'] ?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?= $isi['nm_lengkap'] ?></td>
					</tr>
										<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><?= $isi['jns_kelamin'] ?></td>
					</tr>
										<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><?= $isi['tgl_lahir'] ?></td>
					</tr>
										<tr>
						<td>Tanggal Pendaftaran</td>
						<td>:</td>
						<td><?= date('d-m-y') ?></td>
					</tr>					<tr>
						<td>Tangal Seleksi/Test</td>
						<td>:</td>
						<td>1 Maret 2021</td>
					</tr>
										<tr>
						<td>Tempat Seleksi</td>
						<td>:</td>
						<td>MAN 2 PATI</td>
					</tr>

				</table>
				</div>
			</div>
			<div class="col-profil" style="float: left; ">
				<img src="<?= base_url(); ?>/upload/rapot/<?= $isi['nm_file_foto'] ?>" class="img-profil" >
			</div>
		</div>
		<hr class="hr2">
		<br>
		<div class="row" >
			<div class="col-1"  >
			<br>
				<p >Selamat anda telah mendaftar sebagai calon peserta didik MAN2 pati jalur kelas unggulan tahun pelajaran 2021/2022.</p>
				<p>NB. Untuk info lebih lanjut bisa hubungi Pak Sunaryo : 081325651645 atau Bu Rizka : 0813867129696 </p>
			
			</div>

		</div>

	</div>
</body>
</html>