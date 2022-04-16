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
							<li class="active"><?= $dataContent['tulisan_jenis'] ?> / </li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="container py-4">
			<div class="row">
				<?php $this->load->view('page/asside'); ?>
				<div class="col-lg-9">
					<article class="post post-large blog-single-post border-0 m-0 p-0">
						<div class="post-image ms-0">
							<img src="<?= base_url('upload/images/') . $dataContent['tulisan_gambar'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
						</div>
						<div class="post-date ms-0">
							<span class="day"><?= substr($dataContent['tulisan_tanggal'], 8, 2) ?></span>
							<span class="month"><?= bulan_indo_singkat(substr($dataContent['tulisan_tanggal'], 6, 2)) ?></span>
						</div>

						<div class="post-content ms-0">
							<h2 class="font-weight-semi-bold"><a href="#"><?= $dataContent['tulisan_judul'] ?></a></h2>
							<div class="post-meta">
								<span><i class="far fa-user"></i> By <a href="#"><?= $dataContent['tulisan_author'] ?></a> </span>
								<!-- <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> -->
								<!-- <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
							</div>
							<div class="blog-posts">
								<?= $dataContent['tulisan_isi'] ?>
							</div>
							<div class="post-block mt-5 post-share">
								<h4 class="mb-3">Bagian Postingan Ini</h4>

								<div class="addthis_inline_share_toolbox" data-url="<?= base_url('berita/' . $dataContent['tulisan_slug']) ?>" data-title="<?= $dataContent['tulisan_judul'] ?>" style="clear: both;">
									<div id="atstbx" class="at-resp-share-element at-style-responsive at-mobile addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-9d0aa2ee-9d55-45d3-b4e5-82dfce1deabe" role="region"><span id="at-9d0aa2ee-9d55-45d3-b4e5-82dfce1deabe" class="at4-visually-hidden">AddThis Sharing Buttons</span>
										<div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: rgb(77, 194, 71); border-radius: 0px;"><span class="at4-visually-hidden">Share to WhatsApp</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-whatsapp-5" class="at-icon at-icon-whatsapp" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
														<title id="at-svg-whatsapp-5">WhatsApp</title>
														<g>
															<path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
														</g>
													</svg></span><span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">WhatsApp</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-6" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
														<title id="at-svg-twitter-6">Twitter</title>
														<g>
															<path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
														</g>
													</svg></span><span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">Twitter</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-7" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
														<title id="at-svg-facebook-7">Facebook</title>
														<g>
															<path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
														</g>
													</svg></span><span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">Facebook</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-8" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;">
														<title id="at-svg-addthis-8">AddThis</title>
														<g>
															<path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
														</g>
													</svg></span><span class="at-label" style="font-size: 11.4px; line-height: 32px; height: 32px; color: rgb(255, 255, 255);">More</span><span class="at4-share-count-container" style="font-size: 11.4px; line-height: 32px; color: rgb(255, 255, 255);">8.1K</span></a></div>
									</div>
								</div>
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>

							</div>

							<div id="comments" class="post-block mt-5 post-comments">
								<h4 class="mb-3">Komenetar (<?= count($komentar) ?>)</h4>

								<ul class="comments">
									<?php foreach ($komentar as $k) { ?>
										<li>
											<div class="comment">
												<div class="comment-block">
													<span class="comment-by">
														<strong><?= $k['komentar_nama'] ?></strong>
													</span>
													<p><?= $k['komentar_isi'] ?></p>
													<span class="date float-end"><?= $k['komentar_tanggal'] ?></span>
												</div>

											</div>
										</li>
									<?php } ?>
								</ul>
							</div>

							<div id="komentar" class=" post-block mt-5 post-leave-comment">
								<h4 class="mb-3">Tinggalkan komentar</h4>
								<?php echo $this->session->flashdata('msg'); ?>

								<form class="p-4 rounded bg-color-grey" action="<?= base_url('Berita/komentar') ?>" method="POST">
									<div class="p-2">
										<div class="row">
											<div class="form-group col-lg-6">
												<label class="form-label required font-weight-bold text-dark">Nama Lengkap</label>
												<input name="id" type="hidden" value="<?= $dataContent['tulisan_id'] ?>">
												<input name="slug" type="hidden" value="<?= $dataContent['tulisan_slug'] ?>">
												<input type="text" name="nama" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required="">
											</div>
											<div class="form-group col-lg-6">
												<label class="form-label required font-weight-bold text-dark">Email</label>
												<input type="email" name="email" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required="">
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<label class="form-label required font-weight-bold text-dark">Komentar</label>
												<textarea maxlength="5000" name="komentar" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required=""></textarea>
											</div>
										</div>
										<div class="row">
											<div class="form-group col mb-0">
												<input type="submit" value="Kirim Komentar" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</article>



				</div>
			</div>
		</div>
	</div>