<?php 
    $args = array();

?>
<?php 

    get_template_part('template-parts/content', 'header');

    $args['row'] = 0;
    get_template_part('template-parts/content', 'text-image', $args); 

    get_template_part('template-parts/content', 'slider');

    get_template_part('template-parts/content', 'scroll'); 

    get_template_part('template-parts/content', 'custom'); 

    $args['row'] = 1;
    get_template_part('template-parts/content', 'text-image', $args);

    $args['tax'] = 'produit';
    get_template_part('template-parts/content', 'functionalities-cards', $args);
    
    get_template_part('template-parts/content', 'functionalities-menu',); 
    
    get_template_part('template-parts/content', 'app',); ?>
    

<div class="summary entry-summary">
    <?php
    /**
     * Hook: woocommerce_single_product_summary.
     *
     * @hooked woocommerce_template_single_title - 5
     * @hooked woocommerce_template_single_rating - 10
     * @hooked woocommerce_template_single_price - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * @hooked woocommerce_template_single_add_to_cart - 30
     * @hooked woocommerce_template_single_meta - 40
     * @hooked woocommerce_template_single_sharing - 50
     * @hooked WC_Structured_Data::generate_product_data() - 60
     */
    do_action( 'woocommerce_single_product_summary' );
    ?>
</div>