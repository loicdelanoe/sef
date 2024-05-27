<?php get_header(); ?>

<main>
    <section class="notfound">
        <h2 class="notfound__title">404 - Page non trouvée</h2>
        <p class="notfound__text">La page que vous avez recherché n'existe pas.</p>
        <a class="notfound__link cta" href="<?= home_url() ?>">Retour à la page d'accueil</a>
    </section>
</main>

<?php get_footer(); ?>