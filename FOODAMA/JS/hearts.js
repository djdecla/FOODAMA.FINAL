document.addEventListener('DOMContentLoaded', function () {
    // Sélectionne tous les boutons contenant les cœurs
    const heartButtons = document.querySelectorAll('.heart-button');

    // Ajoute un gestionnaire d'événement à chaque bouton cœur
    heartButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Trouve l'icône SVG à l'intérieur du bouton
            const heartIcon = button.querySelector('.heart-icon');
            if (heartIcon) {
                // Bascule la classe "filled" pour changer l'état visuel du cœur
                heartIcon.classList.toggle('filled');
            }
        });
    });
});
