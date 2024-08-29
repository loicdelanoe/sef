<?php /* Template Name: "Nous soutenir" */ ?>

<?php get_header() ?>

<main>
    <section class="support">
        <h2 class="support__title" data-animation="show-up" data-variant="secondary">Vous voulez nous donner <span>Un petit coup de pouce ?</span></h2>
        <p class="support__text" itemprop="description" data-animation="show-up">
            Pour nous soutenir, vous trouverez diverses possibilités à votre disposition.</p>
    </section>
    <section class="material" id="material">
        <h2 class="material__title" data-animation="show-up"><?= get_field('material_title') ?></h2>
        <div class="material__content" data-tag="wysiwyg" itemprop="description" data-animation="show-up">
            <?= get_field('material_text') ?>
            <a href="<?= home_url('/magasins') ?>" class="cta material__cta">Nos magasins</a>
        </div>
        <div class="img__container" data-variant="right">
            <?= wp_get_attachment_image(get_field('material_image'), 'full', false, [
                'class' => 'material__image',
                'data-animation' => 'show-up'
            ]) ?>
        </div>
    </section>
    <div class="bg">
        <section class="financial" id="financial">
            <h2 class="financial__title" data-animation="show-up"><?= get_field('financial_title') ?></h2>
            <div class="financial__content" data-tag="wysiwyg" itemprop="description" data-animation="show-up">
                <?= get_field('financial_text') ?>
            </div>
            <div class="img__container" data-variant="alt">
                <?= wp_get_attachment_image(get_field('financial_image'), 'full', false, [
                    'class' => 'financial__image',
                    'data-animation' => 'show-up'
                ]) ?>
            </div>
        </section>
    </div>
    <section class="volunteer" id="volunteer">
        <div class="volunteer__container">
            <h2 class="volunteer__title" data-animation="show-up"><?= get_field('volunteer_title') ?></h2>
            <div class="volunteer__text" itemprop="description" data-animation="show-up" data-tag="wysiwyg"><?= get_field('volunteer_content') ?></div>
            <a href="<?= home_url() . "/contact" ?>" class="cta" data-animation="show-up">Contactez-nous</a>
        </div>
        <div class="img__container volunteer__img" data-variant="right">
            <?= wp_get_attachment_image(get_field('volunteer_image'), 'full', false, [
                'class' => 'volunteer__img--child',
                'data-animation' => 'show-up'
            ]) ?>
        </div>
    </section>
</main>

<?php get_footer() ?>
