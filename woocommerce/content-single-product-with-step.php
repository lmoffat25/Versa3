<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<?php 
    $prefix                = get_field("prefix-img");
    $upload_dir            = wp_get_upload_dir()["baseurl"] . "/" . $prefix . "-"  ;
    $idProduct             = get_the_ID();
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

?>


<div class="row -vcenter">
    <div class="col-12 col-md-6 col-md-offset-2">
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
   
    <div class="col-12 col-md-3"> 
        <p>Etape <span class="current-step">1</span>/3</p>
        <h1 class="title"><?php the_title(); ?></h1>
        <p class="subtitle">Prix : <b><span id="product-final-price"><?php echo $price; ?>€</span></b></p>
        <div class="step" id="step-1">
            <?php if($strap_colors) : ?>

            <h2 class="subtitle">Choisir la couleur du Bracelet</h2>
            <ul class="c-colorDots">
                <?php foreach($strap_colors as $strap_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_strap_color] == $strap_color) ? "-active" : "";
                        $classname = strtolower($strap_color) 
                    ?>
                    <li data-attribute="<?php echo $attribute_strap_color; ?>" data-value="<?php echo $strap_color; ?>" class="c-colorDots__item filterItem -<?php echo $classname; ?>  <?php echo $isActive; ?>"></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <div class="button step__button" data-step="1" >Suivant</div>
        </div>
        <div class="step" id="step-2">
            <?php if($dial_colors) : ?>
                <h2 class="subtitle">Choisir la couleur du cadran</h2>
                <ul class="c-colorDots">
                    <?php foreach($dial_colors as $dial_color) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_dial_color] == $dial_color) ? "-active" : "";
                            $classname = strtolower($dial_color) 
                        ?>
                        <li data-attribute="<?php echo $attribute_dial_color; ?>" data-value="<?php echo $dial_color; ?>" class="c-colorDots__item filterItem -<?php echo $classname; ?>  <?php echo $isActive; ?>"></li>
                    <?php endforeach; ?>
                </ul>
                <div class="button step__button" data-step="2">Suivant</div>
            <?php endif; ?>
        </div>
       <div class="step" id="step-3">
       
        <?php if($dial_sizes) : ?>
            <h2 class="subtitle">Choisir la Taille du Cadran</h2>
            <ul class="c-colorDots">
                <?php foreach($dial_sizes as $dial_size) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_size] == $dial_size) ? "-active" : "";
                    ?>
                    <li data-attribute="<?php echo $attribute_dial_size; ?>" data-value="<?php echo $dial_size; ?>" class="c-dots__item filterItem <?php echo $isActive; ?>"> <?php echo $dial_size ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="button" id="add-product-to-cart">Ajouter au panier</div>
        </div>

        
    </div>
</div>


<div class="summary entry-summary" id="woocommerce-hidden">
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
