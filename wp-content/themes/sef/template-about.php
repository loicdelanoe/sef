<?php /* Template Name: "À Propos" */ ?>

<?php get_header() ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="mission">
            <h2 class="mission__title" data-animation="show-up" data-variant="secondary">La mission
                qui<span>Nous animent</span></h2>
            <?= wp_get_attachment_image(get_field('image'), 'medium', false, [
                'class' => 'mission__image',
                'data-animation' => 'show-up'
            ]) ?>
            <div class="mission__content" itemprop="description" data-animation="show-up"
                 data-tag="wysiwyg"><?= get_field('content') ?></div>
        </section>
        <section class="houses">
            <h2 class="houses__title" data-animation="show-up">L'hébergement</h2>
            <p class="houses__content" data-animation="show-up">Afin de vous venir en aide, nous disposons de 2 maisons d’accueil, reconnues par
                le
                Ministère de la Région wallonne.</p>
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
        <section class="history">
            <h2 class="history__title" data-animation="show-up" data-variant="secondary">L'Évolution de
                <span>Notre Association</span></h2>
            <?= wp_get_attachment_image(get_field('history_image'), 'medium', false, [
                'class' => 'history__image',
                'data-animation' => 'show-up'
            ]) ?>
            <div class="mission__content" itemprop="description"
               data-animation="show-up" data-tag="wysiwyg"><?= get_field('history_content') ?></div>
        </section>
        <div class="bg">
            <section class="more">
                <div class="more__upper" data-animation="show-up">
                    <h2 class="more__title">Besoin de plus d'informations ?</h2>
                    <p class="more__text">Apprenez en plus sur le <span itemprop="name">SEF</span> et ce que nous
                        faisons
                    </p>
                </div>
                <ul class="more__container">
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#material') ?>"
                                class="more__link">Dons matériels</a></li>
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#financial') ?>"
                                class="more__link">Dons financiers</a></li>
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#volunteer') ?>"
                                class="more__link">Devenir bénévole</a></li>
                </ul>
            </section>
        </div>
        <section class="help">
            <h2 class="help__title" data-animation="show-up">Votre générosité nous permet d’avancer</h2>
            <div class="help__container" data-animation="show-up">
                <a href="<?= home_url("/nous-soutenir") ?>" class="cta">Nous soutenir</a>
                <a href="<?= home_url("/contact") ?>" class="cta" data-variant="tertiary">Nous contacter</a>
            </div>
        </section>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
