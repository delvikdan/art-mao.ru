<?php
/*
Template Name: Home Page

*/

get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="workshop">
				<div class="container">
				  <div class="worshop-title">
					<h1><?php the_field('1_h1'); ?></h1>
					<p><?php the_field('1_h2'); ?></p>
					<a title="<?php the_field('1_btn'); ?>" href="<?php the_field('1_btn_link'); ?>" class="btn-white"><?php the_field('1_btn'); ?></a>
				  </div>

				</div>
			</div>

			<div class="tradition">
				<div class="container">
				  <div class="row equal">
                    <div class="tradition-logo col-md-6 col-md-push-6">
                      <img src="<?php the_field('2_logo'); ?>" alt="Лого">
                    </div>
                    <div class="tradition-text col-md-6 col-md-pull-6">		
                      <h2><?php the_field('2_h1'); ?></h2>
                      <p><?php the_field('2_txt'); ?></p>
                      <a title="<?php the_field('2_btn'); ?>" class="btn-gold" href="<?php the_field('2_btn_link'); ?>"><?php the_field('2_btn'); ?></a>
                    </div>

				  </div>
				</div>
			</div>
			
			<div class="materials">
				<div class="container">
					<div class="materails-box">
						<h2><?php the_field('3_h1'); ?></h2>
						<p><?php the_field('3_head'); ?></p>
						<div class="materials-slider">

							<div class="materials-carousel owl-carousel">
                                <?php while ( have_rows('3_mats') ) : the_row();  ?>
                                 
								<div class="material-item">
								  <?php if( get_sub_field('mats_i') ): ?>
									<img src="<?php the_sub_field('mats_i'); ?>" alt="<?php the_sub_field('mats_n'); ?>" />
									<?php else : ?>
									<img src="/wp-content/themes/furniture/img/ph.jpg" alt="<?php the_sub_field('mats_n'); ?>" />
								  <?php endif; ?>
									<div class="material-caption">
										<h3><?php the_sub_field('mats_n'); ?></h3>
										<p><?php the_sub_field('mats_d'); ?></p>
									</div>	
								</div>
								<?php endwhile; ?>

							</div>

						</div>
						 <div id="customNav" class="owl-nav"></div>
					</div>
				</div>
			</div>

    
    
			<div class="chairs">

			  <div class="chairs-slider owl-carousel">

			 <?php $hd= get_field('goods'); $loop = new WP_Query( array( 'post_type' => 'catalog', 'posts_per_page' => $hd ) ); ?>
			  
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <?php if( get_field('ifmp') ): ?>
                <?php
                  $rows = get_field('card_foto'); // get all the rows
                  $first_row = $rows[0]; // get the first row
                  $first_row_image = $first_row['fullscreen']; // get the sub field value 
                  $image = wp_get_attachment_image_src( $first_row_image, 'full' );
                ?>
			  
				<div class="chairs-item" style="background-image: url('<?php echo $image[0]; ?>');">
        
        
				  <div class="chair-overlay"></div>
				  <?php if( get_field('sold_out') ): ?>
				  <div class="sold-out"></div>
				  <?php endif; ?>
				  <div class="chairs-caption">
				  
				  
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('main_page_sum'); ?></p>
				  </div>
				  <div class="chairs-link">
				    <?php if( get_field('card_price') ): ?>
					<span class="price"><?php the_field('card_price'); ?> <img src="/wp-content/themes/furniture/img/rouble_symbol.svg" alt="Руб."></span>
				    <?php endif; ?>
					<span class="link-more"><a title="Подробный обзор" href="<?php echo get_permalink(); ?>">Подробный обзор <img src="/wp-content/themes/furniture/img/more_enabled.svg" alt="..."></a></span>
				  </div>
				</div><!-- .chairs-item -->
				  <?php endif; ?>
				<?php endwhile; wp_reset_postdata(); ?>
				
				
				
