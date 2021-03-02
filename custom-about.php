<?php
/* Template Name: About */

 wp_head();
 get_header();
?>
<main class="about-page">

    <h1 class="about-page__title"><?php echo get_the_title() ?></h1>

    <?php get_template_part( 'template-parts/content', 'about' ); ?>

</main>


<?php
 wp_footer()
 ?>