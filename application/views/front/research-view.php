<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title>Research</title>
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
  <!-- courses -->
  <link href="<?php echo base_url() ?>assets/front/css/courses.css" rel="stylesheet" type="text/css" media="all">
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

  <!-- banner -->
  <div class="inner-banner-w3ls text-right d-flex align-items-center" style="background: url(<?php echo base_url() ?>assets/front/images/research.jpg) no-repeat content-box;">
    <div class="container">
      <h6 class="agileinfo-title">Research </h6>
      <ol class="breadcrumb-parent d-flex justify-content-end">
        <li class="breadcrumb-nav">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-nav active  text-capitalize" aria-current="page">Research</li>
      </ol>
    </div>
  </div>
  <!-- //banner -->
  <!-- courses -->
  <section class="courses-sec py-5">
    <div class="container py-lg-5">
      <div class="title-section pb-4">
        <h3 class="main-title-agile">Broad Research Area</h3>
        <div class="title-line">
        </div>
      </div>


      <div id="products" class="row view-group">

        <?php if (COUNT($researchList) > 0) : ?>
          <?php foreach ($researchList as $list) : ?>
            <div class="item list-group-item col-lg-4 thumb-last">
              <div class="thumbnail card" style="width: 100%;">

                <div class="caption card-body" style="width: 100%;">
                  <h4 class="group card-title inner list-group-item-heading">
                    <?php echo $list->title ?></h4>
                  <p class="group inner list-group-item-text">
                    <?php echo $list->content ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php else : ?>
          <div class="item list-group-item col-lg-4">
            <p align="center">No Research Found</p>
          </div>
        <?php endif ?>

        <!-- -->

      </div>
    </div>
  </section>
  <!-- //courses -->
  <!-- footer top -->
  <?php $this->load->view('front/layouts/footer');
  ?>