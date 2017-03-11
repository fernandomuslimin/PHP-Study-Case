<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
            
            //remove all session variables
            session_unset();
            //destroy the sesssion
            session_destroy();
        ?>
    </body>
</html>