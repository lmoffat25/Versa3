<?php 
    $prefix                = get_field("prefix-img");
    /** @link https://developer.wordpress.org/reference/functions/wp_get_upload_dir/ */
    $upload_dir            = wp_get_upload_dir()["baseurl"] . "/" . $prefix . "-"  ;
    /** @link https://developer.wordpress.org/reference/functions/get_the_id/  */
    $idProduct             = get_the_ID();
    /** @link https://woocommerce.github.io/code-reference/namespaces/default.html#function_wc_get_product */
    $product               = wc_get_product($idProduct);
    $price                 = $product->price;
    $attributes            = $product->attributes;
    $default_attributes    = $product->default_attributes;
    $attribute_strap_color = "couleur-du-bracelet";
    $attribute_dial_color  = "couleur-du-cadran";
    $attribute_dial_size   = "taille-du-cadran";
    $dial_sizes            = $attributes[$attribute_dial_size]["options"];
    $strap_colors          = $attributes[$attribute_strap_color]["options"];
    $dial_colors           = $attributes[$attribute_dial_color]["options"];
    $funcs = array();

?>
<?php get_template_part('template-parts/content', 'header'); ?>

<?php get_template_part('template-parts/content', 'text-image'); ?>

<?php get_template_part('template-parts/content', 'scroll'); ?>

<section class="customisation">
        <form class="bg-triangle">
        <div class="col-12 col-md-6 col-md-push-3">
            <div class="watch">
                <?php if ($default_attributes[$attribute_dial_color]) : ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-<?php echo $default_attributes[$attribute_dial_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-noir.png" alt="">
                <?php endif; ?>
                <?php if ($default_attributes[$attribute_strap_color]) : ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-<?php echo $default_attributes[$attribute_strap_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-orange.png" alt="">
                <?php endif; ?>
            </div>
        </div>

            <ul id="watch-size" class="c-colorDots customisation__details customisation__size">
                <?php foreach($dial_sizes as $dial_size) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_size] == $dial_size) ? "-active" : "";
                    ?>
                    <li data-attribute="<?php echo $attribute_dial_size; ?>" data-value="<?php echo $dial_size; ?>" class="c-dots__item filterItem customisation__btn -size <?php echo $isActive; ?>"> <?php echo $dial_size ?> mm</li>
                <?php endforeach; ?>
            </ul>

            <ul id="strap-color" class="c-colorDots customisation__details customisation__bands -colors">
                <?php foreach($strap_colors as $strap_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_strap_color] == $strap_color) ? "-active" : "";
                        $classname = strtolower($strap_color) 
                    ?>
                    <li data-attribute="<?php echo $attribute_strap_color; ?>" data-value="<?php echo $strap_color; ?>" class="c-colorDots__item filterItem customisation__btn -strap -<?php echo $classname; ?>  <?php echo $isActive; ?>"></li>
                <?php endforeach; ?>
            </ul>

            <ul id="body-color" class="c-colorDots customisation__details customisation__bodies -colors">
                <?php foreach($dial_sizes as $dial_size) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_size] == $dial_size) ? "-active" : "";
                    ?>
                    <li data-attribute="<?php echo $attribute_dial_size; ?>" data-value="<?php echo $dial_size; ?>" class="c-dots__item filterItem customisation__btn -body <?php echo $isActive; ?>"> <?php echo $dial_size ?></li>
                <?php endforeach; ?>
            </ul>

            <div id="custom_elements" class="customisation__elements">
                <span data-id="watch-size" class="customisation__btn button -alt -big">Taille</span>
                <span data-id="strap-color" class="customisation__btn button -alt -big">Cadran</span>
                <span data-id="body-color" class="customisation__btn button -alt -big">Bracelet</span>
            </div>
        </form>
</section>

<?php get_template_part('template-parts/content', 'text-image'); ?>

<?php
    $funcs['tax'] = 'produit'; ?>
<?php get_template_part('template-parts/content', 'functionalities-cards', $funcs); ?>



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

	

<?php do_action( 'woocommerce_after_single_product' ); ?>
