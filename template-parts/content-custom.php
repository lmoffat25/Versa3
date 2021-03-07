<?php
    $prefix                = get_field("prefix-img");
    /** @link https://developer.wordpress.org/reference/functions/wp_get_upload_dir/ */
    $upload_dir            = wp_get_upload_dir()["baseurl"] . "/" . $prefix   ;
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
    $dial_colors           = $attributes[$attribute_dial_color]["options"]; ?>


<section class="customisation">
        <form class="bg-triangle">
        <div class="col-12 col-md-6 col-md-push-3">
            <div class="watch">
                <?php if ($default_attributes[$attribute_dial_color]) : ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-<?php echo $default_attributes[$attribute_dial_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-noir.png" alt="">
                <?php endif; ?>
                <?php if ($attributes[$attribute_strap_color]) : ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-<?php echo $default_attributes[$attribute_strap_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-orange.png" alt="">
                <?php endif; ?>
            </div>
        </div>
            <!-- Tailles de la montre -->
            <ul id="watch-size" class="c-colorDots customisation__details customisation__size">
                <?php foreach($dial_sizes as $dial_size) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_size] == $dial_size) ? "-active" : "";
                    ?>
                    <li data-attribute="<?php echo $attribute_dial_size; ?>" data-value="<?php echo $dial_size; ?>" class="c-dots__item filterItem customisation__btn -size <?php echo $isActive; ?>"> <?php echo $dial_size ?> mm</li>
                <?php endforeach; ?>
            </ul>
            <!-- Couleurs du BRACELET -->
            <ul id="strap-color" class="c-colorDots customisation__details customisation__bands -colors">
                <?php foreach($strap_colors as $strap_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_strap_color] == $strap_color) ? "-active" : "";
                        $classname = strtolower($strap_color) 
                    ?>
                    <li data-attribute="<?php echo $attribute_strap_color; ?>" data-value="<?php echo $strap_color; ?>" class="c-colorDots__item filterItem customisation__btn -strap -<?php echo $classname; ?>  <?php echo $isActive; ?>"><span class="-color-<?php echo $strap_color; ?>"></span></li>
                <?php endforeach; ?>
            </ul>
            <!-- Couleurs du CADRAN -->
            <ul id="body-color" class="c-colorDots customisation__details customisation__bodies -colors">
                <?php foreach($dial_colors as $dial_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_color] == $dial_color) ? "-active" : "";
                        $classname = strtolower($dial_color)
                    ?>
                    <li data-attribute="<?php echo $attribute_dial_color; ?>" data-value="<?php echo $dial_color; ?>" class="c-colorDots__item filterItem customisation__btn -body -<?php echo $classname; ?>  <?php echo $isActive; ?>"><span class="-color-<?php echo $dial_color; ?>"></span></li>
                <?php endforeach; ?>
            </ul>

            <div id="custom_elements" class="customisation__elements">
                <span data-id="watch-size" class="customisation__btn button -alt -big">Taille</span>
                <span data-id="strap-color" class="customisation__btn button -alt -big">Bracelet</span>
                <span data-id="body-color" class="customisation__btn button -alt -big">Cadran</span>
            </div>
            <span id="add-product-to-cart" class="button -alt -big">Ajouter au panier</span>
        </form>
</section>

<!-- MOBILE #################################################################################################################################################### -->
<section class="customisation-mobile">
        <form class="customisation-mobile__form">

            
            <!-- Carousel -->
            <div class="customisation-mobile__carousel main-carousel">

                <?php foreach($strap_colors as $strap_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_strap_color] == $strap_color) ? "-active" : "";
                        $classname = strtolower($strap_color) 
                    ?>
                    <div class="customisation-mobile__cell carousel-cell">
                        <img class="customisation-mobile__strap watch__dial" data-value="<?php echo $strap_color; ?>" data-attribute="<?php echo $attribute_strap_color; ?>" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-<?php echo $strap_color;?>.png" alt="Noir">
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="customisation-mobile__dials">
                <img class="customisation-mobile__dial watch__dial -cadran-noir -onScreen" data-source="cadran-noir.png" src="<?php echo $upload_dir ?>cadran-noir.png" alt="">
                <img class="customisation-mobile__dial watch__dial -cadran-rose" data-source="cadran-or.png" src="<?php echo $upload_dir ?>cadran-or.png" alt="">
            </div> 

            <!-- Buttons-->
            <div class="customisation-mobile__buttons">
                <span class="customosation-mobile__button button -alt">44mm</span>
                <span class="customosation-mobile__button button -alt">55mm</span>
            </div>
        </form>
    </section>

<?php
    /*
    <?php foreach($dial_colors as $dial_color) : ?>
                    <?php
                        $isActive = ($default_attributes[$attribute_dial_color] == $dial_color) ? "-active" : "";
                        $classname = strtolower($dial_color)
                    ?>
                    <img data-attribute="<?php echo $attribute_dial_color; ?>" data-source="<?php echo $upload_dir ?>cadran-{color}.png" data-value="<?php echo $dial_color; ?>" class="c-colorDots__item filterItem customisation__btn -body customisation-mobile__dial watch__dial -<?php echo $classname; ?> <?php echo $isActive; ?>" src="<?php echo $upload_dir ?>cadran-<?php echo $default_attributes[$attribute_dial_color]?>.png" alt="">
                <?php endforeach; ?>
    */