<?php
    $arguments = array(  
        'post_type' => 'functionalities',
        'post_status' => 'publish',
         'tax_query' => array(
            array(
                'taxonomy' => 'display_page',
                'field' => 'slug',
                'terms' => $args['tax'],
            )
        ),
    );
    $section_title = get_field( "functionalities_title" );
?>
<!-- Fonctionnalités -->

<section class="fonctionnalites col-12 col-lg-10">
<?php if($section_title != null) : ?>
    <h2><?php echo $section_title; ?></h2>
<?php endif; ?>
    <div class="fonctionnalites__container centerHz">
    <?php 
        $args = new WP_Query( $arguments ); 
        while ( $args->have_posts() ) : $args->the_post(); 
            $tags = get_the_terms( get_the_id(), "functionalities_type" );
            $is_card = $tags[0]->slug;
            $get_card_title = get_field( "functionnality_show_title" );
            if ( $is_card == 'carte' ) : 
            ?>
                <div class="fonctionnalites__image col-6 col-md-3">
                    <?php echo the_post_thumbnail(); 
                        if ( $get_card_title ) : ?>
                            <h3><?php echo get_the_title(); ?></h3>
                        <?php endif; ?>
                    <p><?php echo get_the_content(); ?></p>
                </div>
    <?php   endif;
        endwhile; ?>
    </div>
</section>
<!-- Fonctionnalités -->

<?php wp_reset_postdata();
