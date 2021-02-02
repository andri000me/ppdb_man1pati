<section class="content-header">
                    <h1>
                        Seragam
                        <small>Data Seragam</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo site_url('control/page/siswa');?>">Seragam</a></li>
                        <li class="active">Data Seragam</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <a href="<?php echo site_url('Control/page/f_sgm');?>"><button class="btn btn-success" type="button" style="margin-top: 10px;margin-left: 10px;"><i class="fa fa-plus"></i> Tambah Data</button></a>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <style type="text/css">
                                            th{
                                                text-align: center;
                                            }
                                        </style>
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">No Seleksi</th>
                                                <th rowspan="2">Nama</th>
                                                <th colspan="10">Pesanan</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                               
                                                <th>Jas Almamater</th>
                                                <th>Training</th>
                                                <th>Bawahan Hijau</th>
                                                <th>Seragam Pramuka</th>
                                                <th>Bawahan Muslim</th>
                                                <th>Baju Muslim</th>
                                                <th>Seragam Hitam Putih</th>
                                                <th>Atribut Sekolah</th>
                                                <th>Atribut Pramuka</th>
                                                <th>Sepatu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=0;
                                                $qw=$this->model_sekolah->qw('siswa.no_seleksi,siswa.nama,seragam.jas_alm,seragam.training,seragam.bwh_hijau,seragam.srgm_pramuka,seragam.bwh_muslim,seragam.srgm_hp,seragam.atribut_sekolah,seragam.atribut_pramuka,seragam.sepatu,seragam.id_seragam,seragam.jawab10','seragam,siswa','WHERE siswa.no_seleksi=seragam.no_seleksi')->result();
                                                foreach($qw as $tampil){
                                                $no++;
                                            ?>  
                                            <tr>

                                                <td><?php echo $no;?></td>
                                                <td><?php echo $tampil->no_seleksi;?></td>
                                                <td><?php echo $tampil->nama;?></td>
                                                <td><?php echo $tampil->jas_alm;?></td>
                                                <td><?php echo $tampil->training;?></td>
                                                <td><?php echo $tampil->bwh_hijau;?></td>
                                                <td><?php echo $tampil->srgm_pramuka;?></td>
                                                <td><?php echo $tampil->bwh_muslim;?></td>
                                                <td><?php echo $tampil->jawab10;?></td>
                                                <td><?php echo $tampil->srgm_hp;?></td>
                                                <td><?php echo $tampil->atribut_sekolah;?></td>
                                                <td><?php echo $tampil->atribut_pramuka;?></td>
                                                <td><?php echo $tampil->sepatu;?></td>
                                                <td>
                                                    <a href="<?php echo site_url('Control/page/f_sgm');?>/<?php echo $tampil->id_seragam;?>" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('Control/hapus_sgm');?>/<?php echo $tampil->id_seragam;?>" class="btn btn-sm btn-danger">Hapus</a>
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
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Import Data Siswa</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <?php $open = site_url('Control/upload_sis');?>
            <?php echo form_open_multipart($open);?>
            <div class="col-md-6">
            <input type="file" name="file" class="form-control">
            </div>
            <div class="col-md-6">
            <input type="submit" name="import" value="Upload" class="btn btn-primary">
            </div>
            <?php echo form_close();?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>