<?php
/* Template Name: politique-de-confidentialite */
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
        <h1 class="sinscrire-title">Politique de Confidentialité</h1>

        <!-- Section de texte -->
        <section class="sinscrire-form-section">
            <p class="sinscrire-text">
                Chez Foodama, la protection de vos données personnelles <br> est essentielle. Cette politique explique comment nous collectons, <br> utilisons et protégeons vos informations.
            </p>

            <h2 class="sinscrire-subtitle">Données collectées</h2>
            <p class="sinscrire-text">
                Nous collectons uniquement les données nécessaires pour fournir nos services,<br> telles que votre nom, adresse e-mail, et préférences alimentaires.<br> Ces données sont sécurisées et ne sont jamais partagées sans votre consentement.
            </p>

            <h2 class="sinscrire-subtitle">Utilisation des cookies</h2>
            <p class="sinscrire-text">
                Les cookies sont utilisés pour améliorer votre expérience <br>sur notre site. Vous pouvez accepter ou refuser leur utilisation <br>via la bannière affichée lors de votre première visite.
            </p>

            <h2 class="sinscrire-subtitle">Vos droits</h2>
            <p class="sinscrire-text">
                Vous avez le droit de consulter, modifier ou supprimer vos données personnelles<br> à tout moment. Pour toute demande, contactez-nous<br> à l'adresse suivante : support@foodama.com.
            </p>

            <h2 class="sinscrire-subtitle">Modifications</h2>
            <p class="sinscrire-text">
                Nous pouvons mettre à jour cette politique pour refléter des modifications <br>légales ou techniques. Les changements seront communiqués sur cette page.
            </p>

            <p class="sinscrire-subtitle">Merci de faire confiance à Foodama.</p>
        </section>
    </div>
</div>

<?php get_footer(); ?>
