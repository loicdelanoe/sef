<?php /* Template Name: "Nos Maisons" */ ?>

<?php get_header() ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="houses">
            <h2 class="houses__title" data-animation="show-up" data-variant="secondary"><?= strip_tags(get_field('house-title'), ['strong']) ?></h2>
            <p class="houses__content" data-animation="show-up">Afin de vous venir en aide, nous disposons de 2 maisons d’accueil, reconnues par le Ministère de la Région wallonne.</p>
            <?php
            $houses = new WP_Query([
                'post_type' => 'maisons',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'ASC',
            ]);

            if ($houses->have_posts()): while ($houses->have_posts()): $houses->the_post(); ?>
                <article class="houses__container house">
                    <div class="house__container" data-animation="show-up">
                        <h3 class="house__title" data-variant="secondary">Notre <?= get_field('name') ?> <span>Maison d'accueil</span>
                        </h3>
                        <address class="house__address"><?= get_field('address') ?></address>
                        <div class="house__content" data-tag="wysiwyg"><?= get_field('content') ?></div>
                    </div>
                    <?= wp_get_attachment_image(get_field('image'), 'medium', false, [
                        'class' => 'house__image',
                        'data-animation' => 'show-up'
                    ]) ?>
                </article>
            <?php endwhile; endif; wp_reset_query(); ?>
        </section>
        <?= get_template_part('parts/section', 'help') ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
