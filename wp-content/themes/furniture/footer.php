<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Furniture
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
        <div class="container">
          <?php  if( have_rows('c_smm', 17) ): ?>
          <div class="sm-link">
            <?php while ( have_rows('c_smm', 17) ) : the_row(); ?>
              <a target="_blank" href="<?php the_sub_field('smm_l'); ?>"><img src="<?php the_sub_field('smm_i'); ?>" alt="SMM"></a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <div class="row">
            <div class="box-1"><img src="/wp-content/themes/furniture/img/logo_white_footer.svg" alt=""></div>
            <div class="box-2">
              <ul class="footer-nav">
                <li><a href="/">Главная</a></li>
                <li><a href="/catalog/">Каталог</a></li>
                <li><a href="/masterskaya/">Мастерская</a></li>
                <li><a href="/blog/">Блог</a></li>
                <li><a href="/dostavka/">Доставка</a></li>
                <li><a href="/kontakty/">Контакты</a></li>
              </ul>
            </div>
            <div class="box-3">
              <p><a target="_blank" href="/policy/">Политика конфиденциальности</a></p>
              <p>© <?php echo currentYear(); ?>, <?php $blog_title = get_bloginfo(); echo $blog_title; ?></p>
            </div>
            <div class="box-4 footer-callme"><a class="btn-white" href="#callme">Перезвоните мне</a></div>
            <div class="box-5">
              <p><?php the_field('с_adr', 17); ?></p>
              <p><?php the_field('c_2phone', 17); ?><br>
              <a href="mailto:<?php the_field('c_2email', 17); ?>"><?php the_field('c_2email', 17); ?></a></p>
            </div>
          </div>
        </div>
		
		<!-- Modal HTML embedded directly into document -->
		<div id="callme" class="modal callme-modal">
          <div class="callme-title"><h2>Оставьте заявку, и наш менеджер свяжется с вами в течение 5 минут!</h2></div>
		   <div class="callme-form">
		   <?php echo do_shortcode('[contact-form-7 id="10" title="Обратный звонок"]'); ?>
		   </div>
		</div>
		

		
		
		
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

<?php if ( is_front_page()  )  : ?>


<script>
  
   $(document).ready(function(){
    $('.materials-carousel').owlCarousel({
      navContainer: '#customNav',
      dots: false,
      nav:true,
      loop:true, 
      center: true,
      navText: [" "," "],
      responsive:{
          0:{
              items:1
          },
          768:{
              items:3
          },
          992:{
              items:5
          }
      }
  });


  });

  var $owl = $('.materials-carousel');

  $owl.children().each( function( index ) {
    $(this).attr( 'data-position', index ); 
  });	

  $(document).on('click', '.materials-carousel .owl-item>div', function() {
    $owl.trigger('to.owl.carousel', $(this).data( 'position' ) );
  });



  $(document).ready(function(){
    $('.chairs-slider').owlCarousel({
      navContainer: '#chairs-nav',
	  touchDrag: true,
      dots: false,
      nav:true,
      loop:true, 
      items:4,
      navText: [" "," "],
      responsive:{


        
        0:{
          items:1
        },
        
        768:{
          items:2
        },
  
        
        992:{
              items:3
          },
        
        1501:{
              items:4
          }    
        
        
      }
  });
  });


  $(document).ready(function(){
    $('.partners-slider').owlCarousel({
      navContainer: '#partners-nav',
      dots: false,
      nav:false,
      loop:true, 
      navText: [" "," "],
      responsive:{
          0:{
            items:1,
            dots: true
          },
          768:{
            items:2
          },
          992:{
              items:4
          }
      }
  });
  });

  
</script>

<?php endif;  ?>





<?php $post_type = get_post_type( $post_id ) ?> 
<?php if (($post_type == 'catalog') ): ?>


  <div id="order" class="modal callme-modal">
    <div class="callme-title"><h2>Оставьте нам свои контакты, а остальное мы сделаем сами</h2></div>
     <div class="callme-form">
     <?php echo do_shortcode('[contact-form-7 id="20" title="Остались вопросы?"]'); ?>
     </div>
  </div>



<script>
  
$(document).ready(function(){
var myCarousel= $('.pleasework');
myCarousel.slick({
  vertical: true,
  verticalSwiping: true,
  arrows : false,
  focusOnSelect: true,
  centerMode: true,
  dots: false,
  infinite: true,
  speed: 100,
  draggable: false,
  adaptiveHeight: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    
    
       {
      breakpoint: 992,
         //settings: "unslick"
      settings: {
        vertical: false,
        verticalSwiping: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        centerMode: false,
        draggable: true,
        arrows : true,
        dots: true
      }
    },
           {
      breakpoint: 550,
         //settings: "unslick"
      settings: {
        vertical: false,
        verticalSwiping: false,
        draggable: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        centerMode: false
      }
    }
  ]
});
  
  
$(window).on('resize orientationchange', function() {
  $('.pleasework').slick('resize');
});
  
  

  
    myCarousel.mousewheel(function(e) {
    e.preventDefault();

    if (e.deltaY < 0) {
      $(this).slick('slickNext');
    }
    else {
      $(this).slick('slickPrev');
    }
  });
  

$('*[class^="innercar"]').slick({
    draggable: false,
  swipeToSlide: false,
  swipe: false,
   focusOnSelect: false,
  dots: false,
    slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         draggable: false
      } 
    },
    
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
         draggable: false
      } 
    } 
  ]
 
  });

  
});
  

</script>


<?php endif;  ?>

<?php if ( is_single()  )  : ?>

<script>
  $('#related_posts').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true
  });
</script>

<?php endif;  ?>



</body>
</html>
