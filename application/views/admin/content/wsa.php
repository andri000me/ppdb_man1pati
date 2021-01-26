 <section class="content-header">
    <h1>
        Form Wawancara Siswa
        <small>PSB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Wawancara Siswa</li>
    </ol>
</section>
<script type="text/javascript">
    function pilih(){
        $("#kotakws").show();
    }
</script>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                <?php echo form_open('Control/simpan_ws');?>
                                <div role="form">
                                    <div class="box-body">
                                        <div class="panel panel-success">
                                     <div class="panel-heading">Pilih Calon Peserta Didik</div>
                                     <div class="panel-body">
                                         <select class="form-control" id="no_seleksi" name="no_seleksi" onchange="pilih()">
                                             <option>--Pilih--</option>
                                             <?php
                                                $qa=$this->db->get('siswa')->result();
                                                foreach($qa as $tampil){
                                             ?>
                                             <option value="<?php echo $tampil->no_seleksi;?>"><?php echo $tampil->nama;?> (<?php echo $tampil->no_seleksi;?>)</option>
                                             <?php
                                                }
                                            ?>
                                         </select>
                                     </div>
                                </div> 
                                <div id="kotakws" hidden="">
                                        <div class="form-group">
                                            <label>1. Perhatikan penampilan siswa/rambut/pakaian</label>
                                            <br>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb1" value="Tidak Rapi"> <label style="font-weight: normal;">Tidak Rapi</label>
                                            <p>
                                            <input type="radio" name="jwb1" value="Cukup"> <label style="font-weight: normal;">Cukup</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb1" value="Rapi"> <label style="font-weight: normal;">Rapi</label>
                                            </p>
                                            <p>
                                        </div>
                                         <div class="form-group">
                                            <label>2. Dapat Informasi SMK Wikrama dari siapa ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb2" value="Teman/tetangga"> <label style="font-weight: normal;">Teman/tetangga</label>
                                            <p>
                                            <input type="radio" name="jwb2" value="Keluarga"> <label style="font-weight: normal;">Keluarga</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Siswa SMK Wikrama 1 Jepara"> <label style="font-weight: normal;">Siswa SMK Wikrama 1 Jepara</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Sosialisasi"> <label style="font-weight: normal;">Sosialisasi</label>
                                            </p>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>3. Apa motivasi masuk wikrama ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <textarea class="form-control" id="jwb" name="jwb3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>4. Siapa yang bertanggung jawab atas belajar siswa</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb4" value="Belajar Sendiri"> <label style="font-weight: normal;">Belajar Sendiri</label>
                                            <p>
                                            <input type="radio" name="jwb4" value="Ditemani orangtua/saudara"> <label style="font-weight: normal;">Ditemani orangtua/saudara</label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>5. Siapa yang bertanggungjawab terhadap biaya sekolah ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb5" value="Orang tua kandung/Bapak dan Ibu/Bapak Saja/Ibu Saja"> <label style="font-weight: normal;">Orang tua kandung/Bapak dan Ibu/Bapak Saja/Ibu Saja</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb5" value="Orangtua angkat"> <label style="font-weight: normal;">Orangtua angkat</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb5" value="Saudara/Kakak/Paman"> <label style="font-weight: normal;">Saudara/Kakak/Paman</label>
                                            </p>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>6. Apakah pernah punya penyakit kronis ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb6" value="Asma"> <label style="font-weight: normal;">Asma</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb6" value="Tifus"> <label style="font-weight: normal;">Alergi</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb6" value="Lain-lain"> <label style="font-weight: normal;">Lain-lain</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb6" value="Tidak punya"> <label style="font-weight: normal;">Tidak punya</label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>7. Apakah anda pernah merokok ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb7" value="Pernah"> <label style="font-weight: normal;">Pernah</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb7" value="Kadang-kadang"> <label style="font-weight: normal;">Kadang-kadang</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb7" value="Sering"> <label style="font-weight: normal;">Sering</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb7" value="Tidak pernah"> <label style="font-weight: normal;">Tidak pernah</label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>8. Apakah  sanggup berpenampilan rapi ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb8" value="Sanggup"> <label style="font-weight: normal;">Sanggup</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb8" value="Tidak"> <label style="font-weight: normal;">Tidak</label>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    
                                </div>
                                <?php echo form_close();?>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->