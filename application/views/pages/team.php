<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4">Lacak Sampah</h1>
        <p class="lead">Merupakan projek matakuliah web programming membuat aplikasi berbasis web</p>
    </div>
</div>

<div class="container-fluid">
    <div class="bg-white border-bottom border-success">
        <h6 class="lead">Berikut adalah profil dari anggota kelompok kami</h6>
    </div>

    <div class="row mb-2 py-3">
        <?php
        foreach ($user as $u) { ?>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 flex-coloumn position-static">
                    <img src="<?= base_url('assets/img/') . $u['img']; ?>" class="img-fluid" alt="saitama">
                    <strong class="d-inline-block mb-2 text-primary border-bottom border-dark pt-3"><?= $u['username']; ?></strong>
                    <p class="text-muted">Backend &ndash; controller & model</p>
                </div>
            </div>
        </div>
        <?php 
        } ?>
    </div>

</div>