<?php
/* Template Name: seconnecter */
get_header();
?> 

<!-- Conteneur avec image d'arrière-plan -->
<div class="connect-page-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="arrière fond" class="connect-bg-image">
    
    <!-- Rectangle superposé -->
    <div class="connect-overlay">
        <!-- Contenu principal -->
        <div class="connect-content">
            <!-- Titre principal -->
            <h1 class="connect-title">Se connecter</h1>

            <!-- Formulaire de connexion -->
            <section class="connect-form">
                <!-- Champ E-mail -->
                <label for="email" class="connect-label">E-mail</label>
                <input type="text" id="email" name="email" class="connect-input" placeholder="Entrez votre e-mail">

                <!-- Champ Mot de passe -->
                <label for="password" class="connect-label">Mot de passe</label>
                <input type="password" id="password" name="password" class="connect-input" placeholder="Entrez votre mot de passe">

                <!-- Bouton Se connecter -->
                <a href="<?php echo get_permalink(get_page_by_path('compteconnecte')); ?>" class="connect-button-link">
                    <button class="connect-button">Se connecter</button>
                </a>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
