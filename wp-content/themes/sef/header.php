<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= get_bloginfo('description') ?>">
    <meta name="keywords"
          content="aide sociale, soutien aux sans-abri, réinsertion professionnelle, SEF Huy, dons matériels, bénévolat, précarité, exclusion sociale, collecte de dons, aide psychologique, hébergement d'urgence, formation, ateliers, aide administrative, service d'entraide, communauté solidaire, Huy, soutien aux vulnérables, dépôt de dons, seconde main, bénévoles, réinsertion sociale, aide humanitaire, aide aux démunis, services sociaux, soutien local, associations caritatives, solidarité, engagement bénévole">
    <!-- Open Graph -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php dw_og_page_title() ?>">
    <meta property="og:url" content="<?= home_url($_SERVER['REQUEST_URI']) ?>">
    <meta property="og:site_name" content="<?= get_bloginfo('name') ?>">
    <!-- Wordpress head -->
    <?php wp_head() ?>
    <!-- Title -->
    <title><?= get_bloginfo('name') ?></title>
</head>
<body itemscope itemtype="https://schema.org/Organization">
<h1 class="sro"><?= get_the_title() ?></h1>
<header role="banner" <?= is_front_page() ? 'class="absolute"' : '' ?>>
    <nav class="nav" aria-label="Menu principal">
        <h2 class="sro">Navigation principale</h2>
        <div class="nav__brand">
            <a class="nav__branding" href="<?= home_url() ?>" title="Vers la page d'accueil"><span
                        itemprop="name">SEF</span></a>
            <img src="<?= is_front_page() ? dw_asset('img/sef-logo-alt.svg') : dw_asset('img/sef-logo.svg') ?>"
                 alt="Logo de l'asbl SEF" width="70" height="41">
        </div>
        <?= is_home() ?>
        <input type="checkbox" name="burger" id="burger" tabindex="0">
        <label class="burger" for="burger">
            <span class="sro">Menu</span>
            <svg class="burger__container" focusable="false" aria-hidden="true" width="22" height="22"
                 viewBox="0 0 22 17" xmlns="http://www.w3.org/2000/svg">
                <rect class="burger__line" width="22" height="2" fill="<?= is_front_page() ? '#F3F9FE' : '#4F72A5' ?>"/>
                <rect class="burger__line" y="6.75" width="22" height="2"
                      fill="<?= is_front_page() ? '#F3F9FE' : '#4F72A5' ?>"/>
                <rect class="burger__line" y="13.5" width="22" height="2"
                      fill="<?= is_front_page() ? '#F3F9FE' : '#4F72A5' ?>"/>
            </svg>
        </label>
        <ul class="nav__container">
            <?php foreach (dw_get_navigation_links('main') as $link):

                if ($link->label === 'Contact'): ?>
                    <li class="nav__items"><a href="<?= $link->url ?>" class="nav__link--contact cta"
                                              title="Vers la page <?= $link->label ?>"><?= $link->label ?></a></li>
                <?php else: ?>
                    <li class="nav__items"><a href="<?= $link->url ?>"
                                              class="nav__link <?= is_front_page() ? 'nav__link--alt' : '' ?> <?= dw_is_active($link->url) ?>"
                                              title="Vers la page <?= $link->label ?>"><?= $link->label ?></a></li>
                <?php endif; ?>

            <?php endforeach; ?>
        </ul>
    </nav>
</header>