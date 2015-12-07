<?php
/**
 * Created by PhpStorm.
 * User: 1301070
 * Date: 02/11/2015
 * Time: 13:38
 */
?>

<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
        <p>
            <?php
                $username = "Mike";
                $password = "mysecretpassword";
                    echo "username is " . $username;
                        "password is " . $password
                        setcookie('access_level','standarduser');
             ?>
        </p>
        </body>
</html>
