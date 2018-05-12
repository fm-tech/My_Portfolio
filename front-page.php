<?php get_header(); ?>


<!-- One -->
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content frontp">
            <h1><?php echo get_bloginfo('name'); ?></h1>
            <p class="major"><?php echo get_bloginfo('description'); ?> </p>
            <ul class="actions vertical">
                <li><a href="<?php echo site_url('/contact'); ?>" class="button big wide smooth-scroll-middle">Contact</a></li>
            </ul>
        </div>
        <div class="image">
            <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="" />
        </div>
    </section>

<!-- Work experience & About -->
    <section id="resume">
        <div class="about_me">
            <div><h3>About me</h3></div>
            <div class="about_content">
                <dd>
                <p><?php show_post('about'); ?></p>
                </dd>
            </div>
        </div>


                        <div class="experience">
                            <header>
                                <h3>Experience</h3>
                            </header>
                         
                            <div class="content">
                            
                                <dl>
                                <?php $workExperience = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_type' => 'workExperience',
                                'orderby'   => 'post_date',
                                'order'     => 'DESC'
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
                                </dl>
                            
                            </div>
                        </div>
    </section>

<!-- Three -->
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
        <div class="content">
        <?php 
        $frontPageNewsPost = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name'  => 'news'
        ));                       
        while ($frontPageNewsPost->have_posts()) {
            $frontPageNewsPost->the_post(); ?>
       
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions vertical">
                <li><a href="<?php echo the_permalink(); ?>" class="button">Read More</a></li>
            </ul>
        </div>
        <div class="image">
            <?php the_post_thumbnail( 'full' ) ?>
        <?php
        } wp_reset_postdata();
        ?>    
        </div>
    </section>

<!-- Four -->
    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
        <div class="content">
        <?php 
        $frontPagePost = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name'  => 'education'
        ));                       
        while ($frontPagePost->have_posts()) {
            $frontPagePost->the_post(); ?>
       
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <ul class="actions vertical">
                <li><a href="<?php echo the_permalink(); ?>" class="button">Read More</a></li>
            </ul>
        </div>
        <div class="image">
            <?php the_post_thumbnail( 'full' ) ?>
        <?php
        } wp_reset_postdata();
        ?>    
        </div>
    </section>

<!-- Five -->
    <section class="wrapper style1 align-center">
        <div class="inner">
            <h2>Certification & Training</h2>
            <p>I currently hold a <strong>COMP TIA A+</strong> & <strong>CISCO CCENT</strong>.
            </p>
        </div>
    </section>

<!-- Six -->
    <section class="wrapper style1 align-center">
        <div class="inner">
            <h2>My Skills</h2>
            <p>I have a wide range of skills! Everyday they continue to grow.</p>
            <div class="items style1 medium onscroll-fade-in">
            
                <?php $skillSet = new WP_Query(array(
                                'posts_per_page' => 12,
                                'post_type' => 'skillSet'
                                     )); 
                                        while($skillSet->have_posts()) {
                                        $skillSet-> the_post(); ?>
                                        <section>
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_content(); ?></p>
                                        </section>
                                     
                                    <?php 
                                     } wp_reset_postdata();
                                     ?>                 
            </div>
        </div>
    </section>




<?php 
get_footer();
?>

