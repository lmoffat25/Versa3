<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fitbit
 */

get_header();

$error_title = get_field('404_title', 'options');
$error_content = get_field('404_paragraph', 'options');
$error_image = get_field('404_image', 'options')['url'];


?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found col-lg-10 col-12 centerHz">
			<header class="page-header">
				<h1 class="page-title"><?php echo $error_title; ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php echo $error_content; ?></p>

					<?php
					get_search_form();
					?>
			</div><!-- .page-content -->

			<img class="error-404__img" src="<?php echo $error_image ?>" alt="">
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
