<?php
/* Template Name: mentionslegales */
get_header();
?> 

<!-- Conteneur avec image d'arrière-plan -->
<div class="mentions-background-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="arrière fond" class="mentions-bg-image">
    
    <!-- Rectangle superposé -->
    <div class="mentions-overlay-rectangle">
        <!-- Contenu principal -->
        <div class="mentions-main-content">
            <!-- Titre principal -->
            <h1 class="mentions-title">Mentions légales</h1>

            <!-- Contenu des mentions légales -->
            <section class="mentions-content">
                <p><strong>Foodama</strong></p>
                <p><strong>Foodama S.A</strong></p>
                <p>Adresse postale du siège social: Rue des saveurs 123, 1000 Bruxelles</p>
                <p>Téléphone: +32 2 123 45 67</p>
                <p>E-mail: <a href="mailto:contact@foodama.be">contact@foodama.be</a></p>
                <p>Numéro BCE (Banque-Carrefour des Entreprises): 0123.456.789</p>
                <p>Numéro de TVA intracommunautaire: BE0123.456.789</p>
                <p><strong>Titre professionnel:</strong> Plateforme de mise en relation dans le secteur alimentaire.</p>
                <p><strong>Règles professionnelles applicables:</strong></p>
                <p>La plateforme se conforme au Code de Conduite HoReCa disponible à l’adresse suivante : <a href="https://www.horecabelgium.be/code-de-conduite" target="_blank">https://www.horecabelgium.be/code-de-conduite</a>.</p>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
