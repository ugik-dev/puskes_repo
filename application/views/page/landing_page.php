<div role="main" class="main">
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 500px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <?php $header_corausel = getHeader();
                foreach ($header_corausel as $hc) {
                ?>
                    <div class="owl-item position-relative" style="filter: brightness(<?= $hc['dark_effect'] ?>%);background-image: url(<?= base_url('upload/images/' . $hc['header_image']) ?>); background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 text-center">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <?php if (!empty($hc['h1'])) { ?>
                                            <h3 class="position-relative text-color-dark text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                                <span class="position-absolute right-100pct top-50pct transform3dy-n50">
                                                    <img src="<?= base_url('assets/') ?>img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                                <?= $hc['h1'] ?>
                                                <span class="position-relative">
                                                    <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"></span></span>
                                                <span class="position-absolute left-100pct top-50pct transform3dy-n50">
                                                    <img src="<?= base_url('assets/') ?>img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                            </h3>
                                        <?php } ?>

                                        <h1 class="text-color-dark font-weight-extra-bold text-12-5 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"> <?= $hc['h2'] ?> </h1>
                                        <p class="text-4-5 text-color-dark font-weight-light mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}"> <?= $hc['h3'] ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="owl-nav">
            <?php
            $ihc = count($header_corausel);
            // foreach ($header_corausel as $hc) {
            if ($ihc > 1) echo '  <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>';
            // else echo '<button role="button" class="owl-dot"><span></span></button>';
            // } 
            ?>

        </div>
        <div class="owl-dots mb-5">
            <?php
            $i = 1;
            if ($ihc > 1)
                foreach ($header_corausel as $hc) {
                    if ($i == 1) echo '<button role="button" class="owl-dot active"><span></span></button>';
                    else echo '<button role="button" class="owl-dot"><span></span></button>';
                    $i++;
                } ?>

        </div>
    </div>
    <!-- <section class="section bg-color-light border-0 m-0">
        <div class="container">
            <div class="row text-center text-md-start">" "
                <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url('assets/') ?>img/icons/seo-grey.png" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">SEO Optimization</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url('assets/') ?>img/icons/marketing-grey.png" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">Pro Marketing Ads</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url('assets/') ?>img/icons/support-grey.png" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">Secure Support</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="<?= base_url('upload/images/' . $profil->kapus_img) ?>" class="img-fluid appear-animation animated fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft" data-appear-animation-delay="0" data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms;">
                </div>
                <div class="col-lg-9">
                    <h4>Kata Sambutan</h4>
                    <p><?= str_replace("\n", "<br>", $profil->kata_sambutan) ?></p>
                    <hr class="solid my-5">
                </div>
            </div>
        </div>
</div>
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2">Galeri <strong class="font-weight-extra-bold"><?= $profil->nama_puskesmas ?></strong></h2>
            <!-- <p class="lead pe-lg-5 me-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p> -->
            <a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">Lihat Lainnya</a>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
            <?php if (!empty($galeri[0])) {
            ?>
                <img src="<?= base_url('upload/images/' . $galeri[0]['galeri_gambar']) ?>" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
            <?php }
            if (!empty($galeri[1])) {
            ?>
                <img src="<?= base_url('upload/images/' . $galeri[1]['galeri_gambar']) ?>" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
            <?php }
            if (!empty($galeri[2])) { ?>
                <img src="<?= base_url('upload/images/' . $galeri[2]['galeri_gambar']) ?>" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
            <?php } ?>
        </div>
    </div>
</div>
</section>

<!-- <div class="container">
    <div class="row py-5 my-5">
        <div class="col-md-6 order-2 order-md-1 text-center text-md-start appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
            <div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/') ?>img/team/team-1.jpg" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                    <p class="text-2 mb-0">CEO</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/') ?>img/team/team-2.jpg" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                    <p class="text-2 mb-0">CEO</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/') ?>img/team/team-3.jpg" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                    <p class="text-2 mb-0">DEVELOPER</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/') ?>img/team/team-4.jpg" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                    <p class="text-2 mb-0">SEO ANALYST</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/') ?>img/team/team-5.jpg" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                    <p class="text-2 mb-0">DESIGNER</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
            <a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LEARN MORE</a>
        </div>
    </div>
