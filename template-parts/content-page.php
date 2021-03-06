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
    <div class="account col-12 col-lg-10 col-xl-8 centerHz">
        <header class="entry-header">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        </header><!-- .entry-header -->

        <div class="row">
            <div class="col-12 col-md-3">
                <div class="account__defi">
                    <div class="account__defi-content">
                        <h3>Défi du jour</h3>
                        <p><?php the_field('defi_account_desc'); ?></p>
<!--                        <p>Défi réalisé ?</p>-->
                    </div>
                    <img src="<?php echo get_field('defi_account_img')['sizes']['large']; ?>" alt="">
                </div>
                <div class="account__training">
                    <h3>Mon dernier entraînement</h3>
                    <?php if (have_rows('last_training_account')) :
                        while (have_rows('last_training_account')) : the_row(); ?>
                            <div class="row">
                                <span class="col-10"><?php the_field('last_training_account_sport') ?> / <?php the_field('last_training_account_time'); ?></span>
                                <?php if (get_field('last_training_account_sport') == 'Jogging') : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icone-jogging.png" alt="">
                                <?php endif; ?>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>

            <div class="offset-1 col-12 col-md-8 account__stats">
                <h3>Mes statistiques</h3>
                <p>Résultats du <span class="account__stats-date"><?php the_field('stats_date'); ?></span></p>
                <?php if (have_rows('stats_results')) : ?>
                    <div class="row">
                        <?php while (have_rows('stats_results')) : the_row(); ?>
                            <div class="col-6 account__stats-item">
                                <p class="name"><?php the_sub_field('name'); ?></p>
                                <div class="row">
                                    <img src="<?php echo get_sub_field('icon')['sizes']['medium']; ?>" alt=""">
                                    <p class="col-10"><?php the_sub_field('result'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
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
