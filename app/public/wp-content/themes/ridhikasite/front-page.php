
    <?php get_header();?>
      <!--Start the intro section / with hero image-->

      <section id="home" class="intro-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 intros">
              <h1 class="display-2">
                <span class="display-2--intro">
                  We are Ridhika
                </span>
                <span class="display-2--description lh-base">
                  Creating and Nurturing the Next Generation of Innovators
                </span>
              </h1>
            </div>
            <!--Start content for the picture -->
            <div class="col-md-6 intros">
              <img src="<?php echo get_template_directory_uri();?>/img/innovation_img.png" alt="students coworking" class="img-fluid">
              
            </div>
          </div>
        </div>
      </section>

      <!--Start the companies section-->
      <section id="companies" class="companies">
        <div class="container">
          <div class="row text-center">
            <h2 class="fw-bold lead-mb-3">
              Our Partners
            </h2>
            <div class="heading-line mb-5"> </div>
          </div>
        </div>
        <!--Start company images-->
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="companies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri();?>/img/partners/cgiu.png" alt="partner logo image" class="img-fluid"></div>
            </div>
            <div class="col-md-4">
              <div class="companies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri();?>/img/partners/nyeri_county.png" alt="partner logo image"" class="img-fluid"></div>
            </div>
            <div class="col-md-4">
              <div class="companies__logo-box shadow-sm"><img src="<?php echo get_template_directory_uri();?>/img/partners/st_marys.jpeg" alt="partner logo image"" class="img-fluid"></div>
            </div>
          </div>
        </div> 
      </section>

      <!--Start programs section-->

    
    <section id="services" class="services">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold">
            Our Programs
          </h1>
          <div class="heading-line mb-1"></div>
        </div>

      <!--Start the description content-->
        <div class="row pt-2 pb-2 mt-0 mb-3">
          <div class="col-md-6 border-right">
            <div class="bg-white p-3">
              <h2 class="fw-bold text-capitalize text-center">
                Ridhika aims to nurture creativity and boost innovation
              </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-white p-4 text-start">
              <p class="fw-light">
                We offer our blended curriculum of Computer Programming, 
                Design Thinking, Leadership and Career Development at each of our school chapters. 
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--Start the content for the services-->
      <div class="container">
        <!--Start the after-school program file-code-o-->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fa fa-file-code-o"></div>
              <h3 class="display-3--title mt-1">After-school programs</h3>
              <p class="lh-lg">
                We offer our blended curriculum of Computer Programming, 
                Design Thinking, Leadership and Career Development at each of our school chapters - 
                open for any students to attend for free. <a href="#">Contact us</a> to establish 
                a school chapter at your high school. 
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="<?php echo get_template_directory_uri();?>/img/after-school.png" alt="after-school illustration" class="img-fluid">
            </div>
          </div>
        </div>
        <!--Srart the bootcamp info rocket -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
            <div class="services__pic">
              <img src="<?php echo get_template_directory_uri();?>/img/coworking_bootcamp.png" alt="bootcamp illustration" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fa fa-rocket"></div>
              <h3 class="display-3--title mt-1">Programming and Leadership bootcamp</h3>
              <p class="lh-lg">
                Every year, Ridhika offers successful applicants the chance to participate 
                in a bootcamp. Participants learn introductory Web Development, Leadership, Design Thinking 
                and Entrepreneurship and get the chance to form friendships with other innovators. 
              </p>
            </div>
            
          </div>
        </div>
        <!--Srart the career day info users-->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fa fa-users"></div>
              <h3 class="display-3--title mt-1">Career Day</h3>
              <p class="lh-lg">
                Each year, Ridhika invites high school students to join bootcamp participants at a Career Day event. 
                As part of our career development series, local high school students get to hear about their favorite 
                careers from practicing professionals, spend the day with them and ask lots of questions!
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="<?php echo get_template_directory_uri();?>/img/career-day.png" alt="career day illustration" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--Start the FAQ section-->
    <section id="faq" class="faq">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-uppercase">faq</h1>
          <div class="heading-line"></div>
          <p class="lead">Frequently Asked Questions about Ridhika</p>
        </div>
        <!--Accordion content-->
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <!--Accordion item one-->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How much does it cost to attend a Ridhika bootcamp?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    The bootcamp is absolutely free for accepted students. Apply today!
                  </div>
                </div>
              </div>
              <!--Accordion item two-->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do I get Ridhika to start a school chapter at my school?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a href="#contact">Contact us</a> today and we'll see how we can get a school chapter started at your school!
                  </div>
                </div>
              </div>
              <!--Accordion item three-->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Who teaches Ridhika's classes?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Ridhika's trained volunteers teach in our after-school program and bootcamp. 
                    They are all experienced programmers and have taken up projects on their own. 
                    We pride ourselves in being an entirely youth-led initiative. 
                  </div>
                </div>
              </div>
              <!--Accordion item four-->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    I want to volunteer with Ridhika, how do I do this?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Fill out our <a href="#"> volunteer form </a> and we will contact you once we receive your information. 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--START PORTFOLIO-->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row text-center mt-5">
          <h1 class="display-3 fw-bold text-capitalize text">
            Blog
          </h1>
          <div class="heading-line"></div>
          <p class="lead">
            Here's the latest from Ridhika's editorial desk 
          </p>
        </div>
        <!-- Filter buttons -->
        <div class="row mt-5 mb-4 g-3 text-center">
          <div class="col-md-12">
          <a href="<?php echo site_url('/blog');?>">
          <button class="btn btn-outline-primary" type="button"> All</button>
          </a>
          <a href="<?php echo site_url('/category/founders-desk');?>">
          <button class="btn btn-outline-primary" type="button">Founders' Desk</button>
          </a>
          <a href="<?php echo site_url('/category/ridhiz');?>">
          <button class="btn btn-outline-primary" type="button">Ridhiz</button>
         </a>
         <a href="<?php echo site_url('/category/entrepreneurship');?>">
          <button class="btn btn-outline-primary" type="button">Entrepreneurship</button>
          </a>
         <a href="<?php echo site_url('/category/leadership');?>">
          <button class="btn btn-outline-primary" type="button">leadership</button>
         </a>
          </div>
        </div>
      <div class="row">
          <?php
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 9,
          );
          $blogposts = new WP_Query($args);

          while($blogposts->have_posts()){
              $blogposts->the_post();
          
          
          ?>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="" class="img-fluid">
              <div class="portfolio-info">
                <div class="caption">
                
                      <a href="<?php the_permalink();?>">
                      <h4>
                      <?php the_title();?>
                    </h4>
                    </a> 
                  <a href="#" class="post-category"> <?php echo get_the_category_list(', ');?> </a>
                </div>
              </div>
            </img>
          </div>
        </div>
        <?php } wp_reset_query();?>

      </div>
      </div>
    </section>

    <!--Start Contact Us Section-->
    <section id="contact" class="contact-us">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-capitalize">Contact Us</h1>
          <div class="heading-line"></div>
          <p class="lh-lg">
            Contact us through the form below
          </p>
        </div>
        <div class="form w-100 pb-2">
          <form action="form-to-email.php" method ="POST" class="row" id="contact-form">
            <div class="col-lg-6 col-md-6 mb-3">
              <input type="text" placeholder="First Name*" id="inputFirstName" name = "firstName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-6 col-md-6 mb-3">
              <input type="text" placeholder="Last Name*" id="inputLastName" name = "lastName"  class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="Email Address*" id="inputEmail" name = "emailAddress" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea placeholder="Message " id="message" name = "message"  rows="10" class="shadow form-control form-control-lg"></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3">
                Submit
                <i class="fa fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!--Validator script -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <script>
   const constraints = {
       firstName: {
           presence: { allowEmpty: false }
       },
       lastName: {
           presence: { allowEmpty: false }
       },
       emailAddress: {
           presence: { allowEmpty: false },
           email: true
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         firstName: form.elements.firstName.value,
         lastName: form.elements.lastName.value,
         emailAddress: form.elements.emailAddress.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>


    <!--Start footer section-->

    <?php get_footer();?>
    