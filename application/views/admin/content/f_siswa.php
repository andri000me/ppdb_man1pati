<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
  }else{
    $val['tgl_daftar']="";
    $val['nama_lengkap']="";
    $val['tempat_lahir']="";
    $val['tanggal_lahir']="";
    $val['jenis_kelamin']="";
    $val['agama']="";
    $val['alamat']="";
    $val['no_hp']="";
    $val['nama_ortu']="";
    $val['no_hportu']="";
    $val['asal_smp']="";
  }
?>
 <section class="content-header">
    <h1>
        Form Siswa
        <small>PPDB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Siswa</li>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $val['nama_lengkap'];?>" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group" hidden="">
                                            <input type="text" class="form-control" name="id_pendaftaran" value="<?php echo $this->uri->segment(4);?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" value="<?php echo $val['tempat_lahir'];?>" name="tempat_lahir" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" value="<?php echo $val['tanggal_lahir'];?>" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <br>
                                            <?php
                                                if($val['jenis_kelamin']==""){
                                                    $l='';
                                                    $p='';
                                                }else{
                                                    if($val['jenis_kelamin']=="L"){
                                                        $l='checked';
                                                        $p='';
                                                    }else{
                                                        $l='';
                                                        $p='checked';
                                                    }
                                                }
                                            ?>
                                            <input type="radio"  class="form-control" name="jenis_kelamin" value="L" <?php echo $l;?>> Laki -Laki 
                                            
                                            <input type="radio" class="form-control" name="jenis_kelamin" value="P" <?php echo $p;?>> Perempuan
                                        </div>
                                         <div class="form-group">
                                            <label>Agama</label>
                                            <input type="text" class="form-control" name="agama" value="<?php echo $val['agama'];?>" placeholder="Agama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $val['alamat'];?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>No Hp</label>
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $val['no_hp'];?>" placeholder="No Hp">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ortu</label>
                                            <input type="text" class="form-control" name="nama_ortu" value="<?php echo $val['nama_ortu'];?>" placeholder="Nama Ortu">
                                        </div>
                                        <div class="form-group">
                                            <label>No Hp Ortu</label>
                                            <input type="text" class="form-control" name="no_hportu" value="<?php echo $val['no_hportu'];?>" placeholder="No Hp Ortu">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal SMP/MTs</label>
                                            <input type="text" class="form-control" name="asal_smp" value="<?php echo $val['asal_smp'];?>" placeholder="Asal SMP">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary"><?php echo $value;?></button>
                                    </div>
                                </div><!-- /.box-body -->

                                    
                                    <?php echo form_close();?>
                                </div>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->