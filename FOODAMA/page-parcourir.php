<?php
/* Template Name: Parcourir */
get_header();
?> 

<section id="pret-de-chez-vous" class="offers">
    <h2 class="section-title">PRÊT DE CHEZ VOUS</h2>
    <div class="scrollable-container">
        <?php
        $args = [
            'category_name' => 'prêt de chez vous',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ];
        $parcourir_query = new WP_Query($args);

        if ($parcourir_query->have_posts()) :
            while ($parcourir_query->have_posts()) : $parcourir_query->the_post();
        ?>
                <div class="offer-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="offer-image">
                    <?php endif; ?>
                    <h3 class="offer-title"><?php the_title(); ?></h3>
                    <p class="offer-subtitle"><?php the_content(); ?></p>
                    <p class="offer-time">Panier surprise</p>
                    <p class="offer-time">à collecter aujourd'hui 17:00 - 19:00</p>
                    <div class="offer-heart-container">
                        <button class="heart-button">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C15.5 5.99 17 5 18.5 5 20.5 5 22 6.5 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                            </svg>
                        </button>
                    </div>
                    <button class="offer-button">
                        <a href="<?php echo get_permalink(get_page_by_path('commander')); ?>" class="offer-button-link">Commander</a>
                    </button>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune offre disponible pour l’instant.</p>';
        endif;
        ?>
    </div>
</section>

<section id="supermarches" class="offers">
    <h2 class="section-title">SUPERMARCHÉS</h2>
    <div class="scrollable-container">
        <?php
        $supermarches_query = new WP_Query(array(
            'category_name' => 'Supermarchés',
            'posts_per_page' => -1
        ));

        if ($supermarches_query->have_posts()) :
            while ($supermarches_query->have_posts()) : $supermarches_query->the_post();
        ?>
                <div class="offer-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="offer-image">
                    <?php endif; ?>
                    <h3 class="offer-title"><?php the_title(); ?></h3>
                    <p class="offer-subtitle"><?php the_content(); ?></p>
                    <p class="offer-time">Panier surprise</p>
                    <p class="offer-time">à collecter aujourd'hui 14:00 - 15:30</p>
                    <div class="offer-heart-container">
                        <button class="heart-button">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C15.5 5.99 17 5 18.5 5 20.5 5 22 6.5 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                            </svg>
                        </button>
                    </div>
                    <button class="offer-button">
                        <a href="<?php echo get_permalink(get_page_by_path('commander')); ?>" class="offer-button-link">Commander</a>
                    </button>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune offre disponible pour l’instant.</p>';
        endif;
        ?>
    </div>
</section>

<section id="fastfood" class="offers">
    <h2 class="section-title">FASTFOOD</h2>
    <div class="scrollable-container">
        <?php
        $fastfood_query = new WP_Query(array(
            'category_name' => 'Fastfood',
            'posts_per_page' => -1
        ));

        if ($fastfood_query->have_posts()) :
            while ($fastfood_query->have_posts()) : $fastfood_query->the_post();
        ?>
                <div class="offer-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="offer-image">
                    <?php endif; ?>
                    <h3 class="offer-title"><?php the_title(); ?></h3>
                    <p class="offer-subtitle"><?php the_content(); ?></p>
                    <p class="offer-time">Panier surprise</p>
                    <p class="offer-time">à collecter aujourd'hui 20:00 - 22:00</p>
                    <div class="offer-heart-container">
                        <button class="heart-button">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C15.5 5.99 17 5 18.5 5 20.5 5 22 6.5 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                            </svg>
                        </button>
                    </div>
                    <button class="offer-button">
                        <a href="<?php echo get_permalink(get_page_by_path('commander')); ?>" class="offer-button-link">Commander</a>
                    </button>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune offre disponible pour l’instant.</p>';
        endif;
        ?>
    </div>
</section>

<section id="restaurants" class="offers">
    <h2 class="section-title">RESTAURANTS</h2>
    <div class="scrollable-container">
        <?php
        $restaurants_query = new WP_Query(array(
            'category_name' => 'Restaurants',
            'posts_per_page' => -1
        ));

        if ($restaurants_query->have_posts()) :
            while ($restaurants_query->have_posts()) : $restaurants_query->the_post();
        ?>
                <div class="offer-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="offer-image">
                    <?php endif; ?>
                    <h3 class="offer-title"><?php the_title(); ?></h3>
                    <p class="offer-subtitle"><?php the_content(); ?></p>
                    <p class="offer-time">Panier surprise</p>
                    <p class="offer-time">à collecter aujourd'hui 20:00 - 22:00</p>
                    <div class="offer-heart-container">
                        <button class="heart-button">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C15.5 5.99 17 5 18.5 5 20.5 5 22 6.5 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                            </svg>
                        </button>
                    </div>
                    <button class="offer-button">
                        <a href="<?php echo get_permalink(get_page_by_path('commander')); ?>" class="offer-button-link">Commander</a>
                    </button>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune offre disponible pour l’instant.</p>';
        endif;
        ?>
    </div>
</section>

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

<?php
// Vérifiez si un terme de recherche est soumis
if (isset($_GET['s']) && !empty($_GET['s'])) {
    $search_query = sanitize_text_field($_GET['s']);
    echo '<h2>Résultats pour : ' . esc_html($search_query) . '</h2>';

    // Requête pour rechercher les articles correspondants
    $args = [
        'post_type' => 'post', // Modifier si nécessaire (ex : 'restos')
        's' => $search_query,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="search-result">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>Aucun résultat trouvé.</p>';
    }
}
?>

<?php get_footer(); ?>

