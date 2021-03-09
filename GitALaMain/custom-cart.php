<?php
/* Template Name: Panier */

wp_head();
get_header();
?>
    <main class="cart-page">
        <div class="col-12 col-lg-10 col-xl-9 centerHz">

            <?php get_template_part( 'woocommerce/cart/cart' ); ?>
        </div>
    </main>


<?php
get_footer();
?>