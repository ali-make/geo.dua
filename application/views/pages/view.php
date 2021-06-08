<div class="container">

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title text-center py-3"><?= $post['title']; ?></h5>
            <p class="card-text"><?= $post['description']; ?></p>
            <p class="card-text text-muted"><?= $post['address']; ?></p>
            <p class="card-text">
                <small class="text-muted">
                    <p class="card-text text-right"><?= date('d F Y', $post['timestamp']); ?></p>
                </small>
            </p>
        </div>
        <img src="<?= base_url('assets/img/posts/' . $post['image']); ?>" class="card-img-top" alt="<?= $post['title']; ?>">
    </div>
    <li class="list-group-item justify-content-center d-flex">
        <a href="#" class="card-link"><small><?= $post['kel']; ?></small></a>
        <a href="#" class="card-link"><small>@<?= $post['username']; ?></small></a>
    </li>

</div>