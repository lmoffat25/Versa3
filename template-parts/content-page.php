<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-12 col-lg-10 col-xl-8 centerHz">
        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header><!-- .entry-header -->

        <div class="row">
            <div class="col-6">
                <div>
                    <h3>Défi du jour</h3>
                    <?php the_field('defi_account_desc'); ?>
                    <img src="<?php echo get_field('defi_account_img')['sizes']['medium']; ?>" alt="">
                </div>
                <div>
                    <h3>Mon dernier entraînement</h3>
                    <?php if (have_rows('last_training_account')) :
                    while (have_rows('last_training_account')) : the_row(); ?>
                    <div class="row">
                        <span class="col-9"><?php the_field('last_training_account_sport') ?> / <?php the_field('last_training_account_time'); ?></span>
                        <?php if (get_field('last_training_account_sport') == 'Jogging') : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icone-jogging.png" alt="" class="col-3">
                        <?php endif; ?>
                    </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>

            <div class="col-6">
                <h3>Mes statistiques</h3>
                <p>Résultats du <?php the_field('stats_date'); ?></p>
                <?php if (have_rows('stats_results')) :
                while (have_rows('stats_results')) : the_row(); ?>
                <div>
                    <p><?php the_sub_field('name'); ?></p>
                    <div class="row">
                        <img src="<?php echo get_sub_field('icon')['sizes']['medium']; ?>" alt="" class="col-3">
                        <p><?php the_sub_field('result'); ?></p>
                    </div>
                </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>

<!--        --><?php //fitbit_post_thumbnail(); ?>
<!---->
<!--        <div class="entry-content">-->
<!--            --><?php
//            the_content();
//
//            wp_link_pages(
//                array(
//                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitbit' ),
//                    'after'  => '</div>',
//                )
//            );
//            ?>
<!--        </div> .entry-content -->
<!---->
<!--        --><?php //if ( get_edit_post_link() ) : ?>
<!--            <footer class="entry-footer">-->
<!--                --><?php
//                edit_post_link(
//                    sprintf(
//                        wp_kses(
//                        /* translators: %s: Name of current post. Only visible to screen readers */
//                            __( 'Edit <span class="screen-reader-text">%s</span>', 'fitbit' ),
//                            array(
//                                'span' => array(
//                                    'class' => array(),
//                                ),
//                            )
//                        ),
//                        wp_kses_post( get_the_title() )
//                    ),
//                    '<span class="edit-link">',
//                    '</span>'
//                );
//                ?>
<!--            </footer> .entry-footer -->
<!--        --><?php //endif; ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
