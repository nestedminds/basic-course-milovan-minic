<?php

/**
 * In this PHP exercise, you will create an array, print it to the browser, then ask the user to add to it.
 *
 * Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the
 * following statement to the browser: "Travel takes many forms, whether across town, across the country,
 * or around the world. Here is a list of some common modes of transportation:" Follow this with an
 * unordered list created by iterating through the array variable you created.
 *
 * Next, give the user a text box and ask the user to add other modes of transportation to the list,
 * separated by commas. When the user clicks 'Go', process the input with array functions to send
 * back the original list with the user's additions. Include another text box with the text
 * "Add more?" and another submit button. When the user clicks this button, the page should reload
 * with the new additions added to the previously expanded list. Your code should allow the user to
 * add items as many times as they like.
 */


$modesOfTransportation = array('Automobile', 'Jet', 'Ferry', 'Subway');

echo 'Travel takes many forms, whether across town, across the country,
 * or around the world.<br />
 Here is a list of some common modes of transportation: ';

echo '<ul>';
foreach($modesOfTransportation as $modeOfTransportation){
    echo '<li>' . $modeOfTransportation . '</li>';
}
echo '</ul>';
?>

<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Task 008</title>
    </head>

    <body>
    <p>Please add more transportation modes if you wish.</p>
        <form method="get" action="task008.php">
            Type here and separate modes by comma: <input type="text" name="transport_modes">
            <input type="submit" value="Go">
        </form>
    </body>
</html>


<?php
global $modesOfTransportation;
if(isset($_GET['transport_modes'])) {
    $additionalTransportModesString = $_GET['transport_modes'];

    $additionalTransportModesArray = explode(',', $additionalTransportModesString);

    // Trims all white characters within element
    array_walk($additionalTransportModesArray, function (&$val) {
        $val = trim($val);
    });

    // Add additional transportation modes to already existing modes
    foreach ($additionalTransportModesArray as $additionalTransportMode) {
        $modesOfTransportation[] = $additionalTransportMode;
    }

//    print_r($additionalTransportModes);

    echo '<ul>';
    foreach ($modesOfTransportation as $modeOfTransportation) {
        echo '<li>' . $modeOfTransportation . '</li>';
    }
    echo '</ul>';
}
?>
    <p>Add more?</p>
    <form method="get" action="task008.php">
    Type here: <input type="text" name="another_transport_mode">
    <input type="submit" value="Go">
    </form>

<?php
global $modesOfTransportation;
    if (isset($_GET['another_transport_mode'])) {
        $anotherTransportationMode = $_GET['another_transport_mode'];
//        print_r($anotherTransportationMode);
        $modesOfTransportation[] = $anotherTransportationMode;
//        print_r($modesOfTransportation);

    }

    echo '<ul>';
    foreach ($modesOfTransportation as $modeOfTransportation) {
        echo '<li>' . $modeOfTransportation . '</li>';
    }
    echo '</ul>';


?>
