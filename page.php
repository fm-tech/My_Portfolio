<?php
get_header();

//This is the PHP loop
while(have_posts()) {    
the_post(); ?>
<!-- start contnent -->
<section class="banner style1 orient-left content-align-left image-position-right blogheader onload-image-fade-in onload-content-fade-right">
<div class="content frontp">
        <h1><?php the_title(); ?></h1>
        <p class="major"> this is a subtitile </p>
</div>
                           
        <div class="image">
        <?php the_post_thumbnail( 'full' ) ?>
        </div>
</section>
<section class="blog-container">
<div class="blog-content">
   <div> <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p></div>
    <div class="generic-content"><?php the_content(); ?></div>

</div>


</section>

<?php }

get_footer();

?>