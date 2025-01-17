<?php
/* Template Name: confirmerlacommande */
get_header();
?> 

<!-- Conteneur avec image d'arrière-plan -->
<div class="background-container-retenue">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="arrière fond" class="background-container-retenue-image">
    
    <!-- Rectangle superposé -->
    <div class="overlay-rectangle-retenue">
        <!-- Contenu principal -->
        <div class="main-content-retenue">
            <!-- Icône de validation -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/retenue.png" alt="Demande retenue" class="retenue-image">
            <!-- Texte d'information -->
            <p class="retenue-text">
            Votre commande a bien été enregistrée ! Vous recevrez un e-mail de confirmation contenant tous les détails de votre commande dans quelques instants. Merci de votre confiance et à bientôt dans votre point de collecte !
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
