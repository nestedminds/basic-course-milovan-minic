<!DOCTYPE html>
<html>
<head>
    <title>Registration form confirmation</title>
</head>

<?php
if(           $_POST["submit"] &&
    (   !empty($_POST["name"]) &&
        !empty($_POST["username"]) &&
//        !empty($_POST["email"]) && strpos($_POST["email"], '@'))) {
        !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $homeBrowser = ucwords($_POST["home_browser"]) ? ucwords($_POST["home_browser"]) : 'No value';
    $homeOs = ucwords($_POST["home_os"]) ? ucwords($_POST["home_os"]) : 'No value';
    $homeIspSpeed = ucwords($_POST["home_isp_speed"]) ? ucwords($_POST["home_isp_speed"]) : 'No value';
    $workBrowser = ucwords($_POST["work_browser"]) ? ucwords($_POST["work_browser"]) : 'No value';
    $workOs = ucwords($_POST["work_os"]) ? ucwords($_POST["work_os"]) : 'No value';
    $workIspSpeed = ucwords($_POST["work_isp_speed"]) ? ucwords($_POST["work_isp_speed"]) : 'No value';

    echo "<body>
                <h3>Registration form data confirmation.</h3>
                <p>Information you have entered in registration form is:</p>
                Name: <b>$name</b><br>
                Username: <b>$username</b><br>
                Email: <b>$email</b><br>
                Browsers: HOME -> <b>$homeBrowser</b> WORK -> <b>$workBrowser</b><br>
                Operating Systems: HOME -> <b>$homeOs</b> WORK -> <b>$workOs</b><br>
                ISP Speed: HOME -> <b>$homeIspSpeed</b> WORK -> <b>$workIspSpeed</b><br>
            </body>";
} else {
    echo "<body>
                <h3>You didn't enter data for registration.</h3>
                <h4>Please follow link bellow to register</h4>
                <p>Click <a href='task015.php'>here</a> to register.</p>
            </body>";
}
?>
</html>
