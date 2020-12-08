<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Furniture
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="se-pre-con"></div>
<div id="page" class="site">

	<header id="masthead" class="site-header">
      <nav class="site-nav">
        <div class="container">
          <a class="main-logo" rel="home" title="На главную" href="/">
			 <?php if ( is_front_page()  )  : ?>
		  	<img src="/wp-content/themes/furniture/img/logo_gold.svg" alt="Лого">
			<?php else :  ?>
			<img src="/wp-content/themes/furniture/img/logo_white.svg" alt="Лого">
			<?php endif;  ?>
          </a>
          
          <?php if ( is_front_page()  )  : ?>
		  <div class="page-headline"><a title="" href="tel:+74951234567">+ 7 495 123 45 67</a></div>
         
          <?php elseif (is_page())  : ?>
          <div class="page-headline"><?php  the_title(); ?></div>
		  
		  <?php elseif (is_post_type_archive('catalog')) : ?>
		  <div class="page-headline"><?php post_type_archive_title(); ?></div>
		  
		  
		  <?php elseif ( is_home() ) : ?>
		  <div class="page-headline"><?php single_post_title();; ?></div>
		  
		  
          <?php endif;  ?>
		  
		  
          <div class="mobile-overlay"></div>
          <div class="ninja-btn trigger-nav"><span></span></div>
			
          <div class="mobile-menu trigger-victim">

            <ul class="horizontal-nav">
              <li class="mobile-hpl"><a href="/">Главная</a></li>
              <li><a href="/catalog/">Каталог</a></li>
              <li><a href="/masterskaya/">Мастерская</a></li>
              <li><a href="/blog/">Блог</a></li>
              <li><a href="/dostavka/">Доставка</a></li>
              <li><a href="/kontakty/">Контакты</a></li>
            </ul>
            <ul class="header-contacts">
              <li class="header-phone"><a title="" href="tel:<?php the_field('c_2phone', 17); ?>"><?php the_field('c_2phone', 17); ?></a></li>
              <?php  if( have_rows('c_smm', 17) ): ?>
              <li class="mobile-smm">
                <?php while ( have_rows('c_smm', 17) ) : the_row(); ?>
                <a target="_blank" href="<?php the_sub_field('smm_l'); ?>"><img src="<?php the_sub_field('smm_i'); ?>" alt="SMM"></a>
                <?php endwhile; ?>
              </li>
              <?php endif; ?>
              
              <li class="header-callme"><a class="btn-white" href="#callme">Перезвоните мне</a></li>
            </ul>
          </div>

        </div>
        <!-- // .container -->
      </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