</div> -->

<section class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="font-weight-bold text-color-light text-6 mb-4">Berita</h2>
            </div>
        </div>
        <div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <?php
            foreach ($berita as $brt) {
            ?>
                <div class="col-md-6 col-lg-4 mb-6 mb-lg-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url('berita/' . $brt['tulisan_slug']) ?>" class="text-decoration-none">
                                    <img src="<?= base_url('upload/images/' . $brt['tulisan_gambar']) ?>" class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto pe-0">
                                <div class="date">
                                    <span class="day bg-color-light text-color-dark font-weight-extra-bold"><?= substr($brt['tulisan_tanggal'], 8, 2) ?></span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1"><?= bulan_indo_singkat(substr($brt['tulisan_tanggal'], 6, 2)) ?></span>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="<?= base_url('berita/' . $brt['tulisan_slug']) ?>" class="text-light"><?= $brt['tulisan_judul'] ?></a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pe-4 mb-1">
                                    <?php echo strip_tags($brt['tulisan_isi']); ?>...</p>
                                <a href="<?= base_url('berita/' . $brt['tulisan_slug']) ?>" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

            <?php   } ?>
            <div class="col-lg-12 text-center">
                <a href="<?= base_url('berita') ?>" class="btn btn-quaternary btn-px-5 btn-py-2 font-weight-bold text-color-light rounded-0 text-2">BERITA LAIN</a>
            </div>
        </div>
    </div>
</section>
<div id="team" class="container pb-4">
    <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">Pengumuman</h2>
        </div>
    </div>
    <div class="row pb-5 mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
        <?php
        foreach ($pengumuman as $pgm) {
        ?>
            <div class="col-sm-6 col-lg-6 mb-4 mb-lg-0">
                <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                    <!-- <span class="thumb-info-wrapper">
                        <a href="about-me.html">
                            <img src="<?= base_url('upload/images/' . $pgm['tulisan_gambar']) ?>" class="img-fluid" alt="">
                        </a>
                    </span> -->
                    <span class="thumb-info-caption">
                        <a href="<?= base_url('pengumuman/' . $pgm['tulisan_slug']) ?>">
                            <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0"><?= $pgm['tulisan_judul'] ?></h3>
                        </a>
                        <span class="text-2 mb-0"><?= tgl_indo(substr($pgm['tulisan_tanggal'], 0, 10)) ?></span>
                        <span class="thumb-info-caption-text pt-1 mb-0 pb-0"> <?php echo strip_tags($pgm['tulisan_isi']); ?>...
                            <a href="<?= base_url('pengumuman/' . $pgm['tulisan_slug']) ?>" class="read-more font-weight-semibold text-2 mt-0 pt-0">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                        </span>

                        <!-- <span class="text-2 mb-0">
                            <a href="<?= base_url('pengumuman/' . $pgm['tulisan_slug']) ?>"><i class="fab fa-facebook-f"></i><span>Baca</span></a>
                        </span> -->
                    </span>
                </span>
            </div>
        <?php } ?>

        <!-- <div class="col-sm-6 col-lg-3">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="img/team/team-4.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Melinda Doe</h3>
									<span class="text-2 mb-0">SEO ANALYST</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
						</div> -->
    </div>
</div>
<!-- <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
    <div class="container pb-2">
        <div class="row">
            <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                <div class="row justify-content-center my-5">
                    <div class="col-8 text-center col-md-4">
                        <img src="<?= base_url('assets/') ?>img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
                    </div>
                    <div class="col-8 text-center col-md-4 my-3 my-md-0">
                        <img src="<?= base_url('assets/') ?>img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
                    </div>
                    <div class="col-8 text-center col-md-4">
                        <img src="<?= base_url('assets/') ?>img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
                    </div>
                </div>
                <a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                            <div class="testimonial-author">
                                <img src="<?= base_url('assets/') ?>img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                            </div>
                            <blockquote>
                                <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                            <div class="testimonial-author">
                                <img src="<?= base_url('assets/') ?>img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                            </div>
                            <blockquote>
                                <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- </div> -->