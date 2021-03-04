<?php
   $args = array(  
        'post_type' => 'card',
        'post_status' => 'publish',
        'posts_per_page' => 3, 
    );

    $cards = new WP_Query( $args ); 
?>

<section class="reinssurance col-12 col-lg-10 col-xl-9 centerHz">
        <?php while( $cards->have_posts() ) : $cards->the_post(); ?>
            <div class="reinssurance__card">
                <div class="reinssurance__content">
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_content(); ?></p>
                    <?php if( have_rows('buttons') ):
                            while ( have_rows('buttons') ) : the_row();
                                $sub_value = get_sub_field('card_button');
                                if ( $sub_value ) :   ?>
                                    <div class="reinssurance__buttons">
                                        <a class="button -secondary"><?php echo get_sub_field( 'card_button-label' ) ?></a>
                                    </div>
                            <?php endif;
                            endwhile;
                        endif; ?>
                </div>
                <?php echo the_post_thumbnail(); ?>
            </div>
        <?php endwhile; ?>
    </section>

    <?php wp_reset_postdata();