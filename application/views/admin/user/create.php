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
        Form User
        <small>PPDB</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">User</li>
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
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                                </div>                                        
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <input type="text" class="form-control"  name="level" id="level" placeholder="Level">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pawword</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>

                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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