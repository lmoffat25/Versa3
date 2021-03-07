<?php
    $fields = get_field("appli");
    $section_title = $fields['appli-section_title'];
    $section_content = $fields['appli-section_content'];
    $section_bg_image = $fields['appli-section_background-image']['url'];
?>
<section class="app">
    <h2 class="app__title col-12 col-lg-10 centerHz"><?php echo $section_title ?></h2>
    <div class="app__background col-12" style="background-image : url('<?php echo  $section_bg_image?>');">
        <div class="app__container col-10 centerHz">
            <p class="app__content "><?php echo $section_content ?></p>
            <a class="button app__button" href="">Télécharger</a>
        </div>
    </div>
</section>