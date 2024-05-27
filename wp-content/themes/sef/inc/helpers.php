<?php

function dw_get_canonical_url(): string
{
    return empty($_SERVER['HTTPS']) ? 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'] : 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];
}

function dw_is_active(string $path): string
{
    return dw_get_canonical_url() === $path ? 'active' : '';
}

function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}

// Retrouver les éléments d'un menu pour une location donnée
function dw_get_navigation_links(string $location): array
{
    // Pour $location, retrouver le menu.
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    // Au cas où il n'y a pas de menu assignés à $location, renvoyer un tableau de liens vide.
    if (is_null($menuId)) {
        return [];
    }

    // Pour ce menu, récupérer les liens
    $items = wp_get_nav_menu_items($menuId);

    // Formater les liens en objets pour ne garder que "URL" et "label" comme propriétés
    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
    }

    // Retourner le tableau de liens formatés
    return $items;
}

function dw_contact_form_controller(): void
{
    new ContactForm($_POST);
}