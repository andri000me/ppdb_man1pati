<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <h3 style="text-align: center;">Laporan Wawancara Siswa</h3>
    <br>
                    
                                    <center>
                                    <table id="example1" class="table table-bordered table-striped" style="width: 95%;">
                                            <tr>
                                                <th>No</th>
                                                <th>No Seleksi</th>
                                                <th>Nama</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>

                                                <?php
                                                    $q=$this->model_sekolah->qw('siswa.no_seleksi,siswa.nama','siswa,jawab_talking','WHERE siswa.no_seleksi=jawab_talking.no_seleksi')->result();
                                                    foreach($q as $tampil){
                                                    $qw=$this->model_sekolah->qw('*','jawab_talking','')->result();
                                                    foreach($qw as $tmp){
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>1. Perhatikan penampilan siswa/rambut/pakaian</td>
                                                    <td><?php echo $tmp->jawab1;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>2. Dapat Informasi SMK Wikrama dari siapa ?</td>
                                                    <td><?php echo $tmp->jawab2;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>3. Apa motivasi masuk wikrama ?</td>
                                                    <td><?php echo $tmp->jawab3;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>4. Siapa yang bertanggung jawab atas belajar siswa</td>
                                                    <td><?php echo $tmp->jawab4;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>5. Siapa yang bertanggungjawab terhadap biaya sekolah ?</td>
                                                    <td><?php echo $tmp->jawab5;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>6. Apakah pernah punya penyakit kronis ?</td>
                                                    <td><?php echo $tmp->jawab6;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>7. Apakah anda pernah merokok ?</td>
                                                    <td><?php echo $tmp->jawab7;?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $tampil->no_seleksi;?></td>
                                                    <td></td>
                                                    <td>8. Apakah  sanggup berpenampilan rapi ?</td>
                                                    <td><?php echo $tmp->jawab8;?></td>
                                                </tr>    
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                }
                                                ?>
                                    </table>

                <!-- Main content -->
   <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script> 