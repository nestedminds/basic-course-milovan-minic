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



