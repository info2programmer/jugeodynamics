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
  <div class="inner-banner-w3ls text-right d-flex align-items-center">
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
            <h3 class="main-title-agile">All <?php echo $year ?> Publications</h3>
          </div>
          <div class="col md-6">
            <select name="txtDate" id="txtDate" required class="form-control" onchange="getYearData()">
              <option value="">---Select Year-----</option>
              <option value="1973" <?php if (isset($year) && $year == "1973") : ?> selected <?php endif ?>>1973</option>
              <option value="1974" <?php if (isset($year) && $year == "1974") : ?> selected <?php endif ?>>1974</option>
              <option value="1975" <?php if (isset($year) && $year == "1975") : ?> selected <?php endif ?>>1975</option>
              <option value="1976" <?php if (isset($year) && $year == "1976") : ?> selected <?php endif ?>>1976</option>
              <option value="1977" <?php if (isset($year) && $year == "1977") : ?> selected <?php endif ?>>1977</option>
              <option value="1978" <?php if (isset($year) && $year == "1978") : ?> selected <?php endif ?>>1978</option>
              <option value="1979" <?php if (isset($year) && $year == "1979") : ?> selected <?php endif ?>>1979</option>
              <option value="1980" <?php if (isset($year) && $year == "1980") : ?> selected <?php endif ?>>1980</option>
              <option value="1981" <?php if (isset($year) && $year == "1981") : ?> selected <?php endif ?>>1981</option>
              <option value="1982" <?php if (isset($year) && $year == "1982") : ?> selected <?php endif ?>>1982</option>
              <option value="1983" <?php if (isset($year) && $year == "1983") : ?> selected <?php endif ?>>1983</option>
              <option value="1984" <?php if (isset($year) && $year == "1984") : ?> selected <?php endif ?>>1984</option>
              <option value="1985" <?php if (isset($year) && $year == "1985") : ?> selected <?php endif ?>>1985</option>
              <option value="1986" <?php if (isset($year) && $year == "1973") : ?> selected <?php endif ?>>1986</option>
              <option value="1987" <?php if (isset($year) && $year == "1987") : ?> selected <?php endif ?>>1987</option>
              <option value="1988" <?php if (isset($year) && $year == "1988") : ?> selected <?php endif ?>>1988</option>
              <option value="1989" <?php if (isset($year) && $year == "1989") : ?> selected <?php endif ?>>1989</option>
              <option value="1990" <?php if (isset($year) && $year == "1990") : ?> selected <?php endif ?>>1990</option>
              <option value="1991" <?php if (isset($year) && $year == "1991") : ?> selected <?php endif ?>>1991</option>
              <option value="1992" <?php if (isset($year) && $year == "1992") : ?> selected <?php endif ?>>1992</option>
              <option value="1993" <?php if (isset($year) && $year == "1993") : ?> selected <?php endif ?>>1993</option>
              <option value="1994" <?php if (isset($year) && $year == "1994") : ?> selected <?php endif ?>>1994</option>
              <option value="1995" <?php if (isset($year) && $year == "1995") : ?> selected <?php endif ?>>1995</option>
              <option value="1996" <?php if (isset($year) && $year == "1996") : ?> selected <?php endif ?>>1996</option>
              <option value="1997" <?php if (isset($year) && $year == "1997") : ?> selected <?php endif ?>>1997</option>
              <option value="1998" <?php if (isset($year) && $year == "1998") : ?> selected <?php endif ?>>1998</option>
              <option value="1999" <?php if (isset($year) && $year == "1999") : ?> selected <?php endif ?>>1999</option>
              <option value="2000" <?php if (isset($year) && $year == "2000") : ?> selected <?php endif ?>>2000</option>
              <option value="2001" <?php if (isset($year) && $year == "2001") : ?> selected <?php endif ?>>2001</option>
              <option value="2002" <?php if (isset($year) && $year == "2002") : ?> selected <?php endif ?>>2002</option>
              <option value="2003" <?php if (isset($year) && $year == "2003") : ?> selected <?php endif ?>>2003</option>
              <option value="2004" <?php if (isset($year) && $year == "2004") : ?> selected <?php endif ?>>2004</option>
              <option value="2005" <?php if (isset($year) && $year == "2005") : ?> selected <?php endif ?>>2005</option>
              <option value="2006" <?php if (isset($year) && $year == "2006") : ?> selected <?php endif ?>>2006</option>
              <option value="2007" <?php if (isset($year) && $year == "2007") : ?> selected <?php endif ?>>2007</option>
              <option value="2008" <?php if (isset($year) && $year == "2008") : ?> selected <?php endif ?>>2008</option>
              <option value="2009" <?php if (isset($year) && $year == "2009") : ?> selected <?php endif ?>>2009</option>
              <option value="2010" <?php if (isset($year) && $year == "1973") : ?> selected <?php endif ?>>2010</option>
              <option value="2011" <?php if (isset($year) && $year == "2011") : ?> selected <?php endif ?>>2011</option>
              <option value="2012" <?php if (isset($year) && $year == "2012") : ?> selected <?php endif ?>>2012</option>
              <option value="2013" <?php if (isset($year) && $year == "2013") : ?> selected <?php endif ?>>2013</option>
              <option value="2014" <?php if (isset($year) && $year == "2014") : ?> selected <?php endif ?>>2014</option>
              <option value="2015" <?php if (isset($year) && $year == "2015") : ?> selected <?php endif ?>>2015</option>
              <option value="2016" <?php if (isset($year) && $year == "2016") : ?> selected <?php endif ?>>2016</option>
              <option value="2017" <?php if (isset($year) && $year == "2017") : ?> selected <?php endif ?>>2017</option>
              <option value="2018" <?php if (isset($year) && $year == "2018") : ?> selected <?php endif ?>>2018</option>
              <option value="2019" <?php if (isset($year) && $year == "2019") : ?> selected <?php endif ?>>2019</option>
            </select>
          </div>
        </div>

        <div class="title-line">
        </div>

      </div>

      <div class="well txtbasic1">
        <?php if (COUNT($publicationList) > 0) : ?>
          <?php foreach ($publicationList as $list) : ?>
            <div class="row">
              <div class="col-md-12 text-left">
                <h5><?php echo $list->title ?></h5>
                <h6 class="text-info"> <?php echo $list->content ?></h6>
              </div>
            </div>
            <hr>
          <?php endforeach ?>
        <?php else : ?>
          <h4 align="center">No Data Found</h4>
        <?php endif; ?>
      </div>

    </div>
  </section>
  <!-- //courses -->
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
                <a href="lab.htnl" class="nav-link py-0">
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
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="social-icons d-flex  my-auto justify-content-lg-start justify-content-center">
            <h2 class="mr-4">stay connected :</h2>
            <ul class="social-iconsv2 agileinfo">
              <li>
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 my-lg-auto mt-3">
          <div class="cpy-right text-lg-right text-center">
            <p class="text-secondary">© 2018 Skill Point. All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- //footer -->
  <!-- //footer -->
  <!-- js-->
  <script src="<?php echo base_url() ?>assets/front/js/jquery-2.2.3.min.js"></script>
  <!-- loading-gif Js -->
  <script src="<?php echo base_url() ?>assets/front/js/modernizr.js"></script>
  <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>
  <!--// loading-gif Js -->
  <!-- Multiple select filter using jQuery -->
  <script src="<?php echo base_url() ?>assets/front/js/custom-select.js"></script>
  <!-- //Multiple select filter using jQuery -->
  <!-- js-->
  <!-- start-smooth-scrolling -->
  <script src="<?php echo base_url() ?>assets/front/js/move-top.js">
  </script>
  <script src="<?php echo base_url() ?>assets/front/js/easing.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();

        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- //end-smooth-scrolling -->
  <!-- smooth-scrolling-of-move-up -->
  <script>
    $(document).ready(function() {
      /*
       var defaults = {
      	 containerID: 'toTop', // fading element id
      	 containerHoverID: 'toTopHover', // fading element hover id
      	 scrollSpeed: 1200,
      	 easingType: 'linear' 
       };
       */

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });

    function getYearData() {
      let year = $('#txtDate').val();
      if (year === "") {
        return
      }
      window.open(`<?php echo base_url() ?>publication/${year}`, '_self');
    }
  </script>
  <script src="<?php echo base_url() ?>assets/front/js/SmoothScroll.min.js"></script>
  <!-- //smooth-scrolling-of-move-up -->
  <script src="<?php echo base_url() ?>assets/front/js/gridview.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url() ?>assets/front/js/bootstrap.js">
  </script>
  <!-- //Bootstrap Core JavaScript -->
</body>

</html>