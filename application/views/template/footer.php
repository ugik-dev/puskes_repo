		<footer id="footer" class="mt-0">
			<div class="container my-4">
				<div class="row py-5">
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<img src="<?= base_url('assets/img/kab_bangka.png') ?>" class="text-5 text-transform-none font-weight-semibold text-color-light mb-4"></img>
						<p class=" text-4 mb-0 text-decoration-none text-color-light">Dinas Kesehatan Kabupaten Bangka</p>
						<p class="text-4 mb-0"><span class="text-decoration-none text-color-light">© Copyright 2022.</span> All Rights Reserved.</p>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Link Terkait</h5>
						<p class="text-4 mb-0 text-color-light"> <a href="https://dinkes.bangka.go.id/" target="_blank" class="text-decoration-none text-color-light">Dinas Kesehatan Kabupaten</a> </p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://sungailiat.puskesmas.bangka.go.id/" target="_blank" class="text-decoration-none text-color-light">Puskesmas Sungailiat</a> </p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://sinarbaru.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Sinar Baru</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://belinyu.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Belinyu</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://gunungmuda.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Gunung Muda</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://riausilip.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Riau Silip</a></p>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Link Terkait</h5>
						<p class="text-4 mb-0 text-color-light"> <a href="https://baturusa.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Baturusa</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://petaling.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Petaling</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://kenanga.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Kenanga</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://pudingbesar.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Puding Besar</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://pemali.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Pemali</a></p>
						<p class="text-4 mb-0 text-color-light"> <a href="https://penagan.puskesmas.bangka.go.id" target="_blank" class="text-decoration-none text-color-light">Puskesmas Penagan</a></p>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Call Us Now</h5>
						<p class="text-4 mb-0">
							Telp:
							<span class="text-color-light">
								<a target="_blank" href="tel:<?= str_replace('+', '', str_replace('-', '', str_replace(' ', '', $profil->no_telp))) ?>" class="text-decoration-none text-color-light"><?= $profil->no_telp ?></a>
							</span>
						</p>
						<p class="text-4 mb-0">
							Whatsapp:
							<span class="text-color-light">
								<a target="_blank" href="https://wa.me/<?= str_replace('+', '', str_replace('-', '', str_replace(' ', '', $profil->no_wa))) ?>" class="text-decoration-none text-color-light"><?= $profil->no_wa ?></a>
							</span>
						</p>
						<p class="text-4 mb-0">
							Email:
							<span class="text-color-light">
								<a target="_blank" href="mailto:<?= $profil->email ?>" class="text-decoration-none text-color-light"><?= $profil->email ?></a>
							</span>
						</p>
						<p class="text-4 mb-0">
							Alamat:
							<span class="text-color-light">
								<?= $profil->alamat ?>
							</span>
						</p>
						<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4 mt-5">Social Media</h5>
						<ul class="footer-social-icons social-icons m-0">
							<?php if (!empty($profil->sos_fb)) echo '<li class="social-icons-facebook"><a href="' . $profil->sos_fb . '" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>' ?>
							<?php if (!empty($profil->sos_ig)) echo '<li class="social-icons-instagram"><a href="' . $profil->sos_ig . '" target="_blank" title="Instagram"><i class="fab fa-instagram text-2"></i></a></li>' ?>
							<?php if (!empty($profil->sos_twiter)) echo '<li class="social-icons-twitter"><a href="' . $profil->sos_twiter . '" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>' ?>
							<?php if (!empty($profil->sos_yt)) echo '<li class="social-icons-youtube"><a href="' . $profil->sos_yt . '" target="_blank" title="Youtube"><i class="fab fa-youtube text-2"></i></a></li>' ?>
							<?php if (!empty($profil->sos_linkedin)) echo '<li class="social-icons-linkedin"><a href="' . $profil->sos_linkedin . '" target="_blank" title="Linked In"><i class="fab fa-linkedin-in text-2"></i></a></li>' ?>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3">

					</div>
				</div>
			</div>
			<div class="container">
				<div class="footer-copyright footer-copyright-style-2 pb-4">
					<div class="py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>© Copyright 2022. Dinas Kesehatan Kabupaten Bangka.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		</div>

		<!-- Vendor -->
		<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/lazysizes/lazysizes.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/vide/jquery.vide.min.js"></script>
		<script src="<?= base_url('assets/') ?>vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url('assets/') ?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url('assets/') ?>js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="<?= base_url('assets/') ?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?= base_url('assets/') ?>js/theme.init.js"></script>

		</body>

		</html>