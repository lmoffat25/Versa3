<section class="newsletter col-10 centerHz">
    <div class="newsletter__img">
        <img src="<?php echo get_field('newsletter_img','options')['url']; ?>">
        <h2><?php the_field('newsletter_title_section','options'); ?></h2>
    </div>
    <div class="newsletter__content col-xl-4">
        <h3 class="newsletter__title -blue">Newsletter</h3>
        <p class="newsletter__text -big"><?php the_field('newsletter_subtitle','options'); ?></p>
        <p class="newsletter__text col-lg-10 col-8 centerHz"><?php the_field('newsletter_content','options'); ?></p>
    </div>

    <form action="" class="newsletter__form">
        <label class="newsletter__label">Mail</label>
        <div class="newsletter__fields">
            <input placeholder="johndoe@gmail.com" class="input"></input>
            <button class="button -big">S'inscrire</button>
        </div>
    </form>
</section>