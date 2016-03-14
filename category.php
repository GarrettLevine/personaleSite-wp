<?php get_header(); ?>

<div class="category">
  <div class="category__wrapper">
    <div class="category__blogContainer">
      <h1 class="category__header">Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

 <?php get_footer(); ?>