<?php
/* Template Name: Panier */

wp_head();
get_header();
?>
    <main class="cart-page">

        <h2 class="cart-page__title"><?php echo get_the_title() ?></h2>

        <?php get_template_part( 'woocommerce/cart/cart' ); ?>

    </main>


<?php
wp_footer()
?>