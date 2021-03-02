<?php
    $args = array(  
        'post_type' => 'functionalities',
        'post_status' => 'publish',
        'posts_per_page' => 4,
    );
?>
<section>
<?php
    $funcs = new WP_Query( $args ); 
    while ( $funcs->have_posts() ) : $funcs->the_post(); 
        $tags = get_the_terms( get_the_id(), "functionalities_type" );
        $is_menu = $tags[0]->slug;
        if ( $is_menu == 'menu' ) :
?>
        <div class="dropdownCustom -functionalities">
            <div class="dropdownCustom__title">
                <?php echo the_post_thumbnail(); ?><h3 class="-upper -bold"><?php echo get_the_title(); ?></h3><i class="dropdownCustom__chevron fa fa-chevron-down"></i>
            </div>
            <div class="dropdownCustom__content col-10">
<?php           if ( have_rows('fonctionality_menu') ) :
                    while ( have_rows('fonctionality_menu') ) : the_row();
                        $attribute = get_sub_field('attribute'); ?>
                        <div class=""><i class="fa fa-arrow-right"></i><p><?php echo $attribute ?></p></div>
<?php
                    endwhile;
                endif;
?>     
            </div>
        </div>
<?php
        endif;
    endwhile;
?>
</section>
<?php wp_reset_postdata();
