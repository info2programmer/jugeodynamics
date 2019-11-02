<?php $this->load->view('front/layouts/head') ?>
<style>
  .about-sub-title {
    margin: 0.4em 0;
    font-weight: 700;
    color: #000;
    font-size: 1.75rem;
  }
</style>

<body>
  <div class="se-pre-con"></div>
  <!-- header -->
  <?php $this->load->view('front/layouts/header') ?>
  <!-- //header -->
  <!-- banner -->
  <!-- Carousel -->
  <div class="row justify-content-center align-items-center no-gutters banner-agile">
    <div class="col-lg-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item bg1 active">
            <div class="bnr-text-wthree">
              <!-- <h3 class="b-w3ltxt">the perfect theme for</h3>
              <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p> -->
            </div>
          </div>
          <!-- slider text -->
          <div class="carousel-item bg2">
            <div class="bnr-text-wthree">
              <!-- <h3 class="b-w3ltxt">the perfect theme for</h3>
              <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p> -->
            </div>
          </div>
          <!-- slider text -->
          <div class="carousel-item bg3">
            <div class="bnr-text-wthree">
              <!-- <h3 class="b-w3ltxt">the perfect theme for</h3>
              <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p> -->
            </div>
          </div>
          <!-- slider text -->
        </div>
      </div>
      <!-- Carousel -->
      <!-- //banner -->
    </div>

  </div>
  <!-- //carousel -->
  <!-- //banner -->
  <!-- about -->

  <section class="about-bottom-agileinfo pb-lg-5 mt-4">

    <div class="row  align-items-center no-gutters abbot-grid2">
      <div class="col-lg-6 py-lg-3 px-sm-5 px-3 py-4 abbot-right order-lg-0 order-1">
        <h3 class="about-sub-title card-title align-self-center pt-sm-0 pt-3">Nibir Mandal</h3>
        <h6 class="">Professor</h6>
        <h6 class="">Fellow, Indian National Science Academy</h6>
        <h6 class="">Fellow, Indian Academy of Sciences</h6>
        <h6 class=""> Fellow, West Bengal Academy of Science and Technology</h6>
        <span class="w3-line"></span>
        <span class="w3-line mx-auto text-center d-block"></span>
        <p class="card-text justify-content-center my-3" style="text-align: justify;font-size: 14px;">
          Prof. Mandal’s research primarily aims at theorizing deformational and flow processes in the Earth's interior. A direction of his research deals with the kinematic analysis of ductile shear zones, and theoretically predicts the amount of transpression in orogenic systems. He proposed new hydrodynamic models for characterizing the flow perturbations around mechanically interacting rigid as well as deformable bodies. He has shown the process of flaw-controlled shear localization in heterogeneous rocks, emphasizing the role of different physical factors that control plastic strain localization around a pre-existing flaw. His study describes the mechanics of failure at the fault tips, resulting in the formation of damage zones. The current research interest of Professor Mandal involves the large scale flow systems in governing major geodynamic processes in the framework of geophysical fluid mechanics. Using computational fluid dynamics (CFD) simulations his work provides explanation to the dynamics of magmatic segmentation along mid-oceanic ridges (MORs), Rayleigh-Taylor instabilities in the Earth's interior, subduction zone settings. His theoretical and experimental studies show the mode of sequential thrusting in the upper crustal regime. His work demonstrates the nature of Himalayan dynamic topography as a function of the flow conditions induced by the underthrusting plate. Professor Mandal has been actively engaged on the research on computational mineral physics, in particular calculation of pressure-dependent physical properties, like elastic, seismic and electrical properties of silicates and oxides. Using density functional theory his studies evaluates phase stability of various mineral phases, for example wurtzite, zircon and its high pressure polymorphs, spinels and casseterite.
        </p>
      </div>
      <div class="col-lg-6 p-0 right-about-bg  order-lg-1 order-0">
      </div>
    </div>

  </section>
  <!-- //about -->
  <!-- stats -->
  <section>
    <div class="testimonials py-lg-5" id="testi">
      <div class="container py-5">
        <div class="title-section pb-4">
          <div class="title-line">
          </div>
        </div>
        <div class="text-center py-lg-5">
          <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider3">
              <li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
                <div class="testi-agile">
                  <p>
                    <i class="fas fa-quote-left"></i>Understanding the underlying physics of geodynamic processes, ranging from cation ordering in mantle mineral phases to making of mountains is the driving motivation of our research group. Like any other branch of sciences, we always endeavour into the exciting questions through theory and experiments. As a lead of this group, I dream of developing a strong platform for quantitative geosciences in India.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
                <div class="testi-pos">
                  <img src="images/ts1.jpg" alt="" class="img-fluid rounded-circle mb-3">
                  <h4>Prof. Nibir Mandal</h4>
                  <span>Jadavpur University</span>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- New Update -->
  <section class="py-lg-5">
    <div class="container py-sm-5 pt-3">
      <div class="title-section pb-4">
        <h3 class="main-title-agile">News Update</h3>
        <div class="title-line">
        </div>
      </div>
      <div class="row pt-sm-5 pt-3">
        <div class="col-md-12 typo-grid">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php if (COUNT($newsList) > 0) : ?>
              <?php foreach ($newsList as $list) : ?>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne<?php echo $list->id ?>">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $list->id ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $list->id ?>" class="collapsed">
                        Earth remembers accretion
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne<?php echo $list->id ?>" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $list->id ?>" style="">
                    <div class="panel-body">
                      <p>Our new paper is out today in Science: Preservation of Earth-forming events in <a href="javascript:void(0)">the tungsten isotopic composition of modern flood basalts</a> by Hanika Rizo et al.</p>
                      <p>W anomalies in the mantle demonstrate that the Earth has not erased signatures from the main stage of planet formation.</p>
                      <p>Also see the Perspective by Tais Dahl.</p>
                      <div style="border-top: 1 solid black;border-bottom: 1px solid black">
                        Posting Date : May 12th, 2019
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php else :  ?>
              <p align="center">No News Found</p>
            <?php endif ?>
            <!-- <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Some News In This Section
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                    lorem,
                    dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero,
                    egestas
                    eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus,
                    blandit
                    posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, laborum blanditiis maxime,
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                    lorem,
                    dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero,
                    egestas
                    eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus,
                    blandit
                    posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- New Update -->
  <!-- //stats -->
  <?php $this->load->view('front/layouts/footer');
  ?>