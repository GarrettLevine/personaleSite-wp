<footer class="footer">
  <div class="footer__navContainer">
   <?php wp_nav_menu( array(
     'container' => false,
     'theme_location' => 'social_nav'
   )); ?>
  </div>
  <div class="footer__infoContainer">
	  	<div class="infoContainer__imageContainer">
	  	</div> 	
	  	<div class="infoContainer__textcontainer">
	  			<h4 class="textContainer__heading"><?php the_field('footer_heading'); ?></h4>
	  			<p class="textContainer__text"><?php the_field('footer_text'); ?></p>
	  	</div>
  </div>

</footer>

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