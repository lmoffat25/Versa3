<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitbit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fitbit' ); ?></a>

	<header id="masthead" class="header">
	
	<nav class="mainNav nav -close admin-header">
            <div class="mainNav__container col-md-10 centerHz">
                <a href="<?php bloginfo('url'); ?>" class="mainNav__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/fitbit-logo.png" alt="Image"></a>
                <?php
                    if ( has_nav_menu( 'main-menu' ) ) :
                    wp_nav_menu ( array (
                    'theme_location' => 'main-menu' ,
                    'menu_class' => 'mainNav__list col-s-8', // classe CSS pour customiser mon menu
                    ) );
                endif;
                ?>
            </div>
        </nav>
	</header><!-- #masthead -->
