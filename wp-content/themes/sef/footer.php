<div class="bg">
    <footer class="footer" role="contentinfo">
        <h2 class="sro">Bas de page</h2>
        <div class="footer__upper">
            <div class="footer__container--branding">
                <div class="footer__brand">
                    <a class="nav__branding" href="<?= home_url() ?>" title="Vers la page d'accueil">Accueil</a>
                    <img src="<?= dw_asset('img/sef-logo-alt.svg') ?>" alt="Logo de l'asbl SEF" width="70" height="41">
                </div>
                <p class="footer__quote">Aidons ceux dans le besoin</p>
                <ul class="footer__container social">
                    <li class="social__item"><a href="" class="social__link social__link--facebook"><span class="sro">Facebook</span></a>
                    </li>
                </ul>
            </div>
            <div class="footer__container--nav">
                <?php get_sidebar('location'); ?>
                <?php get_sidebar('support'); ?>
                <nav class="footer__nav footer__container">
                    <h3 class="footer__subtitle">Navigation</h3>
                    <ul class="footer__list list">
                        <?php foreach (dw_get_navigation_links('main') as $link): ?>
                            <li class="list__item"><a href="<?= $link->url ?>" class="list__link"
                                                      title="Vers la page <?= $link->label ?>"><?= $link->label ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer__lower juridic">
            <ul class="juridic__container">
                <li class="juridic__item">© 2024 SEF. Tous droits réservés.</li>
                <li class="juridic__item"><a class="juridic__link" href="<?= home_url("mentions-legales") ?>">Mentions légales</a></li>
            </ul>
        </div>

    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>