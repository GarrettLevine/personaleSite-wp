<?php get_header();  ?>
   <!-- **********************************************
                 MAIN AREA
     ************************************************-->
<section class="desktopContainer">
  <main class="mainArea">
    <div class="mainArea__wrapper">

      <section class="heroArea">
        <h1 class="heroArea__heroText"><?php the_field('hero_text') ?></h1>
        <h3 class="heroArea__subHeading"><?php the_field('sub-heading'); ?></h3>
    
      </section>

      </div>
  </main>

       <!-- **********************************************
                    ABOUT AREA
         ************************************************-->
      <section class="aboutArea">
        <div class="aboutArea__wrapper">
          <p class="aboutArea__text"><?php the_field('about_text'); ?></p>
          <p class="aboutArea__knowledge"><?php the_field('skill_set'); ?></p>
        </div>
      </section>
    
       <!-- **********************************************
                     PORTFOLIO AREA
         ************************************************-->
      <section class="portfolioArea">
        <h5 class="portfolioArea__heading">Recent Work</h5>
        <div class="portfolioArea__portfolioContainer">
        <?php $portfolioPieces = new WP_Query( array(
               "posts_per_page" => 5,
               "post_type" => "portfolio"
             ));?>
        <?php if($portfolioPieces-> have_posts() ): ?>
          <?php while($portfolioPieces-> have_posts() ): $portfolioPieces->the_post(); ?>
            <a href="<?php the_field('url'); ?>" target="_blank">
              <div class="portfolioArea__imageContainer">
                <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
              </div>
              <div class="portfolioArea__skillContainer">
                <p class="portfolioArea__skillText"><span>Used: </span> <?php the_field('technologies'); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
      </section> <!-- /.portfolioArea -->
     <!-- **********************************************
                    BLOG AREA
       ************************************************-->
      <section class="blogArea clearfix">
        <h5 class="blogArea__heading">Writing</h5>
        <div class="blogArea__blogContainer">
   
        <!-- GET THE POSTS FROM BLOG SECTION -->
        <?php 
          $devPosts = new WP_Query(array(
          'post_per_page' => 3,
          'category_name' => 'web'
        )); ?>
        <?php if($devPosts->have_posts() ) : ?>
          <?php while($devPosts->have_posts() ) : $devPosts->the_post(); ?>
            <div class="blogArea__frontPageBlog">
              <p class="frontPageBlog__date"><?php the_date(); ?></p>
              <a href="<?php the_permalink(); ?>"><h4 class="frontPageBlog__title"><?php the_title();?></h4></a>
              <?php the_excerpt();?>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>
        </div>
      </section> <!-- /.blogArea -->

  </section> <!-- /.flexWrapper -->
     <!-- **********************************************
                   CONTACT AREA
       ************************************************-->
      
<?php get_footer(); ?>