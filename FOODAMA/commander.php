<?php
/* Template Name: commander */
get_header();
?>

<!-- Conteneur principal -->
<div class="commander-container">
    <!-- Image d'arrière-plan -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="Background" class="commander-bg-image">

    <!-- Rectangle superposé -->
    <div class="commander-overlay">
        <!-- Section de l'article -->
        <div class="commander-article">
            <div class="commander-article-details">
                <p class="commander-article-time">À collecter aujourd'hui entre 20:00 et 22:00</p>
            </div>
        </div>

        <!-- Contenu divisé en deux colonnes -->
        <div class="commander-content">
            <!-- Colonne gauche : formulaire de confirmation -->
            <div class="commander-form">
                <h2 class="commander-form-title">Confirmer votre commande</h2>
                <form action="" method="post" class="commander-confirmation-form">
                    <label for="name" class="commander-label">Nom complet :</label>
                    <input type="text" id="name" name="name" class="commander-input" placeholder="Entrez votre nom complet" required>

                    <label for="email" class="commander-label">E-mail :</label>
                    <input type="email" id="email" name="email" class="commander-input" placeholder="Entrez votre e-mail" required>

                    <label for="pickup-time" class="commander-label">Sélectionnez un point de collecte :</label>
                    <select id="pickup-point" name="pickup-point" class="pickup-select" required>
                        <option value="" disabled selected>Recherchez un point relais...</option>
                        <option value="Point relais Gare Centrale">Point relais Gare Centrale</option>
                        <option value="Point relais Louise">Point relais Louise</option>
                        <option value="Point relais Flagey">Point relais Flagey</option>
                        <option value="Point relais Ixelles Châtelain">Point relais Ixelles Châtelain</option>
                        <option value="Point relais Uccle Saint-Job">Point relais Uccle Saint-Job</option>
                        <option value="Point relais Schaerbeek Helmet">Point relais Schaerbeek Helmet</option>
                        <option value="Point relais Woluwe-Saint-Pierre Stockel">Point relais Woluwe-Saint-Pierre Stockel</option>
                        <option value="Point relais Etterbeek La Chasse">Point relais Etterbeek La Chasse</option>
                        <option value="Point relais Saint-Gilles Parvis">Point relais Saint-Gilles Parvis</option>
                        <option value="Point relais Anderlecht Saint-Guidon">Point relais Anderlecht Saint-Guidon</option>
                        <option value="Point relais Jette Place Reine Astrid">Point relais Jette Place Reine Astrid</option>
                        <option value="Point relais Koekelberg Basilique">Point relais Koekelberg Basilique</option>
                        <option value="Point relais Molenbeek Maritime">Point relais Molenbeek Maritime</option>
                        <option value="Point relais Laeken Bockstael">Point relais Laeken Bockstael</option>
                        <option value="Point relais Evere Bordet">Point relais Evere Bordet</option>
                        <option value="Point relais Auderghem Beaulieu">Point relais Auderghem Beaulieu</option>
                        <option value="Point relais Watermael-Boitsfort">Point relais Watermael-Boitsfort</option>
                        <option value="Point relais Woluwe-Saint-Lambert Tomberg">Point relais Woluwe-Saint-Lambert Tomberg</option>
                        <option value="Point relais Bruxelles Nord">Point relais Bruxelles Nord</option>
                        <option value="Point relais Haren Vilvorde">Point relais Haren Vilvorde</option>
                    </select>

                    <label for="pickup-time" class="commander-label">Heure de collecte :</label>
                    <select id="pickup-time" name="pickup-time" class="commander-select" required>
                        <option value="20:00-20:30">20:00 - 20:30</option>
                        <option value="20:30-21:00">20:30 - 21:00</option>
                        <option value="21:00-21:30">21:00 - 21:30</option>
                        <option value="21:30-22:00">21:30 - 22:00</option>
                    </select>
                    <p class="retenue-text">
                        Dès que vous confirmerez votre commande, vous recevrez un e-mail contenant tous les détails.
                    </p>
                    <button type="submit" class="commander-button">Confirmer la commande</button>
                </form>
            </div>

            <!-- Colonne droite : carte interactive -->
            <label for="map" class="commander-label">Trouvez votre point relais :</label>
          <!-- Conteneur pour la carte interactive -->
          <div id="map" style="height: 600px; width: 100%;"></div>
    </div>
</div>

<?php get_footer(); ?>


<!-- Intégration de Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Initialisation de la carte
    var map = L.map('map').setView([50.8467, 4.3572], 12); // Position centrée sur Bruxelles

    // Ajout des tuiles OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Points relais
    var pointsRelais = [
        { name: "Point relais Gare Centrale", lat: 50.8467, lng: 4.3572 },
        { name: "Point relais Louise", lat: 50.8331, lng: 4.3571 },
        { name: "Point relais Flagey", lat: 50.827, lng: 4.3724 },
        { name: "Point relais Ixelles Châtelain", lat: 50.8253, lng: 4.3648 },
        { name: "Point relais Uccle Saint-Job", lat: 50.8002, lng: 4.3657 },
        { name: "Point relais Schaerbeek Helmet", lat: 50.8635, lng: 4.3958 },
        { name: "Point relais Woluwe-Saint-Pierre Stockel", lat: 50.8424, lng: 4.457 },
        { name: "Point relais Etterbeek La Chasse", lat: 50.8368, lng: 4.3958 },
        { name: "Point relais Saint-Gilles Parvis", lat: 50.8319, lng: 4.3455 },
        { name: "Point relais Anderlecht Saint-Guidon", lat: 50.8357, lng: 4.3096 },
        { name: "Point relais Jette Place Reine Astrid", lat: 50.886, lng: 4.3247 },
        { name: "Point relais Koekelberg Basilique", lat: 50.8647, lng: 4.3206 },
        { name: "Point relais Molenbeek Maritime", lat: 50.8557, lng: 4.3361 },
        { name: "Point relais Laeken Bockstael", lat: 50.8745, lng: 4.349 },
        { name: "Point relais Evere Bordet", lat: 50.8766, lng: 4.3938 },
        { name: "Point relais Auderghem Beaulieu", lat: 50.8152, lng: 4.4204 },
        { name: "Point relais Watermael-Boitsfort", lat: 50.8037, lng: 4.4074 },
        { name: "Point relais Woluwe-Saint-Lambert Tomberg", lat: 50.842, lng: 4.4204 },
        { name: "Point relais Bruxelles Nord", lat: 50.8622, lng: 4.356 },
        { name: "Point relais Haren Vilvorde", lat: 50.8998, lng: 4.4304 }
    ];

    // Ajout des marqueurs sur la carte
    pointsRelais.forEach(function(point) {
        var marker = L.marker([point.lat, point.lng]).addTo(map);
        marker.bindPopup(`<b>${point.name}</b><br><button onclick="window.location.href='#';">Voir plus</button>`);
    });
</script>


