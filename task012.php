<?php
/**
 * In the next PHP exercise, you will request input from the user, then move the user's response from
 * one file to another and do something with it.
 *
 * Create two separate files. The first will contain a form with one input field asking for the user's
 * favorite city. Use the post method for the form. Although this file contains no PHP code, on my
 * localhost, it needs the .php extension to successfully call the second file. The second file will
 * contain PHP code to process the user's response. (In this case, something very simple.) After the
 * user clicks the submit button, echo back Your favorite city is $city., where $city is the input from the form.
 *
 * Hint: the variable that contains the user's input is an array. Arrays will be addressed in future
 * exercises, but this particular array needs to come into play here.
 * The array variable is $_POST['name'] , where 'name' is the name of your input field.
 */
?>

<html>

    <head>
        <title>Favourite City</title>
    </head>

    <body>
    <p>Enter the name of your favourite city here:</p>
        <form action="task012_2.php" method="post">
            <input type="text" name="name">
            <input type="submit" value="Go">
        </form>
    </body>

</html>
