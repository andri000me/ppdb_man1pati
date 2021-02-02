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
        <div class="col-md-6">
            <div class="card">
                Detail Data User
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $user_detail['username'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $user_detail['level'] ?></h6>
                <a href="<?= base_url() ?>User/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>