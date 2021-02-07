<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <?php
                    $htg = $this->Model_sekolah->qw("*", "pendaftaran1", "")->num_rows();
                    ?>
                    <h3>
                        <?php echo $htg; ?>
                    </h3>
                    <p>
                        Jumlah Pendaftar
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo site_url('../pendaftaran/'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <?php
                    $htg = $this->Model_sekolah->qw("*", "user", "")->num_rows();
                    ?>
                    <h3>
                        <?php echo $htg; ?>
                    </h3>
                    <p>
                        Jumlah User
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo site_url('../user/'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->

    <!-- top row -->
    <div class="row">
        <div class="col-xs-12 connectedSortable">

        </div><!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    </div><!-- /.box -->

</section><!-- right col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
<div class="container">

    <div class="copyright">

        <div style="margin-top: 50px; margin-left:40%;">
            &copy; Copyright <strong></strong><a href="https://github.com/HR77scu" target="_blank">Alief Arrafi </a>| <a href="https://github.com/roufq" target="_blank">Ahmad Rouf</a> | <a href="https://creativedev.id" target="_blank">creative</a>
        </div>
    </div>
</div>