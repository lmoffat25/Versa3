<section class="desc-img col-12 col-lg-10  centerHz">
        <?php if ( have_rows('flexible_sections') ) :
                if ( !empty($args) ) :
                    $row = get_field('flexible_sections')[$args['row']];
                else :
                    $row = 0;
                endif;
                $section_title = $row['text_img-title'];
                $section_image = $row['text_img-image']['sizes']['large'];
                $section_desc = $row['text_img-content'];
                $has_button = $row['text_img-button'];
                $button_url = $row['text_img-url_button'];
                ?>
                <div class="desc-img__container">
                    <div class="desc-img__content col-md-5">
                        <h2 class="title_h2"><?php echo $section_title; ?></h2>
                        <p><?php echo $section_desc; ?></p>
                        <?php if ( $has_button ) : ?>
                            <a class="desc-img__button button" href="<?php echo $button_url ?>">Acheter</a>
                        <?php endif; ?>
                    </div>
                    <div class="desc-img__image  col-md-7"><img src="<?php echo $section_image; ?>"></div>
                </div>
                <?php else : ?>
                    <h2>Section texte image n'apparait pas</h2>
       <?php endif; ?>
</section>