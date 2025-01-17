<?php
/* Template Name: commandes */
get_header();
?>

<!-- Conteneur principal avec image d'arrière-plan -->
<div class="favoris-background-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="Arrière-plan" class="favoris-background-image">

    <!-- Rectangle superposé -->
    <div class="favoris-overlay-rectangle">
        <h1 class="favoris-main-title">Mes commandes</h1>

        <!-- Section Favoris -->
        <div class="favoris-section">
            <?php
            // Requête pour récupérer les articles de la catégorie "Favoris"
            $favoris_query = new WP_Query(array(
                'category_name' => 'commandes', // Nom de la catégorie
                'posts_per_page' => -1, // Nombre d'articles à afficher (-1 pour tous)
            ));

            // Vérifiez s'il y a des articles
            if ($favoris_query->have_posts()) :
                while ($favoris_query->have_posts()) : $favoris_query->the_post(); ?>
                    <div class="favoris-card">
                        <!-- Image mise en avant -->
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="favoris-card-image">
                        <?php endif; ?>

                        <!-- Contenu de la carte -->
                        <div class="favoris-card-content">
                            <h3 class="favoris-card-title"><?php the_title(); ?></h3>
                            <div class="offer-subtitle-container">
    <p class="offer-subtitle">Panier surprise</p>
    <div class="offer-heart-container">
        <button class="heart-button">
            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C15.5 5.99 17 5 18.5 5 20.5 5 22 6.5 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
            </svg>
        </button>
    </div>
</div>

                            <button class="offer-button">
    <a href="<?php echo get_permalink(get_page_by_path('commander')); ?>" class="offer-button-link">Re-commander</a>
</button>

                        </div>
                    </div>

                    
                    
                <?php endwhile;
                wp_reset_postdata(); // Réinitialise les données de la requête
            else : ?>
                <p>Aucun favori disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Sélectionne tous les boutons contenant les cœurs
        const heartButtons = document.querySelectorAll('.heart-button');

        // Ajoute un gestionnaire d'événement à chaque bouton cœur
        heartButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Trouve l'icône SVG à l'intérieur du bouton
                const heartIcon = button.querySelector('.heart-icon');
                if (heartIcon) {
                    // Bascule la classe "filled" pour changer l'état visuel du cœur
                    heartIcon.classList.toggle('filled');
                }
            });
        });
    });
</script>

<?php get_footer(); ?>
