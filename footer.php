<?php if(is_home() or is_front_page() ): ?>

<footer class="footer">
	<div class="footer__wrapper">
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
  </div>
  <div class="footer__contactArea">
  	<div class="footer__contactWrapper">
  		<div class="footer__contactContainer">
  		<?php wp_nav_menu( array(
  		 'container' => false,
			  'menu_class' => 'footer__socialContainer',
			  'theme_location' => 'social_footer_nav',
			  'after' => '<div class="copyImage"><p>Copied!</p></div>'
  		)); ?>
  		</div>		
  	</div>
  </div>
</footer>
<?php else: ?>

	<footer class="footer">
		<div class="footer__contactArea">
  	<div class="footer__contactWrapper">
  		<div class="footer__contactContainer">
  		<?php wp_nav_menu( array(
  		 'container' => false,
			  'menu_class' => 'footer__socialContainer',
			  'theme_location' => 'social_footer_nav',
			  'after' => '<div class="copyImage"><p>Copied!</p></div>'
  		)); ?>
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