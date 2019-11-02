<?php $this->load->view('front/layouts/head') ?>

<body>
    <div class="se-pre-con"></div>
    <!-- header -->
    <?php $this->load->view('front/layouts/header') ?>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls text-right d-flex align-items-center">
        <div class="container">
            <h6 class="agileinfo-title">contact us </h6>
            <ol class="breadcrumb-parent d-flex justify-content-end">
                <li class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-nav active  text-capitalize" aria-current="page">Contact us</li>
            </ol>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="wthree-row pt-5">
        <div class="container py-lg-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">contact us</h3>
                <div class="title-line">
                </div>
            </div>
        </div>
        <div class="w3-contact pb-5">
            <div class="container">
                <div class="row contact-form">
                    <div class="col-lg-8 wthree-form-left">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <h5 class="mb-4 text-capitalize">send us a note</h5>
                            <form action="#" method="get" class="contact-wthree">
                                <div class="form-group d-flex">
                                    <label>
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                    </label>
                                    <input class="form-control" type="text" placeholder="Enter your name..." name="email" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <label>
                                        <i class="fas fa-envelope" aria-hidden="true"></i>
                                    </label>
                                    <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <label>
                                        <i class="far fa-edit"></i>
                                    </label>
                                    <input class="form-control" type="text" placeholder="Subject" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="contact-comment" placeholder="Your message" required></textarea>
                                </div>
                                <div class="d-flex  justify-content-end">
                                    <button type="submit" class="btn btn-info btn-block w-25">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact details -->
                    <div class="offset-lg-1"></div>
                    <div class="col-lg-3">
                        <div class="address">
                            <address>
                                <p class="contact-title">location </p>
                                <p class="c-txt">G-III-3,
                                    <br>Department of Geological Sciences,
                                    <br> 188, Raja S.C. Mallick Rd,
                                    <br> Kolkata 700032, West Bengal, India
                                    <br> 033- 244 2364
                                </p>
                            </address>
                        </div>

                    </div>

                </div>
            </div>
            <!-- //contact details container -->
        </div>
    </section>
    <?php $this->load->view('front/layouts/footer');
