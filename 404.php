<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elseven
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found wrapper">
            <span>404</span>
            <h2 class="page-title">Страница не найдена</h2>

			<div class="page-content">
				<p>Запрашиваемая вами страница не найдена. Возможно, вы неправильно ввели адрес или такая страница отсутствует. </p>
                <a href="<?php echo home_url('/'); ?>" class="btn">На главную</a>
                <a href="#" class="empty-btn" onclick='history.back()'>Вернуться назад</a>


			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
