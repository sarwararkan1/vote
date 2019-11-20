<?php
try{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
}catch(exception $m){
    echo 'failed connection: ' .$m->getMessage();
}
?>