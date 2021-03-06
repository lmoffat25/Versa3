<?php
echo $funcs['tax'];
    $args = array(  
        'post_type' => 'functionalities',
        'post_status' => 'publish',
         'tax_query' => array(
            array(
                'taxonomy' => 'display_page',
                'terms' => $funcs['tax']
            )
        ),
    );
    echo '<pre>';
    print_r($args['tax_query'][0]['terms']);
    echo '</pre>';
    $section_title = get_field( "functionalities_title" );
    $get_card_title = get_field( "functionality_show_title" );
?>
<!-- Fonctionnalités -->

<section class="fonctionnalites col-12 col-lg-10 col-xl-9">
<?php if($section_title != null) : ?>
    <h2><?php echo $section_title; ?></h2>
<?php endif; ?>
    <div class="fonctionnalites__container centerHz">
    <?php 
        $funcs = new WP_Query( $args ); 
        while ( $funcs->have_posts() ) : $funcs->the_post(); 
            $tags = get_the_terms( get_the_id(), "functionalities_type" );
            $is_card = $tags[0]->slug;
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
