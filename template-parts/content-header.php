<?php
    $hero = get_field('header_img');

    if (is_front_page()) :
?>
<section class="top-banner" style="background : url('<?php echo $hero['header_background']; ?>');">
    <h1 class="site-title"><?php echo get_bloginfo( "name" ) ?><span class="-grey"><?php echo get_bloginfo( "description" ) ?></span></h1>
    <img class="top-banner__img" src="<?php echo $hero['header_foreground']; ?>" alt="">
    <button class="button -big -opac">Découvrir</button>
</section>

<?php else : ?>
    
<section class="top-banner product_page">
    <div class="content">
        <h1 class="-grey">Versa 3</h1>
    </div>
    <p>À partir de 229,25 €</p>
    <button class="button -big -opac">Acheter</button>
</section>

<?php endif; ?>