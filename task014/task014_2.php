<!DOCTYPE html>
<html>
    <head>
        <title>Registration form confirmation</title>
    </head>

    <?php
    if(           $_POST["submit"] &&
        (   !empty($_POST["name"]) ||
            !empty($_POST["username"]) ||
            !empty($_POST["email"]) ||
            !empty($_POST["home_browser"]) ||
            !empty($_POST["home_os"]) ||
            !empty($_POST["home_isp_speed"]) ||
            !empty($_POST["work_browser"]) ||
            !empty($_POST["work_os"]) ||
            !empty($_POST["work_isp_speed"]))) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $homeBrowser = ucwords($_POST["home_browser"]);
        $homeOs = ucwords($_POST["home_os"]);
        $homeIspSpeed = ucwords($_POST["home_isp_speed"]);
        $workBrowser = ucwords($_POST["work_browser"]);
        $workOs = ucwords($_POST["work_os"]);
        $workIspSpeed = ucwords($_POST["work_isp_speed"]);

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
                <p>Click <a href='task014.php'>here</a> to register.</p>
            </body>";
    }
    ?>
</html>
