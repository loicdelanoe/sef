<?php /* Template Name: "Nos Maisons" */ ?>

<?php get_header() ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="houses" style="margin: 0; padding: 0; max-width: initial">
            <div class="houses__container--upper">
                <h2 class="houses__title" data-animation="show-up"
                    data-variant="secondary"><?= strip_tags(get_field('house-title'), ['strong']) ?></h2>
                <p class="houses__content" data-animation="show-up">En partenariat avec l'asbl "Les Amis de Notre-Dame
                    de la Sarte", le SEF gère depuis 2001 trois petites maisons rue des Vignes à Huy, offrant un accueil
                    et un suivi pour trois familles en logements supervisés. Depuis 2013, une maison de trois
                    appartements située rue de Statte à Huy a également été ajoutée à ce dispositif. Ces deux maisons
                    d'accueil, reconnues par le Ministère de la Région wallonne, offrent un refuge temporaire pour des
                    hommes, des femmes et leurs enfants en situation de grande précarité, leur permettant de se
                    reconstruire sur quelques jours, semaines ou mois.</p>
            </div>
            <?php
            $houses = new WP_Query([
                'post_type' => 'maisons',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'ASC',
            ]);

            if ($houses->have_posts()): while ($houses->have_posts()): $houses->the_post(); ?>
                <div class="houses__container--bg">
                    <article class="houses__container house">
                        <div class="house__container" data-animation="show-up">
                            <h3 class="house__title" data-variant="secondary">Notre <?= get_field('name') ?> <span>Maison d'accueil</span>
                            </h3>
                            <address class="house__address"><?= get_field('address') ?></address>
                            <div class="house__content" data-tag="wysiwyg"><?= get_field('content') ?></div>
                        </div>
                        <div class="img__container house__image">
                            <?= wp_get_attachment_image(get_field('image'), 'medium', false, [
                                'class' => 'house__image--child',
                                'data-animation' => 'show-up'
                            ]) ?>
                        </div>
                    </article>
                </div>
            <?php endwhile; endif;
            wp_reset_query(); ?>
        </section>
        <?= get_template_part('parts/section', 'help') ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
