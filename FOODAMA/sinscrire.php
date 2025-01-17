<?php
/* Template Name: sinscrire */
get_header(); 
?> 

<!-- Conteneur avec image d'arrière-plan -->
<div class="sinscrire-background-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="arrière fond" class="sinscrire-background-image">
    
    <!-- Rectangle superposé -->
    <div class="sinscrire-overlay-rectangle"></div>

    <!-- Contenu principal -->
    <div class="sinscrire-main-content">
        <!-- Titre principal -->
        <h1 class="sinscrire-title">S'inscrire !</h1>

        <!-- Formulaire d'inscription -->
        <section class="sinscrire-form-section">
            <div class="sinscrire-form-row">
                <div class="sinscrire-form-group">
                    <label for="prenom" class="sinscrire-label">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="sinscrire-input" placeholder="Prénom">
                </div>
                <div class="sinscrire-form-group">
                    <label for="nom" class="sinscrire-label">Nom</label>
                    <input type="text" id="nom" name="nom" class="sinscrire-input" placeholder="Nom">
                </div>
            </div>
            
            <div class="sinscrire-form-row">
                <div class="sinscrire-form-group">
                    <label for="email" class="sinscrire-label">E-mail</label>
                    <input type="email" id="email" name="email" class="sinscrire-input" placeholder="E-mail">
                </div>
                <div class="sinscrire-form-group">
                    <label for="adresse" class="sinscrire-label">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="sinscrire-input" placeholder="Adresse">
                </div>
            </div>

            <div class="sinscrire-form-row">
                <div class="sinscrire-form-group">
                    <label for="numero" class="sinscrire-label">Numéro</label>
                    <input type="text" id="numero" name="numero" class="sinscrire-input" placeholder="Numéro">
                </div>
                <div class="sinscrire-form-group">
                    <label for="codepostal" class="sinscrire-label">Code postal</label>
                    <input type="text" id="codepostal" name="codepostal" class="sinscrire-input" placeholder="Code postal">
                </div>
            </div>

            <div class="sinscrire-form-row">
                <div class="sinscrire-form-group">
                    <label for="telephone" class="sinscrire-label">Numéro de téléphone</label>
                    <input type="text" id="telephone" name="telephone" class="sinscrire-input" placeholder="Numéro de téléphone">
                </div>
                <div class="sinscrire-form-group">
                    <label for="naissance" class="sinscrire-label">Date de Naissance</label>
                    <input type="date" id="naissance" name="naissance" class="sinscrire-input">
                </div>
            </div>

            <div class="sinscrire-form-row">
                <div class="sinscrire-form-group">
                    <label for="motdepasse" class="sinscrire-label">Mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" class="sinscrire-input" placeholder="Mot de passe">
                </div>
                <div class="sinscrire-form-group">
                    <label for="confirmermotdepasse" class="sinscrire-label">Confirmer mot de passe</label>
                    <input type="password" id="confirmermotdepasse" name="confirmermotdepasse" class="sinscrire-input" placeholder="Confirmer mot de passe">
                </div>
            </div>

            <label class="sinscrire-checkbox-label">
    <input type="checkbox" name="acceptation" class="sinscrire-checkbox">
    J'accepte les <a href="<?php echo get_permalink(get_page_by_path('politique-de-confidentialite')); ?>" target="_blank" class="link-terms">conditions générales</a> et la <a href="<?php echo get_permalink(get_page_by_path('politique-de-confidentialite')); ?>" target="_blank" class="link-privacy">politique de confidentialité</a>.
</label>

            <label class="sinscrire-checkbox-label">
                <input type="checkbox" name="promotionnels" class="sinscrire-checkbox">
                Oui, je souhaite recevoir des mails promotionnels concernant les offres<br>proche de chez moi
            </label>  

            <!-- Bouton Soumettre -->
            <div class="sinscrire-button-container">
                <a href="<?php echo get_permalink(get_page_by_path('compteconnecte')); ?>" class="connect-button-link">
                    <button class="connect-button">Soumettre</button>
                </a>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
