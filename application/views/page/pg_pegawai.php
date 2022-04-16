	<style>
		.blog-posts img {
			max-width: 100%;
			height: auto !important;
		}
	</style>
	<div role="main" class="main">

		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">
						<h1 class="text-dark font-weight-bold text-8">Pegawai</h1>
					</div>
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<li>Home</li>
							<li class="active"> Pegawai </li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="container py-4">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">

						<?php foreach ($dataContent as $pgw) {
						?>
							<div class="col-lg-4">
								<div class="card card-border card-border-top bg-color-light">
									<img src="<?= base_url('upload/images/') . (!empty($pgw['pegawai_photo']) ? $pgw['pegawai_photo'] : 'blank.png') ?>" class="img-fluid rounded-start" alt="...">
									<div class="card-body">
										<h4 class="card-title mb-1 text-4 font-weight-bold"><?= $pgw['pegawai_nama'] ?></h4>
										<p class="card-text"><?= $pgw['pegawai_mapel'] ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="blog-posts">
						<?= $dataContent['konten'] ?>
					</div>
				</div>
				<div class="col-lg-4">
					<?php $this->load->view('page/asside'); ?>
				</div>
			</div>
		</div>
	</div>