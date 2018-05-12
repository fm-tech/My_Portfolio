<?php
get_header(); ?>

<!-- Blog Splash Omage -->
<section class="banner style1 orient-left content-align-left image-position-right blogheader onload-image-fade-in onload-content-fade-right">
<div class="content frontp">
<h1><?php echo get_bloginfo('name'); ?></h1>
<p class="major"><?php echo get_bloginfo('description'); ?> </p>
</div>
        <div class="image">
        <?php the_post_thumbnail( 'full' ) ?>
        </div>
</section>
<!-- Blog Space -->

<!-- Blog Post -->

<section class="blog-container">

<?php
while(have_posts()) {
        the_post(); ?>
<div class="post-item">
        <div class="b-title-area">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>       
        
        <div class="featured-image-container">
                <?php the_post_thumbnail('medium'); ?>
        </div>
                <div class="meta-box">
                <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                </div>

        <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="button" href="<?php the_permalink(); ?>">Continue reading</a></p>
        </div>
</div>

<?php }
 echo paginate_links();
?>



</section>



<?php get_footer();

?>