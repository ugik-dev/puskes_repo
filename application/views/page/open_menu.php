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
						<h1 class="text-dark font-weight-bold text-8"><?= $dataContent['nama_menu'] ?></h1>
					</div>
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<!-- <li><a href="#"></a></li> -->
							<li class="active"><?= $dataContent['kategori'] ?> / </li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="container py-4">
			<div class="row">
				<?php $this->load->view('page/asside'); ?>
				<div class="col-lg-9">
					<div class="blog-posts">
						<?= $dataContent['konten'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>