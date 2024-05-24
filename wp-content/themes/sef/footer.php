<div class="bg">
    <footer class="footer">
        <h2 class="sro">Bas de page</h2>
        <div class="footer__upper">
            <div class="footer__brand">
                <a class="nav__branding" href="<?= home_url() ?>" title="Vers la page d'accueil">Accueil</a>
                <img src="<?= dw_asset('img/sef-logo-alt.svg') ?>" alt="Logo de l'asbl SEF">
            </div>
            <p class="footer__quote">Aidons ceux dans le besoin</p>
            <ul class="footer__container social">
                <li class="social__item"><a href="" class="social__link social__link--facebook"><span class="sro">Facebook</span></a>
                </li>
            </ul>
            <div class="footer__container">
                <h3 class="footer__subtitle">Coordonnées</h3>
                <ul class="footer__list list">
                    <li class="list__item">Rue du Marché 33 4500 HUY</li>
                    <li class="list__item">085 / 21 57 52</li>
                    <li class="list__item">contact@sefasbl.com</li>
                </ul>
            </div>
            <div class="footer__container">
                <h3 class="footer__subtitle">Nous soutenir</h3>
                <ul class="footer__list list">
                    <li class="list__item">Dons matériels</li>
                    <li class="list__item">Dons financiers</li>
                    <li class="list__item">Devenir bénévole</li>
                </ul>
            </div>
            <nav class="footer__nav">
                <h3 class="footer__subtitle">Navigation</h3>
                <ul class="footer__list list">
                    <?php foreach (dw_get_navigation_links('main') as $link): ?>
                        <li class="list__item"><a href="<?= $link->url ?>" class="nav__link--footer"
                                                  title="Vers la page <?= $link->label ?>"><?= $link->label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="footer__lower legal">
            <ul class="legal__container">
                <li class="legal__item">© 2024 SEF. Tous droits réservés.</li>
                <li class="legal__item"><a class="legal__link" href="">Mentions légales</a></li>
            </ul>
        </div>

    </footer>
</div>
<script src="<?= dw_asset('js/main.js') ?>"></script>
</body>
</html>