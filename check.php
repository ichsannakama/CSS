<?php

include 'connect.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE username = '$user' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
}
else{
    echo "You are logged in!";
}
?>