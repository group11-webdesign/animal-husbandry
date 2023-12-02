// Wait for the DOM to be fully loaded before executing the script
document.addEventListener('DOMContentLoaded', function () {
    // Get the selected animal from the URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const selectedAnimal = urlParams.get('animal');

    // Update the selected animal text and image on the page
    const selectedAnimalElement = document.getElementById('selected-animal');
    const animalImageElement = document.getElementById('animal-image');

    if (selectedAnimalElement && animalImageElement) {
        selectedAnimalElement.innerText = selectedAnimal;

        // Set the image source based on the selected animal
        animalImageElement.src = getAnimalImageSource(selectedAnimal);

        // Add the "animal-image" class
        animalImageElement.classList.add('animal-image');
    }

    // Dynamically populate the food list based on the selected animal
    const foodList = getFoodList(selectedAnimal);
    populateFoodList(foodList);
});

// Function to get the food list for a given animal
function getFoodList(animal) {
    // Define the food list for each animal (replace with your actual data)
    const foodLists = {
        'Cattle': ['Hay', 'Silage', 'Grains', 'Vitamins', 'Protein supplements'],
        'Goat': ['Pasture', 'Hay', 'Grains','Pellets', 'Soybean' ],
        'Chicken': ['corn','wheat','oat'],
        'Pig': ['creep feed', 'grower feed'],
        'Fish': ['fish']
        // Add more animals and their respective food lists as needed
    };

    // Return the food list for the selected animal
    return foodLists[animal] || [];
}

// Function to populate the food list on the page
function populateFoodList(foodList) {
    const ul = document.querySelector('ul');
    
    // Create a list item for each food item and append it to the unordered list
    foodList.forEach(food => {
        const li = document.createElement('li');
        li.textContent = food;
        // Add a class to each list item
        li.classList.add('food-item'); // You can change 'food-item' to your desired class name
        // Attach a click event to each food item to show information when clicked
        li.onclick = function() {
            showFoodInformation(food);
        };
        ul.appendChild(li);
    });
}

function fetchFoodDetails(food) {
    // Fetch details from the JSON file
    fetch('https://raw.githubusercontent.com/hemmarhnuel/animal-feed-json/main/feed_details.json')
        .then(response => response.json())
        .then(data => {
            const foodInfoSection = document.getElementById('food-info');
            const foodDetailsElement = document.getElementById('food-details');

            // Check if the selected food exists in the data
            if (data[food]) {
                // Update the content with information about the selected food
                foodDetailsElement.innerHTML = `<h2>${food}</h2><p>${data[food].information}</p>`;
            } else {
                console.error(`Details for ${food} not found.`);
            }

             // Display the Food Information section
             foodInfoSection.style.display = 'block';
            })
            .catch(error => console.error('Error fetching food details:', error));
    }

// Function to get the image source for a given animal
function getAnimalImageSource(animal) {
    // Replace with the actual paths to your animal images
    const imagePaths = {
        'Cattle': '../assets/images/cattle.jpeg',
        'Goat': '../assets/images/goat.jpeg',
        'Chicken': '../assets/images/chickens.jpg',
        'Pig': '../assets/images/Pigs.jpg',
        'Fish': '../assets/images/Fish.jpg'
        // Add more animals and their respective image paths as needed
    };

    // Return the image source for the selected animal
    return imagePaths[animal] || 'default_image.jpg';
}