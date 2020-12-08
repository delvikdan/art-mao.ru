<?php
/*
Template Name: Contacts

*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
          <div class="front-form">
          <div class="container pad-top contacts-page">

            <div class="row">
             
              <div class="col-md-7">
                <h1><?php the_field('c_h'); ?></h1>

                 <?php the_field('c_1t'); ?>
                <hr>
                
                <ul>
                  <li><a title="" href="tel:<?php the_field('c_1phone'); ?>"><?php the_field('c_1phone'); ?></a></li>
                  <li><a href="mailto:<?php the_field('c_1email'); ?>"><?php the_field('c_1email'); ?></a></li>
                </ul>
                <div class="contacts-callme"><a class="btn-white" href="#callme">Перезвоните мне</a></div>
                
                
                
                  <?php the_field('c_2t'); ?>
                 <hr>
                 
                 <div class="adress">
                  <p><?php the_field('с_adr'); ?></p>
                   <span><a title="Перейти на карту" target="_blank" href="<?php the_field('c_ml'); ?>">На карте</a></span> <span><?php the_field('c_wt'); ?></span>
                 </div>

                  <ul>
                    <li><a title="" href="tel:<?php the_field('c_2phone'); ?>"><?php the_field('c_2phone'); ?></a></li>
                    <li><a href="mailto:<?php the_field('c_2email'); ?>"><?php the_field('c_2email'); ?></a></li>
                  </ul>
                 
                <?php  if ( have_rows('c_smm') ): ?>
                 
                <div class="contacts-smm">
                   <?php while ( have_rows('c_smm') ) : the_row(); ?>
                     <a target="_blank" href="<?php the_sub_field('smm_l'); ?>"><img src="<?php the_sub_field('smm_i'); ?>" alt="SMM"></a>
                   <?php endwhile; ?>
                </div>
                 <?php endif; ?>
              </div>
            
            
            </div>
            
            
            
            
          </div>
          </div>
          
          
          
           <div class="questions">
             <div class="container">
               <h2>Остались вопросы?</h2>
               <h4>мы ответим на них в течение 5 минут</h4>
               <div class="questions-form">
                 <?php echo do_shortcode('[contact-form-7 id="20" title="Остались вопросы?"]'); ?>
               </div>
             </div>
            </div><!-- .questions -->
          
          

		</main><!-- #main -->
	</div><!-- #primary -->






<?php
get_sidebar();
get_footer();
