<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title>Publications</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

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
  <div class="inner-banner-w3ls text-right d-flex align-items-center" style="background: url(<?php echo base_url() ?>assets/front/images/publication.jpg) no-repeat content-box;">
    <div class="container">
      <h6 class="agileinfo-title">Publications </h6>
      <ol class="breadcrumb-parent d-flex justify-content-end">
        <li class="breadcrumb-nav">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-nav active  text-capitalize" aria-current="page">Publications</li>
      </ol>
    </div>
  </div>
  <!-- //banner -->
  <!-- courses -->
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
        <?php
        $date = $this->db->query("SELECT DISTINCT(date) FROM `ju_publication`")->result();
        foreach ($date as $list) {
          echo '<div class="row">
              <div class="col md-6">
                <h3 class="main-title-agile" style="text-align: left;">' . $list->date . ' Publications</h3>
              </div>
            </div>
            <div class="title-line" style="width: 50%;"></div><br><br>';
          $yearData = $this->db->query("SELECT * FROM ju_publication WHERE `date` = '$list->date'")->result();
          foreach ($yearData as $list1) {
            echo '<div class="row">
            <div class="col-md-12 text-left">
              <h5> ' . $list1->title . '</h5>
              <h6 class="text-info"> ' . $list1->content . '</h6>
            </div>
          </div>
          <hr>';
          }
        }
        ?>

      </div>

    </div>
  </section>
  <!-- //courses -->
  <!-- footer top -->
  <?php $this->load->view('front/layouts/footer');
  ?>