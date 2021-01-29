<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <h3 style="text-align: center;">Laporan Pengukuran Seragam</h3>
    <br>
                    
                                    <center>
                                         <table id="example1" class="table table-bordered table-striped">
                                        <style type="text/css">
                                            th{
                                                text-align: center;
                                            }
                                        </style>
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">No Seleksi</th>
                                                <th rowspan="2">Nama</th>
                                                <th colspan="10">Pesanan</th>
                                            </tr>
                                            <tr>
                                               
                                                <th>Jas Almamater</th>
                                                <th>Training</th>
                                                <th>Bawahan Hijau</th>
                                                <th>Seragam Pramuka</th>
                                                <th>Bawahan Muslim</th>
                                                <th>Baju Muslim</th>
                                                <th>Seragam Hitam Putih</th>
                                                <th>Atribut Sekolah</th>
                                                <th>Atribut Pramuka</th>
                                                <th>Sepatu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=0;
                                                $qw=$this->model_sekolah->qw('siswa.no_seleksi,siswa.nama,seragam.jas_alm,seragam.training,seragam.bwh_hijau,seragam.srgm_pramuka,seragam.bwh_muslim,seragam.srgm_hp,seragam.atribut_sekolah,seragam.atribut_pramuka,seragam.sepatu,seragam.id_seragam,seragam.jawab10','seragam,siswa','WHERE siswa.no_seleksi=seragam.no_seleksi')->result();
                                                foreach($qw as $tampil){
                                                $no++;
                                            ?>  
                                            <tr>

                                                <td><?php echo $no;?></td>
                                                <td><?php echo $tampil->no_seleksi;?></td>
                                                <td><?php echo $tampil->nama;?></td>
                                                <td><?php echo $tampil->jas_alm;?></td>
                                                <td><?php echo $tampil->training;?></td>
                                                <td><?php echo $tampil->bwh_hijau;?></td>
                                                <td><?php echo $tampil->srgm_pramuka;?></td>
                                                <td><?php echo $tampil->bwh_muslim;?></td>
                                                <td><?php echo $tampil->jawab10;?></td>
                                                <td><?php echo $tampil->srgm_hp;?></td>
                                                <td><?php echo $tampil->atribut_sekolah;?></td>
                                                <td><?php echo $tampil->atribut_pramuka;?></td>
                                                <td><?php echo $tampil->sepatu;?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    </center>

                <!-- Main content -->
   <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script> 