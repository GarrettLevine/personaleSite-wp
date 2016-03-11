<?php get_header();  ?>
   <!-- **********************************************
                 MAIN AREA
     ************************************************-->
<main class="mainArea">
  <div class="mainArea__wrapper">

    <section class="heroArea">
      <h1><?php the_field('hero_text') ?></h1>
      <div class="heroArea__logoContainer">
        <?php $logoImage = array(get_field('logo')); ?>
        <img src="<?php echo $logoImage[0]['url'] ?>" alt="<?php echo $logoImage[0]['alt'] ?>">
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

   <!-- **********************************************
                  BLOG AREA
     ************************************************-->
    <section class="blogArea">
      <h5 class="blogArea__heading">Writing</h5>
      <?php $devPosts = new WP_Query(array(
        "post_per_page" => 3,
        "post_type" => "post",
        "category_name" => "web"
      )); ?>
      <?php if($devPosts-> have_posts()): ?>
        <?php while($devPosts-> have_posts() ): $devPosts->the_post(); ?>
          <div class="blogArea__frontPageBlog">
            <p class="frontPageBlog__date"><?php the_date(); ?></p>
            <h4 class="frontPageBlog__title"><?php the_title();?></h4>
            <p class="frontPageBlog__text"><?php the_excerpt();?></p>
          </div>
        <?php endwhile; ?>
        <?php we_reset_postdata(); ?>
      <?php endif; ?>
    </section>
    <nav class="socialNav">
        
    </nav>
  </div> <!-- /.mainArea__wrapper -->
</main> <!-- /.mainArea -->

<?php get_footer(); ?>