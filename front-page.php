<?php get_header();  ?>


   <!-- **********************************************
                 MAIN AREA
     ************************************************-->
<main class="mainArea">
  <div class="mainArea__wrapper">

    <section class="heroArea">
      <h1><?php the_field('hero_text') ?></h1>
      <div class="heroArea__logoContainer">
        <img src="<?php the_field('logo'); ?>" alt="">
      </div>
    </section>

     <!-- **********************************************
                  ABOUT AREA
       ************************************************-->
    <section class="aboutArea">
        <p class="aboutArea__text"><?php the_field('about_text'); ?></p>
        <p class="aboutArea__knowledge"><?php the_field('skill_set'); ?></p>
    </section>
  
     <!-- **********************************************
                   PORTFOLIO AREA
       ************************************************-->
    <section class="portfolioArea">
      <h5 class="portfolioArea__heading">Recent Works</h5>
      <?php $portfolioPieces = new WP_Query( array(
             "posts_per_page" => -1,
             "post_type" => "portfolio"
           ));?>
      <?php if($portfolioPieces-> have_posts() ): ?>
        <?php while($portfolioPieces-> have_posts() ): $portfolioPieces->the_post(); ?>
          <div class="portfolioArea__imageContainer">
            <img src="<?php echo hackeryou_get_thumbnail_url( $post ) ?>" alt="">
          </div>
          <div class="portfolioArea__skillContainer">
            <p class="portfolioArea__skillText"><?php the_field('technologies'); ?></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </section> <!-- /.portfolioArea -->

    <section class="blogArea">
      <h5 class="blogArea__heading">Writing</h5>

    </section>
    <nav class="socialNav">
        
    </nav>
  </div> <!-- /.mainArea__wrapper -->
</main> <!-- /.mainArea -->

<?php get_footer(); ?>