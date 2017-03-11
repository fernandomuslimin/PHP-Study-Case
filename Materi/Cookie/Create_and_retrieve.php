<?php 
    $cooke_name = "user";
    $cookie_value = "Fernando Muslimin";
    setcookie($cooke_name, $cookie_value, time() + (86400 * 30),"/");
    //86400 = 1 day
?>
<html>
    <body>
        <?php 
            if(!isset($_COOKIE[$cooke_name])){
                echo "Cookie named '" . $cooke_name . "' is not set!";
            } else{
                echo "Cookie '" . $cooke_name . "' is set!<br>";
                echo "Value is " . $_COOKIE[$cooke_name];
            }
        ?>
    </body>
</html>