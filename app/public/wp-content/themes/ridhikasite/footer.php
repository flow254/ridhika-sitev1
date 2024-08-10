<footer class="footer">
      <div class="container">
        <div class="row">
          <!--Start content for phone number -->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="contact-box__info">
              <a href="" class="contact-box__info--title">+254 745 862 112</a>
              <p class="contact-box__info--subtitle">Mon - Fri 9:00 a.m. - 5:00 p.m.</p>
            </div>
          </div>
              <!--Start content for email  -->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="contact-box__info">
              <a href="" class="contact-box__info--title">contact.ridhika@gmail.com</a>
              <p class="contact-box__info--subtitle">Reach us via email</p>
            </div>
          </div>
              <!--Start content for location-->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="contact-box__info">
              <a href="" class="contact-box__info--title">2817-10100 Nyeri, Kenya</a>
              <p class="contact-box__info--subtitle">Our Address</p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-sm" style="background-color: #212121;">
        <div class="container">
          <div class="row py-4 text-center text-white">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
              Connect with us on social media
            </div>
            <div class="col-lg-7 col-md-6">
              <a class="footer-icon" href="https://www.facebook.com/Ridhika-Foundation-100861522366426"><i class="fa fa-facebook"></i></a>
              <a class="footer-icon" href="https://www.instagram.com/ridhikafoundation/"><i class="fa fa-instagram"></i></a>
              <a class="footer-icon" href="https://www.linkedin.com/company/ridhika/"><i class="fa fa-linkedin"></i></a>

            </div>
          </div>
        </div>

      </div>

      <!--Start company info content-->
      <div class="container mt-5">
        <div class="row text-white justify-content-center mt-3 pb-3">
          <div class="col-12 col-sm-6 col-lg-6 mx-auto">
            <h5 class="text-capitalize fw-bold">Ridhika Foundation</h5>
            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
            <p class="lh-lg">
              Ridhika is a non-profit, youth-led organization. Collaborate with us to create and nurture the next generation
              of innovators. 
            </p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4 mx-auto">
            <h5 class="text-capitalize fw-bold">About Us</h5>
            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
            <ul class="list-inline company-list">
              <li><a href="<?php echo site_url('/our-team')?>">Our Team</a></li>
              <li><a href="<?php echo site_url('/our-story')?>">Our Story</a></li>
              <li><a href="<?php echo site_url('/sponsors')?>">Sponsors</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4 mx-auto">
            <h5 class="text-capitalize fw-bold">Useful links</h5>
            <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
            <ul class="list-inline company-list">
              <li><a href="<?php echo site_url('/careers');?>">Careers</a></li>
              <li><a href="https://forms.gle/GYPzqKEEMoKQTW1p8">Become a Volunteer</a></li>
              <li><a href="https://forms.gle/fDudcCUwJZAtqmsK9">Become a Sponsor</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>

      <!--Start the copyright info-->
      <div class="footer-bottom pt-5 pb-5">
        <div class="container">
          <div class="row text-center text-white">
            <div class="col-12">
              <div class="footer-bottom__copyright">
                &COPY; Copyright 2021. Created by <a href="https://github.com/flow254 "> S.K. Kamau </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

   
    <!--Back to top button-->

    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
      <i class="fa fa-chevron-up"></i>
    </a>
   
    <?php wp_footer();?>

    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>