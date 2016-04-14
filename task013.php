<?php

/**
 * In this PHP exercise, you will build the beginnings of a user registration form. To do this, you will
 * create a class for making the select field, then use an object derived from the class in the form.
 * You can begin with the script you wrote for Functions Ex. #8, since you will be revising the two
 * functions you created there as methods of your class.
 *
 * First of all, write an array that includes browser types:
 * Firefox, Chrome, Internet Explorer, Safari, Opera, Other.
 *
 * Then begin to write the class Select. You will need two properties, $name for the name of the select
 * field, and $value, an array to provide the option values. You will also need four methods in addition
 * to the two methods you will adapt from Functions Ex. #8: setName, getName, setValue, getValue.
 * Checking to be sure the value is an array belongs in the setValue method, so write that here, and
 * delete it from makeSelect if you are using your script from Functions #8. Now we come to the two
 * functions you wrote to generate the select field for Functions Ex. #8. Change the makeOptions function
 * to iterate over the array argument's values rather than keys. This will be your fifth method. Then
 * revise the makeSelect function to be the sixth method in your class. Next comes the HTML.
 *
 * Write a user
 * registration form asking for name, username, email, browser. Use text fields to collect the user data
 * for the first three, then instantiate an object based on your class for the select field.
 *
 * When the user clicks the submit button, return the data as confirmation. If you were creating a
 * registration form to use on the Web, you would want to collect the data in a database. However,
 * using PHP with mySQL or other databases is beyond the scope of this website.
 */

$browserTypes = array('', 'Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other');

class Select
{
    private $name;
    private $value;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
    </head>

    <body>
        <h3>Registration form</h3>
        <p>Please fill in the bellow fields to be able to register</p>

        <form title="registration_form" accept-charset="utf-8" action="task013_2.php" method="post">
            Enter your name: <input type="text" name="name"> <br>
            Choose your username: <input type="text" name="username"> <br>
            Enter your email: <input type="text" name="email"> <br>
            Pick your browser: <select name="browser">
            <?php
                foreach ($browserTypes as $browser) {
                    echo '<option value="' . strtolower($browser) . '" >' . $browser . '</option>';
                }
            ?>
            </select>  <br>
            <input type="submit" name="submit" value="Register">
        </form>
    </body>
</html>
