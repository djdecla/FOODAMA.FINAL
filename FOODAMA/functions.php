<?php
// Ajout des fonctionnalités de base du thème
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// Enregistrement du menu principal
register_nav_menu('header', 'En tête du menu');

// Chargement des styles et scripts
function styles_scripts() {
    // Charger Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
      'style',
      get_template_directory_uri() . '/FOODAMA.css',
      [],
      time() // Pour éviter le cache
  );
  

    // Charger Bootstrap JS Bundle
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(), // Pas de dépendances
        '1.0', // Version
        true // Charge dans le footer
    );

    // Charger le script principal du thème
    wp_enqueue_script(
        'app-js',
        get_template_directory_uri() . '/assets/js/app.js',
        array('bootstrap-bundle'), // Dépendance à Bootstrap JS
        '1.0', // Version
        true // Charge dans le footer
    );
}
add_action('wp_enqueue_scripts', 'styles_scripts');

// Création des Custom Post Types
function create_post_type() {
    register_post_type('faqs', [
        'labels' => ['name' => 'FAQs'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'faqs']
    ]);
    register_post_type('services', [
        'labels' => ['name' => 'Services'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'services']
    ]);
    register_post_type('restos', [
        'labels' => ['name' => 'Restos'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'restos']
    ]);
}
add_action('init', 'create_post_type');

// Création du Custom Post Type pour les cartes
function create_custom_post_type_cartes() {
    register_post_type('cartes', [
        'labels' => [
            'name' => 'Cartes',
            'singular_name' => 'Carte'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_icon' => 'dashicons-clipboard',
        'rewrite' => ['slug' => 'cartes']
    ]);
}
add_action('init', 'create_custom_post_type_cartes');

// Ajout des classes pour le menu de navigation
function menuheader_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'menuheader_class');

function menuheader_link_class($attributes) {
    $attributes['class'] = 'nav-link';
    return $attributes;
}
add_filter('nav_menu_link_attributes', 'menuheader_link_class');



// Chargement des styles et scripts Select2
function enqueue_select2_assets() {
    wp_enqueue_style(
        'select2-css',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css',
        array(),
        null
    );

    wp_enqueue_script(
        'select2-js',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'custom-select2-init',
        get_template_directory_uri() . '/js/select2-init.js',
        array('select2-js', 'jquery'),
        null,
        true
    );
}

function redirect_search_to_parcourir() {
  if (is_search()) {
      // Obtenez l'URL de la page "Parcourir"
      $parcourir_page = get_permalink(get_page_by_path('parcourir'));

      // Redirige toutes les recherches vers la page "Parcourir"
      if ($parcourir_page) {
          wp_redirect($parcourir_page);
          exit;
      }
  }
}
add_action('template_redirect', 'redirect_search_to_parcourir');
