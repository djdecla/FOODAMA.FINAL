<?php
/* Template Name: commentaires */
get_header();
?> 

  <!-- Conteneur avec image d'arrière-plan -->
  <div class="background-container">
  <img src="<?php echo get_template_directory_uri() ?>/images/ARRIERE FOND.png"  alt="arrière fond" class="sbackground-container">
    <!-- Rectangle superposé -->
    <div class="overlay-rectangle"></div>

    <!-- Contenu principal -->
    <div class="main-content">
      <!-- Titre principal -->
      <section class="comments-hero">
        <h1 class="comments-title">VOTRE AVIS COMPTE !</h1>
      </section>

      <!-- Résumé des avis -->
      <section class="comments-summary">
        <div class="summary-left">
          <h2 class="summary-title">RÉSUMÉ DES AVIS SUR FOODAMA</h2>
          <ul class="ratings-summary">
            <li><span>5</span> ★★★★★ <div class="ratings-bar" style="width: 80%;"></div></li>
            <li><span>4</span> ★★★★☆ <div class="ratings-bar" style="width: 60%;"></div></li>
            <li><span>3</span> ★★★☆☆ <div class="ratings-bar" style="width: 30%;"></div></li>
            <li><span>2</span> ★★☆☆☆ <div class="ratings-bar" style="width: 10%;"></div></li>
            <li><span>1</span> ★☆☆☆☆ <div class="ratings-bar" style="width: 5%;"></div></li>
          </ul>
          <p class="average-rating">4.7 ★★★★☆ (560 avis)</p>
        </div>
      </section>

      <!-- Donner un avis -->
      <section class="give-review">
        <h2 class="review-title">DONNER UNE NOTE ET UN AVIS</h2>
        <p class="review-subtitle">Partagez votre expérience afin d'aider les autres</p>
        <div class="star-rating">★  ★  ★  ★  ★</div>
        <textarea class="review-textarea" placeholder="Écrire un message..."></textarea>
        <button class="submit-button">Soumettre</button>
      </section>

      <!-- Liste des avis -->
      <section class="user-reviews">
        <h2 class="reviews-title">VOS AVIS</h2>
        <div class="review-card">
          <p class="review-user"><strong>Marc Gisak</strong> ★★★★★</p>
          <p class="review-text">Incroyable découverte ! Non seulement je fais des économies, mais je contribue à réduire le gaspillage. Bravo pour cette initiative écologique !</p>
        </div>
        <div class="review-card">
          <p class="review-user"><strong>Tina Fika</strong> ★★★★☆</p>
          <p class="review-text">Le concept est chouette, mais j'ai récupéré mon panier tard, et certains produits avaient une odeur un peu douteuse. Je retenterai pour voir si c'était juste un mauvais jour.</p>
        </div>
        <div class="review-card">
          <p class="review-user"><strong>Charlotte Minel</strong> ★★★★★</p>
          <p class="review-text">J'ai récupéré plusieurs viennoiseries, une baguette et un petit gâteau. Tout était délicieux !</p>
        </div>
      </section>
    </div>
  </div>
  <?php get_footer(); ?>
