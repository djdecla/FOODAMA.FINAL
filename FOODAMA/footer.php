<footer class="footer-container">
    <div class="footer-content">
      <!-- Colonne 1 : Texte en majuscules + Mentions légales -->
      <div class="footer-column footer-left">
        <p class="footer-title">
          RÉCUPÉREZ DES DÉLICES<br>
          AVANT QU'ILS NE SOIENT<br>
          PERDUS
        </p>
        <a href="<?php echo get_permalink(get_page_by_path('mentionslegales')); ?>" class="footer-link">Mentions Légales</a>

      </div>
  
      <!-- Colonne 2 : Inscrire, Se connecter, Aide -->
      <div class="footer-column footer-secondary">
      <a href="<?php echo get_permalink(get_page_by_path('inscriresoncommerce')); ?>" class="footer-link">Inscrire son commerce</a>
      <a href="<?php echo get_permalink(get_page_by_path('seconnecter')); ?>"class="footer-link">Se connecter</a>
      <a href="<?php echo get_permalink(get_page_by_path('serviceclient')); ?>" class="footer-link">Aide</a>
      </div>
  
      <!-- Logo au centre -->
      <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/FOODAMA-5.png" alt="Logo Foodama" class="logo-image">
      </div>
  
      <!-- Colonne 3 : Les plus recherchés -->
      <div class="footer-column footer-right">
        <p class="footer-title">Les plus recherchés</p>
        <a href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>#supermarches" class="footer-link footer-light">Okay</a>
<a href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>#supermarches" class="footer-link footer-light">Carrefour Express</a>

      </div>
  
      <!-- Colonne 4 : Quick, Exki, O'tacos -->
      <div class="footer-column footer-right">
      <a href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>#fastfood" class="footer-link footer-light">Quick</a>

      <a href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>#restaurants" class="footer-link footer-light">Makifornia</a>

      <a href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>#pret-de-chez-vous" class="footer-link footer-light">Délitraiteur</a>

      </div>
    </div>
  
    <!-- Icônes Facebook/Instagram en haut à droite -->
<div class="footer-social" style="position: absolute; top: 10px; right: 20px;">
    <a href="https://www.instagram.com/foodama2024/profilecard/?igsh=bDJ0aHdnbXRjZXp6" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/facebookinsta.png" 
             alt="Instagram et Facebook" 
             style="width: 100px; height: auto; object-fit: contain;">
    </a>
</div>


  </footer>

<?php wp_footer(); ?>
</body>
</html>