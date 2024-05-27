<?php /* Template Name: "Nous soutenir" */ ?>

<?php get_header() ?>

<main>
    <section class="support">
        <h2 class="support__title" data-animation="show-up">Nous soutenir</h2>
        <p class="support__text" itemprop="description" data-animation="show-up">Afin de nous soutenir vous trouverez
            différentes possibilités pour nous soutenir.</p>
    </section>
    <section class="material" id="material">
        <h2 class="material__title" data-animation="show-up"><?= get_field('material_title') ?></h2>
        <div class="material__content" data-tag="wysiwyg" itemprop="description" data-animation="show-up">
            <?= get_field('material_text') ?>
        </div>
        <?= wp_get_attachment_image(get_field('material_image'), 'full', false, [
            'class' => 'material__image',
            'data-animation' => 'show-up'
        ]) ?>
    </section>
    <div class="bg">
        <section class="financial" id="financial">
            <h2 class="financial__title" data-animation="show-up"><?= get_field('financial_title') ?></h2>
            <div class="financial__content" data-tag="wysiwyg" itemprop="description" data-animation="show-up">
                <?= get_field('financial_text') ?>
            </div>
            <?= wp_get_attachment_image(get_field('financial_image'), 'full', false, [
                'class' => 'financial__image',
                'data-animation' => 'show-up'
            ]) ?>
        </section>
    </div>
    <section class="volunteer" id="volunteer">
        <h2 class="volunteer__title" data-animation="show-up">Devenir bénévole</h2>
        <p class="volunteer__text" itemprop="description" data-animation="show-up">Rejoignez notre équipe de bénévoles
            au SEF de Huy et faites une différence concrète. En donnant un peu de votre temps, vous apportez un soutien
            précieux et contribuez à une communauté plus solidaire.</p>
        <a href="<?= home_url() . "/contact" ?>" class="cta" data-animation="show-up">Contact</a>
    </section>
</main>

<?php get_footer() ?>
