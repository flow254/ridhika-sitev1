<?php get_header();?>


<section>
    <div class="container">
        <div class="row text-center mt-5">
            <h1 class="display-3 fw-bold text-capitalize text">
                About Us
            </h1>
            <div class="heading-line"></div>
            <p class="lead"></p>
                <?php while(have_posts()){
                    the_post();

                    ?>
       <!-- <div class="card"> -->
        <?php if(has_post_thumbnail()){ ?>

        <div class="post-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Featured Image">
        </div>
       <?php } ?> 
        </div>
        <div class="post-content text-justify">
           <?php the_content();?>
       </div>
    </div>
    <!--</div>-->
    </div>
</section>


    <?php }?>
<?php get_footer();?>
