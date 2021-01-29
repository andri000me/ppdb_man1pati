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
        <div class="col-md-6">
            <div class="card">
                Detail Data pendaftaran
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h6>Nama :</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 class="card-subtitle mb-2 text-muted"><?= $data['nm_lengkap'] ?></h6>
                    </div>
                </div>
            </div>
                <h5 class="card-title"><?= $data['id_pendaftaran'] ?></h5>
                <h6>Nomer HP :</h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['no_hp'] ?></h6>
                <h6>Asal Sekolah :</h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['asl_sekolah'] ?></h6>
                <a href="<?= base_url() ?>pendaftaran/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>