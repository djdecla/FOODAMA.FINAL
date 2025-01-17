<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FBF7EC; /* Couleur beige */
        }

        .navbar {
            background-color: #FBF7EC !important; /* Couleur beige pour la barre de navigation */
            border-bottom: 1px solid #6C8B73; /* Ajout d'une bordure pour démarquer */
        }

        .navbar .nav-link {
            color: #6C8B73; /* Couleur des liens */
            font-size: 16px;
        }

        .navbar .nav-link:hover {
            color: #D46A6A; /* Couleur au survol */
        }

        .navbar-brand {
            font-size: 18px;
        }

        .navbar-toggler {
            border: none;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input[type="search"] {
            border: 1px solid #6C8B73;
            border-radius: 20px;
            padding: 5px 10px;
            margin-right: 5px;
        }

        .search-form button {
            background-color: #FBF7EC; /* Couleur beige pour le fond du bouton */
            border: none;
            color: #6C8B73;
        }

        /* Responsive pour mobiles */
        @media (max-width: 992px) {
            .navbar-nav {
                flex-direction: column; /* Les liens passent en colonne */
                gap: 10px; /* Espacement réduit */
                align-items: flex-start; /* Aligne les liens à gauche */
            }

            .nav-link {
                font-size: 14px; /* Texte réduit */
            }

            .search-form {
                margin-top: 10px;
                width: 100%;
                justify-content: flex-start;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header navbar navbar-expand-lg navbar-light bg-light py-3">
        <div class="container">
            <!-- Logo et titre du site -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/LOGOFOODAMA.png" alt="Foodama logo" class="small-logo me-2">
                <span class="site-title">FOODAMA</span>
            </a>

            <!-- Bouton pour la navigation mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url('/'); ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('parcourir')); ?>">Parcourir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('pointrelais')); ?>">Carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('commentaires')); ?>">Commentaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('compte')); ?>">Compte</a>
                    </li>
                </ul>

                

                <!-- Formulaire de recherche -->
                <form class="search-form ms-3" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="search" name="s" placeholder="Rechercher un resto" aria-label="Rechercher">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.099zm-5.442 1.25a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
