<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $username = "root";
            $password = "";
            $servername = "localhost";
            $dbname = "webdb";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //Check Connection             
            if($conn->connect_error){
                die("Connection Failed :".$conn->connect_error);
            }
            
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO userid (id, name, position) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $id, $name, $position);

            // set parameters and execute
            $id = "HUD001";
            $name = "Doe";
            $position = "Assistant";
            $stmt->execute();

            $id = "ITD001";
            $name = "Moe";
            $position = "Manager";
            $stmt->execute();
           
            echo "New records created successfully";

            $stmt->close();
            $conn->close();
        ?>
    </body>
</html>
