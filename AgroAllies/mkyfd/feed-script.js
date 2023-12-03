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
    // Define the food list for each animal with the new format
    const foodLists = {
        'Cattle': [
            {
                name: 'Hay',
                description: 'Dried grasses used as cattle feed',
                nutritionalContent: {
                    protein: 8,
                    fiber: 35,
                    fat: 2
                },
                storage: {
                    method: 'Store in dry, covered barn',
                    temperature: 'Less than 27C'
                },
                feeding: {
                    amount: 'Provide free-choice hay',
                    schedule: 'Available at all times'
                }
            },
            {
                name: 'Grain Mix',
                description: 'Blend of grains for energy',
                ingredients: [
                    { name: 'Corn', amount: '60%' },
                    { name: 'Barley', amount: '30%' },
                    { name: 'Wheat', amount: '10%' }
                ],
                nutritionalContent: {
                    protein: 12,
                    fiber: 4,
                    fat: 3
                },
                storage: {
                    method: 'Store in cool, dry container',
                    temperature: 'Less than 20C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: '5 lbs per day',
                    schedule: 'Twice daily'
                }
            }
        ],
        'Goat': [
            {
                name: 'Pasture Grazing',
                description: 'Access to a variety of natural grazing areas.',
                nutritionalContent: {
                    protein: 10,
                    fiber: 25,
                    fat: 5
                },
                feeding: {
                    method: 'Allow goats to graze freely',
                    schedule: 'Throughout the day'
                },
                additionalInfo: [
                    'Rotate grazing areas to promote diverse forage consumption and pasture health.',
                    'Monitor forage quality and supplement with additional feeds during lean seasons.',
                    'Ensure access to clean water sources for hydration.'
                ]
            },
            {
                name: 'Premium Hay Blend',
                description: 'A blend of high-quality dried grass varieties.',
                nutritionalContent: {
                    protein: 12,
                    fiber: 30,
                    fat: 3
                },
                storage: {
                    method: 'Store in a dry, well-ventilated area',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 60%'
                },
                feeding: {
                    amount: 'Provide as a primary forage source',
                    schedule: 'Available at all times'
                },
                additionalInfo: [
                    'Blend different grass varieties to provide a range of nutrients.',
                    'Store hay in a controlled environment to maintain freshness.',
                    'Implement a feeding strategy that accounts for nutritional diversity.'
                ]
            },
            {
                name: 'Nutrient-Rich Pellets',
                description: 'Compacted feed pellets with a balanced nutrient profile.',
                nutritionalContent: {
                    protein: 14,
                    fiber: 8,
                    fat: 6
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 20C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: 'Provide as a complete feed',
                    schedule: 'Twice daily'
                },
                additionalInfo: [
                    'Consider pellets with added minerals and vitamins to meet specific nutritional needs.',
                    'Adjust pellet amounts based on the goat\'s life stage and production status.',
                    'Pellets can be used as a convenient supplement during periods of nutritional deficiency.'
                ]
            }
        ],
        'Chicken': [
            {
                name: 'Complete Poultry Feed',
                description: 'Formulated feed with essential nutrients for chickens.',
                nutritionalContent: {
                    protein: 18,
                    fiber: 6,
                    fat: 5
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 60%'
                },
                feeding: {
                    amount: 'Provide as the primary feed for laying hens',
                    schedule: 'Available at all times'
                },
                additionalInfo: [
                    'Choose feeds with added calcium for laying hens to support eggshell formation.',
                    'Monitor feed consumption to avoid overfeeding or underfeeding.',
                    'Supplement with grit to aid in digestion, especially for free-range chickens.'
                ]
            },
            {
                name: 'Insect-Enriched Feed',
                description: 'Feed supplemented with dried insects.',
                nutritionalContent: {
                    protein: 22,
                    fiber: 4,
                    fat: 8
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: 'Include in the diet for broilers and growing chickens',
                    schedule: 'Twice daily'
                },
                additionalInfo: [
                    'Source insects from reputable suppliers to ensure quality.',
                    'Introduce insect-enriched feed gradually to allow for acceptance.',
                    'Monitor protein levels in the feed to meet the needs of growing chickens.'
                ]
            },
            {
                name: 'Vegetable and Grain Mix',
                description: 'A mix of vegetables and grains for dietary diversity.',
                nutritionalContent: {
                    protein: 14,
                    fiber: 8,
                    fat: 6
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: 'Offer as a supplemental treat for backyard chickens',
                    schedule: 'Once daily'
                },
                additionalInfo: [
                    'Incorporate seasonal vegetables for variety and additional nutrients.',
                    'Limit treats to avoid nutritional imbalances.',
                    'Consider the mix as a supplement rather than a primary feed source.'
                ]
            }
        ],
        'Pig': [
            {
                name: 'Starter Creep Feed',
                description: 'Specialized feed for nursing piglets.',
                nutritionalContent: {
                    protein: 20,
                    fiber: 6,
                    fat: 8
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 60%'
                },
                feeding: {
                    amount: 'Provide to piglets during the nursing period',
                    schedule: 'Available at all times'
                },
                additionalInfo: [
                    'Monitor piglet growth and adjust feed amounts accordingly.',
                    'Ensure access to clean water, especially when transitioning to solid feed.',
                    'Gradually transition to grower feed as piglets mature.'
                ]
            },
            {
                name: 'Grower Feed Blend',
                description: 'Balanced feed mix for growing pigs.',
                nutritionalContent: {
                    protein: 16,
                    fiber: 8,
                    fat: 6
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 60%'
                },
                feeding: {
                    amount: 'Feed to growing pigs for optimal development',
                    schedule: 'Twice daily'
                },
                additionalInfo: [
                    'Regularly assess nutrient requirements based on pig weight and age.',
                    'Provide a balanced mix to support bone development and muscle growth.',
                    'Consider supplementing with vitamins and minerals based on veterinary recommendations.'
                ]
            },
            {
                name: 'Natural Forage Supplement',
                description: 'Access to natural forage areas for additional nutrition.',
                nutritionalContent: {
                    protein: 12,
                    fiber: 10,
                    fat: 4
                },
                feeding: {
                    method: 'Allow pigs to forage freely',
                    schedule: 'Throughout the day'
                },
                additionalInfo: [
                    'Rotate foraging areas to prevent overgrazing and promote regrowth.',
                    'Monitor the presence of toxic plants in foraging areas.',
                    'Foraging encourages natural behaviors and can reduce stress.'
                ]
            }
        ],
        'Fish': [
            {
                name: 'Specialized Fish Feed Pellets',
                description: 'Formulated pellets for optimal fish growth.',
                nutritionalContent: {
                    protein: 32,
                    fiber: 2,
                    fat: 8
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: 'Feed to fish in aquaculture settings',
                    schedule: 'Multiple times daily'
                },
                additionalInfo: [
                    'Choose pellets with a balanced combination of protein and essential fatty acids.',
                    'Monitor water quality to optimize fish health and feed efficiency.',
                    'Adjust feeding rates based on fish size, age, and water temperature.'
                ]
            },

            {
                name: 'Live Feed Cultivation',
                description: 'Cultivation of live feed organisms for fish.',
                nutritionalContent: {
                    protein: 'Varies based on live feed organism',
                    fiber: 'Varies',
                    fat: 'Varies'
                },
                feeding: {
                    method: 'Introduce live feed organisms to enhance fish diet',
                    schedule: 'According to fish appetite'
                },
                additionalInfo: [
                    'Set up a controlled environment for live feed cultivation.',
                    'Culture organisms like brine shrimp or daphnia.',
                    'Harvest live feed organisms at the optimal stage of development.',
                    'Introduce live feed to fish tanks for consumption.'
                ]
            },

            {
                name: 'Supplemental Fish Pellets',
                description: 'Additional feed pellets for dietary variety.',
                nutritionalContent: {
                    protein: 20,
                    fiber: 4,
                    fat: 6
                },
                storage: {
                    method: 'Store in a cool, dry place',
                    temperature: 'Less than 25C',
                    humidity: 'Less than 50%'
                },
                feeding: {
                    amount: 'Offer as a supplement to the main fish feed',
                    schedule: 'Once daily'
                },
                additionalInfo: [
                    'Create a blend of fish-friendly ingredients like algae and small fish.',
                    'Process the ingredients into supplemental fish feed pellets.',
                    'Ensure the pellets enhance the overall nutritional profile of the fish diet.',
                    'Monitor fish behavior and growth in response to the supplemental feed.'
                ]
            }
        ]
        // Add more animals and their respective food lists as needed
    };

    // Return the food list for the selected animal
    return foodLists[animal] || [];
}

