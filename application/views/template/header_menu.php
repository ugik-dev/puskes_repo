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
								<?php if (!empty($profil->email)) { ?>
									<li class="d-none d-sm-inline-flex">
										<div class="header-extra-info-icon">
											<i class="far fa-envelope text-color-primary text-4 position-relative bottom-2"></i>
										</div>
										<div class="header-extra-info-text">
											<label>Kirim EMAIL</label>
											<strong><a href="mailto:<?= $profil->email ?>" class="text-decoration-none text-color-hover-primary"><?= $profil->email ?></a></strong>
										</div>
									</li>
								<?php }	?>
								<?php if (!empty($profil->no_telp)) { ?>
									<li>
										<div class="header-extra-info-icon">
											<i class="fab fa-whatsapp text-color-primary text-4 position-relative bottom-1"></i>
										</div>
										<div class="header-extra-info-text">
											<label>HUBUNGI TELEPON</label>
											<strong><a href="tel:<?= str_replace('+', '', str_replace('-', '', str_replace(' ', '', $profil->no_telp))) ?>" class="text-decoration-none text-color-hover-primary"><?= $profil->no_telp ?></a></strong>
										</div>
									</li>
								<?php }	?>
								<?php if (!empty($profil->no_wa)) { ?>
									<li>
										<div class="header-extra-info-icon">
											<i class="fab fa-whatsapp text-color-primary text-4 position-relative bottom-1"></i>
										</div>
										<div class="header-extra-info-text">
											<label>HUBUNGI WHATSAPP</label>
											<strong><a href="https://wa.me/<?= str_replace('+', '', str_replace('-', '', str_replace(' ', '', $profil->no_wa))) ?>" class="text-decoration-none text-color-hover-primary"><?= $profil->no_wa ?></a></strong>
										</div>
									</li>
								<?php }	?>
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
													<a class="dropdown-item dropdown-toggle active" href="<?= base_url() ?>">
														Home
													</a>
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
													<a class="dropdown-item dropdown-toggle " href="<?= base_url('pegawai') ?>" id="menu_profil">
														Pegawai
													</a>
												</li>
												<li class="dropdown dropdown-full-color dropdown-light">
													<a class="dropdown-item dropdown-toggle">
														Informasi
													</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="<?= base_url('berita') ?>">Berita</a></li>
														<li><a class="dropdown-item" href="<?= base_url('pengumuman') ?>">Pengumuman</a></li>
														<li><a class="dropdown-item" href="<?= base_url('agenda') ?>">Agenda</a></li>
														<li><a class="dropdown-item" href="<?= base_url('loker') ?>">Lowongan Pekerjaan</a></li>
														<?php
														if (!empty($menu['informasi'])) { ?>
															<?php foreach ($menu['informasi'] as $inf) {
																echo '<li><a class="dropdown-item" href="' . base_url('informasi/') . $inf['slug'] . '">' . $inf['nama_menu'] . '</a></li>';
															}
															?>
														<?php
														}
														?>
													</ul>
												</li>
												<?php
												if (!empty($menu['pelayanan'])) { ?>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle">
															Pelayanan
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($menu['pelayanan'] as $prl) {
																echo '<li><a class="dropdown-item" href="' . base_url('pelayanan/') . $prl['slug'] . '">' . $prl['nama_menu'] . '</a></li>';
															}
															?>
															<li><a class="dropdown-item" href="<?= base_url('e-survey') ?>">e-Survey</a></li>
														</ul>
													</li>
												<?php
												}
												?>
												<?php
												if (!empty($menu['poskesdes_pustu'])) { ?>
													<li class="dropdown dropdown-full-color dropdown-light">
														<a class="dropdown-item dropdown-toggle">
															Poskesdes & Pustu
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($menu['poskesdes_pustu'] as $pos_pus) {
																echo '<li><a class="dropdown-item" href="' . base_url('poskesdes_pustu/') . $pos_pus['slug'] . '">' . $pos_pus['nama_menu'] . '</a></li>';
															}
															?>
														</ul>
													</li>
												<?php
												}
												?>
												<li class="dropdown dropdown-full-color dropdown-light">
													<a class="dropdown-item dropdown-toggle " href="<?= base_url('bank_data') ?>" id="menu_bank_data">
														Bank Data
													</a>
												</li>
												<li class="dropdown dropdown-full-color dropdown-light">
													<a class="dropdown-item dropdown-toggle " href="<?= base_url('galeri') ?>" id="menu_galeri">
														Galeri
													</a>
												</li>
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