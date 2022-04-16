<aside class="sidebar">
    <form action="<?= base_url() ?>search?key=" method="get">
        <div class="input-group mb-3 pb-1">
            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
            <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
        </div>
    </form>
    <div class="tabs tabs-dark mb-4 pb-2">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Populer</a></li>
            <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Terbaru</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="popularPosts">
                <ul class="simple-post-list">
                    <li>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                                Nov 10, 2022
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="recentPosts">
                <ul class="simple-post-list">
                    <li>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                                Nov 10, 2022
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                            <div class="post-meta">
                                Nov 10, 2022
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                            <div class="post-meta">
                                Nov 10, 2022
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>