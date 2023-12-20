<?php
$servername = "localhost";
$username = "patricia";
$password = "";
$db = "library_web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db, 3308);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo '';
}
?>
