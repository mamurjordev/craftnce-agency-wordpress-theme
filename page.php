<?php
    get_header();
    the_post();
?>
<?php get_template_part('template-parts/common/breadcrumb'); ?>
<div class="container my-4 my-md-5">
    <div class="row">
        <div class="col-xl-8">
            <div class="row">
                <div class="col">
                    <img src="assets/img/wordpress-552922_1280.jpg" class="img-fluid w-100 rounded-3" alt="">
                    <div class="d-flex mb-2 text-muted mt-4">
                        <p class="m-0"><?php echo get_the_date(); ?></p>
                        <span class="mx-2 align-self-center text-primary fs-4 lh-1">•</span>
                        <p class="m-0"><?php the_category(); ?></p>
                    </div>
                    <h2 class="mb-4"><?php the_title(); ?></h2>
                    
                    <?php
                        the_content();
                    ?>

                    <div class="my-4">
                        <h4 class="mb-3">What you’ll learn</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Become a UI/UX designer.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Build & test a complete mobile app.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>You will be able to start earning money </p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Learn to design mobile apps </p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Build a UI project from beginning to end.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Design 3 different logos.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Work with colors & fonts.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Create low-fidelity wireframe</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>You will create your own UI Kit.</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="fas fa-check-circle fs-4 text-primary me-2"></i>
                                <p>Downloadable exercise files.</p>
                            </div>
                        </div>
                    </div>

                    <p>Moody’s was founded by John Moody in 1909 to produce manuals of statistics related to stocks and bonds and bond ratings. Moody’s was acquired by Dun & Bradstreet in 1962. In 2000, Dun & Bradstreet spun off Moody’s Corporation as a separate company that was listed on the NYSE under MCO. In 2007, Moody’s Corporation was split into two operating divisions, Moody’s Investors Service, the rating agency, and Moody’s Analytics, with all of its other products.</p>
            
                    <p>Moody’s Corporation, often referred to as Moody’s, is an American business and financial services company. It is the holding company for Moody’s Investors Service (MIS), an American credit rating agency, and Moody’s Analytics (MA), an American provider of financial analysis software and services.</p>

                    <p>Moody’s was founded by John Moody in 1909 to produce manuals of statistics related to stocks and bonds and bond ratings. Moody’s was acquired by Dun & Bradstreet in 1962. In 2000, Dun & Bradstreet spun off Moody’s Corporation as a separate company that was listed on the NYSE under MCO. In 2007, Moody’s Corporation was split into two operating divisions, Moody’s Investors Service, the rating agency, and Moody’s Analytics, with all of its other products.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-flex flex-wrap">
                    <h4 class="mt-2 mt-md-0">Social Share - </h4>
                    <a href="#!" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0"><i class="fab fa-facebook-f me-3" aria-hidden="true"></i>Facebook</a>
                    <a href="#!" class="btn btn-outline-info mx-1 mt-2 mt-md-0"><i class="fab fa-twitter me-3" aria-hidden="true"></i>Twitter</a>
                    <a href="#!" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0"><i class="fab fa-linkedin-in me-3" aria-hidden="true"></i>Linked In</a>
                    <a href="#!" class="btn btn-outline-dark mx-1 mt-2 mt-md-0"><i class="far fa-envelope me-3" aria-hidden="true"></i>Mail</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-5 mt-xl-0">
            <div class="sticky-sidebar sticky-top">
                <div class="sidebar-top rounded-3 p-4">
                    <h4 class="mb-1">Popular Posts</h4>
                    <a href="single-blog.html" class="text-decoration-none d-flex mt-3">
                        <img src="assets/img/recent-posts.png" class="img-fluid recent-post-thumb me-2" alt="">
                        <div>
                            <h5 class="text-dark">Moody’s was founded by John</h5>
                            <div class="mt-2 d-flex mb-2 text-muted">
                                <p class="m-0">May 14, 2021</p>
                                <span class="mx-2 text-primary fs-4 lh-1">•</span>
                                <p class="m-0">Education</p>
                            </div>
                        </div>
                    </a>

                    <a href="single-blog.html" class="text-decoration-none d-flex mt-3">
                        <img src="assets/img/recent-posts.png" class="img-fluid recent-post-thumb me-2" alt="">
                        <div>
                            <h5 class="text-dark">Moody’s was founded by John</h5>
                            <div class="mt-2 d-flex mb-2 text-muted">
                                <p class="m-0">May 14, 2021</p>
                                <span class="mx-2 text-primary fs-4 lh-1">•</span>
                                <p class="m-0">Education</p>
                            </div>
                        </div>
                    </a>

                    <a href="single-blog.html" class="text-decoration-none d-flex mt-3">
                        <img src="assets/img/recent-posts.png" class="img-fluid recent-post-thumb me-2" alt="">
                        <div>
                            <h5 class="text-dark">Moody’s was founded by John</h5>
                            <div class="mt-2 d-flex mb-2 text-muted">
                                <p class="m-0">May 14, 2021</p>
                                <span class="mx-2 text-primary fs-4 lh-1">•</span>
                                <p class="m-0">Education</p>
                            </div>
                        </div>
                    </a>

                    <a href="single-blog.html" class="text-decoration-none d-flex mt-3">
                        <img src="assets/img/recent-posts.png" class="img-fluid recent-post-thumb me-2" alt="">
                        <div>
                            <h5 class="text-dark">Moody’s was founded by John</h5>
                            <div class="mt-2 d-flex mb-2 text-muted">
                                <p class="m-0">May 14, 2021</p>
                                <span class="mx-2 text-primary fs-4 lh-1">•</span>
                                <p class="m-0">Education</p>
                            </div>
                        </div>
                    </a>

                    <a href="single-blog.html" class="text-decoration-none d-flex mt-3">
                        <img src="assets/img/recent-posts.png" class="img-fluid recent-post-thumb me-2" alt="">
                        <div>
                            <h5 class="text-dark">Moody’s was founded by John</h5>
                            <div class="mt-2 d-flex mb-2 text-muted">
                                <p class="m-0">May 14, 2021</p>
                                <span class="mx-2 text-primary fs-4 lh-1">•</span>
                                <p class="m-0">Education</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sidebar-category rounded-3 mt-4 p-4">
                    <h4 class="mb-3">Popular Categories</h4>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Accounting & Finance (5)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Education & Training (1)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Graphics Design (2)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Health & Hospital (1)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Restaurant & Food (2)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>Website & Software (1)</p>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-square fs-5 me-2"></i>
                        <p>UI/UX Design (1)</p>
                    </div>
                </div>

                <div class="sidebar-tag rounded-3 mt-4 p-4">
                    <h4 class="mb-3">Tags -</h4>
                    <div class="d-flex flex-wrap">
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">app</button>
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">web</button>
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">graphics</button>
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">autocad</button>
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">3d</button>
                        <button class="btn btn-outline-light bg-white text-dark me-2 mt-2">motiongraphics</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();