<!--
				<div class="chairs-item" style="background-image: url('/wp-content/themes/furniture/img/product-02.jpg');">
				  <div class="chair-overlay"></div>
				  <div class="chairs-caption">
					<h2>Аристократ I</h2>
					<p>Аристократ — это кресло для людей с утонченным вкусом и изысканными манерами</p>
				  </div>
				  <div class="chairs-link">
					<span class="price">375 000 <img src="/wp-content/themes/furniture/img/rouble_symbol.svg" alt="Руб."></span>
					<span class="link-more"><a href="#!">Подробный обзор <img src="/wp-content/themes/furniture/img/more_enabled.svg" alt="..."></a></span>
				  </div>
				</div>
-->
				

			  </div><!-- .chairs-slider -->
			  <div id="chairs-nav"></div>
			</div><!-- .chairs -->
			
			
			<div class="utp">
			  <div class="container">
				<h2><?php the_field('pr_h'); ?></h2>
				<p><?php the_field('pr_d'); ?></p>
				<div class="row">

                  <?php while ( have_rows('pr_add') ) : the_row();  ?>
				  <div class="col-md-4 utp-item">
					<div class="utp-icon">
					  <img src="<?php the_sub_field('pr_img'); ?>" alt="icon">
					</div>
					<div class="utp-caption">
					  <h3><?php the_sub_field('pr_h2'); ?></h3>
					  <p><?php the_sub_field('pr_text'); ?></p>
					</div>
				  </div><!-- .utp-item -->
                  <?php endwhile; ?>
                  
				</div><!-- .row -->
			  </div><!-- .container -->
			</div><!-- .utp -->

			<div class="front-blog">
			  <div class="container">
				<div class="row">
				  <div class="col-lg-7 col-md-6 front-blog-sum">
					<h2><?php the_field('bl_h'); ?></h2>
					<p><?php the_field('bl_t'); ?></p>
				  </div>
				  <div id="related_posts" class="col-lg-5 col-md-6">
				  
				  

                    <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  
		              
                      <div>
                        <div class="entry-header">

                          <div class="thumb" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');"></div>

                          <div class="entry-meta">
                            <p>
                              <?php the_date('F j, Y'); ?>
                            </p>
                            <hr>
                          </div>
                          <!-- .entry-meta -->
                          <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        </div>

                        <div class="entry-content">

                          <?php the_excerpt(); ?>

                        </div>
                        <!-- .entry-content -->
                      </div>
				  
                        

					<?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>	
					
				  </div>
				  
				  <div class="front-blog-rm col-md-12"><a href="<?php the_field('bl_btn_link'); ?>" class="btn-gold"><?php the_field('bl_btn'); ?></a></div>
				  
				</div>
			  </div>
			</div><!-- .front-blog -->

            <div class="partners">
              <div class="container">
                <h2><?php the_field('part_h'); ?></h2>
                <p><?php the_field('part_d'); ?></p>
                
                <?php if( have_rows('part_add') ): ?>
                 
                
                <div class="partners-slider owl-carousel">
                  <?php while ( have_rows('part_add') ) : the_row();  ?>
                  <div class="parners-logo"><img src="<?php the_sub_field('part_logo'); ?>" alt="лого"></div>
                  <?php endwhile;  ?>
                </div>
              </div>
              <div id="partners-nav"></div>
              
              <?php endif; ?>
            </div><!-- .partners -->


            <div class="questions front-form">
             <div class="container">
               <h2>Остались вопросы?</h2>
               <h4>мы ответим на них в течение 5 минут</h4>
               <div class="questions-form">
                 <?php echo do_shortcode('[contact-form-7 id="20" title="Остались вопросы?"]'); ?>
               </div>
             </div>
            </div><!-- .questions -->










		<?php
// 		while ( have_posts() ) :
//			the_post();
//
//			get_template_part( 'template-parts/content', 'page' );
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;
//
//		endwhile; // End of the loop. 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->












<?php
get_sidebar();
get_footer();