// Function to populate the food list on the page
function populateFoodList(foodList) {
    const ul = document.getElementById('dynamic-food-list');

    // Clear the existing list items
    ul.innerHTML = '';

    // Create a list item for each food item and append it to the unordered list
    foodList.forEach(food => {
        const li = document.createElement('li');
        li.textContent = food.name;
        li.classList.add('food-list-item');
        // Attach a click event to each food item to show information when clicked
        li.onclick = function () {
            showFoodInformation(food);
        };
        ul.appendChild(li);
    });
}

function showFoodInformation(food) {
    console.log(`Showing information for: ${food.name}`);

    const foodInfoSection = document.getElementById('food-info');
    const foodDetailsElement = document.getElementById('food-details');

    // Update the content with information about the selected food
    let additionalInfoHTML = '';

    if (food.nutritionalContent.protein !== undefined) {
        // Display fixed nutritional content
        additionalInfoHTML += `
            <p>Nutritional Content:</p>
            <ul>
                <li>Protein: ${food.nutritionalContent.protein}</li>
                <li>Fiber: ${food.nutritionalContent.fiber}</li>
                <li>Fat: ${food.nutritionalContent.fat}</li>
            </ul>`;
    } else {
        // Display variable nutritional content
        additionalInfoHTML += `<p>Nutritional Content: Variable</p>`;
    }

    additionalInfoHTML += `
        <p>Storage:</p>
        <ul>
            <li>Method: ${food.storage.method}</li>
            <li>Temperature: ${food.storage.temperature}</li>`;

    if (food.storage.humidity !== undefined) {
        additionalInfoHTML += `<li>Humidity: ${food.storage.humidity}</li>`;
    }

    additionalInfoHTML += `</ul>
        <p>Feeding:</p>
        <ul>
            <li>Amount: ${food.feeding.amount}</li>
            <li>Schedule: ${food.feeding.schedule}</li>
        </ul>`;

    if (food.additionalInfo && food.additionalInfo.length > 0) {
        additionalInfoHTML += `<p>Additional Information:</p>
            <ul>`;

        food.additionalInfo.forEach(info => {
            additionalInfoHTML += `<li>${info}</li>`;
        });

        additionalInfoHTML += `</ul>`;
    }

    foodDetailsElement.innerHTML = `
        <h2>${food.name}</h2>
        <p>Description: ${food.description}</p>
        ${additionalInfoHTML}`;

    // Display the Food Information section
    foodInfoSection.style.display = 'block';
}


// Function to get the image source for a given animal
function getAnimalImageSource(animal) {
    // Replace with the actual paths to your animal images
    const imagePaths = {
        'Cattle': 'C:/Users/USER-PC/Downloads/cattle.jpeg',
        'Goat': 'C:/Users/USER-PC/Downloads/goat.jpeg',
        'Chicken': 'C:/Users/USER-PC/Downloads/chickens.jpg',
        'Pig': 'C:/Users/USER-PC/Downloads/Pigs.jpg',
        'Fish': 'C:/Users/USER-PC/Downloads/Fish.jpg'
        // Add more animals and their respective image paths as needed
    };

    // Return the image source for the selected animal
    return imagePaths[animal] || 'default_image.jpg';
}
