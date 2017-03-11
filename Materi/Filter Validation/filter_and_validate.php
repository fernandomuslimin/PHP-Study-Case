<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php 
        function filter_data(){
            foreach (filter_list() as $id =>$filter){
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        }        
    ?>
</table>

<h3>Sanitize a string</h3>
<?php 
//remove all html tags
    $str = "<h1>Hello World</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
?>

<h3>Validate an Integer</h3>
<?php 
    $int = 100;

    if(!filter_var($int, FILTER_VALIDATE_INT) === false){
        echo("Integer is valid");
    } else{
        echo("Integer is not valid");
    }
?>

<h3>Validate IP Address</h3>
<?php 
    $ip = "192.168.0.1";

    if(filter_var($ip, FILTER_VALIDATE_IP) != false){
        echo("$ip is a valid IP Address");
    } else{
        echo("$ip is not a valid IP Address");
    }
?>

<h3>Validate Email Address</h3>
<?php
    $email = "john.doe@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
?>

<h3>Validate URL</h3>
<?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
    } else {
        echo("$url is not a valid URL");
    }
?>