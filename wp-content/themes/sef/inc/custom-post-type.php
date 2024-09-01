<?php

// if pages don't work: settings -> permalinks -> save changes
function create_stats()
{
    $labels = [
        'name' => _x('Statistiques', 'post type general name'),
        'singular_name' => _x('Statistique', 'post type singular name'),
        'menu_name' => _x('Statistiques', 'admin menu'),
        'name_admin_bar' => _x('Statistique', 'add new on admin bar'),
        'add_new' => _x('Ajouter une statistique', 'statistique'),
        'add_new_item' => __('Ajouter une nouvelle statistique'),
        'new_item' => __('Nouvelle statistique'),
        'edit_item' => __('Éditer statistique'),
        'view_item' => __('Voir statistique'),
        'all_items' => __('Toutes les statistiques'),
        'search_items' => __('Rechercher statistiques'),
        'parent_item_colon' => __('Statistiques Parent :'),
        'not_found' => __('Aucune statistique trouvée.'),
        'not_found_in_trash' => __('Aucune statistique trouvée dans la corbeille.')
    ];

    $args = [
        'labels' => $labels,
        'description' => 'Liste des témoignages',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-chart-line',
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'temoignages',
        ]
    ];

    register_post_type('statistiques', $args);
}

add_action('init', 'create_stats');

function create_testimonials()
{
    $labels = [
        'name' => _x('Témoignages', 'post type general name'),
        'singular_name' => _x('Témoignage', 'post type singular name'),
        'menu_name' => _x('Témoignages', 'admin menu'),
        'name_admin_bar' => _x('Témoignage', 'add new on admin bar'),
        'add_new' => _x('Ajouter un témoignage', 'témoignage'),
        'add_new_item' => __('Ajouter un nouveau témoignage'),
        'new_item' => __('Nouveau témoignage'),
        'edit_item' => __('Éditer témoignage'),
        'view_item' => __('Voir témoignage'),
        'all_items' => __('Tous les témoignages'),
        'search_items' => __('Rechercher témoignages'),
        'parent_item_colon' => __('Témoignages Parent :'),
        'not_found' => __('Aucun témoignage trouvée.'),
        'not_found_in_trash' => __('Aucun témoignage trouvée dans la corbeille.')
    ];

    $args = [
        'labels' => $labels,
        'description' => 'Liste des témoignages',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'temoignages',
        ]
    ];

    register_post_type('temoignages', $args);
}

add_action('init', 'create_testimonials');

function create_houses()
{
    $labels = [
        'name' => _x('Maisons', 'post type general name'),
        'singular_name' => _x('Maison', 'post type singular name'),
        'menu_name' => _x('Maisons', 'admin menu'),
        'name_admin_bar' => _x('Maison', 'add new on admin bar'),
        'add_new' => _x('Ajouter une maison', 'maison'),
        'add_new_item' => __('Ajouter une nouvelle maison'),
        'new_item' => __('Nouveau maison'),
        'edit_item' => __('Éditer maison'),
        'view_item' => __('Voir maison'),
        'all_items' => __('Toutes les maisons'),
        'search_items' => __('Rechercher maisons'),
        'parent_item_colon' => __('Maisons Parent :'),
        'not_found' => __('Aucune maison trouvée.'),
        'not_found_in_trash' => __('Aucune maison trouvée dans la corbeille.')
    ];

    $args = [
        'labels' => $labels,
        'description' => 'Liste des maisons d\'accueil',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-admin-multisite',
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'maisons',
        ]
    ];

    register_post_type('maisons', $args);
}

add_action('init', 'create_houses');

function create_shops()
{
    $labels = [
        'name' => _x('Magasins', 'post type general name'),
        'singular_name' => _x('Magasin', 'post type singular name'),
        'menu_name' => _x('Magasins', 'admin menu'),
        'name_admin_bar' => _x('Magasin', 'add new on admin bar'),
        'add_new' => _x('Ajouter un magasin', 'magasin'),
        'add_new_item' => __('Ajouter un nouveau magasin'),
        'new_item' => __('Nouveau magasin'),
        'edit_item' => __('Éditer magasin'),
        'view_item' => __('Voir magasin'),
        'all_items' => __('Tous les magasins'),
        'search_items' => __('Rechercher magasins'),
        'parent_item_colon' => __('Magasins Parent :'),
        'not_found' => __('Aucun magasin trouvé.'),
        'not_found_in_trash' => __('Aucun magasin trouvé dans la corbeille.')
    ];

    $args = [
        'labels' => $labels,
        'description' => 'Liste des magasins',
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-store',
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'maisons',
        ]
    ];

    register_post_type('magasins', $args);
}

add_action('init', 'create_shops');