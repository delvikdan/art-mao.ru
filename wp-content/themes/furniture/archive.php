<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Furniture
 */

get_header();
?>
  

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
          <div class="container pad-top blog-page">
				<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<h2>', '</h2>' );
				?>
              <hr class="bhr">
		<?php if ( have_posts() ) : ?>
          
          <div class="row">

		<?php	while ( have_posts() ) : 
				the_post(); ?>
            
            
            
            
              <div class="col-md-6">
                 <div class="entry-header"> 
                   <div class="thumb" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div> 

                    <div class="entry-meta">
                      <p><?php the_date('F j, Y'); ?></p>
                       <hr>
                    </div><!-- .entry-meta -->
                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                  </div> 
                  
                  <div class="entry-content">
	
	               <?php the_excerpt(); ?>

	              </div><!-- .entry-content -->
             
             
             
              </div>
       
            

            
      
            

      
      
      
      
      

		
      
      
      
      
      
      
      
      
      
      
      
      <?php endwhile; ?>

       </div>
            <?php wp_pagenavi(); ?>
			<?php // the_posts_navigation();  ?>

		<?php else :  ?>

		<?php get_template_part( 'template-parts/content', 'none' );  ?>

		<?php  endif; ?>
          </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
