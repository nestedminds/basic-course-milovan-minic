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
            !empty($_POST["browser"]))) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $browser = ucwords($_POST["browser"]);

        echo "<body>
                <h3>Registration form data confirmation.</h3>
                <p>Information you have entered in registration form is:</p>
                Name: <b>$name</b><br>
                Username: <b>$username</b><br>
                Email: <b>$email</b><br>
                Browser: <b>$browser</b><br>
            </body>";
    } else {
        echo "<body>
                <h3>You didn't enter data for registration.</h3>
                <h4>Please follow link bellow to register</h4>
                <p>Click <a href='task013.php'>here</a> to register.</p>
            </body>";
    }
    ?>
</html>
