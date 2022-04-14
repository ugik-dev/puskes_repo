	<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
		<div class="header-body border-color-primary border-top-0 box-shadow-none">

			<!-- <div class="header-top header-top-default border-bottom-0 border-top-0">
					<div class="container">
						<div class="header-row py-2">
							<div class="header-column justify-content-start">
								<div class="header-row">
									<nav class="header-nav-top">
										<ul class="nav nav-pills text-uppercase text-2">
											<li class="nav-item nav-item-anim-icon">
												<a class="nav-link ps-0" href="<?= base_url('assets/') ?>"><i class="fas fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item nav-item-anim-icon">
												<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			<div class="header-container container z-index-2">
				<div class="header-row py-2">
					<div class="header-column">
						<div class="header-row">
							<div class="header-logo header-logo-sticky-change">
								<a href="<?= base_url() ?>">
									<img class="header-logo-sticky opacity-0" alt="Porto" width="100" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="<?= base_url('assets/') ?>img/logo-flat-light.png">
									<img class="header-logo-non-sticky opacity-0" alt="Porto" width="100" height="48" src="<?= base_url('upload/images/' . $profil->logo) ?>">
								</a>
							</div>
						</div>
					</div>
					<div class="header-column justify-content-end">
						<div class="header-row">
							<ul class="header-extra-info d-flex align-items-center">
								<li class="d-none d-sm-inline-flex">
									<div class="header-extra-info-icon">
										<i class="far fa-envelope text-color-primary text-4 position-relative bottom-2"></i>
									</div>
									<div class="header-extra-info-text">
										<label>Kirim EMAIL</label>
										<strong><a href="mailto:mail@example.com" class="text-decoration-none text-color-hover-primary"><?= $profil->email ?></a></strong>
									</div>
								</li>
								<li>
									<div class="header-extra-info-icon">
										<i class="fab fa-whatsapp text-color-primary text-4 position-relative bottom-1"></i>
									</div>
									<div class="header-extra-info-text">
										<label>HUBUNGI SEKARANG</label>
										<strong><a href="tel:8001234567" class="text-decoration-none text-color-hover-primary"><?= $profil->no_telp ?></a></strong>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
				<div class="container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row justify-content-end">
								<div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '135px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown dropdown-full-color dropdown-light">
													<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>">
														Home
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item" href="<?= base_url() ?>">
																Landing Page
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="<?= base_url() ?>#demos">
																Demos <span class="tip tip-dark">hot</span>
															</a>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item" href="#">Classic</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-classic.html">Classic - Original</a></li>
																<li><a class="dropdown-item" href="index-classic-color.html">Classic - Color</a></li>
																<li><a class="dropdown-item" href="index-classic-light.html">Classic - Light</a></li>
																<li><a class="dropdown-item" href="index-classic-video.html">Classic - Video</a></li>
																<li><a class="dropdown-item" href="index-classic-video-light.html">Classic - Video - Light</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item" href="#">Corporate</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-corporate.html">Corporate - Version 1</a></li>
																<li><a class="dropdown-item" href="index-corporate-2.html">Corporate - Version 2</a></li>
																<li><a class="dropdown-item" href="index-corporate-3.html">Corporate - Version 3</a></li>
																<li><a class="dropdown-item" href="index-corporate-4.html">Corporate - Version 4</a></li>
																<li><a class="dropdown-item" href="index-corporate-5.html">Corporate - Version 5</a></li>
																<li><a class="dropdown-item" href="index-corporate-6.html">Corporate - Version 6</a></li>
																<li><a class="dropdown-item" href="index-corporate-7.html">Corporate - Version 7</a></li>
																<li><a class="dropdown-item" href="index-corporate-8.html">Corporate - Version 8</a></li>
																<li><a class="dropdown-item" href="index-corporate-9.html">Corporate - Version 9</a></li>
																<li><a class="dropdown-item" href="index-corporate-10.html" ->Corporate - Version 10</a></li>
																<li><a class="dropdown-item" href="<?= base_url() ?>#demos" ->More...</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item" href="#">Portfolio</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-portfolio.html">Portfolio - Version 1</a></li>
																<li><a class="dropdown-item" href="index-portfolio-2.html">Portfolio - Version 2</a></li>
																<li><a class="dropdown-item" href="index-portfolio-3.html">Portfolio - Version 3</a></li>
																<li><a class="dropdown-item" href="index-portfolio-4.html">Portfolio - Version 4</a></li>
																<li><a class="dropdown-item" href="index-portfolio-5.html">Portfolio - Version 5</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item" href="#">Blog</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-blog.html">Blog - Version 1</a></li>
																<li><a class="dropdown-item" href="index-blog-2.html">Blog - Version 2</a></li>
																<li><a class="dropdown-item" href="index-blog-3.html">Blog - Version 3</a></li>
																<li><a class="dropdown-item" href="index-blog-4.html">Blog - Version 4</a></li>
																<li><a class="dropdown-item" href="index-blog-5.html">Blog - Version 5</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item" href="#">One Page</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-one-page.html">One Page Original</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<?php
												$menu = getMenu();
												if (!empty($menu['profil'])) { ?>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle" id="menu_profil">
															Profil
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($menu['profil'] as $prl) {
																echo '<li><a class="dropdown-item" href="' . base_url('profil/') . $prl['slug'] . '">' . $prl['nama_menu'] . '</a></li>';
															}
															?>
														</ul>
													</li>
												<?php
												}
												?>
												<li class="dropdown dropdown-full-color dropdown-light">
													<a class="dropdown-item dropdown-toggle active" href="#" id="menu_profil">
														Pegawai
													</a>
												</li>
												<?php
												if (!empty($menu['info'])) { ?>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle">
															Informasi
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($menu['info'] as $prl) {
																echo '<li><a class="dropdown-item" href="' . base_url('profil/') . $prl['slug'] . '">' . $prl['nama_menu'] . '</a></li>';
															}
															?>
														</ul>
													</li>
												<?php
												}
												?>
												<?php
												if (!empty($menu['pelayanan'])) { ?>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle">
															Pelayanan
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($menu['pelayanan'] as $prl) {
																echo '<li><a class="dropdown-item" href="' . base_url('profil/') . $prl['slug'] . '">' . $prl['nama_menu'] . '</a></li>';
															}
															?>
														</ul>
													</li>
												<?php
												}
												?>
											</ul>
										</nav>
									</div>
									<button class="btn header-btn-collapse-nav my-2" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>