<?php
/* Template Name: inscriresoncommerce */
get_header();
?> 

<!-- Conteneur avec image d'arrière-plan -->
<div class="background-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="arrière fond" class="sbackground-container">
    
    <!-- Rectangle superposé -->
    <div class="overlay-rectangle"></div>

    <!-- Contenu principal -->
    <div class="main-content">
        <!-- Titre principal -->
        <h1 class="seconnecter-title">Inscrire son commerce</h1>

        <!-- Formulaire de connexion -->
        <section class="login-section">
            <!-- Champ Nom d'établissement -->
            <label for="email" class="login-label">Nom d'établissement</label>
            <input type="text" id="email" name="email" class="login-input" placeholder="Entrez votre e-mail">

            <!-- Champ Type d’établissement (restaurant, supermarché, boulangerie, etc.) -->
            <label for="password" class="login-label">Type d’établissement (restaurant, supermarché, boulangerie, etc.)</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Entrez votre mot de passe">

             <!-- Champ Adresse complète -->
             <label for="password" class="login-label">Adresse complète</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Entrez votre mot de passe">

             <!-- Champ Numéro de téléphone professionnel -->
             <label for="password" class="login-label">Numéro de téléphone professionnel</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Entrez votre mot de passe">

             <!-- Champ Adresse e-mail de contact -->
             <label for="password" class="login-label">Adresse e-mail de contact</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Entrez votre mot de passe">

            <!-- Champ Numéro d’entreprise SIRETt -->
            <label for="password" class="login-label">Numéro d’entreprise SIRET</label>
            <input type="password" id="password" name="password" class="login-input" placeholder="Entrez votre mot de passe">
    

            <!-- Bouton Se connecter -->
            <a href="<?php echo get_permalink(get_page_by_path('inscriptionretenue')); ?>" class="login-button-link">
                <button class="login-button">Envoyer la demande</button>
            </a>
        </section>
    </div>
</div>

<?php get_footer(); ?>
