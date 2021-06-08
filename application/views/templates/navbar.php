	<!--navbar-->
	<nav class="navbar-custom navbar navbar-expand-lg navbar-light rounded">
		<!--navbar brand-->
		<a class="navbar-brand text-dark" href="<?= base_url(); ?>"><strong><?php echo lacak . sampah . com; ?></strong></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample10">
			<ul class="navbar-nav">
				<?php
				if (!$this->session->userdata('logged_in')) : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('users/signin'); ?>">Sign in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('users/signup'); ?>">Sign up</a>
					</li>
				<?php
				endif; ?>
				<?php
				if ($this->session->userdata('logged_in')) : ?>
					<li class="nav-item">
						<a class="nav-link text-primary" href="<?= base_url('posting/lapor'); ?>"><strong>POSTING</strong></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-dark" href="<?= base_url('#'); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $profile['email']; ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown10">
							<a class="dropdown-item" href="<?= base_url('users/profile'); ?>">Profile</a>
							<a class="dropdown-item" href="<?= base_url('users/signout'); ?>">Sign out</a>
						</div>
					</li>
				<?php
				endif; ?>
			</ul>
		</div>
	</nav>