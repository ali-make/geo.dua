<div class="vh-100">
    <div class="card mb-3 p-3 m-3" style="overflow-x: hidden;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/') . $profile['img']; ?>" alt="<?= $profile['username']; ?>" style="max-height: 200px; max-width: 200px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><strong style="color: lightskyblue;"><?= $profile['username'] ?></strong></h5>
                    <p class="card-text"><?= $profile['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Since <?= date('d F Y', $profile['timestamps']); ?></small></p>
                    <div class="text-right">
                        <a href="<?= base_url('users/ubahProfile'); ?>" class="btn btn-primary">Ubah Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>