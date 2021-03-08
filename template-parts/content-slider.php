<?php
     $args = array(  
      'post_type' => 'slides',
      'post_status' => 'publish',
  );

  $slider = new WP_Query( $args ); 
  $slides = $slider->posts;

  $x = 0;
  $i = 0;
  $y = 0;
  $z = 0;
?>
<section id="slider">
<?php while ( $slider->have_posts() ) : $slider->the_post(); $x++ ?>
  <input type="radio" name="slider" id="slide<?php echo $x ?>">
<?php endwhile; ?>
  <div id="slides">
    <div id="overflow">
      <div class="inner">
      <?php while ( $slider->have_posts() ) : $slider->the_post(); $z++;
      
        $slide_title = get_the_title();
        $slide_content = get_the_content();
        $slide_image = get_the_post_thumbnail_url();?>
          <div class="slide slide_<?php echo $z ?>" style="background-image : url('<?php echo $slide_image ?>');">
            <div class="slide-content col-10 centerHz">
              <h3 class="slide-content__title"><?php echo $slide_title ?></h3>
              <p class="slide-content__content"><?php echo $slide_content; ?></p>
              <button class="button -alt">ACHETER</button>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div id="controls">
    <?php while ( $slider->have_posts() ) : $slider->the_post(); $i++;?>
      <label for="slide<?php echo $i ?>"></label>
    <?php endwhile; ?>
  </div>
  <div id="bullets">
    <?php while ( $slider->have_posts() ) : $slider->the_post(); $y++;?>
      <label for="slide<?php echo $y ?>"></label>
    <?php endwhile; ?>
  </div>
</section>

<?php wp_reset_postdata();