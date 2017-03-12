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
            
            $query = "INSERT INTO userid VALUES ('CFD002', 'Robi', 'Officer')";
            $query = "INSERT INTO userid VALUES ('CFD003', 'Edo', 'Assistant')";
            $query = "INSERT INTO userid VALUES ('CFD004', 'Bambang', 'Officer')";
            
            if($conn->multi_query($query) === true){
                echo "New record has been added successfully";
            } else{
                echo "Error : " . $query . "<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
    </body>
</html>
