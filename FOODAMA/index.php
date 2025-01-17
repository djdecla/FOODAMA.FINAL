<?php get_header(); ?>
<div id="cookie-banner" style="display: none; position: fixed; bottom: 0; width: 100%; background-color: #FBF7EC; padding: 20px; text-align: center; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); z-index: 1000;">
    <p style="margin: 0; font-size: 16px; color: #6C8B73;">
        Ce site utilise des cookies pour améliorer votre expérience. Vous pouvez accepter ou refuser leur utilisation. En savoir plus dans notre 
        <a href="<?php echo get_permalink(get_page_by_path('politique-de-confidentialite')); ?>" style="color: #D46A6A; text-decoration: underline;">politique de confidentialité</a>.
    </p>
    <div style="margin-top: 10px;">
        <button id="accept-cookies" style="background-color: #D46A6A; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Accepter</button>
        <button id="reject-cookies" style="background-color: #6C8B73; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Refuser</button>
    </div>
</div>


<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fondecran.png')">
    <div class="hero-content">
        <h1 class="hero-title">RÉCUPÉREZ DES<br> 
            DÉLICES AVANT<br> 
            QU'ILS NE SOIENT<br> 
            PERDUS</h1>
        <p>Foodama est une entreprise engagée dont l’objectif est d’inciter et d’aider chacun à réduire le gaspillage alimentaire.</p>
        <div class="hero-buttons">
            <a href="<?php echo get_permalink(get_page_by_path('seconnecter')); ?>" class="btn">
                <button>Se connecter</button>
            </a>
            <a href="<?php echo get_permalink(get_page_by_path('inscriresoncommerce')); ?>" class="btn">
                <button>Inscrire son commerce</button>
            </a>
        </div>
    </div>
</section>

<section class="center-logo">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/FOODAMA-4.png" alt="Logo Foodama" class="centered-logo">
    </div>
</section>

<section class="mission">
    <div class="mission-stats">
        <img src="<?php echo get_template_directory_uri(); ?>/images/150000.png" alt="150 000 repas sauvés" class="mission-image">
    </div>
    <div class="mission-text">
        <h3 class="mission-title">Notre mission</h3>
        <h2 class="mission-subtitle">RIEN N'EST PERDU !</h2>
        <p class="mission-description">
            Lutter ensemble contre le gaspillage avec des solutions efficaces, innovantes et responsables, pour le bien de tous.<br>
            De la gestion intelligente des surplus à la valorisation des produits invendus, tout est réutilisé !
        </p>
        <a href="<?php echo get_permalink(get_page_by_path('sinscrire')); ?>" class="mission-button-link">
            <button class="mission-button">S'inscrire !</button>
        </a>
    </div>
</section>

<!-- Section Offres du Jour -->
<section class="offers">
    <h2 class="section-title">OFFRES DU JOUR</h2>
    <div class="scrollable-container">
        <?php
        $args = [
            'post_type' => 'cartes',
            'posts_per_page' => -1, // Affiche tous les articles
            'order' => 'ASC',
        ];
        $cartes_query = new WP_Query($args);

        if ($cartes_query->have_posts()) :
            while ($cartes_query->have_posts()) : $cartes_query->the_post();
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
            echo '<p>Aucune carte disponible.</p>';
        endif;
        ?>
    </div>
</section>

<!-- Section Recommandé pour Vous -->
<section class="recommendations">
    <h2 class="section-title">RECOMMANDÉ POUR VOUS</h2>
    <div class="scrollable-container">
        <?php
        $recommande_query = new WP_Query(array(
            'category_name' => 'recommande',
            'posts_per_page' => -1,
        ));

        if ($recommande_query->have_posts()) :
            while ($recommande_query->have_posts()) : $recommande_query->the_post();
        ?>
            <div class="recommendation-card">
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
                    <a href="<?php echo get_permalink(get_page_by_path('commander-17h')); ?>" class="offer-button-link">Commander</a>
                </button>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucun élément recommandé pour le moment.</p>';
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const banner = document.getElementById('cookie-banner');
        const acceptButton = document.getElementById('accept-cookies');
        const rejectButton = document.getElementById('reject-cookies');
        const cookieName = 'cookies_accepted';

        // Fonction pour vérifier si un cookie est défini
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        // Afficher la bannière si le cookie n'est pas défini
        if (!getCookie(cookieName)) {
            banner.style.display = 'block';
        }

        // Définir le cookie et cacher la bannière
        acceptButton.addEventListener('click', function() {
            document.cookie = `${cookieName}=true; path=/; max-age=${60 * 60 * 24 * 365}`;
            banner.style.display = 'none';
        });

        // Refuser les cookies et cacher la bannière
        rejectButton.addEventListener('click', function() {
            document.cookie = `${cookieName}=false; path=/; max-age=${60 * 60 * 24 * 365}`;
            banner.style.display = 'none';
        });
    });
</script>


<?php get_footer(); ?>

