
<?php
get_header();
?>

	<div id="primary" class="content-area">
	<div class="se-pre-con"></div>
		<main id="main" class="site-main">
        <?php  if ( have_posts() ) : ?>
          <div class="container catalog">
            
           
            <div class="pleasework">

             <?php	while ( have_posts() ) : the_post(); ?>
             
              <div class="catalog-item">
                <div class="cat-left">
                  <div class="catalog-img">
                    <div class="cat-chair-overlay"><span><?php the_title(); ?></span></div>
                      <?php if( get_field('sold_out') ): ?>
                      <div class="sold-out"></div>
                      <?php endif; ?>
                      <?php
                        $rows = get_field('card_foto'); // get all the rows
                        $first_row = $rows[0]; // get the first row
                        $first_row_image = $first_row['fullscreen']; // get the sub field value 
                        $image = wp_get_attachment_image_src( $first_row_image, 'medium_large' );
                      ?>

                      <div class="first-image-holder" style="background-image: url('<?php echo $image[0]; ?>');"> </div>
     
                     
                      <div class="innercar-1">
                       
                          <?php while ( have_rows('card_foto') ) : the_row();   

                              $attachment_id = get_sub_field('fullscreen');
                              $image = wp_get_attachment_image_src( $attachment_id, 'medium_large' );
                           ?>


                          <div class="item" style="background-image: url('<?php echo $image[0]; ?>');">
                              <div class="content-ph">

                              </div>
                          </div>
                          <?php endwhile; ?>  

                      </div>
                    
                    
                  </div>
                </div>     
                <div class="cat-right">
                  <h2><?php the_title(); ?></h2>
                  
                    <?php $excerpt = wp_trim_words( get_field('card_descr' ), $num_words = 25, $more = '...' ); 
                        echo '<p>' . $excerpt .'</p>';
                  ?>
                  
                  <div class="cat-link">
                    <?php if( get_field('card_price') ): ?>
                    <span class="price"><?php the_field('card_price'); ?> <img src="/wp-content/themes/furniture/img/rouble_symbol.svg" alt="Руб."></span>
                    <?php endif; ?>
                    
                    <span class="link-more"><a title="Подробный обзор" href="<?php echo get_permalink(); ?>">Подробный обзор <img src="/wp-content/themes/furniture/img/more_enabled.svg" alt="..."></a></span>
                  </div>
                  <?php if( have_rows('mats') ): $c=0; ?>
                  
                  <h3>Материалы</h3>
                  <div class="cat-materials">
                   
                   <?php while ( have_rows('mats') ) : the_row(); ?>
                      <div>
                        <div class="cat-matimg"><img src="<?php the_sub_field('mats_img'); ?>" alt=""></div><span><?php the_sub_field('mats_name'); ?></span>
                      </div>
                    <?php  endwhile; ?>
                    
                    
                  </div>
                  <?php endif; ?>
                  <?php if( get_field('sold_out') ): ?>
                  <?php else : ?>
                  <div class="catalog-order"><a class="btn-white" href="#order">Заказать</a></div>
                  <?php endif; ?>
                </div>
              </div><!--.catalog-item-->
            <?php endwhile; ?>

            </div>  <!--pleasework-->
           
               
          <div class="scroll-icon"><img src="/wp-content/themes/furniture/img/scroll_icon.png" alt=""></div>
            
          </div> <!-- .container.catalog -->
          

          
          
        <?php  endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->






<?php
get_sidebar();
get_footer();









