<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Furniture
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
          <div class="container pad-top">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Ошибка 404. Страница не найдена!', 'furniture' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Эта страница не существует или была перемещена. Пожалуйста, используйте меню для перехода на страницы сайта.', 'furniture' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
