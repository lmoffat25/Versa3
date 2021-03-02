<?php
	$site_description = get_bloginfo( 'description', 'display' );

    get_header();
    // booh

    get_template_part( 'template-parts/content', 'header' );

    get_template_part( 'template-parts/content', 'text-image' );

    get_template_part( 'template-parts/content', 'reinssurance' );

    get_template_part( 'template-parts/content', 'functionalities-cards' );

    get_template_part('template-parts/options-newsletter');

    get_footer();
