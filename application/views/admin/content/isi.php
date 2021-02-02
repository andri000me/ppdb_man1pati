<section class="content-header">
                    <h1>
                        Isi
                        <small>Data Isi Wawancara</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo site_url('control/page/siswa');?>">Isi Wawancara</a></li>
                        <li class="active">Data Isi Wawancara</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">  
                                <a href="<?php echo site_url('Control/page/f_isi');?>"><button class="btn btn-success" type="button" style="margin-top: 10px;margin-left: 10px;"><i class="fa fa-plus"></i> Tambah Data</button></a>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Isi</th>
                                                <th>Pil Satu</th>
                                                <th>Pil Dua</th>
                                                <th>Pil Tiga</th>
                                                <th>Pil Empat</th>
                                                <th>Pil Lima</th>
                                                <th>Pil Enam</th>
                                                <th>Pil Tuju</th>
                                                <th>Pil Delapan</th>
                                                <th>Pil Sembilan</th>
                                                <th>Pil Sepuluh</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=0; 
                                                foreach($tamp_is as $tampil){
                                                $no++;
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $tampil->isi;?></td>
                                                <td><?php echo $tampil->pil_satu;?></td>
                                                <td><?php echo $tampil->pil_dua;?></td>
                                                <td><?php echo $tampil->pil_tiga;?></td>
                                                <td><?php echo $tampil->pil_empat;?></td>
                                                <td><?php echo $tampil->pil_lima;?></td>
                                                <td><?php echo $tampil->pil_enam;?></td>
                                                <td><?php echo $tampil->pil_tuju;?></td>
                                                <td><?php echo $tampil->pil_delapan;?></td>
                                                <td><?php echo $tampil->pil_sembilan;?></td>
                                                <td><?php echo $tampil->pil_sepuluh;?></td>
                                                <td>
                                                    <a href="<?php echo site_url('Control/page/f_isi');?>/<?php echo $tampil->id_isi;?>" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('Control/hapus_isi');?>/<?php echo $tampil->id_isi;?>" class="btn btn-sm btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                           <?php
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->