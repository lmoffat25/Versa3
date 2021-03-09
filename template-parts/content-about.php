<?php
   $args = array(  
        'post_type' => 'about',
        'post_status' => 'publish',
        'posts_per_page' => 4, 
    );

    $my_query = new WP_Query( $args ); 
?>

<section class="about-section scroll-about">
        <?php $i=0;
        if ($my_query->have_posts()) : 
            while ($my_query->have_posts()) : $my_query->the_post();
                $i++; ?>
                <div class="trigger" id="trigger<?php echo $i; ?>"></div>
            <?php endwhile;
        endif; ?>

        <div class="loader"><span class="loader__fill"></span></div>

        <div id="pin1">
            <?php $i=0;
            if ($my_query->have_posts()) : 
            while ($my_query->have_posts()) : $my_query->the_post();
            $i++; ?>
            <div class="about-section__container" id="txt<?php echo $i; ?>">
                <div class="about-section__content">
                    <h2 class="about-section__title"><?php the_title(); ?></h2>
                    <p class="about-section__text"><?php the_content(); ?></p>
                    <img class="about-section__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Une photo">
                </div>
            </div>
            <?php endwhile;
            endif; ?>
        </div>
    </section>

<?php wp_reset_postdata();
