<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=webdb", $username, $password);
        
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Sucessfully";
    } catch (PDOException $ex) {
        echo "Connection failed : " . $ex->getMessage();
    }
    
    //close the connection by $conn = null;
?>