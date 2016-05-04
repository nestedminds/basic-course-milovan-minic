<?php

/**
 * If you completed PHP Classes Ex. #13 and #14, you have now written a working user registration form.
 * Time to tweak it and make it better.
 *
 * First of all, it would be preferable to have the message --Select one-- at the top of each select
 * field. Add a line to the makeSelect() method to accomplish this. The value should be No response.
 * You won't need the "None" value at the top of the $browsers array, so delete that. With this change
 * to class Select, you can see how using a class can simplify your work. One line of code, and all the
 * select fields update.
 *
 * Your user responses won't be very useful without some basic information, so the next task is to make
 * three of the fields required. Above the form, add * Indicates required field. Then add an asterisk
 * to the Name, Username, and Email fields.
 *
 * Next, add code to validate the data in those three fields. This code will appear in the second half
 * of the script, after you have retrieved data from the $_POST[] variable. The function empty() will
 * let you know if there is data in the field. To help the user supply missing information, include a
 * back button with the error message. (If you completed Forms Ex. #6, you have already written one
 * of those.) The email field is a special case. Not only can you check for the presence of data, you
 * can check for an @(at symbol), which would be included in any valid email address. So here the data
 * must satisfy two conditions to be acceptable. You can use the strpos() function to confirm the presence
 * of the @ character.
 */


namespace task015;

$browsers = array('Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other');
$speeds = array('DSL', 'T1', 'Cable', 'DialUp', 'Other');
$operatingSystems = array('Windows', 'Linux', 'Macintosh', 'Other');

$select = new Select();

class Select {

    private $_name;
    private $_value;

    /**
     * @param string $name
     * @param array $values
     */
    public function makeSelect($name, $values)
    {
        $selectName = $name;
        $selectValues = $values;

        echo '<select name="' . $selectName . '">';

        echo '<option value="">-- Select one --</option>';

        foreach($selectValues as $value){
            echo '<option value="' . strtolower($value) . '">' . $value . '</option>';
        }

        echo '</select>';
    }

    /** @return string */
    public function getName()
    {
        return $this->_name;
    }

    /** @param string $name */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /** @return string */
    public function getValue()
    {
        return $this->_value;
    }

    /** @param string $value */
    public function setValue($value)
    {
        $this->_value = $value;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>TASK 015</title>
</head>

<body>
<h2>Registration form</h2>
<h5>* Indicates required field</h5>
<form title="registration_form" accept-charset="UTF-8" action="task015_2.php" method="post">
    Enter your name: <input type="text" name="name">* <br />
    Choose your username: <input type="text" name="username">* <br />
    Enter your email: <input type="text" name="email">* <br />
    Pick your home browser: <?php $select->makeSelect('home_browser', $browsers); ?> <br />
    Pick your home Operating system: <?php $select->makeSelect('home_os', $operatingSystems); ?> <br />
    Pick your home ISP's speed: <?php $select->makeSelect('home_isp_speed', $speeds); ?> <br />
    Pick your work browser: <?php $select->makeSelect('work_browser', $browsers); ?> <br />
    Pick your work Operating system: <?php $select->makeSelect('work_os', $operatingSystems); ?> <br />
    Pick your work ISP's speed: <?php $select->makeSelect('work_isp_speed', $speeds); ?> <br />
    <input type="submit" name="submit" value="Register">
</form>
</body>
</html>


<?php unset($select); ?>