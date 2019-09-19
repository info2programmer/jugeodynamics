<?php $this->load->view('front/layouts/head') ?>

<body>
    <div class="se-pre-con"></div>
    <!-- header -->
    <?php $this->load->view('front/layouts/header') ?>
    <!-- //header -->
    <!-- banner -->
    <div class="inner-banner-w3ls text-right d-flex align-items-center">
        <div class="container">
            <h6 class="agileinfo-title">Group </h6>
            <ol class="breadcrumb-parent d-flex justify-content-end">
                <li class="breadcrumb-nav">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-nav active  text-capitalize" aria-current="page">Members</li>
            </ol>
        </div>
    </div>
    <!-- //banner -->
    <!-- team  -->
    <section class="py-sm-5 py-3 team-agile">
        <div class="container py-md-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">meet our team</h3>
                <div class="title-line">
                </div>
            </div>
            <div class="d-flex team-agile-row pt-sm-5 pt-3">
                <?php if(count($groupList)): ?>
                    <?php foreach($groupList as $list): ?>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 mb-4">
                            <div class="box20">
                                <img src="<?php echo base_url() ?>assets/front/group-image/<?php echo $list->image ?>" alt="<?php echo $list->name ?>" class="img-fluid" />
                                <div class="box-content">
                                    <h3 class="title"><?php echo $list->name ?></h3>
                                    <span class="post"><?php echo $list->about ?></span>
                                </div>
                                <ul class="icon">
                                    <?php if($list->link1): ?>
                                    <li>
                                        <a href="<?php echo $list->link1 ?>">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </li>
                                    <?php endif ?>
                                    <?php if($list->link2): ?>
                                    <li>
                                        <a href="<?php echo $list->link2 ?>">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                <div class="col-md-12">
                    <h3>No Members Found</h3>
                </div>
                <?php endif ?>
            </div>
        </div>
    </section>
    <?php $this->load->view('front/layouts/footer');
  ?>