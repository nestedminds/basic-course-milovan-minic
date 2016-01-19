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
 * delete it from from makeSelect if you are using your script from Functions #8. Now we come to the two
 * functions you wrote to generate the select field for Functions Ex. #8. Change the makeOptions function
 * to iterate over the array argument's values rather than keys. This will be your fifth method. Then
 * revise the makeSelect function to be the sixth method in your class. Next comes the HTML. Write a user
 * registration form asking for name, username, email, browser. Use text fields to collect the user data
 * for the first three, then instantiate an object based on your class for the select field. When the user
 * clicks the submit button, return the data as confirmation. If you were creating a registration form to
 * use on the Web, you would want to collect the data in a database. However, using PHP with mySQL or other
 * databases is beyond the scope of this website.
 */




