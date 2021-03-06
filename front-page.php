<?php
	$site_description = get_bloginfo( 'description', 'display' );
    $args = array();

    get_header();

    get_template_part( 'template-parts/content', 'header' );

    $args['row'] = 0;
    get_template_part( 'template-parts/content', 'text-image', $args );

    get_template_part( 'template-parts/content', 'reinssurance' );

    $args['tax'] = 'accueil';
    get_template_part( 'template-parts/content', 'functionalities-cards', $args );

    get_template_part('template-parts/options-newsletter');

    get_footer();
