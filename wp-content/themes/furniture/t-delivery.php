<?php
/*
Template Name: Delivery

*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

          <div class="container pad-top delivery-page">

            <div class="row condi">
              <div class="col-md-8">
                <h1><?php the_field('d_h'); ?></h1>
                <p><?php the_field('d_d'); ?></p>
              </div>
              
            </div>
            
            <div class="row shipping">
              
              <div class="col-md-6"> 
                 <?php the_field('d_1t'); ?>
              </div>
              <?php if( get_field('d_1i') ): ?>
              <div class="col-md-6 ship-img"><img src="<?php the_field('d_1i'); ?>" alt=""></div>
              <?php endif; ?>
            </div>
            <div class="row shipping">
              <div class="col-md-6">
                <?php the_field('d_2t'); ?>
              </div>
              <?php if( get_field('d_2i') ): ?>
              <div class="col-md-6 ship-img"><img src="<?php the_field('d_2i'); ?>" alt=""></div>
              <?php endif; ?>
            </div>
            
            <div class="row star">
              <div class="col-md-4"><p><?php the_field('d_sf'); ?></p></div>
            </div>
            
            
            
            
          </div>
          

          
          

		</main><!-- #main -->
	</div><!-- #primary -->






<?php
get_sidebar();
get_footer();
