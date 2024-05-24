<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('css/main.css') ?>">
    <title>SEF Huy</title>
</head>
<body>
<h1 class="sro"><?= get_the_title() ?></h1>
<header>
    <nav class="nav" aria-label="Menu principal">
        <h2 class="sro">Navigation principale</h2>
        <div class="nav__brand">
            <a class="nav__branding" href="<?= home_url() ?>" title="Vers la page d'accueil">Accueil</a>
            <img src="<?= dw_asset('img/sef-logo.svg') ?>" alt="Logo de l'asbl SEF">
        </div>
        <input type="checkbox" name="burger" id="burger">
        <label class="burger" for="burger">
            <svg class="burger__container" width="22" height="22" viewBox="0 0 22 17" xmlns="http://www.w3.org/2000/svg">
                <rect class="burger__line" width="22" height="2" fill="#265A79"/>
                <rect class="burger__line" y="6.75" width="22" height="2" fill="#265A79"/>
                <rect class="burger__line" y="13.5" width="22" height="2" fill="#265A79"/>
            </svg>
        </label>
        <ul class="nav__container">
            <?php foreach (dw_get_navigation_links('main') as $link): ?>
                <li class="nav__items"><a href="<?= $link->url ?>" class="nav__link <?= dw_is_active($link->url) ?>"
                                          title="Vers la page <?= $link->label ?>"><?= $link->label ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>