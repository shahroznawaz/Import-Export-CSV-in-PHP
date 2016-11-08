<?php
function getdb(){
$servername = "localhost";
$username = "wfprxqgrav";
$password = "2WWKujP3Hr";
$db = "wfprxqgrav";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>

