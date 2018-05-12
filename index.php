<?php
get_header(); ?>

<?php 

?>


<!-- Blog Splash Omage -->
<section class="">
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


<?php
while(have_posts()) {
        the_post(); 
        
        $postid = get_the_ID();
        $inClassSOdd= "spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in";
        $inClassSEven= "spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in";


        if($postid % 2 == 0){
                $inClassVar = $inClassSEven;
        } else {
                $inClassVar = $inClassSOdd;
                } 
        
        ?>
<section class="<?php echo $inClassVar ?>">
        
        <div class="content">
        <!-- this is troubleshooting code -->
        <p>this is the <?php echo get_the_ID(); ?></p> 
        <!-- end troubleshooting code -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
        <?php the_excerpt(); ?>
                <div class="">
                <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                </div>
        <p><a class="button" href="<?php the_permalink(); ?>">Continue reading</a></p>
        </div>      
        
        <div class="image">
                <?php the_post_thumbnail('medium'); ?>
        </div>
            

</section>

<?php }
 echo paginate_links();
?>
  




<?php get_footer();

?>