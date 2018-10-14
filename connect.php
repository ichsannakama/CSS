<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bsm_web";

$conn = new mysqli($servername, $username, $password, $db);

if(!$conn){
    die ("connection failed" .mysqli_connect_error());
}

echo "Connected Successfully";


?>