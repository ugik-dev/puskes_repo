<aside class="sidebar">
    <form action="<?= base_url() ?>search/" method="get">
        <div class="input-group mb-3 pb-1">
            <input class="form-control text-1" placeholder="Search..." name="key" id="key" type="text">
            <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
        </div>
    </form>
    <div class="tabs tabs-dark mb-4 pb-2">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Terbaru</a></li>
            <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Populer</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="popularPosts">
                <ul class="simple-post-list">
                    <?php $asside = getAsside();
                    foreach ($asside['top_new'] as $tn) { ?>
                        <li>
                            <?php if (!empty($tn['tulisan_gambar'])) {
                            ?>
                                <div class="post-image">
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <a href="<?= base_url(strtolower($tn['tulisan_jenis']) . '/' . $tn['tulisan_slug']) ?>">
                                            <img src="<?= base_url('upload/images/' . $tn['tulisan_gambar']) ?>" width="50" height="50" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="post-info">
                                <a href="<?= base_url(strtolower($tn['tulisan_jenis']) . '/' . $tn['tulisan_slug']) ?>"><?= ucwords(strtolower(substr($tn['tulisan_judul'], 0, 30))) ?></a>
                                <div class="post-meta">
                                    <?= tgl_indo(substr($tn['tulisan_tanggal'], 0, 10)) ?>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="tab-pane" id="recentPosts">
                <ul class="simple-post-list">
                    <?php foreach ($asside['top_view'] as $tn) { ?>
                        <li>
                            <?php if (!empty($tn['tulisan_gambar'])) {
                            ?>
                                <div class="post-image">
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                        <a href="<?= base_url(strtolower($tn['tulisan_jenis']) . '/' . $tn['tulisan_slug']) ?>">
                                            <img src="<?= base_url('upload/images/' . $tn['tulisan_gambar']) ?>" width="50" height="50" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="post-info">
                                <a href="<?= base_url(strtolower($tn['tulisan_jenis']) . '/' . $tn['tulisan_slug']) ?>"><?= ucwords(strtolower(substr($tn['tulisan_judul'], 0, 30))) ?></a>
                                <div class="post-meta">
                                    <?= tgl_indo(substr($tn['tulisan_tanggal'], 0, 10)) ?>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</aside>