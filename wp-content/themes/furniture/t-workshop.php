<?php
/*
Template Name: Workshop

*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

          <div class="container pad-top workshop-page">
            <div class="row">
              <div class="col-md-12 col-lg-6">
                <h1><?php the_field('w_h') ?></h1>
                <h2><?php the_field('w_d') ?></h2>
                <hr class="bhr">
              </div>
            </div>
           
            <div class="row">
              <div class="col-md-6 ws-text">
                  <?php the_field('w_t') ?>      
              </div>
              
              <div class="col-md-6 ws-photo"><img src="<?php the_field('w_f') ?>" alt="Фото"></div>

            </div>
            <div class="row"><img src="<?php the_field('w_s') ?>" alt="Подпись"></div>
            
            
            <div class="row ws-video">
              <div class="embed-container">
                 <?php the_field('w_v') ?>
              </div>
            </div>
            
          </div>
          

          
          

		</main><!-- #main -->
	</div><!-- #primary -->






<?php
get_sidebar();
get_footer();
