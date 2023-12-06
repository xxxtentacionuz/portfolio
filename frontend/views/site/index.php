<header id="home" class="header">
    <div class="overlay"></div>
    <div class="header-content container">
        <h1 class="header-title">
            <span class="up"><?= isset($header['name']) ? $header['name']:'' ?></span>
            <span class="down d-lg-block"> <?= isset($header['lastname']) ? $header['lastname']:'' ?></span>
        </h1>
        <p class="header-subtitle"><?= isset($header['job']) ? $header['job']:'' ?></p>

<!--        <button class="btn btn-primary">Visit My Works</button>-->
    </div>
</header><!-- end of page header -->
<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div style="border-radius: 1em; overflow:hidden;" class="about-img-holder">
                <img height="350" width="310" src="<?= isset($aboutme['image']) ? 'frontend/web/uploads/' . $aboutme['image']:'' ?>"
                     alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            </div>
            <div class="about-caption">
                <p class="section-subtitle">Men haqimda </p>
                <h2 class="section-title mb-3"><?= isset($aboutme['name']) ? $aboutme['name']:'' ?></h2>
                <p>
                    <?= isset($aboutme['lastname']) ? $aboutme['lastname']:'' ?>
                </p>
<!--                <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>-->
            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->

<!-- service section -->

<!-- portfolio section -->
<section class="section" id="portfolio">
    <div class="container text-center">
        <p class="section-subtitle">What I Did ?</p>
        <h6 class="section-title mb-6">Portfolio</h6>
        <!-- row -->
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="portfolio-card">
                    <img src="portfoil/imgs/folio-1.jpg" class="portfolio-card-img"
                         alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h5>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="portfolio-card">
                    <img class="portfolio-card-img" src="portfoil/imgs/folio-2.jpg" class="img-responsive rounded"
                         alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h5>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="portfolio-card">
                    <img class="portfolio-card-img" src="portfoil/imgs/folio-3.jpg" class="img-responsive rounded"
                         alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h5>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                </a>
            </div>
        </div><!-- end of row -->
    </div><!-- end of container -->
</section> <!-- end of portfolio section -->

<!-- pricing section -->
<section class="section" id="pricing">
    <div class="container text-center">
        <p class="section-subtitle">nimalarni bilaman ?</p>

        <!-- row -->
        <?php foreach ($price as $pric):  ?>
        <div class="pricing-wrapper">

            <div class="pricing-card">
                <div class="pricing-card-body">
                    <h6 class="pricing-card-title"><?= isset($pric['name']) ? $pric['name']:'' ?></h6>
                    <div class="pricing-card-list">
                        <?= isset($pric['description']) ? $pric['description']:'' ?>
                    </div>
                </div>
                <div class="pricing-card-footer">
<!--                    <span>$</span>-->
                    <span><?= isset($pric['price']) ? $pric['price']:'' ?></span>
                </div>
                <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
            </div>

        </div><!-- end of pricing wrapper -->
        <?php endforeach; ?>

    </div> <!-- end of container -->
</section><!-- end of pricing section -->

<!-- section -->


<!-- testimonial section -->


<!-- blog section -->
<section class="section" id="blog">
    <!-- container -->
    <div class="container text-center">
        <p class="section-subtitle">Recent Posts?</p>
        <h6 class="section-title mb-6">Blog</h6>
        <!-- blog-wrapper -->
        <div class="blog-card">
            <div class="blog-card-header">
                <img src="portfoil/imgs/img-1.jpg" class="blog-card-img"
                     alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            </div>
            <div class="blog-card-body">
                <h6 class="blog-card-title">Consectetur adipisicing elit</h6>

                <p class="blog-card-caption">
                    <a href="#">By: Admin</a>
                    <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                    <a href="#"><i class="ti-comment"></i> 123</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit
                    delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium
                    neque numquam mollitia modi quasi distinctio.</p>

                <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b>
                </p>
                <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis
                    cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

                <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
            </div>
        </div><!-- end of blog wrapper -->

        <!-- blog-wrapper -->
        <div class="blog-card">
            <div class="blog-card-header">
                <img src="portfoil/imgs/img-2.jpg" class="blog-card-img"
                     alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            </div>
            <div class="blog-card-body">
                <h6 class="blog-card-title">Explicabo illo</h6>

                <p class="blog-card-caption">
                    <a href="#">By: Admin</a>
                    <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                    <a href="#"><i class="ti-comment"></i> 264</a>
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim,
                    vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro
                    quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto
                    omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae?
                    Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non
                    dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus
                    eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
            </div>
        </div><!-- end of blog wrapper -->

    </div><!-- end of container -->
</section><!-- end of blog section -->

<!-- contact section -->
<section class="section" id="contact">
    <div class="container text-center">
        <p class="section-subtitle">How can you communicate?</p>
        <h6 class="section-title mb-5">Contact Me</h6>
        <!-- contact form -->
        <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="Enter Email" requried>
                </div>
                <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6" class="form-control"
                                  placeholder="Write Something"></textarea>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                </div>
            </div>
        </form><!-- end of contact form -->
    </div><!-- end of container -->
</section><!-- end of contact section -->