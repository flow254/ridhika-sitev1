<?php get_header();?>

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
        
          while(have_posts()){
              the_post();
          
          
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

    <!--Start footer section-->
    <div class="pagination">
        <?php echo paginate_links();?>
    </div>

    <?php get_footer();?>
