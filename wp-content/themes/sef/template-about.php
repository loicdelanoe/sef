<?php /* Template Name: "À Propos" */ ?>

<?php get_header() ?>

<main>
    <section class="mission">
        <h2 class="mission__title" data-animation="show-up"><?= get_field('title') ?></h2>
        <?= wp_get_attachment_image(get_field('image'), 'full', false, [
            'class' => 'mission__image',
            'data-animation' => 'show-up'
        ]) ?>
        <p class="mission__content" itemprop="description" data-animation="show-up"><?= get_field('content') ?></p>
    </section>
    <section class="history">
        <h2 class="history__title" data-animation="show-up"><?= get_field('history_title') ?></h2>
        <?= wp_get_attachment_image(get_field('history_image'), 'full', false, [
            'class' => 'history__image',
            'data-animation' => 'show-up'
        ]) ?>
        <p class="mission__content" itemprop="description" data-animation="show-up"><?= get_field('history_content') ?></p>
    </section>
    <div class="bg">
        <section class="more">
            <div class="more__upper" data-animation="show-up">
                <h2 class="more__title">Besoin de plus d'informations ?</h2>
                <p class="more__text">Apprenez en plus sur le <span itemprop="name">SEF</span> et ce que nous faisons</p>
            </div>
            <ul class="more__container">
                <li class="more__item" data-animation="show-up"><a href="<?= home_url('/nous-soutenir/#material') ?>" class="more__link">Dons matériels</a></li>
                <li class="more__item" data-animation="show-up"><a href="<?= home_url('/nous-soutenir/#financial') ?>" class="more__link">Dons financiers</a></li>
                <li class="more__item" data-animation="show-up"><a href="<?= home_url('/nous-soutenir/#volunteer') ?>" class="more__link">Devenir bénévole</a></li>
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
</main>

<?php get_footer() ?>
