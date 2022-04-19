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
	                    <h1 class="text-dark font-weight-bold text-8">Galeri</h1>
	                </div>
	                <div class="col-md-12 align-self-center order-1">
	                    <ul class="breadcrumb d-block text-center">
	                        <li>Home</li>
	                        <li class="active"> Galeri </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </section>
	    <div class="container">
	        <div class="row">

	            <?php
                foreach ($dataContent as $pgw) {
                ?>
	                <div class="col-lg-4 col-sm-6">
	                    <a data-bs-toggle="modal" data-bs-target="#image_<?php echo $pgw['galeri_id']; ?>">
	                        <h5 class="text-uppercase mt-4"></h5>
	                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
	                            <span class="thumb-info-wrapper">

	                                <img src="<?= base_url('upload/images/' . $pgw['galeri_gambar']) ?>" class="img-fluid" alt="">
	                                <span class="thumb-info-title">
	                                    <span class="thumb-info-inner line-height-1"><?= $pgw['galeri_judul'] ?></span>
	                                    <span class="thumb-info-type opacity-8"><?= tgl_indo(substr($pgw['galeri_tanggal'], 0, 10)) ?></span>
	                                </span>
	                            </span>
	                        </span>
	                    </a>
	                </div>
	                <div class="modal fade" id="image_<?php echo $pgw['galeri_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
	                    <div class="modal-dialog modal-lg">
	                        <div class="modal-content">
	                            <!-- <div class="modal-header">
	                                <h4 class="modal-title" id="largeModalLabel">Large Modal Title</h4>
	                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
	                            </div> -->
	                            <div class="modal-body">
	                                <h5 class="text-uppercase mt-4"></h5>
	                                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
	                                    <span class="thumb-info-wrapper">
	                                        <img src="<?= base_url('upload/images/' . $pgw['galeri_gambar']) ?>" class="img-fluid" alt="">
	                                        <span class="thumb-info-title">
	                                            <span class="thumb-info-inner line-height-1"><?= $pgw['galeri_judul'] ?></span>
	                                            <span class="thumb-info-type opacity-8"><?= tgl_indo(substr($pgw['galeri_tanggal'], 0, 10)) ?></span>
	                                        </span>
	                                    </span>
	                                </span>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	            <?php } ?>

	        </div>
	        <div class="col-lg-3">
	            <?php $this->load->view('page/asside'); ?>
	        </div>
	    </div>
	</div>
	<!-- </div> -->