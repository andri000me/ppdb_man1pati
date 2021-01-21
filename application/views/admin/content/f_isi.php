 c<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
   
  }else{
    $val['id_isi']="";
    $val['isi']="";
    $val['pil_satu']="";
    $val['pil_dua']="";
    $val['pil_tiga']="";
    $val['pil_empat']="";
    $val['pil_lima']="";
    $val['pil_enam']="";
    $val['pil_tuju']="";
    $val['pil_delapan']="";
    $val['pil_sembilan']="";
    $val['pil_sepuluh']="";
  }
?>
<script type="text/javascript">
    
</script>
 <section class="content-header">
    <h1>
        Form Isi Wawancara
        <small>PSB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Isi Wawancara</li>
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
                                        <div class="form-group">
                                            <label>Pilih Jenis Isi</label>
                                            <select class="form-control" id="pill" onchange="pil()">
                                                <option>--Pilih--</option>
                                                <option>Pilihan Ganda</option>
                                                <option>Easay</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea class="form-control" name="isi"><?php echo $val['isi'];?></textarea>
                                            <input type="hidden" class="form-control" name="id_isi" value="<?php echo $val['id_isi'];?>">
                                        </div>
                                        <div id="pilg">
                                            <div class="form-group">
                                                <label>Pil Satu</label>
                                                <textarea class="form-control" name="pil_satu" placeholder="Pil Satu" ><?php echo $val['pil_satu'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Dua</label>
                                                <textarea class="form-control" name="pil_dua" placeholder="Pil Dua"><?php echo $val['pil_dua'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Tiga</label>
                                                <textarea class="form-control" name="pil_tiga" placeholder="Pil Tiga"><?php echo $val['pil_tiga'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Empat</label>
                                                <textarea class="form-control" name="pil_empat" placeholder="Pil Empat"></textarea>
                                            </div>
                                             <div class="form-group">
                                                <label>Pil Lima</label>
                                                <textarea class="form-control" name="pil_lima" placeholder="Pil Lima"><?php echo $val['pil_lima'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Enam</label>
                                                <textarea class="form-control" name="pil_enam" placeholder="Pil Enam"><?php echo $val['pil_enam'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Tujuh</label>
                                                <textarea class="form-control" name="pil_tuju" placeholder="Pil Tujuh"><?php echo $val['pil_tuju'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Delapan</label>
                                                <textarea class="form-control" name="pil_delapan" placeholder="Pil Delapan"><?php echo $val['pil_delapan'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pil Sembilan</label>
                                                <textarea class="form-control" name="pil_sembilan" placeholder="Pil Sembilan"><?php echo $val['pil_sembilan'];?></textarea>
                                            </div>
                                             <div class="form-group">
                                                <label>Pil Sepuluh</label>
                                                <textarea class="form-control" name="pil_sepuluh" placeholder="Pil Sepuluh"><?php echo $val['pil_sepuluh'];?></textarea>
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