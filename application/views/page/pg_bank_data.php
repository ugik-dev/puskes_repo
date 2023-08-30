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
						<h1 class="text-dark font-weight-bold text-8">Bank Data</h1>
					</div>
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<li>Home</li>
							<li class="active"> Bank Data </li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="container py-4">
			<div class="row">
				<div class="col-lg-9">
					<table class="table">
						<tbody>
							<?php
							$i = 1;
							foreach ($dataContent as $pgw) {
								echo '<tr><td>' . $i . '</td>
								<td>' . $pgw['file_judul'] . '</td>
								<td>' . $pgw['file_download'] . '</td>
								<td><a href="' . base_url('download/get_file/') . $pgw['file_id'] . '"  target="_blank">Download</a></td></tr>';
								$i++;
							?>
							<?php } ?>
						</tbody>
					</table>
					<div class="row">

					</div>
					<div class="blog-posts">
						<?= $dataContent['konten'] ?>
					</div>
				</div>
				<div class="col-lg-3">
					<?php $this->load->view('page/asside'); ?>
				</div>
			</div>
		</div>
	</div>