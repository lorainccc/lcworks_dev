<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package LCCC Framework
 */

get_header(); ?> 
<div class="small-12 medium-12 large-12 columns main-container">
	
	<div id="primary" class="small-12 medium-8 columns content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="small-12 medium-4 columns side-bar-container">
<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
	<div class="small-12 columns nopadding">
		<?php dynamic_sidebar( 'sidebar-home' ); ?>
	</div>
<?php endif; ?>
</div>
</div>	
<?php get_footer(); ?>