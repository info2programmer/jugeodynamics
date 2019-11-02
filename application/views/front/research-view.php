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
  <!-- //header -->
  <!-- banner -->
  <!-- Carousel -->
  <div class="row justify-content-center align-items-center no-gutters banner-agile">
    <div class="col-lg-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item research active">
            <div class="bnr-text-wthree">
              <!-- <h3 class="b-w3ltxt">the perfect theme for</h3>
              <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p> -->
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel -->
      <!-- //banner -->
    </div>

  </div>
  <!-- //carousel -->
  <!-- //banner -->
  <!-- about -->

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