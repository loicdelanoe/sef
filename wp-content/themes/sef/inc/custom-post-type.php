<?php

// if pages don't work: settings -> permalinks -> save changes
register_post_type('statistiques', [
    'label' => 'Statistiques',
    'description' => 'Liste des statistiques',
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-chart-line',
    'has_archive' => false,
    'rewrite' => [
        'slug' => 'statistiques',
    ]
]);

register_post_type('temoignages', [
    'label' => 'Témoignages',
    'description' => 'Liste des témoignages',
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-groups',
    'has_archive' => false,
    'rewrite' => [
        'slug' => 'temoignages',
    ]
]);

register_post_type('maisons', [
    'label' => 'Maisons',
    'description' => 'Liste des maisons d\'accueil',
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-store',
    'has_archive' => false,
    'rewrite' => [
        'slug' => 'maisons',
    ]
]);