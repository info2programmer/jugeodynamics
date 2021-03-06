<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>LAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Skill Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/front/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- animation -->
    <link href="<?php echo base_url() ?>assets/front/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/front/css/style.css" rel='stylesheet' type='text/css' />
    <!-- portfolio  -->
    <link href="<?php echo base_url() ?>assets/front/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <!-- font-awesome icons -->
    <link href="<?php echo base_url() ?>assets/front/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet">
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header -->
    <?php $this->load->view('front/layouts/header') ?>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls text-right d-flex align-items-center">
        <div class="container">
            <h6 class="agileinfo-title">Lab </h6>
            <ol class="breadcrumb-parent d-flex justify-content-end">
                <li class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-nav active  text-capitalize" aria-current="page">Lab</li>
            </ol>
        </div>
    </div>
    <!-- //inner banner -->
    <section class="courses-sec py-5">
        <div class="container py-lg-5">
            <div class="title-section pb-4">
                <div class="row">
                    <div class="col md-6">

                    </div>

                </div>

                <div class="title-line"></div>

            </div>

            <div class="well txtbasic1">
                <h3>Coming Soon</h3>

            </div>

        </div>
    </section>
    <!-- footer top -->
    <div class="footer-top py-5">
        <div class="container">
            <div class="row footer-cform pt-lg-5">
                <div class="col-lg-6">
                    <h5 class="footer-top-title">site navigation</h5>
                    <div class="footer-top-agileits">
                        <ul class="list-agileits d-flex">
                            <li>
                                <a href="index.html" class="nav-link py-0 pl-0">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="   " class="nav-link py-0">
                                    Research
                                </a>
                            </li>
                            <li>
                                <a href="publication.html" class="nav-link py-0">
                                    Publications
                                </a>
                            </li>
                            <li>
                                <a href="lab.html" class="nav-link py-0">
                                    Lab
                                </a>
                            </li>
                        </ul>
                        <ul class="list-agileits d-flex">
                            <li>
                                <a href="group.html" class="nav-link py-0 pl-0">
                                    Group
                                </a>
                            </li>

                            <li>
                                <a href="contact.html" class="nav-link py-0">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-cont-btm">
                        <h5 class="footer-top-title">contact information</h5>
                        <address class="my-4">
                            <p>+4667 Woodland Terrace Folsom, California 916-983-6577.</p>
                        </address>
                        <ul class="d-flex header-agile pt-0">
                            <li>
                                <span class="fas fa-envelope-open"></span>
                                <a href="mailto:example@email.com" class="text-secondary">info@example.com</a>
                            </li>
                            <li>
                                <span class="fas fa-phone-volume"></span>
                                <p class="d-inline text-secondary">+456 123 7890</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wthree-form-left my-lg-0 mt-4">
                    <h5 class="footer-top-title">send us a message</h5>
                    <div class="footer-top-form">
                        <form action="#" method="get" class="footer-top-wthree">
                            <div class="form-group d-flex">
                                <label>
                                    Name
                                </label>
                                <input class="form-control" type="text" placeholder="Johnson" name="email" required="">
                            </div>
                            <div class="form-group d-flex">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
                            </div>
                            <div class="form-group d-flex">
                                <label>
                                    Phone
                                </label>
                                <input class="form-control" type="text" placeholder="XXXX XXXX XX" name="email" required="">
                            </div>
                            <div class="form-group d-flex">
                                <label>
                                    Message
                                </label>
                                <textarea class="form-control" rows="5" id="contactcomment" placeholder="Your message" required></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-agile btn-block w-25">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer top -->
    <!-- footer -->
    <?php $this->load->view('front/layouts/footer'); ?>