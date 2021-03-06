<div class="desc-img col-12 col-lg-10 col-xl-9 centerHz">
        <?php if (have_rows('flexible_sections')) :
            while (have_rows('flexible_sections')) : the_row(); 
                $first_row = get_field('flexible_sections')[0];
                    $section_title = get_sub_field( 'text_img-title' );
                    $section_image = get_sub_field( 'text_img-image' )['sizes']['large'];
                    $section_desc = get_sub_field( 'text_img-content' );
                    $has_button = get_sub_field('text_img-button');
                    $button_url = get_sub_field('text_img-url_button');
                ?>
                <div class="desc-img__container col-12">
                    <div class="desc-img__content col-12 col-md-5">
                        <h2 class="title_h2"><?php echo $section_title; ?></h2>
                        <p><?php echo $section_desc; ?></p>
                        <?php if ( $has_button ) : ?>
                            <a class="desc-img__button button" href="<?php echo $button_url ?>">Acheter</a>
                        <?php endif; ?>
                    </div>
                    <div class="desc-img__image col-12 col-md-7"><img src="<?php echo $section_image; ?>"></div>
                </div>
            <?php endwhile;
        endif; ?>
</div>