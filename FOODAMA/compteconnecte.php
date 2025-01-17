<?php
/* Template Name: compteconnecte */
get_header();
?>

<div class="background-container-compteconnecte">
    <!-- Image d'arrière-plan -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="Background" class="background-image-compteconnecte">

    <!-- Contenu principal -->
    <div class="main-content-compteconnecte">
        <div class="compteconnecte-overlay">
            <!-- En-tête du compte -->
            <div class="compteconnecte-header">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Titre-3.png" alt="Avatar" class="compteconnecte-avatar">
                <h2 class="compteconnecte-username">Nom d'utilisateur <?php echo wp_get_current_user()->display_name; ?></h2>
            </div>
<!-- Boutons principaux -->
<div class="compteconnecte-buttons">
    <a href="<?php echo get_permalink(get_page_by_path('favoris')); ?>" class="compteconnecte-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/favoris.png" alt="Favoris" class="compteconnecte-icon">
        <span class="compteconnecte-button-text">Favoris</span>
    </a>
    <a href="<?php echo get_permalink(get_page_by_path('commandes')); ?>" class="compteconnecte-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/commandes.png" alt="Commandes" class="compteconnecte-icon">
        <span class="compteconnecte-button-text">Commandes</span>
    </a>
</div>


            <!-- Ligne de séparation -->
            <hr class="compteconnecte-divider">

            <!-- Liens supplémentaires -->
            <div class="compteconnecte-links">
                <a href="<?php echo get_permalink(get_page_by_path('mentionslegales')); ?>" class="compteconnecte-link">Mentions légales</a>
                <a href="<?php echo get_permalink(get_page_by_path('serviceclient')); ?>" class="compteconnecte-link">Service client</a>
                <a href="<?php echo wp_logout_url(home_url()); ?>" class="compteconnecte-link">Se déconnecter</a>
                <a href="<?php echo wp_logout_url(home_url()); ?>" class="compteconnecte-link">Supprimer mon compte</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
