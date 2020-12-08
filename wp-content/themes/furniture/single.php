<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Furniture
 */

get_header();
?>

	<div id="primary" class="content-area">
	    <div class="se-pre-con"></div>
		<main id="main" class="site-main">
          <div class="container">
            <div class="return-link row">
             <?php if( $return_url = wp_get_referer() ) : ?>
              <a  title="Вернуться назад" href="<?php echo esc_url( $return_url ); ?>"><img src="/wp-content/themes/furniture/img/back.svg" alt=""> <span>Вернуться назад</span></a>
              <?php else : ?>
              <a  title="Перейти в блог" href="/blog/"><img src="/wp-content/themes/furniture/img/back.svg" alt=""> <span>Перейти в блог</span></a>
              <?php endif; ?>
            </div>
            <div class="row">
              <div class="col-md-7">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    // the_post_navigation();


                endwhile; // End of the loop.
                ?>
         
               </div>
         
         
         
         
         
         
        <?php $orig_post = $post;
        global $post;
        $categories = get_the_category($post->ID);
        if ($categories) {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 3, // Number of related posts that will be shown.
        'caller_get_posts'=>1
        );

        $my_query = new wp_query( $args );
        if( $my_query->have_posts() ) {
          
        echo '<div class="col-md-5" id="related_posts">';
          
        while( $my_query->have_posts() ) {
        $my_query->the_post(); ?>

        <div>
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
      
      
        
        
        <?
        }
        echo '</div>';
        }
        }
        $post = $orig_post;
        wp_reset_query(); ?>
         
         
         
         
         
             </div>
          </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
