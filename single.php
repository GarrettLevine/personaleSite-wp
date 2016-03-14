<?php get_header(); ?>

<main class="blogContainer">
  <div class="blogContainer__wrapper">
    <article class="blogContainer__blogArticle">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="blogArticle__blogPost-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="blogPost__imageContainer">
            <img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
          </div>
          <div class="blogPost__titleInfo">
            <p  class="blogPost__date"><?php the_date(); ?></p>
            <h1 class="blogPost__title"><?php the_title(); ?></h1>
          </div>

          <div class="blogPost__content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->


      <?php endwhile; // end of the loop. ?>

    </article> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>