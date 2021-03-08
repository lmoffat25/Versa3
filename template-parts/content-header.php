<?php
    $hero = get_field('header_img');

    if (is_front_page()) : ?>
        <section class="top-banner" style="background : url('<?php echo $hero['header_background']; ?>');">
            <h1 class="site-title">
                <?php echo get_bloginfo( "name" ) ?>
                <img class="top-banner__img" src="<?php echo $hero['header_foreground']; ?>" alt="">
                <span class="-grey"><?php echo get_bloginfo( "description" ) ?></span>
            </h1>
            <button class="button -big -opac">Découvrir</button>
        </section>

<?php else : 
        $idProduct             = get_the_ID();
        $product               = wc_get_product($idProduct);
        $product_name          = $product->name;
        $price                 = $product->price;
?>
    
        <section class="top-banner product-header">
            <h1 class="product-header__title"><?php echo $product_name ?></h1>
            <p class="product-header__subtitle">à partir de <?php echo $price ?> €</p>
            <button class="button -big ">Acheter</button>
        </section>

<?php endif; ?>