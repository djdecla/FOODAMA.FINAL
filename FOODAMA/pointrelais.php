<?php
/* Template Name: pointrelais */
get_header();
?>

<!-- Conteneur principal -->
<div class="pointrelais-container">
    <!-- Image d'arrière-plan -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/ARRIERE FOND.png" alt="Arrière-plan" class="pointrelais-bg-image">

    <!-- Rectangle superposé -->
    <div class="pointrelais-overlay">
        <section class="carte-map">
            <h2 class="carte-title">Localisez les points relais autour de vous !</h2>

            <!-- Conteneur pour la carte interactive -->
            <div id="map" style="height: 600px; width: 100%;"></div>
        </section>
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
