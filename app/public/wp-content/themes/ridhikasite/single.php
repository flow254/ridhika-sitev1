<?php get_header(); ?>

<?php 

while(have_posts()){
    the_post();

?>


<div class="container">
    <div class="row text-center fw-bolder text-capitalize mt-5 pt-5 post-title">
    <h2><?php the_title(); ?></h2>
    </div>

    <h4 class="fw-light fst-italic post-metadata"> By <?php the_author();?> on <?php the_time('F j, Y')?> </h4>
    <div class="post-image mb-3">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt="Featured Image">
    </div>
    <div class="post-content text-justify">
    <?php the_content();
    }

    ?>   
    
    </div>
   

</div>

<?php get_footer(); ?>