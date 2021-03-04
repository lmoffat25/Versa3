<div class="desc-img col-12 col-lg-10 col-xl-9 centerHz">
        <?php if (have_rows('home_content')) :
            while (have_rows('home_content')) : the_row(); 
                $section_title = get_sub_field( 'home_content_title' );
                $section_image = get_sub_field( 'home_content_img' )['sizes']['large'];
                $section_desc = get_sub_field( 'home_content_desc' );
            ?>
                <div class="desc-img__content col-12 col-md-5">
                    <h2 class="title_h2"><?php echo $section_title; ?></h2>
                    <p><?php echo $section_desc; ?></p>
                </div>
                <div class="desc-img__image col-12 col-md-7"><img src="<?php echo $section_image; ?>"></div>
            <?php endwhile;
        endif; ?>
</div>