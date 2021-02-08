<section class="content-header">
    <h1>
        Pendaftaran
        <small>Data Pendaftaran</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('control/page/siswa'); ?>">Pendaftaran</a></li>
        <li class="active">Data Pendaftaran</li>
    </ol>
</section>

<!-- alert -->
<?php
if ($this->session->flashdata('flash')) {
    ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data</strong><?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
}
?>
<!-- ./alert -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="panel panel-success">
                    <div class="panel-heading">Pilihan</div>
                        <div class="panel-body">
                            <ol class="breadcrumb pull-right">
                                <!-- <a href="<?php echo site_url('Control/sws'); ?>"><button class="btn btn-danger" type="button"><i class="fa fa-cloud-download"></i> Export</button></a> -->
                                <a href="<?= site_url() ?>Mastercontrol/fpd"><button class="btn btn-success" type="button"><i class="fa fa-plus"></i> Tambah Data</button></a>
                                <!-- <a href="<?= site_url() ?>Pendaftaran/Laporan"><button class="btn btn-primary" type="button"><i class="fa fa-file" ></i>Exsport Pdf</button></a> -->
                            </ol>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id Pendaftaran</th>
                                    <th>Nama Lengkap</th>
                                    <th>no hp</th>
                                    <th>asal sekolah</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 0;
                                    foreach ($data as $row) {
                                    $no++;
                                    if ($row['status'] == 'Validate - Success') {
                                        $colorCode = '5cb85c';
                                    }else if('Validate - Failed') {
                                        $colorCode = 'f0ad4e';
                                    }else if('Validate - Send Custom Message') {
                                        $colorCode = '5bc0de';
                                    }else if('0'){
                                        $colorCode = 'd9534f';
                                    }else {
                                        $colorCode = 'f7f7f7';
                                    }
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $row['id_pendaftaran']; ?></td>
                                        <td><?= $row['nm_lengkap']; ?></td>
                                        <td><?= $row['no_hp'] ?></td>
                                        <td><?= $row['asl_sekolah'] ?></td>
                                        <td><span class="badge" style="background-color:#<?= $colorCode ?>"><?= $row['status'] ?></span></td>
                                        <td>
                                            <a href="<?= base_url('pendaftaran/detail/'); ?><?= $row['id'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                            <a href="<?= base_url('pendaftaran/edit/'); ?><?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="<?= base_url('Pendaftaran/destroy/') ?><?= $row['id'] ?>" onclick="return confirm('anda yakin ingin menghapus data ini?');" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    // endforeach;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
        <!-- <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id Pendaftaran</th>
                        <th>Nama Lengkap</th>
                        <th>no hp</th>
                        <th>asal sekolah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data as $row) {
                        $no++;
                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['id_pendaftaran']; ?></td>
                            <td><?= $row['nm_lengkap']; ?></td>
                            <td><?= $row['no_hp'] ?></td>
                            <td><?= $row['asl_sekolah'] ?></td>
                            <td>
                                <a href="<?= base_url('pendaftaran/detail/'); ?><?= $row['id'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                <a href="<?= base_url('pendaftaran/edit/'); ?><?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('Pendaftaran/destroy/') ?><?= $row['id'] ?>" onclick="return confirm('anda yakin ingin menghapus data ini?');" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                            // endforeach;
                    }
                    ?>
                </tbody>
            </table>
        </div> --><!-- /.box-body -->
    </div><!-- /.box -->
</div>
</div>

</section><!-- /.content -->
<!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> -->

        <!-- Modal content-->
<!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Import Data Pendaftaran</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <?php $open = site_url('Control/upload_sis'); ?>
            <?php echo form_open_multipart($open); ?>
            <div class="col-md-6">
            <input type="file" name="file" class="form-control">
            </div>
            <div class="col-md-6">
            <input type="submit" name="import" value="Upload" class="btn btn-primary">
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> -->