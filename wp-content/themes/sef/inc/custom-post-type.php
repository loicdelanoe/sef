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