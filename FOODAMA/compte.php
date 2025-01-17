<?php
/* Template Name:compte */
get_header();
?> 
<!-- Contenu principal -->
<main class="compte-content">
    <!-- Section principale avec logo -->
    <section class="compte-hero">
      <div class="compte-intro">
      <h1 class="compte-title">
        
    Des plats<br>
    sauvés, délicieux<br>
    et accessibles<br>
    en un clic !
</h1>

<div class="compte-buttons">
    <!-- Bouton Se connecter -->
    <a href="<?php echo get_permalink(get_page_by_path('seconnecter')); ?>" class="compte-button-link">
        <button class="compte-button">Se connecter</button>
    </a>

    <!-- Bouton S'inscrire -->
    <a href="<?php echo get_permalink(get_page_by_path('sinscrire')); ?>" class="compte-button-link">
        <button class="compte-button">S'inscrire</button>
    </a>
</div>

      
      <div class="compte-logo">
  
        </div>
      </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/comptelogo.png" alt="Logo Foodama" class="logo-principal">

  </div>
</div>



    </section>

    <!-- Section sur le gaspillage alimentaire -->
    <section class="responsibility-section">
      <h2 class="responsibility-title">Transformez vos repas en opportunité responsable</h2>
      <p class="responsibility-subtitle">Réduisez le gaspillage alimentaire tout en profitant de plats délicieux</p>
      <div class="responsibility-content">
      <img src="<?php echo get_template_directory_uri(); ?>/images/vert.jpg" alt="Image repas responsable" class="image-vert"> 
<img src="<?php echo get_template_directory_uri(); ?>/images/rose.jpg" alt="Image repas responsable" class="image-rose">
        <div class="responsibility-text">
          <p>
            Avec FOODAMA, nous vous proposons une solution simple et efficace pour consommer de manière plus responsable.<br><br>
            Sur notre plateforme, vous pourrez commander des plats et aliments qui, pourtant en leur prime, n’attendent que votre attention afin de réduire les pertes alimentaires disponibles à Bruxelles.
          </p>
        </div>
      </div>
    </section>

    <!-- Section sur commande et collect -->
    <section class="commande-section">
      <h2 class="commande-title">Commandez, collectez et savourez</h2>
      <p class="commande-subtitle">Des plats prêts pour vous, près de chez vous</p>
      <div class="commande-content">
        <div class="commande-text">
          <p>
            Avec FOODAMA, il vous suffit de choisir les plats ou aliments disponibles le jour même sur notre site.<br>
            Sélectionnez le point relais le plus proche de chez vous, et passez récupérer vos commandes à la fin de la journée.<br><br>
            Ces points, similaires à des boîtes de collecte, sont exclusivement réservés aux collaborateurs de notre plateforme.
          </p>
        </div>
        <div class="commande-content">
    <img src="<?php echo get_template_directory_uri(); ?>/images/gauche.JPG" alt="Image panier responsable" class="choisir-image-left">
    <img src="<?php echo get_template_directory_uri(); ?>/images/milieu.JPG" alt="Image panier responsable" class="choisir-image-center">
    <img src="<?php echo get_template_directory_uri(); ?>/images/droite.JPG" alt="Image panier responsable" class="choisir-image-right">
</div>

      </div>
    </section>

    <!-- Section sur pourquoi choisir Foodama -->
    <section class="choisir-section">
      <h2 class="choisir-title">Pourquoi choisir FOODAMA ?</h2>
      <div class="choisir-content">
      <img src="<?php echo get_template_directory_uri(); ?>/images/velo.JPG" alt="Image panier responsable" class="vélo-image">
        <div class="choisir-text">
          <ul>
            <li><strong>Réduisez le gaspillage alimentaire</strong> : Donnez une seconde vie aux plats et aliments en fin de cycle, tout en profitant de prix réduits.</li>
            <li><strong>Proximité et simplicité</strong> : Grâce à nos points relais répartis dans les quartiers de Bruxelles, récupérer votre repas n’a jamais été aussi facile.</li>
            <li><strong>Soutenez une consommation locale et responsable</strong> : Chaque commande est un pas de plus vers un modèle de consommation durable et collaboratif.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section finale -->
    <section class="final-section">
      <h2 class="final-title">Rejoignez FOODAMA et découvrez une nouvelle façon de vous restaurer, responsable et pratique.</h2>
    </section>
  </main>
  <?php get_footer(); ?>