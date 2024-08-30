<?php /* Template Name: "Nos Magasins" */ ?>

<?php get_header() ?>

<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="shops" style="margin: 0; padding: 0; max-width: initial">
            <div class="shops__upper">
                <h2 class="shops__title" data-animation="show-up" data-variant="secondary">Nos magasins <strong>Solidaires</strong></h2>
                <p class="shops__text" data-animation="show-up">Chaque achat contribue directement à soutenir nos actions en faveur des personnes en difficulté. En parcourant nos rayons, vous trouverez une sélection variée d’articles de seconde main, allant des vêtements aux meubles, soigneusement triés et prêts à vivre une nouvelle vie. Nos boutiques ne sont pas seulement des lieux de commerce, mais aussi des espaces de rencontre et de solidarité, où chacun peut participer à notre mission de réinsertion sociale tout en faisant de bonnes affaires.</p>
            </div>
            <?php
            $shops = new WP_Query([
                'post_type' => 'magasins',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'ASC',
            ]);

            if ($shops->have_posts()): while ($shops->have_posts()): $shops->the_post(); ?>
                <div class="shops__container--bg">
                    <article class="shops__container shop">
                        <div class="img__container shop__image">
                            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, [
                                'class' => 'shop__image--child',
                                'data-animation' => 'show-up'
                            ]) ?>
                        </div>
                        <div class="shop__container" data-animation="show-up">
                            <h3 class="shop__title"><?= get_the_title() ?></h3>
                            <address class="shop__address icon-location"><a class="house__link" href="<?= "https://google.be/maps/place/" . get_field('address') ?>" target="_blank"><?= get_field('address') ?></a></address>
                            <a class="shop__phone icon-phone" href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a>
                            <div class="shop__content" data-tag="wysiwyg"><?= get_field('description') ?></div>
                        </div>
                    </article>
                </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </section>
        <?= get_template_part('parts/section', 'help') ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
