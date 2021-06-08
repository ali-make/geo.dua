	<!--map-->
	<div class="container-fluid">
		<div class="bg-white p-3 my-3 rounded shadow-sm">
			<div class="lh-100">
				<h6 class="mb-0 border-bottom border-success pb-2">HERE Map<small> titik koordinat menandakan letak sampah liar</small></h6>
			</div>
		</div>
	</div>
	<div id="map" class="py-3"></div>

	<!--contents-->
	<div class="container-fluid">
		<div class="bg-white my-3 p-3 rounded shodow-sm">
			<h6 class="border-bottom border-success pb-2 mb-0">Recents updates</h6>
		</div>
	</div>

	<div class="container">

		<!--cards going here-->

		<?php

		foreach ($loc as $l) { ?>
		<div class="card mb-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="<?= base_url('assets/img/posts/') . $l['image']; ?>" alt="sampah" style="width: 100%; height: 200px;">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><a href="<?= base_url('pages/buka/'.$l['slug']); ?>" style="text-decoration: none;"><?= $l['title']; ?></a></h5>
						<p class="card-text"><?= $l['description']; ?></p>
						<p class="card-text text-muted"><?= $l['address']; ?></p>
						<p class="card-text text-right"><small class="text-muted"><?= date('d F Y', $l['timestamp']); ?></small></p>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-flush text-right">
				<li class="list-group-item">
					<a href="#" class="card-link"><small>@<?= $l['username']; ?></small></a>
					<a href="#" class="card-link"><small><?= $l['kel']; ?></small></a>
				</li>
			</ul>
		</div>

		<?php
		 } ?>
		<!--end of the cards-->
	</div>

		