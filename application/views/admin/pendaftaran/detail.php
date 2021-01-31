<section class="content-header">
    <h1>
        Detail Data Diri Siswa
        <small>PPDB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Detail </a></li>
        <li class="active">Data Diri Siswa</li>
    </ol>
</section>

<div class="container">
		<div class="kotak" style="margin-top:20px;">
		<!-- <form action="" method="post" enctype="multipart/form-data"> -->
		<?= form_open_multipart(); ?>
			<div class="row">
			<div class="col-md-6">
				<table style="width: 100%;">
				<?php 
				// $hr="PENDF";
				// $no=0001;

				// $why = $hr.$no++;
				?>
					<tr style="margin-top:20px;">
						<td><label>ID Pendaftaran : <?= $data['id_pendaftaran'] ?></label></td>
					</tr style="margin-top:20px;">

					<tr>
						<td><label>Nama Lengkap : <?= $data['nm_lengkap'] ?></label></td>
					</tr style="margin-top:20px;">
					
					<tr style="margin-top:20px;">
						<td><label>Tempat Lahir : <?= $data['tmp_lahir'] ?></label></td>
					</tr style="margin-top:20px;">
				
					<tr style="margin-top:20px;">
						<td><label>Tanggal Lahir : <?= $data['tgl_lahir'] ?></label></td>
					</tr>
					
					<tr style="margin-top:20px;">
						<td><label>Jenis Kelamin : <?= $data['jns_kelamin'] ?></label></td>
					</tr>
					<tr style="margin-top:20px;">
						<td><label>Agama : <?= $data['agm'] ?></label></td>
					</tr>
					
					<tr style="margin-top:20px;">
						<td><label>No Hp : <?= $data['no_hp'] ?></label></td>
					</tr>
					<tr style="margin-top:20px;">
						<td><label>Nama Orang Tua/Wali : <?= $data['nm_ortu'] ?></label></td>
					</tr>
					
					<tr style="margin-top:20px;">
						<td><label>No Hp Ortu : <?= $data['no_hp_ortu'] ?></label></td>
					</tr>
                    <tr style="margin-top:20px;">
						<td><label>Asal SMP/MTs : <?= $data['asl_sekolah'] ?></label></td>
					</tr>
					<tr style="margin-top:20px;">
						<td><label>Alamat : <?= $data['almt'] ?></label></td>
					</tr>
					<tr style="margin-top:20px;">
						<th><label for="validationCustom04">Jurusan : <?= $data['jurusan'] ?></label></th>
					</tr>
                    <tr style="margin-top:20px;">
						<td><label>Email : <?= $data['email'] ?></label></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table style="width: 100%;">
					
					<tr>
						<th><label  style="margin-top: 10px;">Upload KK :</label></th>
					</tr>
					<tr>
						<td>
							<input type="file" class="btn btn-success col-md-12" name="file_upload_kk" id="file_upload_kk">
						</td>
					</tr>
					<tr>
						<th><label  style="margin-top: 10px;">Upload Akte Kelahiran :</label></th>
					</tr>
					<tr>
						<td>
							<input type="file" class="btn btn-success col-md-12" name="file_upload_ak" id="file_upload_ak">
						</td>
					</tr>
					<tr>
						<th><label  style="margin-top: 10px;">Upload Foto 3x4 :</label></th>
					</tr>
					<tr>
						<td>
							<input type="file" class="btn btn-success col-md-12" name="file_upload_foto" id="file_upload_foto">
						</td>
					</tr>
					<tr>
						<th><label  style="margin-top: 10px;">Upload Raport :</label></th>
					</tr>
					<tr>
						<td>
							<input type="file" class="btn btn-success col-md-12" name="file_upload" id="file_upload">
						</td>
					</tr>
					
					
					</table>
			</div>

			<div class="col-md-12 table-responsive">
			<table class="table table-bordered" style="margin-top: 20px;">
					<thead>
						<tr>
						<th scope="col">Nilai</th>
						<th scope="col">Semester 3</th>
						<th scope="col">Semester 4</th>
						<th scope="col">Semester 5</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<th scope="row">B.inggris</th>
                        <td>
                            <div>
                                <p><?= $data['sem3_nl1'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem4_nl1'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem5_nl1'] ?></p>
                            </div>
                        </td>						
                        </tr>
						<tr>
						<th scope="row">Matematika</th>
						<td>
                            <div>
                                <p><?= $data['sem3_nl2'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem4_nl2'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem5_nl2'] ?></p>
                            </div>
                        </td>		
                        </tr>
						<tr>
						<th scope="row">IPA</th>
						<td>
                            <div>
                                <p><?= $data['sem3_nl3'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem4_nl3'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem5_nl3'] ?></p>
                            </div>
                        </td>		
                        </tr>
						<tr>
						<th scope="row">IPS</th>
						<td>
                            <div>
                                <p><?= $data['sem3_nl4'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem4_nl4'] ?></p>
                            </div>
                        </td>						
                        <td>
                            <div>
                                <p><?= $data['sem5_nl4'] ?></p>
                            </div>
                        </td>		
                        </tr>
					</tbody>
				</table>
                <a href="<?= base_url() ?>pendaftaran/index" class="btn btn-primary">Kembali</a>

			</div>
			
	
		</div>
		<?= form_close(); ?>
		<!-- </form> -->
		</div>
	</div>
<!-- <section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                Detail Data pendaftaran
            </div>
            <div class="card-body">
            <tr>
                <th> Nama :</th>
                <td><?= $data['nm_lengkap'] ?></td>
            </tr><br>
            <tr>
                <th>ID Pendaftaran : </th>
                <td><?= $data['id_pendaftaran'] ?></td>
            </tr><br>
            <tr>
                <th>Nomer HP :</th>
                <td><?= $data['no_hp'] ?></td>
            </tr><br>
            <tr>
                <th>Asal Sekolah : </th>
                <td><?= $data['asl_sekolah'] ?></td>
            </tr><br>
                <a href="<?= base_url() ?>pendaftaran/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section> -->

<style>
.table tr td {	
}
</style>