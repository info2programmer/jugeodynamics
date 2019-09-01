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
              <p class="text-secondary">© <?php echo date('Y') ?> Jugeo Dynamics. All rights reserved
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
        $('#products .item').addClass('list-group-item');
        $().UItoTop({
          easingType: 'easeOutQuart'
        });



      });
    </script>
    <script src="<?php echo base_url() ?>assets/front/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/front/js/bootstrap.js">
    </script>
    <!-- //Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/front/js/gridview.js"></script>
    </body>

    </html>