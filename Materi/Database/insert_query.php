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
                        
            if($conn->connect_error){
                die("Connection Failed :".$conn->connect_error);
            }
            
            $query = "INSERT INTO userid VALUES ('CFD001', 'Gobi', 'Officer')";
            
            if($conn->query($query) === TRUE){
                //to get last inserted id
                $last_id = $conn->insert_id;
                echo "New record has been added successfully and the last ID is $last_id";
            } else{
                echo "Error : " . $query . "<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
    </body>
</html>
