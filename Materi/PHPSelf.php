<!DOCTYPE html>
<html>
    <body>
        <form Action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Name : <input type="text" name="fname">
            <input type="submit">
        </form>
        
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_REQUEST['fname'];
                if(empty($name)){
                    echo "Name is Empty!";
                } else{
                    echo $name;
                }
            }
        ?>
    </body>
</html>