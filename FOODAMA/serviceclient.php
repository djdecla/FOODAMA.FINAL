<?php
/* Template Name: serviceclient */
get_header();
?>

<!-- Conteneur principal -->
<div class="serviceclient-container">
    <!-- Image de superposition -->
    <div class="serviceclient-header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imageserviceclient.png" alt="Service Client" class="serviceclient-header-image">
    </div>

    <!-- Section principale -->
    <div class="serviceclient-content">
        <div class="serviceclient-column">
            <h2 class="serviceclient-section-title">Général</h2>
            <div class="serviceclient-item">
                <button class="serviceclient-accordion">Comment fonctionne Foodama ?</button>
                <div class="serviceclient-panel">
                    <p>Les commerçants mettent en ligne leurs invendus alimentaires. Vous pouvez les acheter à prix réduit via notre site, puis les récupérer directement dans nos points relais sur Bruxelles.</p>
                </div>
            </div>
            

        <div class="serviceclient-column">
            <h2 class="serviceclient-section-title">FAQ</h2>
            <div class="serviceclient-item">
                <button class="serviceclient-accordion">Comment m’inscrire ?</button>
                <div class="serviceclient-panel">
                    <p>Vous pouvez vous inscrire facilement via votre adresse e-mail. "S'inscrire" se trouve dans la page d'accueil en bas de notre mission.</p>
                </div>
            </div>
            <div class="serviceclient-item">
                <button class="serviceclient-accordion">Pourquoi rejoindre Foodama en tant que commerçant ?</button>
                <div class="serviceclient-panel">
                    <p>Foodama vous aide à réduire le gaspillage alimentaire, à attirer de nouveaux clients.</p>
                </div>
            </div>
        </div>
            <div class="serviceclient-item">
                <button class="serviceclient-accordion">Comment passer commande ?</button>
                <div class="serviceclient-panel">
                    <p>Une fois inscrit, sélectionnez un commerçant ou une catégorie, choisissez et récupérez votre commande à l'heure indiquée.</p>
                </div>
            </div>
        </div>
        
        

        <div class="serviceclient-column">
            <h2 class="serviceclient-section-title">Contactez-nous</h2>
            <div class="serviceclient-item">
                <button class="serviceclient-accordion">Que faire si je rencontre un problème technique ?</button>
                <div class="serviceclient-panel">
                    <p>Contactez-nous via notre numéro de téléphone +32 1 23 45 67 ou envoyez un e-mail à support@foodama.com. Nous reviendrons vers vous rapidement.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image en bas à droite -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/serviceoperator.png" alt="Customer Service" class="serviceclient-footer-image">
</div>

<!-- Inclusion du script JavaScript directement dans le fichier -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const accordions = document.querySelectorAll(".serviceclient-accordion");
        accordions.forEach((accordion) => {
            accordion.addEventListener("click", function () {
                this.classList.toggle("active");
                const panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        });
    });
</script>

<?php get_footer(); ?>
