<?php
$args = array(
    'post_type' => 'conseils',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'order' => 'ASC',
);

$my_query = new WP_Query( $args );
?>

    <section class="conseils-section">
        <h3>Conseils d'utilisation</h3>
            <?php if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="dropdownCustom conseils-section__content">
                        <div class="dropdownCustom__title">
                            <h4><?php the_title(); ?></h4><i class="dropdownCustom__chevron fa fa-chevron-down"></i>
                        </div>
                        <div class="dropdownCustom__content">
                            <div><?php the_content(); ?></div>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
    </section>

<?php wp_reset_postdata();
