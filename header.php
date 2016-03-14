<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="header">
  <div class="header__container">
			<div class="heroArea__logoContainer">
        <?php  if(is_home() ): ?>
  			  <?php $logoImage = array(get_field('logo')); ?>
  			  <img src="<?php echo $logoImage[0]['url'] ?>" alt="<?php echo $logoImage[0]['alt'] ?>">
        <?php else: ?>
          <?php $frontPage = new WP_Query( array(
            'pagename' => 'home'
          )); ?>

         <?php if ( $frontPage->have_posts() ) : ?>
            <?php while ( $frontPage->have_posts() ) : $frontPage->the_post(); ?>
                
              <?php $logoImage = array(get_field('logo')); ?>
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo $logoImage[0]['url'] ?>" alt="<?php echo $logoImage[0]['alt'] ?>">
                </a>
            <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      <?php endif; ?>
			</div>
  </div> <!-- /.container -->
</header><!--/.header-->

