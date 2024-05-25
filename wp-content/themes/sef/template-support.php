<?php /* Template Name: "Nous soutenir" */ ?>

<?php get_header() ?>

<main>
    <section class="support">
        <h2 class="support__title">Nous soutenir</h2>
        <p class="support__text">Afin de nous soutenir vous trouverez différentes possibilités pour nous soutenir.</p>
    </section>
    <section class="material" id="material">
        <h2 class="material__title"><?= get_field('material_title') ?></h2>
        <div class="material__content" data-tag="wysiwyg">
            <?= get_field('material_text') ?>
        </div>
        <?= wp_get_attachment_image(get_field('material_image'), 'full', false, [
            'class' => 'material__image'
        ]) ?>
    </section>
    <div class="bg">
        <section class="financial" id="financial">
            <h2 class="financial__title"><?= get_field('financial_title') ?></h2>
            <div class="financial__content" data-tag="wysiwyg">
                <?= get_field('financial_text') ?>
            </div>
            <?= wp_get_attachment_image(get_field('financial_image'), 'full', false, [
                'class' => 'financial__image'
            ]) ?>
        </section>
    </div>
    <section class="volunteer" id="volunteer">
        <h2 class="volunteer__title">Devenir bénévole</h2>
        <p class="volunteer__text">Rejoignez notre équipe de bénévoles au SEF de Huy et faites une différence concrète. En donnant un peu de votre temps, vous apportez un soutien précieux et contribuez à une communauté plus solidaire.</p>
        <a href="<?= home_url() . "/contact" ?>" class="cta">Contact</a>
    </section>
</main>

<?php get_footer() ?>