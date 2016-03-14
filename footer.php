<?php if(is_home() or is_front_page() ): ?>

<footer class="footer">
  <div class="footer__navContainer">
  </div>
  <div class="footer__infoContainer">
	  	<div class="infoContainer__imageContainer">

        <?php $image = get_field('profile_picture'); ?>
        <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']?>">
	  	</div> 	
	  	<div class="infoContainer__textContainer">
	  			<h4 class="textContainer__heading"><?php the_field('footer_heading'); ?></h4>
	  			<p class="textContainer__text"><?php the_field('footer_text'); ?></p>
	  	</div>
  </div>
  <section class="contactArea clearfix">
    <div class="contactArea__wrapper">
      <h5 class="contactArea__heading">Contact me Here.</h5>
      <?php wp_nav_menu( array(
        'container' => alse,
        'menu_class' => 'contactArea__socialContainer',
        'theme_location' => 'social_nav'
      )); ?>
    </div>
  </section> <!-- /.contactArea-->

</footer>
<?php else: ?>

	<footer class="insideFooter">
	  <div class="insideFooter__navContainer">
		  <?php wp_nav_menu( array(
		     'container' => false,
		     'menu_class' => 'contactArea__socialContainer',
		     'theme_location' => 'social_nav'
		   )); ?>
	  </div>
   <div class="insideFooter__logoContainer">
   	<?php $frontPage = new WP_Query( array(
   			'pagename' => 'home'
   	)); ?>

    <?php if ( $frontPage->have_posts() ) : ?>
	    <?php while ( $frontPage->have_posts() ) : $frontPage->the_post(); ?>
	        
		   	<?php $logoImage = array(get_field('logo')); ?>
				  <img src="<?php echo $logoImage[0]['url'] ?>" alt="<?php echo $logoImage[0]['alt'] ?>">
	    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
   <?php else:  ?>
   <?php endif; ?>
   </div>
	  </div>

	</footer>
<?php endif; ?>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>


<?php wp_footer(); ?>
</body>
</html>