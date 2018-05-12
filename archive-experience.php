<?php get_header(); ?>

<section id=resume"">
<div class="experience">
    <?php $workExperience = new WP_Query(array(
          'post_type' => 'workExperience'
           )); 
            while($workExperience->have_posts()) {
                  $workExperience-> the_post(); ?>
                 <dt><?php the_title(); ?></dt>
                 <dd>
                 <p><?php the_content();?> </p>
                 </dd>
             <?php 
             }
              ?>

</div>
</section>

<?php get_footer(); ?>