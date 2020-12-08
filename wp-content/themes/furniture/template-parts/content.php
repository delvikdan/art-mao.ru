<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Furniture
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php furniture_post_thumbnail(); ?>

	<header class="entry-header">
	    <div class="entry-meta">
          <p><?php the_date('F j, Y'); ?></p>
        </div><!-- .entry-meta -->
	
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
