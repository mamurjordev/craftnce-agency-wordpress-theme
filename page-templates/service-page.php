<?php
    /**
     * Template Name: Service Page
     */

    get_header();
    get_template_part('template-parts/common/breadcrumb');
?>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="fs-48 fw-900">Service that lead the way to better business</h2>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vel a, recusandae excepturi voluptates expedita necessitatibus nesciunt, placeat tempore autem eos reiciendis nostrum quas nihil illo nemo magni! Esse, laborum!</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vel a, recusandae excepturi voluptates expedita necessitatibus nesciunt, placeat tempore autem eos reiciendis nostrum quas nihil illo nemo magni! Esse, laborum!</p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vel a, recusandae excepturi voluptates expedita necessitatibus nesciunt, placeat tempore autem eos reiciendis nostrum quas nihil illo nemo magni! Esse, laborum!</p>
                        </div>
                    </div>                      
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/product 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/protection 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/scalable 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shdhsjhd 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/product 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/protection 1.png" alt="">
                        <h4 class="fw-bold my-3 ">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="home-info py-5">
        <div class="container py-5">
            <div class="row align-items-center py-5 py-lg-0">
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-info.png" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">history</h6>
                    <h2 class="info-title text-capitalize">For the next generation of big businesses</h2>
                    <p class="info-sec-p text-muted my-3">
                        There are many variations of passages of Lorem Ipsum available but the majority have  suffered alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <p class="info-sec-p text-muted my-3">
                        There are many variations of passages of Lorem Ipsum available but the majority have  suffered alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service-video-info py-5">
        <div class="container py-5">
            <div class="row text-center pb-5">
                <div class="col-sm-7 mx-auto">
                    <h6 class="fw-bold fs-6 text-uppercase text-primary">Why choose us</h6>
                    <h2 class="fs-48 fw-900">Acutually Why We Are & Who We Are.</h2>
                </div>
            </div>
            <div class="row align-items-center py-5 mb-5 py-lg-0">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/product 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/protection 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/scalable 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-md text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
            </div>

            <div style="height: 200px;"></div>
        </div>
    </section>

    <div class="container video-feed">
        <div class="row">
            <div class="col-xl-10 mx-auto position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-callback-img.png" class="img-fluid rounded-3" alt="">

                <button class="video-btn rounded-circle border-0 text-center bg-warning position-absolute top-50 start-50" type="button" data-bs-toggle="modal" data-bs-target="#video">
                    <svg class="ms-2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M133,440a35.37,35.37,0,0,1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37,7.46-27.53,19.46-34.33a35.13,35.13,0,0,1,35.77.45L399.12,225.48a36,36,0,0,1,0,61L151.23,434.88A35.5,35.5,0,0,1,133,440Z"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="video" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="video-info-modal modal-body">
                    <button type="button" class="btn-close float-end modal-close-btn mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <iframe class="video-info" src="https://www.youtube.com/embed/8evDJtPFTp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <section class="pt-5">
        <div class="container pt-5">
            <div class="row text-center pb-5">
                <div class="col-sm-7 col-xl-5 mx-auto">
                    <h6 class="fw-bold fs-6 text-uppercase text-primary">join with us today</h6>
                    <h2 class="fs-48 fw-900">Solve Your Problem With Very Faster</h2>
                </div>
            </div>
            <div class="row align-items-center py-5 mb-5 py-lg-0">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="fw-bold text-capitalize">Our Tracking Platform for Marketing</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                    
                    <div class="d-flex mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-01.png" class="service-2nd-sec-item-img img-fluid me-3" alt="">
                        <div>
                            <h6>Lorem ipsum dolor sit.</h6>
                            <p class="lh-base text-muted text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aliquid quas laborum voluptatem, possimus at.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-01.png" class="service-2nd-sec-item-img img-fluid me-3" alt="">
                        <div>
                            <h6>Lorem ipsum dolor sit.</h6>
                            <p class="lh-base text-muted text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aliquid quas laborum voluptatem, possimus at.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-01.png" class="service-2nd-sec-item-img img-fluid me-3" alt="">
                        <div>
                            <h6>Lorem ipsum dolor sit.</h6>
                            <p class="lh-base text-muted text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aliquid quas laborum voluptatem, possimus at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-page-right.png" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 ps-md-5" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-sction py-5">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-sm-7 col-xl-4 mx-auto">
                    <h2>Meet Our Experienced & Skilled Team</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3>Hasan Ali</h3>
                            <h6>Founder & Chairman</h6>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3>Hasan Ali</h3>
                            <h6>Founder & Chairman</h6>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3>Hasan Ali</h3>
                            <h6>Founder & Chairman</h6>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3>Hasan Ali</h3>
                            <h6>Founder & Chairman</h6>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="news-letter">
        <div class="newsletter-overlay py-50">
            <div class="container text-center py-5">
                <h2 class="text-uppercase text-light fw-bolder text-xl mt-3">SignUp Our Newslater</h2>
                <p class="text-light">Get in touch by subscribing here with your</p>
                <form action="" method="">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-7 col-lg-5 mx-auto position-relative">
                                <input type="email" placeholder="Enter Your Email" class="form-control py-3">
                                <button type="submit" class="btn btn-primary text-uppercase position-absolute top-0 end-0 mt-2 me-2"><i class="far fa-envelope me-2"></i>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container py-50">
            <div class="d-flex">
                <span class="left_bar me-2"></span>
                <h6 class="text-uppercase">blog posts</h6>
            </div>
            <h2 class="text-uppercase">Our recent blog</h2>

            <div class="row mt-4">
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 w-max mx-auto">
                <a href="#!" class="btn btn-outline-primary"><i class="fas fa-pen-nib me-2"></i> See our full blog</a>
            </div>
        </div>
    </section>

<?php
    get_footer();