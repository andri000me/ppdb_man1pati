<?php
//   if($status == 'edit'){
//     $val=$hsl->row_array();
//   }else{
//     $val['tgl_daftar']="";
//     $val['nama_lengkap']="";
//     $val['tempat_lahir']="";
//     $val['tanggal_lahir']="";
//     $val['jenis_kelamin']="";
//     $val['agama']="";
//     $val['alamat']="";
//     $val['no_hp']="";
//     $val['nama_ortu']="";
//     $val['no_hportu']="";
//     $val['asal_smp']="";
//   }
?>

 <section class="content-header">
    <h1>
        Form pendaftaran
        <small>PPDB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">pendaftaran</li>
    </ol>
</section>
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <?php if( validation_errors() ){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php } ?>
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <!-- form start -->
                                <?php 
                                // echo form_open($open);
                                ?>

                                <div role="form">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_pendaftaran" value="<?= $data['id_pendaftaran'] ?>">
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" value="<?= $data['nm_lengkap'] ?>" name="nm_lengkap" id="nm_lengkap" placeholder="nm_lengkap">
                                                    <small class="form-text text-danger"><?= form_error('nm_lengkap'); ?></small>
                                                </div>                                        
                                                <div class="form-group">
                                                    <label>NO HP</label>
                                                    <input type="text" class="form-control"  name="no_hp" id="no_hp" value="<?= $data['no_hp'] ?>" placeholder="no_hp">
                                                </div>
                                                <div class="form-group">
                                                    <label>Asal Sekolah</label>
                                                    <input type="text" class="form-control"  name="asl_sekolah" id="asl_sekolah" value="<?= $data['asl_sekolah'] ?>" placeholder="asl_sekolah">
                                                </div>


                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">Save Edit </button>
                                            </div>
                                        </div>
                                    <!-- /.box-body -->

                                        
                                        <?php 
                                        // echo form_close();
                                        ?>
                                    </form>
                                </div>

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                    </div>   <!-- /.row -->
</section><!-- /.content -->