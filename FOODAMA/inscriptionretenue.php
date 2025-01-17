<?php
/* Template Name: inscriptionretenue */
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
                Votre demande a bien été enregistrée. Nous reviendrons vers vous sous 48 heures à l'adresse e-mail que vous avez fournie.
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
