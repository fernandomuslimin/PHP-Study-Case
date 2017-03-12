<!DOCTYPE html>
<html>
    <body>
        
        <h2>PHP Form Validation</h2>
        <?php 
            $car = array("Mitsubishi"=>"Lancer","Toyota"=>"Innova","Honda"=>"Jazz");
            
            foreach ($car as $key => $value) {
                echo "Key = ".$key .", Value = ".$value . "<br>";
            }
            foreach ($car as $value) {
                echo " Value = ".$value . "<br>";
            }
        ?>
    </body>
</html>