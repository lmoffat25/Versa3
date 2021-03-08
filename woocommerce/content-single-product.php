<?php 
    $args = array();

?>
<?php 

    get_template_part('template-parts/content', 'header');

    $args['row'] = 0;
    get_template_part('template-parts/content', 'text-image', $args); 

    get_template_part('template-parts/content', 'scroll');

    get_template_part('template-parts/content', 'slider');

    get_template_part('template-parts/content', 'custom'); 

    $args['row'] = 1;
    get_template_part('template-parts/content', 'text-image', $args); ?>

    <section class="watch-iframes">
        <h2 class="col-12 txtalign">Votre fitbit en réalité augmentée</h2>
        <iframe class="watch-iframe rose_noir" id="59b1aa14-56d4-422d-ac6e-20dffeb60146" src="https://www.vectary.com/viewer/v1/?model=59b1aa14-56d4-422d-ac6e-20dffeb60146&env=studio3" frameborder="0" width="100%" height="480"></iframe>
        <iframe class="watch-iframe bleu_noir" id="c4f83163-9343-4324-841f-6aae28f5bada" src="https://www.vectary.com/viewer/v1/?model=c4f83163-9343-4324-841f-6aae28f5bada&env=studio3" frameborder="0" width="100%" height="480"></iframe>
        <iframe class="watch-iframe noir_noir" id=“44176ab0-c5cd-44d4-9825-6dfe511be53a” src="https://www.vectary.com/viewer/v1/?model=44176ab0-c5cd-44d4-9825-6dfe511be53a&env=studio3" frameborder="0" width="100%" height="480"></iframe>
        <iframe class="watch-iframe rose_or" id="26d4a433-bf2a-4c06-ad68-a0c2c79eab37" src="https://www.vectary.com/viewer/v1/?model=26d4a433-bf2a-4c06-ad68-a0c2c79eab37&env=studio3" frameborder="0" width="100%" height="480"></iframe>
        <iframe class="watch-iframe noir_or" id="238968b9-b000-4640-8c3a-1d38b2185793" src="https://www.vectary.com/viewer/v1/?model=238968b9-b000-4640-8c3a-1d38b2185793&env=studio3" frameborder="0" width="100%" height="480"></iframe>
        <iframe class="watch-iframe bleu_or" id="b9aad0fe-7d58-44ac-bbe6-4e767b9e8480" src="https://www.vectary.com/viewer/v1/?model=b9aad0fe-7d58-44ac-bbe6-4e767b9e8480&env=studio3" frameborder="0" width="100%" height="480"></iframe>
    </section>    

<?php
    $args['tax'] = 'produit';
    get_template_part('template-parts/content', 'functionalities-cards', $args);
    
    get_template_part('template-parts/content', 'functionalities-menu',); 
    
    get_template_part('template-parts/content', 'app',); ?>
    

<div class="summary entry-summary" style="display : none;">
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