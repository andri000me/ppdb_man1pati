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
    function simpan_pil(){
        $.ajax({
          url:"<?php echo site_url('control/simpan_ws');?>",
          type:"POST",
          data:{
            jawab:$("#jwb").val(),
            id_isi:$("#id_isi").val(),
            no_seleksi:$("#no_seleksi").val()
          },
          success:function(hasil){
           alert(hasil);
          }
        });
  }
</script>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                
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
                                             <option value="<?php echo $tampil->no_seleksi;?>"><?php echo $tampil->nama;?>(<?php echo $tampil->no_seleksi;?>)</option>
                                             <?php
                                                }
                                            ?>
                                         </select>
                                     </div>
                                </div> 
                                <div id="kotakws" hidden="">
                                        <?php
                                            $qw=$this->model_sekolah->qw("*","isi_talking","WHERE pil_satu=''")->result();

                                            foreach($qw as $tampil){ 
                                        ?>
                                        <div class="form-group">
                                            <label><?php echo $tampil->isi;?></label>
                                            <p hidden="">
                                            <input type="text" class="form-control" name="id_isi" id="id_isi" value="<?php echo $tampil->id_isi;?>">
                                            </p>
                                            <textarea class="form-control" id="jwb" name="<?php echo $tampil->id_isi;?>"></textarea>
                                        </div>
                                             <?php
                                            }
                                            ?>
                                            <?php
                                            $q=$this->model_sekolah->qw("*","isi_talking","WHERE pil_satu <>''")->result();

                                            foreach($q as $tampil){ 
                                                $pili=$tampil->pil_satu;
                                                $pil=$tampil->pil_tiga;
                                                $pila=$tampil->pil_empat;
                                                if($pil ==""){
                                                    $hd='hidden';
                                                    $ha='hidden';
                                                }else{
                                                    $hd='';
                                                    $ha='';
                                                }
                                                 if($pila ==""){
                                                   
                                                    $hi='hidden';
                                                }else{
                                                   
                                                    $hi='';
                                                }
                                                 if($pili <>""){
                                                    $hj='hidden';
                                                }else{
                                                    $hj='';
                                                }


                                            ?>
                                            <label><?php echo $tampil->isi;?></label>

                                            <p <?php echo $hj;?>>
                                            <input type="text" name="id_isi" value="<?php echo $tampil->id_isi;?>">
                                            <textarea class="form-control" ></textarea>
                                            </p>
                                            <p>
                                            <input type="radio" name="<?php echo $tampil->id_isi;?>" class="form-control" value="<?php echo $tampil->pil_satu;?>">  <label><?php echo $tampil->pil_satu;?></label>
                                            </p>
                                            <p>
                                            <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_dua;?>">  <label><?php echo $tampil->pil_dua;?></label>
                                            </p>
                                            <p <?php echo $ha;?>>
                                            <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_tiga;?>">  <label><?php echo $tampil->pil_tiga;?></label>
                                            </p>
                                            <p <?php echo $ha;?> <?php echo $hi;?>>
                                             <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_empat;?>">  <label><?php echo $tampil->pil_empat;?></label>
                                            </p>
                                            <p <?php echo $ha;?> <?php echo $hi;?>>
                                             <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_lima;?>">  <label><?php echo $tampil->pil_lima;?></label>
                                            </p>
                                            <p <?php echo $ha;?> <?php echo $hi;?>>
                                             <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_enam;?>">  <label><?php echo $tampil->pil_enam;?></label>
                                            </p>
                                            <p <?php echo $ha;?> <?php echo $hi;?>>
                                              <input type="radio" name="<?php echo $tampil->id_isi;?>" id="jwb" class="form-control" value="<?php echo $tampil->pil_tuju;?>">  <label><?php echo $tampil->pil_tuju;?></label>
                                            </p>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="button" class="btn btn-primary" onclick="simpan_pil()">Simpan</button>
                                    </div>
                                    
                                </div>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->