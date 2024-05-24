<?php get_header() ?>

<main>
    <div class="container">
        <?= wp_get_attachment_image(get_field('background-image'), 'overview_image', false, [
            'class' => 'hero__image',
        ]) ?>
        <section class="hero">
            <h2 class="hero__title"><?= get_field('title') ?></h2>
            <p class="hero__quote"><?= get_field('quote') ?></p>
            <div class="hero__container">
                <a href="" class="cta">Faire un don</a>
                <a href="" class="cta" data-variant="secondary">Nous contacter</a>
            </div>
        </section>
    </div>
    <section class="news">
        <h2 class="news__title">Nos dernières actualités</h2>
        <article class="newscard">
            <div class="newscard__container--last container">
                <img class="newscard__img--last" src="<?= dw_asset('img/news-1.jpg') ?>" alt="">
                <h3 class="newscard__title--last">Croissance des Services d'Entraide Familiale : Solidarité au Cœur des Foyers</h3>
            </div>
            <a class="newscard__link" href="">Visiter l'article</a>
        </article>
        <article class="newscard">
            <div class="newscard__container">
                <img class="newscard__img" src="<?= dw_asset('img/news-1.jpg') ?>" alt="">
                <h3 class="newscard__title">Croissance des Services d'Entraide Familiale : Solidarité au Cœur des Foyers</h3>
            </div>
            <a class="newscard__link" href="">Visiter l'article</a>
        </article>
    </section>
    <div class="bg">
        <section class="statistics">
            <h2 class="statistics__title">Quelques statistiques</h2>
            <ul class="statistics__container">
                <li class="statistics__item statcard">
                    <h3 class="statcard__number">90%</h3>
                    <p class="statcard__text">Des résidents sont réinsérez avec succès dans la société</p>
                </li>
                <li class="statistics__item statcard">
                    <h3 class="statcard__number">150</h3>
                    <p class="statcard__text">Bénévoles participent activement au bon fonctionnement de l’ASBL</p>
                </li>
                <li class="statistics__item statcard">
                    <h3 class="statcard__number">450</h3>
                    <p class="statcard__text">Objets / fournitures récupérés durant l’année</p>
                </li>
            </ul>
        </section>
    </div>
    <section class="testimonials">
        <h2 class="testimonials__title">Témoignages</h2>
        <ul class="testimonials__container">
            <li class="testimonialcard">
                <p class="testimonialcard__text">Le SEF de Huy m'a aidée à retrouver ma dignité quand j'étais perdue. Grâce à leur soutien, j'ai trouvé un emploi stable et un logement. Merci infiniment pour leur aide précieuse.</p>
                <h3 class="testimonialcard__name">Marie</h3>
                <small class="testimonialcard__occupation">ancienne résidente</small>
            </li>
            <li class="testimonialcard">
                <p class="testimonialcard__text">Le SEF de Huy m'a aidée à retrouver ma dignité quand j'étais perdue. Grâce à leur soutien, j'ai trouvé un emploi stable et un logement. Merci infiniment pour leur aide précieuse.</p>
                <h3 class="testimonialcard__name">Marie</h3>
                <small class="testimonialcard__occupation">ancienne résidente</small>
            </li>
            <li class="testimonialcard">
                <p class="testimonialcard__text">Le SEF de Huy m'a aidée à retrouver ma dignité quand j'étais perdue. Grâce à leur soutien, j'ai trouvé un emploi stable et un logement. Merci infiniment pour leur aide précieuse.</p>
                <h3 class="testimonialcard__name">Marie</h3>
                <small class="testimonialcard__occupation">ancienne résidente</small>
            </li>
        </ul>
    </section>
    <section class="contact">
        <h2 class="contact__title">Votre générosité nous permet d’avancer</h2>
        <div class="contact__container">
            <a href="" class="cta">Nous soutenir</a>
            <a href="" class="cta" data-variant="tertiary">Nous contacter</a>
        </div>
    </section>
</main>

<?php get_footer() ?>