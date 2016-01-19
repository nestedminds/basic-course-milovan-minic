<?php

/**
 * For this exercise, you will use a list of ten of the largest cities in the world. (Please note,
 * these are not the ten largest, just a selection of ten from the largest cities.) Create an array
 * with the following values:Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos,
 * Buenos Aires, Cairo, London.
 *
 * Print these values to the browser separated by commas, using a loop to iterate over the array.
 * Sort the array, then print the values to the browser in an unordered list, again using a loop.
 *
 * Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array
 * again, and print it once more to the browser in an unordered list.
 */

$largestCities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

for($i = 0; $i < count($largestCities); $i++){
    echo $largestCities[$i];
    if($i <= (count($largestCities)-2)){
        echo ', ';
    }
}

$additionalCities = array('Los Angeles', 'Calcutta', 'Osaka', 'Beijing');

// Add more cities to the list
foreach($additionalCities as $additionalCity){
    $largestCities[] = $additionalCity;
}

// Sort new list of cities
sort($largestCities);

// Create list
echo '<ul>';

// Populate list
foreach($largestCities as $largeCity) {
    echo '<li>' . $largeCity . '</li>';
}

echo '</ul>';
