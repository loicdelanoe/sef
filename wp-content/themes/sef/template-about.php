<?php /* Template Name: "À Propos" */ ?>

<?php get_header() ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="mission">
            <h2 class="mission__title" data-animation="show-up" data-variant="secondary">La mission
                qui<span>Nous animent</span></h2>
            <div class="img__container" data-animation="show-up" data-variant="right">
                <?= wp_get_attachment_image(get_field('image'), 'medium', false, [
                    'class' => 'mission__image',
                    'data-animation' => 'show-up'
                ]) ?>
            </div>
            <div class="mission__content" itemprop="description" data-animation="show-up"
                 data-tag="wysiwyg"><?= get_field('content') ?></div>
        </section>
        <section class="history">
            <h2 class="history__title" data-animation="show-up" data-variant="secondary">L'Évolution de
                <span>Notre Association</span></h2>
            <div class="img__container" data-animation="show-up">
                <?= wp_get_attachment_image(get_field('history_image'), 'medium', false, [
                    'class' => 'history__image',
                    'data-animation' => 'show-up',
                    'data-variant' => 'lines'
                ]) ?>
            </div>
            <div class="mission__content" itemprop="description"
               data-animation="show-up" data-tag="wysiwyg"><?= get_field('history_content') ?></div>
        </section>
        <div class="bg">
            <section class="more">
                <div class="more__upper" data-animation="show-up">
                    <h2 class="more__title">Besoin de plus d'informations ?</h2>
                    <p class="more__text">Apprenez en plus sur le <span itemprop="name">SEF</span> et ce que nous
                        faisons.
                    </p>
                </div>
                <ul class="more__container">
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#material') ?>"
                                class="more__link icon-arrow-up-right2">Dons matériels</a></li>
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#financial') ?>"
                                class="more__link icon-arrow-up-right2">Dons financiers</a></li>
                    <li class="more__item" data-animation="show-up"><a
                                href="<?= home_url('/nous-soutenir/#volunteer') ?>"
                                class="more__link icon-arrow-up-right2">Devenir bénévole</a></li>
                    <li class="more__item" data-animation="show-up"><a
                                href="https://www.facebook.com/p/D%C3%A9p%C3%B4t-Du-SEF-100064429671940/?locale=fr_FR"
                                class="more__link icon-arrow-up-right2" target="_blank">Le dépôt du SEF</a></li>
                </ul>
            </section>
        </div>
        <?= get_template_part('parts/section', 'help') ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer() ?>
