<header class="entry-header">
    <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
</header><!-- .entry-header -->

<div class="row">
    <div class="col-12 col-md-3">
        <div class="account__defi">
            <div class="account__defi-content">
                <h3>Défi du jour</h3>
                <p><?php the_field('defi_account_desc'); ?></p>
                <!--                        <p>Défi réalisé ?</p>-->
            </div>
            <img src="<?php echo get_field('defi_account_img')['sizes']['large']; ?>" alt="">
        </div>
        <div class="account__training">
            <h3>Mon dernier entraînement</h3>
            <?php if (have_rows('last_training_account')) :
                while (have_rows('last_training_account')) : the_row(); ?>
                    <div class="row">
                        <span class="col-10"><?php the_field('last_training_account_sport') ?> / <?php the_field('last_training_account_time'); ?></span>
                        <?php if (get_field('last_training_account_sport') == 'Jogging') : ?>
                            <img class="col-2 p-0"
                                 src="<?php echo get_template_directory_uri(); ?>/images/icone-jogging.png"
                                 alt="">
                        <?php endif; ?>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>

    <div class="col-12 col-md-8 account__stats">
        <h3>Mes statistiques</h3>
        <p>Résultats du <span class="account__stats-date"><?php the_field('stats_date'); ?></span></p>
        <?php if (have_rows('stats_results')) : ?>
            <div class="row">
                <?php while (have_rows('stats_results')) : the_row(); ?>
                    <div class="col-6">
                        <div class="account__stats-item">
                            <p class="name"><?php the_sub_field('name'); ?></p>
                            <div class="row">
                                <img class="col-2 p-0"
                                     src="<?php echo get_sub_field('icon')['sizes']['medium']; ?>" alt=""">
                                <p class="col-10"><?php the_sub_field('result'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>