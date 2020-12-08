<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	
	
	    <style>
        html, body, #product {
            height: 100%;
            margin: 0;
        }
          
        p, .content-ph, span  {
            display: inline-block;
            vertical-align: middle;
        }

        .content-ph {
            height: 100%;
        }


    </style>
	
</head>
  
  
  
  <body>

	<div class="se-pre-con"></div>


<?php
		while ( have_posts() ) :
			the_post(); ?>


  <a class="close-card" title="Вернуться назад" href="/catalog/"><img src="/wp-content/themes/furniture/img/close_window_icon.svg" alt=""></a>
  <div class="close-card-txt">
    <?php if( $return_url = wp_get_referer() ) : ?>
    <a  title="Вернуться назад" href="<?php echo esc_url( $return_url ); ?>"><img src="/wp-content/themes/furniture/img/back.svg" alt=""> <span>Вернуться назад</span></a>
     <?php else : ?>
    <a title="Перейти в каталог" href="/catalog/"><img src="/wp-content/themes/furniture/img/back.svg" alt=""> <span>Перейти в каталог</span></a>
    <?php endif; ?>
   <p class="opener"><img src="/wp-content/themes/furniture/img/back.svg" alt=""> <span>Закрыть</span></p>
  </div>
 
  <div id="product" class="vertical-carousel">

    <div class="product-info">
      <div class="opener">
        
      </div>
      
      <div class="product-info-inner">
        <h1><?php the_title(); ?></h1>
        
          <?php if( get_field('card_price') ): ?>
        <span class="price"><?php the_field('card_price'); ?> <img src="/wp-content/themes/furniture/img/rouble_symbol.svg" alt="Руб."></span>
          <?php endif; ?>
           
            <?php the_field('card_descr'); ?>
           
           <hr/>
           
           
          <?php if( have_rows('mats') ): ?>
           <h2>Материалы</h2>
     
           
           <div class="cat-materials">
              <?php while ( have_rows('mats') ) : the_row();  ?>
              <div>
                <div class="cat-matimg"><img src="<?php the_sub_field('mats_img'); ?>" alt=""></div><span><?php the_sub_field('mats_name'); ?></span>
              </div>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>

           
           <?php if( get_field('dimensions') ): ?>
            <h2>Размеры</h2>
            <div class="dimensions"><?php the_field('dimensions'); ?></div>
          
            <?php endif; ?>
            <?php if( get_field('sold_out') ): ?>
            <?php else: ?>
             <div class="catalog-order"><a class="btn-white" href="#order" tabindex="0">Заказать</a></div>
             <?php endif; ?>
      </div><!--.product-info-inner-->
      

      
      
      
      
      
      
      
      
    </div>    
          
    <div class="other-cards">
    <?php
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5,'post_type' => 'catalog', 'post__not_in' => array($post->ID) ) );
    if( $related ) foreach( $related as $post ) {
    setup_postdata($post); ?>

        <div>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </div>

    <?php }
    wp_reset_postdata(); ?>

    </div>
    
    
	
	
    <div class="vertical-carousel-box swiper-container">
     <?php if( have_rows('card_foto') ):  ?>
    <div class="swiper-wrapper">
         
         <?php $i = 0; while ( have_rows('card_foto') ) : the_row();   
      
            $attachment_id = get_sub_field('fullscreen');
            $image = wp_get_attachment_image_src( $attachment_id, 'full' );
         ?>
         
         
        <div class="swiper-slide item active-card" style="background-image: url('<?php echo $image[0]; ?>');">
            <div class="content-ph">
              	
            </div>
        </div>
         
         
          <?php 
      $i++;
      endwhile; ?>  
        
    </div>
	 
    <?php if ($i++ >= 2) : ?>

	<div class="swiper-pagination"></div>

    <?php endif; ?>

     <?php endif; ?>
    </div>
	
	
	
	
	
</div>
  
	    <?php endwhile;	?> 




<?php wp_footer(); ?>
  
   <div id="order" class="modal callme-modal">
    <div class="callme-title"><h2>Оставьте нам свои контакты, а остальное мы сделаем сами</h2></div>
     <div class="callme-form">
     <?php echo do_shortcode('[contact-form-7 id="20" title="Остались вопросы?"]'); ?>
     </div>
  </div>
 
<script src="/wp-content/themes/furniture/js/swiper.min.js"></script>


  <script>
    
    $('.other-cards').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
	  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
      },
	  {
	  breakpoint: 991,
	   settings: {
        slidesToShow: 2,
		slidesToScroll: 2
      }
    }]
    });
    
   
    
  $(document).ready(function () {

    function slideInfo() {
      var $dots = $('.opener');

      $dots.click(function () {
        $('.product-info').toggleClass("opened"),
        $('.other-cards').toggleClass("opened"),
        $('.close-card-txt').toggleClass("opened"),
        $('.swiper-pagination').toggleClass("opened"),
        $('.close-card').toggleClass("opened");
      });
    }
    slideInfo()

  }); //end ready
    
    


  $(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
      direction: 'vertical',
      loop: false,
	  a11y: false,
	  mousewheel: true,
	  pagination: {
      el: '.swiper-pagination',
	   clickable: true,
		}
    })
  });


    
  </script>





</body>
</html>

