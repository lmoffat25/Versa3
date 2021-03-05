<?php
/* Template Name: Support */

 get_header();
?>
<main class="support-page">

    <div class="col-12 col-lg-10 col-xl-8 centerHz">
        <h2 class="support-page__title"><?php echo get_the_title() ?></h2>

        <div class="row">
            <div class="col-md-6"><?php get_template_part( 'template-parts/content', 'conseils' ); ?></div>
            <div class="col-md-6"><?php get_template_part( 'template-parts/content', 'form' ); ?></div>
        </div>
    </div>

</main>


<?php
 get_footer();
 ?>