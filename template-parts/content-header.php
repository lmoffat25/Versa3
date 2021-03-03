<?php
    $hero = get_field('header_img');
?>
<section class="top-banner" style="background : url('<?php echo $hero['header_background']; ?>');">
    <h1 class="site-title"><?php echo get_bloginfo( "name" ) ?><span class="-grey"><?php echo get_bloginfo( "description" ) ?></span></h1>
    <img class="top-banner__img" src="<?php echo $hero['header_foreground']; ?>" alt="">
    <button class="button -big -opac">Découvrir</button>
</section>