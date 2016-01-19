<?php

/**
 * In the last PHP exercise, the Select class may have seemed like an awful lot of code to write for a
 * simple select field. The real value of classes and objects doesn't become apparent until you have
 * reason to reuse the code. So this time, you will expand your user registration form to use several
 * select fields.
 *
 * Assume that you have good reason to need data about your users' browsing capabilities. Either you
 * want to tune your site, the content of your site concerns these issues, or something similar.
 * Using your select class, you can reuse the class code as often as you like to create select fields.
 *
 * To build this new version of the registration form, start with the script you wrote for Classes
 * Ex. #1. Add the value of None as the first value in the $browsers array. Write two more arrays:
 * $speeds, including values Unknown, DSL, T1, Cable, Dialup, Other; and $os, including Windows,
 * Linux, Macintosh, Other. (Of course, these could be screen resolution or flash version or any
 * other relevant capability.)
 *
 * You want data for how the user browses both at home and work. Above the browser select field,
 * add the subheading Work Access, and rename the browser label Primary Browser. (We all know that
 * many people use more than one.) Below that, add labels and select field objects for Connection
 * Speed and Operating System. Next, add the subheading Home Access, with three new select fields
 * corresponding to the ones you created for Work Access.
 *
 * Since you are using so many objects in this script, it's a good idea to destroy each one after it
 * has done its work. This will free up the memory the object occupied. When the user hits the submit
 * button, return the user's select field choices in two bulleted lists under the same headings
 * (Work Access, Home Access).
 */



