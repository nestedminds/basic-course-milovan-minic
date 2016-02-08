<?php

/**
 * In this PHP exercise, you will again use the list of cities in Arrays Task 7. Here's the list,
 * this time including countries as well as cities: Tokyo, Japan; Mexico City, Mexico; New York City, USA;
 * Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt;
 * London, England.
 *
 * This time, create an associative array, using the countries as keys, the cities as values. Create a form
 * for the user, with the instructions Please choose a city:
 *
 * Follow this request with a select field for the 10 cities, with the options created by looping
 * through the array. When the user clicks the submit button, return the statement $city is in $country.,
 * where $city is the value chosen by the user, and $country is its key.
 */

$cities = array('Japan'=>'Tokyo',
                'Mexico'=>'Mexico City',
                'USA'=>'New York City',
                'India'=>'Mumbai',
                'Korea'=>'Seoul',
                'China'=>'Shanghai',
                'Nigeria'=>'Lagos',
                'Argentina'=>'Buenos Aires',
                'Egypt'=>'Cairo',
                'England'=>'London');
?>

<html>
    <head>
        <title>Cities and Countries</title>
    </head>

    <body>
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Select City from the list:
            <select name="cities">
                <option value=0>-- SELECT CITY --</option>
                <?php
                    foreach($cities as $country=>$city){
                        echo '<option value="' . $city .'">' . $city . '</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Go">
        </form>
        <?php
        if(isset($_GET['cities']) && $_GET['cities'] != 0) {

            $city = $_GET['cities'];
            $country = array_search($city, $cities);

            echo "You have selected $city that is in $country";
        }
        ?>
    </body>
</html>


