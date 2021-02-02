<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
    $nomot=$val['no_seleksi'];
  }else{
    $val['no_seleksi']="--Pilih--";
    $val['jas_alm']="";
    $val['id_seragam']="";
    $val['training']="";
    $val['bwh_hijau']="";
    $val['srgm_pramuka']="";
    $val['bwh_muslim']="";
    $val['baju_muslim']="";
    $val['srgm_hp']="";
    $val['atribut_sekolah']="";
    $val['atribut_pramuka']="";
    $val['sepatu']="";
  }
?>
<script type="text/javascript">
    function tmp(){
        $("#jk").show();
    }
</script>
 <section class="content-header">
    <h1>
        Form Pengukuran Seragam
        <small>PSB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Pengukuran Seragam</li>
    </ol>
</section>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                <?php echo form_open($open);?>
                                <div role="form">
                                    <div class="box-body">
                                        <div class="panel panel-success">
                                     <div class="panel-heading">Pilih Calon Peserta Didik</div>
                                     <div class="panel-body">
                                         <select class="form-control" id="no_seleksi" name="no_seleksi" onchange="tmp()">
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
                                <div id="jk" hidden="">
                                        <div class="form-group">
                                            <label>Jas Almamater</label>
                                            <input type="text" class="form-control" name="jas_alm" value="<?php echo $val['jas_alm'];?>" style="width: 20%;">
                                            <p hidden="">
                                            <input type="text" class="form-control" name="id_seragam" value="<?php echo $val['id_seragam'];?>">
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Training</label>
                                            <input type="text" class="form-control" name="training" value="<?php echo $val['training'];?>" style="width: 20%;">
                                        </div>
                                        <div class="form-group">
                                            <label>Bawahan Hijau</label>
                                            <input type="text" class="form-control" value="<?php echo $val['bwh_hijau'];?>" name="bwh_hijau" style="width: 20%;">
                                        </div>
                                        <div class="form-group">
                                            <label>Sergama Pramuka</label>
                                            <input type="text" class="form-control" value="<?php echo $val['srgm_pramuka'];?>" name="srgm_pramuka" style="width: 20%;">
                                        </div>
                                         <div class="form-group">
                                            <label>Bawahan Muslim</label>
                                            <input type="text" class="form-control" name="bwh_muslim" value="<?php echo $val['bwh_muslim'];?>" style="width: 20%;">
                                        </div>
                                        <div class="form-group">
                                            <label>Baju Muslim</label>
                                            <input type="text" class="form-control" name="baju_muslim" value="<?php echo $val['baju_muslim'];?>" style="width: 20%;">
                                        </div>
                                         <div class="form-group">
                                            <label>Seragam Hitam Putih</label>
                                            <input type="text" class="form-control" name="srgm_hp" value="<?php echo $val['srgm_hp'];?>" style="width: 20%;">
                                        </div>
                                         <div class="form-group">
                                            <label>Atribut Sekolah</label>
                                            <input type="text" class="form-control" name="atribut_sekolah" value="<?php echo $val['atribut_sekolah'];?>" style="width: 20%;">
                                        </div>
                                         <div class="form-group">
                                            <label>Atribut Pramuka</label>
                                            <input type="text" class="form-control" name="atribut_pramuka" value="<?php echo $val['atribut_pramuka'];?>" style="width: 20%;">
                                        </div>
                                         <div class="form-group">
                                            <label>Sepatu</label>
                                            <input type="text" class="form-control" name="sepatu" value="<?php echo $val['sepatu'];?>" style="width: 20%;">
                                        </div>
                                    </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary"><?php echo $value;?></button>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->