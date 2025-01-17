document.addEventListener('DOMContentLoaded', () => {
    const restaurants = [
        { name: "Poke House", location: "Merode" },
        { name: "Bel Chicken", location: "Ixelles" },
        { name: "Taj Mahal", location: "Schaerbeek" },
        { name: "Quick", location: "Westland" },
        { name: "Okay City", location: "Molenbeek" },
        { name: "Cora", location: "Anderlecht" },
        { name: "Carrefour Express", location: "Saint Gilles" },
        { name: "Délitraiteur", location: "Stockel" },
        { name: "Night & Day", location: "Bourse" },
        { name: "Makifornia", location: "Boniface" },
        { name: "Sushi Shop", location: "Ixelles" },
        { name: "Starbucks", location: "Porte de Namur" },
        { name: "Di Russo", location: "Uccle" },
        { name: "Chamas Tacos", location: "Debrouckère" },
        { name: "Makifornia", location: "Ma Campagne" },
        { name: "Pizza Hut", location: "Schaerbeek" },
        { name: "Frit Flagey", location: "Ixelles" },
        { name: "Boco", location: "Saint-Gilles" },
        { name: "Bagel Corner", location: "Laeken" },
        { name: "Panos", location: "Bruxelles Nord" },
        { name: "Paul", location: "Bruxelles Midi" },
        { name: "EXKI", location: "Ixelles" },
        { name: "Le Pain Quotidien", location: "Schuman" },
        { name: "Domino's Pizza", location: "Evere" },
        { name: "Snack Istanbul", location: "Anderlecht" },
        { name: "KFC", location: "Westland" },
        { name: "Chipotle", location: "Porte de Namur" },
        { name: "Burgers & Fries", location: "Schuman" },
        { name: "Friture René", location: "Anderlecht" },
        { name: "Asian Delight", location: "Flagey" },
        { name: "Waffle Factory", location: "Grand Place" },
        { name: "McDonald's", location: "Schaerbeek" },
        { name: "O'Tacos", location: "Uccle" },
        { name: "Basilic & Co", location: "Etterbeek" },
        { name: "Five Guys", location: "Toison d'Or" },
        { name: "Pizza Napoli", location: "Laeken" },
    ];

    const searchInput = document.getElementById('search-restaurant');
    const restaurantsList = document.getElementById('restaurants-list');

    const displayRestaurants = (filteredRestaurants) => {
        restaurantsList.innerHTML = "";
        filteredRestaurants.forEach((restaurant) => {
            const item = document.createElement('div');
            item.classList.add('cartes-item');
            item.innerHTML = `
                <div class="cartes-name">${restaurant.name}</div>
                <div class="cartes-location">${restaurant.location}</div>
            `;
            restaurantsList.appendChild(item);
        });
    };

    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        const filteredRestaurants = restaurants.filter((restaurant) =>
            restaurant.name.toLowerCase().includes(query) ||
            restaurant.location.toLowerCase().includes(query)
        );
        displayRestaurants(filteredRestaurants);
    });

    displayRestaurants(restaurants); // Affiche tous les restaurants au chargement
});
