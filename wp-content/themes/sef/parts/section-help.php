<section class="help">
    <div class="help__container">
        <h2 class="help__title" data-animation="show-up">Votre générosité nous permet d’avancer</h2>
        <p class="help__text" data-animation="show-up">Votre soutien est essentiel pour nous permettre de continuer notre mission d'accompagnement et d'entraide auprès des personnes les plus vulnérables.</p>
        <div class="help__container--cta" data-animation="show-up">
            <a href="<?= home_url("/nous-soutenir") ?>" class="cta">Nous soutenir</a>
            <a href="<?= home_url("/contact") ?>" class="cta" data-variant="tertiary">Nous contacter</a>
        </div>
    </div>
    <?= wp_get_attachment_image(179, 'full', false, [
        'class' => 'help__img',
        'data-animation' => 'show-up'
    ]) ?>
</section>