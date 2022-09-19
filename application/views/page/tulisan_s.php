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

			<div class="col-lg-9">
				<div class="blog-posts">
					<?php foreach ($dataContent['tulisan'] as $brt) { ?>
						<article class="post post-medium">
							<div class="row mb-3">
								<?php if (!empty($brt['tulisan_gambar'])) { ?>
									<div class="col-lg-5">
										<div class="post-image">
											<a href="<?= base_url($link . '/' . $brt['tulisan_slug']) ?>">
												<img src="<?= base_url('upload/images/' . $brt['tulisan_gambar']) ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
											</a>
										</div>
									</div>
								<?php
									$col = 7;
								} else {
									$col = 12;
								} ?>
								<div class="col-lg-<?= $col ?>">
									<div class="post-content">
										<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="<?= base_url($link . '/' . $brt['tulisan_slug']) ?>"><?= $brt['tulisan_judul'] ?></a></h2>
										<p class="mb-0"> <?php echo strip_tags($brt['tulisan_isi_c']); ?>[...]</p>
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="post-meta">
										<span><i class="far fa-calendar-alt"></i> <?= tgl_indo(substr($brt['tulisan_tanggal'], 0, 10)) ?> </span>
										<span><i class="far fa-user"></i> Penulis : <a href="#"><?= $brt['tulisan_author'] ?></a> </span>
										<span><i class="far fa-folder"></i> <a href=""><?= $brt['tulisan_kategori_nama'] ?></a> </span>
										<span><i class="far fa-comments"></i> <a href="<?= base_url($link . '/' . $brt['tulisan_slug']) ?>">0 Comments</a></span>
										<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="<?= base_url($link . '/' . $brt['tulisan_slug']) ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>
								</div>
							</div>
						</article>
					<?php } ?>

					<ul class="pagination float-end">
						<li class="page-item"><a class="page-link" href="<?= base_url($link . '?page=1') ?>">Awal</a></li>
						<li class="page-item"><a class="page-link" href="<?= base_url($link . '?page=' . ($dataContent['page'] - 1)) ?>"><i class="fas fa-angle-left"></i></a></li>
						<?php
						if ($dataContent['page'] >= $dataContent['total_page']) {
							$last = $dataContent['total_page'];
						} else {
							$last = $dataContent['page'] + 4;
						}
						for ($i = $dataContent['page'] - 3; $i < $last; $i++) {
							if ($i < 1) $i = 1;

						?>
							<li class="page-item <?= $i == $dataContent['page'] ? 'active' : ''; ?>"><a class="page-link" href="<?= base_url($link . '?page=' . $i) ?>"><?= $i ?></a></li>
						<?php } ?>
						<li class="page-item"><a class="page-link" href="<?= base_url($link . '?page=' . $dataContent['page'] + 1) ?>"><i class="fas fa-angle-right"></i></a></li>
						<li class="page-item"><a class="page-link" href="<?= base_url($link . '?page=' . $dataContent['total_page']) ?>">Terakhir</a></li>
					</ul>

				</div>
			</div>
			<div class="col-lg-3">

				<?php $this->load->view('page/asside'); ?>
			</div>
		</div>
	</div>
</div>