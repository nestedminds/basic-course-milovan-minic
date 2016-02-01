<?php

//echo 'OK';

$name = $_POST['name'];

if(strlen($name) >= 1) {
    echo "Your favourite city is <strong>$name</strong>.<br />Thank you!";
} else {
    echo 'You did not enter city name.<br />';
    echo 'Please enter city <a href="task012.php">here<a/>';
}
