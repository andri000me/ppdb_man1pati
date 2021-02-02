 <section class="content-header">
    <h1>
        Form Wawancara Ortu
        <small>PSB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Wawancara Ortu</li>
    </ol>
</section>
<script type="text/javascript">
    function pilih(){
        $("#kotakws").show();
    }
    function pla(){
        if($("#mkl").val()=="Ya"){
            $("#mrk").show();
        }else{
            $("#mrk").show();
        }
    }
</script>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                <?php echo form_open('Control/simpan_wso');?>
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
                                            <label>Nama Bapak ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                                <input type="text" name="nama_ortu" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>1. Mengapa memilih SMK Wikrama 1 Jepara sebagai tempat pendidikan anak ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <textarea class="form-control" id="jwb" name="jwb1"></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>2. Profesi Sehari-hari ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb2" value="PNS"> <label style="font-weight: normal;">PNS</label>
                                            <p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Guru"> <label style="font-weight: normal;">Guru</label>
                                            <p>
                                            <input type="radio" name="jwb2" value="Wiraswasta"> <label style="font-weight: normal;">Wiraswasta</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Tani"> <label style="font-weight: normal;">Petani</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Buruh Tani"> <label style="font-weight: normal;">Buruh Tani</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb2" value="Serabutan"><label style="font-weight: normal;">Serabutan</label>
                                            </p>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>3. Berapa pendapatan perbulan ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                                    <p>
                                            <input type="radio" name="jwb3" value="< 500 rb"> <label style="font-weight: normal;">< 500 rb</label>
                                            <p>
                                            <p>
                                            <input type="radio" name="jwb3" value="< 1 jt"> <label style="font-weight: normal;">< 1 jt</label>
                                            <p>
                                            <input type="radio" name="jwb3" value="< 2 jt"> <label style="font-weight: normal;">< 2 jt</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb3" value="2 jt lebih"><label style="font-weight: normal;">2 jt lebih</label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>4. Berapa tanggungan keluarga / Jumlah anak ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb4" value="1"> <label style="font-weight: normal;">1</label>
                                            <p>
                                            <input type="radio" name="jwb4" value="2"> <label style="font-weight: normal;">2</label>
                                            </p>
                                               <p>
                                            <input type="radio" name="jwb4" value="3"> <label style="font-weight: normal;">3</label>
                                            <p>
                                            <input type="radio" name="jwb4" value="4"> <label style="font-weight: normal;">4</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb4" value="5"> <label style="font-weight: normal;">5</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb4" value="> 5"> <label style="font-weight: normal;">> 5</label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>5. Apakah bapak sependapat dengan sistem ketertiban di SMK Wikrama 1 Jepara ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                                <label>a. Rambut siswa wajib pendek dan tidak disemir(Bagi Putra)</label>
                                                <div class="ja" style="margin-left: 15px;">
                                                <p>
                                                <input type="radio" name="jwb5" value="Ya"> <label style="font-weight: normal;">Ya</label>
                                                </p>
                                                <p>
                                                <input type="radio" name="jwb5" value="Tidak"> <label style="font-weight: normal;">Tidak</label>
                                                </p>
                                                </div>
                                                <label>b. Rambut siswa wajib diharnet ikat rambut(bagi siswi yang tidak berjilbab)</label>
                                                <div class="ja" style="margin-left: 15px;">
                                                <p>
                                                <input type="radio" name="jwb6" value="Ya"> <label style="font-weight: normal;">Ya</label>
                                                </p>
                                                <p>
                                                <input type="radio" name="jwb6" value="Tidak"> <label style="font-weight: normal;">Tidak</label>
                                                </p>
                                                </div>
                                                <label>c. Masuk sekolah paling terlambat jam 06.50 atau jam 7 kurang 10 dan pulang pukul 16.00 bahkan sampai malam(jika ada kegiatan)</label>
                                                <div class="ja" style="margin-left: 15px;">
                                                <p>
                                                <input type="radio" name="jwb7" value="Ya"> <label style="font-weight: normal;">Ya</label>
                                                </p>
                                                <p>
                                                <input type="radio" name="jwb7" value="Tidak"> <label style="font-weight: normal;">Tidak</label>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>6. Apakah putra/putri bapak punya riwayat penyakit ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb8" value="Asma"> <label style="font-weight: normal;">Asma</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb8" value="Tifus"> <label style="font-weight: normal;">Alergi</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb8" value="Lain-lain"> <label style="font-weight: normal;">Lain-lain</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb8" value="Tidak Punya"> <label style="font-weight: normal;">Tidak Punya</label>
                                            </p>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>7. Apakah putra/putri bapak merokok ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                                <select class="form-control" id="mkl" name="jwb9" onchange="pla()">
                                                    <option>Tidak</option>
                                                    <option>Ya</option>
                                                </select>
                                            </p>
                                            </button>
                                        </div>
                                        <div class="form-group" hidden="" id="mrk">
                                            <label>8. Apakah  bapak membolehkan putra/putrinya merokok ?</label>
                                            <div class="jw" style="margin-left: 15px;">
                                            <p>
                                            <input type="radio" name="jwb10" value="Boleh"> <label style="font-weight: normal;">Boleh</label>
                                            </p>
                                            <p>
                                            <input type="radio" name="jwb10" value="Tidak boleh"> <label style="font-weight: normal;">Tidak boleh</label>
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